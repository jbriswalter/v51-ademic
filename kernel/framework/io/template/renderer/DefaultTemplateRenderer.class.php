<?php
































class DefaultTemplateRenderer implements TemplateRenderer
{



private $functions;

public function __construct()
{
$this->functions=new TemplateFunctions();
}




public function render(TemplateData $data,TemplateLoader $loader)
{
if($loader->supports_caching())
{
return $this->parse($loader,$data);
}
else
{
return $this->execute($loader,$data);
}
}




public function add_lang(array $lang)
{
$this->functions->add_language_maps($lang);
}

private function parse(TemplateLoader $loader,TemplateData $data)
{
$_result='';
$_functions=$this->functions;
$_data=$data;
include $loader->get_cache_file_path();
return $_result;
}

private function execute(TemplateLoader $loader,TemplateData $data)
{
$_result='';
$_functions=$this->functions;
$_data=$data;
eval($this->get_code_to_eval($loader));
return $_result;
}

private function get_code_to_eval(TemplateLoader $loader)
{
$template_code=$loader->load();

return substr($template_code,6,strlen($template_code)-9);
}
}


?>
