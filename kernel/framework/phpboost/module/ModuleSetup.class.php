<?php
































interface ModuleSetup
{




function check_environment();




function install();





function uninstall();





function upgrade($installed_version);
}
?>
