<?php

























class AjaxUserAutoCompleteController extends AbstractController
{
public function execute(HTTPRequestCustom $request)
{
$suggestions=array();

try{
$result=PersistenceContext::get_querier()->select("SELECT display_name, level, groups FROM ".DB_TABLE_MEMBER." WHERE display_name LIKE '".str_replace('*','%',$request->get_value('value',''))."%'");

while($row=$result->fetch())
{
$user_group_color=User::get_group_color($row['groups'],$row['level']);

$profile_link=new LinkHTMLElement('',$row['display_name'],array('onclick'=>'return false;','style'=>(!empty($user_group_color)?'color:'.$user_group_color:'')),UserService::get_level_class($row['level']));

$suggestions[]=$profile_link->display();
}
$result->dispose();
}catch(Exception $e){
}

return new JSONResponse(array('suggestions'=>$suggestions));
}
}
?>
