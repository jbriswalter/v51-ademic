<?php






































class FileTemplateLoader implements TemplateLoader
{
private $filepath;
private $real_filepath='';
private $cache_filepath='';
private $pictures_data_path='';

private $module;
private $file;
private $folder;

private $default_templates_folder;
private $theme_templates_folder;








public function __construct($identifier,TemplateData $data)
{
$this->filepath=$identifier;
$this->compute_real_file_path();
$this->compute_cache_file_path();
$data->put('PICTURES_DATA_PATH',$this->pictures_data_path);
}

private function compute_cache_file_path()
{
$this->cache_filepath=PATH_TO_ROOT.'/cache/tpl/'.trim(str_replace(
array('/','.','..','tpl','templates'),
array('_','','','','tpl'),
$this->real_filepath
),'_').'.php';

}




public function load()
{
if(!$this->is_cache_file_up_to_date())
{
$this->generate_cache_file();
}

return $this->get_file_cache_content();
}

private function is_cache_file_up_to_date()
{
if(file_exists($this->cache_filepath))
{
return @filemtime($this->real_filepath)<=@filemtime($this->cache_filepath)&&@filesize($this->cache_filepath)!==0;
}
return false;
}

private function generate_cache_file()
{
$real_file_content=@file_get_contents($this->real_filepath);
if($real_file_content===false)
{
throw new FileTemplateLoadingException($this->filepath,$this->real_filepath);
}

$parser=new TemplateSyntaxParser();
$result=$parser->parse($real_file_content);

try
{
$cache_file=new File($this->cache_filepath);
$cache_file->open(File::WRITE);
$cache_file->lock();
$cache_file->write($result);
$cache_file->unlock();
$cache_file->close();
$cache_file->change_chmod(0666);
}
catch(IOException $ex)
{
throw new TemplateLoadingException('The template file cache couldn\'t been written due to this problem :'.$ex->getMessage());
}
}

private function get_file_cache_content()
{
return @file_get_contents($this->cache_filepath);
}





private function compute_real_file_path()
{
if(strpos($this->filepath,'/')===0)
{


if(file_exists(PATH_TO_ROOT.$this->filepath))
{
$this->get_template_real_filepaths_and_data_path(array(PATH_TO_ROOT.$this->filepath));
return;
}
}

















$i=strpos($this->filepath,'/');
$this->module=substr($this->filepath,0,$i);
$this->file=trim(substr($this->filepath,$i),'/');
$this->folder=trim(substr($this->file,0,strpos($this->file,'/')),'/');
$this->filename=trim(substr($this->filepath,strrpos($this->filepath,'/')));

$this->default_templates_folder=PATH_TO_ROOT.'/templates/default/';
$this->theme_templates_folder=PATH_TO_ROOT.'/templates/'.AppContext::get_current_user()->get_theme().'/';

if(empty($this->module)|| in_array($this->module,array('admin','framework')))
{


$this->get_kernel_paths();
}
elseif($this->module=='menus')
{


$this->get_menus_paths();
}
else
{
$this->get_module_paths();
}
}

private function get_kernel_paths()
{
$this->get_template_real_filepaths_and_data_path(array(
$this->theme_templates_folder.$this->filepath,
$this->default_templates_folder.$this->filepath
));
}

private function get_menus_paths()
{
$menu=substr($this->folder,0,strpos($this->folder,'/'));
if(empty($menu))
{
$menu=$this->folder;
}

$this->get_template_real_filepaths_and_data_path(array(
$this->theme_templates_folder.'/menus/'.$menu.'/'.$this->filename,
PATH_TO_ROOT.'/menus/'.$menu.'/templates/'.$this->filename
));
}

private function get_module_paths()
{
$theme_module_templates_folder=$this->theme_templates_folder.'modules/'.$this->module.'/';
$module_templates_folder=PATH_TO_ROOT.'/'.$this->module.'/templates/';

if($this->folder=='framework')
{





$this->get_template_real_filepaths_and_data_path(array(
$theme_module_templates_folder.$this->file,
$module_templates_folder.'framework/'.$this->file,
$this->theme_templates_folder.$this->filepath,
$this->default_templates_folder.$this->file
));
}
else
{
$this->get_template_real_filepaths_and_data_path(array(
$theme_module_templates_folder.$this->file,
$module_templates_folder.$this->file
));
}
}

private function get_template_real_filepaths_and_data_path($paths)
{
foreach($paths as $path)
{
$dirpath=dirname($path);
if(file_exists($dirpath.'/images'))
{
$this->pictures_data_path=$this->convert_to_tpl_path($dirpath);
break;
}
}

foreach($paths as $path)
{
if(file_exists($path))
{
$this->real_filepath=$path;
break;
}
}

if(empty($this->real_filepath)&&count($paths)>0)
{
$this->real_filepath=$paths[count($paths)-1];
}
}

private function convert_to_tpl_path($path_to_root_filepath)
{
return TPL_PATH_TO_ROOT.substr($path_to_root_filepath,strlen(PATH_TO_ROOT));
}




public function supports_caching()
{
return true;
}




public function get_cache_file_path()
{
if(!$this->is_cache_file_up_to_date())
{
$this->generate_cache_file();
}
return $this->cache_filepath;
}

public function get_pictures_data_path(){
return $this->pictures_data_path;
}
}
?>
