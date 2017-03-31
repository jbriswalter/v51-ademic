<?php













































































interface Template extends View
{




function enable_strict_mode();





function disable_strict_mode();






function put($key,$value);





function put_all(array $vars);






function assign_vars(array $array_vars);








function assign_block_vars($block_name,array $array_vars,array $subtemplates=array());




function display();





function add_lang(array $lang);







function add_subtemplate($identifier,Template $template);





function set_data(TemplateData $data);





function get_data();





function get_pictures_data_path();
}
?>
