<?php







































interface TemplateData
{




function enable_strict_mode();





function disable_strict_mode();

















function auto_load_frequent_vars();






function put($key,$value);





function put_all(array $vars);








function assign_block_vars($block_name,array $array_vars,array $subtemplates=array());






function get_block($blockname);







function get_block_from_list($blockname,$parent_block);






function is_true($value);







function get($varname);







function get_from_list($varname,&$list);





function bind_vars(TemplateData $data);
}
?>
