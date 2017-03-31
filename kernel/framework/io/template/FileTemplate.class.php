<?php















































class FileTemplate extends AbstractTemplate
{
private $file_identifier;






public function __construct($file_identifier)
{
$this->file_identifier=$file_identifier;
$data=new DefaultTemplateData();
$data->auto_load_frequent_vars();
$loader=new FileTemplateLoader($this->file_identifier,$data);
$renderer=new DefaultTemplateRenderer();
parent::__construct($loader,$renderer,$data);
}




public function render()
{
try
{
return parent::render();
}
catch(TemplateRenderingException $exception)
{
throw new FileTemplateRenderingException($this->file_identifier,$exception);
}
catch(LangNotFoundException $exception)
{
throw new FileTemplateRenderingException($this->file_identifier,$exception);
}
}
}
?>
