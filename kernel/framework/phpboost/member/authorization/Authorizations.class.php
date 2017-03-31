<?php
































class Authorizations
{
const AUTH_PARENT_PRIORITY=0x01;
const AUTH_CHILD_PRIORITY=0x02;







public static function build_auth_array_from_form()
{
$array_auth_all=array();
$sum_auth=0;
$nbr_arg=func_num_args();


$idselect='';
if(gettype(func_get_arg($nbr_arg-1))=='string')
{
$idselect=func_get_arg(--$nbr_arg);
}


$admin_auth_default=true;
if($nbr_arg>1)
{
$admin_auth_default=func_get_arg($nbr_arg-1);
if(!is_bool($admin_auth_default))
$admin_auth_default=true;
else
$nbr_arg--;
}

for($i=0;$i<$nbr_arg;$i++)
self::get_auth_array(func_get_arg($i),$idselect,$array_auth_all,$sum_auth);

ksort($array_auth_all);

return $array_auth_all;
}









public static function auth_array_simple($bit_value,$idselect,$admin_auth_default=true)
{
$array_auth_all=array();
$sum_auth=0;


self::get_auth_array($bit_value,$idselect,$array_auth_all,$sum_auth);


if($admin_auth_default)
{
$array_auth_all['r2']=$sum_auth;
}
ksort($array_auth_all);

return $array_auth_all;
}












public static function generate_select($auth_bit,$array_auth=array(),$array_ranks_default=array(),$idselect='',$disabled='',$disabled_advanced_auth=false)
{
global $LANG,$array_ranks;


$array_ranks=is_array($array_ranks)?
$array_ranks:
array(
'-1'=>$LANG['guest'],
'0'=>$LANG['member'],
'1'=>$LANG['modo'],
'2'=>$LANG['admin']
);


$idselect=((string)$idselect=='')?$auth_bit:$idselect;

$tpl=new FileTemplate('framework/groups_auth.tpl');

$tpl->put_all(array(
'C_NO_ADVANCED_AUTH'=>$disabled_advanced_auth,
'C_ADVANCED_AUTH'=>!$disabled_advanced_auth,
'IDSELECT'=>$idselect,
'DISABLED_SELECT'=>(empty($disabled)?'if (disabled == 0)':''),
'L_USERS'=>$LANG['member_s'],
'L_ADD_USER'=>$LANG['add_member'],
'L_REQUIRE_PSEUDO'=>addslashes($LANG['require_pseudo']),
'L_RANKS'=>$LANG['ranks'],
'L_GROUPS'=>$LANG['groups'],
'L_GO'=>$LANG['go'],
'L_ADVANCED_AUTHORIZATION'=>$LANG['advanced_authorization'],
'L_SELECT_ALL'=>$LANG['select_all'],
'L_SELECT_NONE'=>$LANG['select_none'],
'L_EXPLAIN_SELECT_MULTIPLE'=>$LANG['explain_select_multiple']
));

##### G??n??ration d'une liste ?? s??lection multiple des rangs et membres #####
		//Liste des rangs
		$j = -1;
		foreach ($array_ranks as $idrank => $group_name)
		{
			//Si il s'agit de l'administrateur, il a automatiquement l'autorisation
if($idrank==2)
{
$tpl->assign_block_vars('ranks_list',array(
'ID'=>$j,
'IDRANK'=>$idrank,
'RANK_NAME'=>$group_name,
'DISABLED'=>'',
'SELECTED'=>' selected="selected"'
));
}
else
{
$selected='';
if(array_key_exists('r'.$idrank,$array_auth)&&((int)$array_auth['r'.$idrank]&(int)$auth_bit)!==0&&empty($disabled))
{
$selected=' selected="selected"';
}
$selected=(isset($array_ranks_default[$idrank])&&$array_ranks_default[$idrank]===true&&empty($disabled))?'selected="selected"':$selected;

$tpl->assign_block_vars('ranks_list',array(
'ID'=>$j,
'IDRANK'=>$idrank,
'RANK_NAME'=>$group_name,
'DISABLED'=>(!empty($disabled)?'disabled = "disabled" ':''),
'SELECTED'=>$selected
));
}
$j++;
}


$groups_name=GroupsService::get_groups_names();
foreach($groups_name as $idgroup=>$group_name)
{
$selected='';
if(array_key_exists($idgroup,$array_auth)&&((int)$array_auth[$idgroup]&(int)$auth_bit)!==0&&empty($disabled))
{
$selected=' selected="selected"';
}

$tpl->assign_block_vars('groups_list',array(
'IDGROUP'=>$idgroup,
'GROUP_NAME'=>$group_name,
'DISABLED'=>$disabled,
'SELECTED'=>$selected
));
}

##### G??n??ration du formulaire pour les autorisations membre par membre.#####

$array_auth_members=array();
if(is_array($array_auth))
{
foreach($array_auth as $type=>$auth)
{
if(substr($type,0,1)=='m')
{
if(array_key_exists($type,$array_auth)&&((int)$array_auth[$type]&(int)$auth_bit)!==0)
$array_auth_members[$type]=$auth;
}
}
}
$advanced_auth=count($array_auth_members)>0;

$tpl->put_all(array(
'ADVANCED_AUTH_STYLE'=>($advanced_auth?'display:block;':'display:none;'),
'C_ADVANCED_AUTH_OPEN'=>$advanced_auth,
'C_NO_GROUP'=>count($groups_name)==0
));


if($advanced_auth)
{
$result=PersistenceContext::get_querier()->select_rows(DB_TABLE_MEMBER,array('user_id, display_name'),'WHERE user_id IN :user_ids',array('user_ids'=>str_replace('m','',array_keys($array_auth_members))));
while($row=$result->fetch())
{
$tpl->assign_block_vars('members_list',array(
'USER_ID'=>$row['user_id'],
'LOGIN'=>$row['display_name']
));
}

$result->dispose();
}

return $tpl->render();
}










public static function check_auth($type,$value,$array_auth,$bit)
{
if(!is_int($value))
return false;

switch($type)
{
case RANK_TYPE:
if($value<=2&&$value>=-1)
return @$array_auth['r'.$value]&$bit;
else
return false;
case GROUP_TYPE:
if($value>=1)
return!empty($array_auth[$value])?$array_auth[$value]&$bit:false;
else
return false;
case USER_TYPE:
if($value>=1)
return!empty($array_auth['m'.$value])?$array_auth['m'.$value]&$bit:false;
else
return false;
default:
return false;
}
}










public static function merge_auth($parent,$child,$auth_bit,$mode)
{

$merged=array();

if(!is_array($child))
{
return $parent;
}

if($mode==self::AUTH_PARENT_PRIORITY)
{
$parent_guest_auth=isset($parent['r-1'])?$parent['r-1']:0;
$parent_member_auth=isset($parent['r0'])?$parent['r0']:0;

foreach($parent as $key=>$value)
{
if($bit=($value&$auth_bit)|| $parent_guest_auth || $parent_member_auth)
{
if(!empty($child[$key])||($parent_guest_auth&&!empty($child['r-1']))||($parent_guest_auth&&!empty($child['r-1'])&&$parent_member_auth&&!empty($child['r0'])))
{
$merged[$key]=$auth_bit;
}
else
{
$merged[$key]=0;
}
}
else
{
$merged[$key]=$bit;
}
unset($child[$key]);
}
foreach($child as $key=>$value)
{
if(!empty($value)||($parent_guest_auth&&!empty($merged['r-1'])))
{
$merged[$key]=$parent_guest_auth;
}
if(!empty($value)||($parent_guest_auth&&!empty($merged['r-1'])&&$parent_member_auth&&!empty($merged['r0'])))
{
$merged[$key]=$parent_member_auth;
}
}
}
elseif($mode==self::AUTH_CHILD_PRIORITY)
{
foreach($parent as $key=>$value)
{
$merged[$key]=$value&$auth_bit;
}
foreach($child as $key=>$value)
{
$merged[$key]=$value&$auth_bit;
}
}
return $merged;
}









public static function capture_and_shift_bit_auth($auth,$original_bit,$final_bit=1)
{
if($final_bit==0)
die('<strong>Error :</strong> The destination bit must not be void.');

$result=$auth;

if($original_bit>$final_bit)
{

$quotient=log($original_bit/$final_bit,2);

foreach($auth as $user_kind=>$auth_values)
{
$result[$user_kind]=($auth_values&$original_bit)>>$quotient;
}
}
elseif($original_bit<$final_bit)
{

$quotient=log($final_bit/$original_bit,2);

foreach($auth as $user_kind=>$auth_values)
{
$result[$user_kind]=($auth_values&$original_bit)<<$quotient;
}
}
else
{
foreach($auth as $user_kind=>$auth_values)
{
$result[$user_kind]=$auth_values&$original_bit;
}
}
return $result;
}










private static function get_auth_array($bit_value,$idselect,&$array_auth_all,&$sum_auth)
{
$idselect=($idselect=='')?$bit_value:$idselect;

##### Niveau et Groupes #####
$array_auth_groups=!empty($_REQUEST['groups_auth'.$idselect])?$_REQUEST['groups_auth'.$idselect]:'';
if(!empty($array_auth_groups))
{
$sum_auth+=$bit_value;
if(is_array($array_auth_groups))
{

$array_level=array(0=>'r-1',1=>'r0',2=>'r1');
$min_auth=3;
foreach($array_level as $level=>$key)
{
if(in_array($key,$array_auth_groups))
{
$min_auth=$level;
}
else
{
if($min_auth<$level)
$array_auth_groups[]=$key;
}
}


foreach($array_auth_groups as $value)
{
if($value=="" || $value=='r2')
{
continue;
}
if(isset($array_auth_all[$value]))
{
$array_auth_all[$value]+=$bit_value;
}
else
{
$array_auth_all[$value]=$bit_value;
}
}
}
}

##### Membres(autorisations avanc??es)######
$array_auth_members=!empty($_REQUEST['members_auth'.$idselect])?$_REQUEST['members_auth'.$idselect]:'';
if(!empty($array_auth_members))
{
if(is_array($array_auth_members))
{

foreach($array_auth_members as $key=>$value)
{
if($value=="")
{
continue;
}
if(isset($array_auth_all['m'.$value]))
{
$array_auth_all['m'.$value]+=$bit_value;
}
else
{
$array_auth_all['m'.$value]=$bit_value;
}
}
}
}
}
}
?>
