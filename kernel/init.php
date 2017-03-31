<?php


























defined('PATH_TO_ROOT')or define('PATH_TO_ROOT','..');
require_once PATH_TO_ROOT.'/kernel/framework/core/environment/Environment.class.php';
Environment::load_imports();

Environment::init();


$Bread_crumb=new BreadCrumb();

?>
