<?php


































interface ConfigData extends CacheData
{






function get_property($name);







function set_property($name,$value);





function set_default_values();
}
?>
