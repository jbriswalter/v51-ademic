<?php

































class ExtensionPointProviderService
{
const EXTENSION_POINT_PROVIDER_SUFFIX='ExtensionPointProvider';




private $loaded_providers;
private $available_providers_ids=array();




public function __construct()
{
$this->loaded_providers=new RAMDataStore();
$this->load_modules_providers();
$this->register_provider('kernel');
$this->register_provider('user');
$this->register_provider('install');
}








public function get_extension_point($extension_point,$authorized_providers_ids=null)
{
$providers=$this->get_providers($extension_point,$authorized_providers_ids);
$extensions_points=array();
foreach($providers as $provider)
{
$extensions_points[$provider->get_id()]=$provider->get_extension_point($extension_point);
}
return $extensions_points;
}










public function get_providers($extension_point,$authorized_providers_ids=null)
{
if($authorized_providers_ids===null)
{
$authorized_providers_ids=$this->available_providers_ids;
}
$providers=array();
foreach($authorized_providers_ids as $extension_provider_id)
{
$provider=$this->get_provider($extension_provider_id);
if($provider->has_extension_point($extension_point))
{
$providers[$provider->get_id()]=$provider;
}
}
return $providers;
}







public function get_provider($provider_id)
{
if(!$this->loaded_providers->contains($provider_id))
{
if(!$this->provider_exists($provider_id))
{
$this->try_to_reload_modules_providers($provider_id);
}
$classname=$this->compute_provider_classname($provider_id);
$this->loaded_providers->store($provider_id,new $classname());
}
return $this->loaded_providers->get($provider_id);
}












public function provider_exists($provider_id,$extensions_points=null)
{
if(!in_array($provider_id,$this->available_providers_ids))
{
return false;
}
if(!empty($extensions_points))
{
$provider=$this->get_provider($provider_id);
if(is_string($extensions_points))
{
return $provider->has_extension_point($extensions_points);
}
else
{
return $provider->has_extensions_points($extensions_points);
}
}
return true;
}

private function load_modules_providers()
{
try
{



foreach(ModulesManager::get_installed_modules_map()as $provider_id=>$module)
{
if($module->is_activated())
{
$this->register_provider($provider_id);
}
}
}
catch(PHPBoostNotInstalledException $exception){}
catch(DBConnectionException $exception){}
catch(SQLQuerierException $exception){}
catch(IOException $exception){}
}

private function register_provider($provider_id)
{
if($this->check_provider($provider_id)&&!in_array($provider_id,$this->available_providers_ids))
{
$this->available_providers_ids[]=$provider_id;
}
}

private function check_provider($provider_id)
{
$provider_classname=$this->compute_provider_classname($provider_id);
return ClassLoader::is_class_registered_and_valid($provider_classname);
}

private function compute_provider_classname($provider_id)
{
return ucfirst($provider_id).self::EXTENSION_POINT_PROVIDER_SUFFIX;
}

private function try_to_reload_modules_providers($provider_id)
{
if(!in_array($provider_id,$this->available_providers_ids))
{
$this->load_modules_providers();
if(!in_array($provider_id,$this->available_providers_ids))
{
throw new UnexistingExtensionPointProviderException($provider_id);
}
}
}
}
?>
