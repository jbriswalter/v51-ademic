<?php


























class RichCategory extends Category
{
protected $description;
protected $image;

public function set_description($description)
{
$this->description=$description;
}

public function get_description()
{
return $this->description;
}

public function set_image(Url $image)
{
$this->image=$image;
}

public function get_image()
{
if(!$this->image instanceof Url)
return new Url('/'.Environment::get_running_module_name().'/'.Environment::get_running_module_name().'.png');

return $this->image;
}

public function get_properties()
{
return array_merge(parent::get_properties(),array(
'description'=>$this->get_description(),
'image'=>$this->get_image()->relative()
));
}

public function set_properties(array $properties)
{
parent::set_properties($properties);
$this->set_description($properties['description']);
$this->set_image(new Url($properties['image']));
}

public static function create_categories_table($table_name)
{
$fields=array(
'id'=>array('type'=>'integer','length'=>11,'autoincrement'=>true,'notnull'=>1),
'name'=>array('type'=>'string','length'=>255,'notnull'=>1,'default'=>"''"),
'rewrited_name'=>array('type'=>'string','length'=>250,'default'=>"''"),
'description'=>array('type'=>'text','length'=>65000),
'c_order'=>array('type'=>'integer','length'=>11,'unsigned'=>1,'notnull'=>1,'default'=>0),
'special_authorizations'=>array('type'=>'boolean','notnull'=>1,'default'=>0),
'auth'=>array('type'=>'text','length'=>65000),
'image'=>array('type'=>'string','length'=>255,'notnull'=>1,'default'=>"''"),
'id_parent'=>array('type'=>'integer','length'=>11,'notnull'=>1,'default'=>0),
);

$options=array(
'primary'=>array('id')
);
PersistenceContext::get_dbms_utils()->create_table($table_name,$fields,$options);
}
}
?>
