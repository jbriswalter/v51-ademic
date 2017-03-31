<?php
































abstract class AbstractTemplate implements Template
{



protected $loader;



protected $renderer;



protected $data;







public function __construct(TemplateLoader $loader,TemplateRenderer $renderer,TemplateData $data)
{
$this->set_loader($loader);
$this->set_renderer($renderer);
$this->set_data($data);
}

private function set_loader(TemplateLoader $loader)
{
$this->loader=$loader;
}

private function set_renderer(TemplateRenderer $renderer)
{
$this->renderer=$renderer;
}




public function enable_strict_mode()
{
$this->data->enable_strict_mode();
}




public function disable_strict_mode()
{
$this->data->disable_strict_mode();
}




public function put($key,$value)
{
$this->data->put($key,$value);
return $this;
}




public function put_all(array $vars)
{
$this->data->put_all($vars);
return $this;
}




public function assign_vars(array $array_vars)
{
$this->data->put_all($array_vars);
return $this;
}




public function assign_block_vars($block_name,array $array_vars,array $subtemplates=array())
{
$this->data->assign_block_vars($block_name,$array_vars,$subtemplates);
return $this;
}




public function add_subtemplate($identifier,Template $template)
{
$this->data->put($identifier,$template);
return $this;
}




public function __clone()
{
$this->data=clone $this->data;
}




public function render()
{
return $this->renderer->render($this->data,$this->loader);
}




public function display($reorder_js=false)
{
if($reorder_js)
$this->render_with_reordered_js();
else
echo $this->render();
}




private function render_with_reordered_js()
{
$generated_page=$this->render();

$js_variables_definition=$included_js=$all_js='';
$array_match_js=array();

if(!preg_match('`post\.php|edit`',REWRITED_SCRIPT))
{
$array_match_js[]='`<script(?: type="text/javascript")? src="([^"]*)"(?: type="text/javascript")?></script>`isU';
$array_match_js[]='`<script(?: type="text/javascript")?>(?:<!--)?(.*)(?:-->)?</script>`isU';

preg_match_all($array_match_js[0],$generated_page,$matches);
foreach($matches[1]as $value){
$included_js.='<script src="'.$value.'"></script>';
}

preg_match_all($array_match_js[1],$generated_page,$matches);
foreach($matches[1]as $key=>$value){
if($key==0)
$js_variables_definition=$value;
else
$all_js.=$value;
}

$all_js=str_replace(array('<!--','-->'),'',$all_js);
}

$generated_page=preg_replace($array_match_js,'',$generated_page);
$generated_page=str_replace('</body>','<script>'.$js_variables_definition.'</script>'.$included_js.'<script>'.$all_js.'</script></body>',$generated_page);


$generated_page=trim(preg_replace(array('`([\t]+|<!-- .*?-->)`s','`(\r\n)+|(\n)+|\n// .*\n`s'),array('',"\n"),$generated_page));

echo $generated_page;
}




public function add_lang(array $lang)
{
$this->renderer->add_lang($lang);
}




public function set_data(TemplateData $data)
{
$this->data=$data;
}




public function get_data()
{
return $this->data;
}




public function get_pictures_data_path(){
return $this->loader->get_pictures_data_path();
}
}
?>
