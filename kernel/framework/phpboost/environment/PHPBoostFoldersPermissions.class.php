<?php


























abstract class PHPBoostFoldersPermissions
{
private static $folders_path;

public static function __static()
{
self::$folders_path=array('/','/cache','/cache/backup','/cache/syndication',
'/cache/tpl','/cache/css','/images/avatars','/images/customization','/images/group','/images/maths','/images/smileys',
'/kernel/db','/lang','/templates','/upload');
}

public static function validate()
{
$permissions=self::get_permissions();
foreach($permissions as $folder_name=>$folder)
{
if(!$folder->is_writable())
{
return false;
}
}
return true;
}

public static function get_permissions()
{
@clearstatcache();
$permissions=array();
foreach(self::$folders_path as $folder_path)
{
$folder=new Folder(PATH_TO_ROOT.$folder_path);
$permissions[$folder_path]=$folder;
}
return $permissions;
}
}
?>
