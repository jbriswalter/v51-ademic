<?php






























abstract class AbstractFormField implements FormField
{



protected $id='';



private $form_id='';



private $fieldset_id='';



protected $label='';



protected $description='';



protected $value=null;



protected $disabled=false;



protected $hidden=false;



protected $readonly=false;



protected $css_class='';



protected $css_field_class='';



protected $css_form_field_class='';



protected $required=false;



protected $pattern='';



protected $placeholder='';



protected $validation_error_message='';



protected $constraints=array();



protected $form_constraints=array();



protected $template=null;




protected $events=array();
















protected function __construct($id,$label,$value,array $field_options=array(),array $constraints=array())
{
$this->set_id($id);
$this->set_label($label);
$this->set_value($value);
$this->compute_options($field_options);

foreach($constraints as $constraint)
{
if(!empty($constraint))
{
$this->add_constraint($constraint);
}
}
}




public function get_id()
{
return $this->id;
}




public function set_id($id)
{
$this->id=$id;
}




public function get_form_id()
{
return $this->form_id;
}




public function set_form_id($form_id)
{
$this->form_id=$form_id;
}

public function set_fieldset_id($fieldset_id)
{
$this->fieldset_id=$fieldset_id;
}





public function get_label()
{
return $this->label;
}





public function set_label($label)
{
$this->label=$label;
}





public function get_description()
{
return $this->description;
}





public function set_description($description)
{
$this->description=$description;
}




public function get_value()
{
return $this->value;
}




public function set_value($value)
{
$this->value=$value;
}





public function is_required()
{
return $this->required;
}





public function set_required($required)
{
$this->required=$required;
}




public function validate()
{
if($this->is_disabled())
{
return true;
}
$this->retrieve_value();
foreach($this->constraints as $constraint)
{
if(!$constraint->validate($this))
{
$validation_error_message=$constraint->get_validation_error_message();
if(!empty($validation_error_message))
{
$this->validation_error_message=$this->get_label().' : '.$validation_error_message;
}
return false;
}
}
foreach($this->form_constraints as $constraint)
{
if(!$constraint->validate($this))
{
$validation_error_message=$constraint->get_validation_error_message();
if(!empty($validation_error_message))
{
$this->validation_error_message=$this->get_label().' : '.$validation_error_message;
}
return false;
}
}
return true;
}

public function get_validation_error_message()
{
return $this->validation_error_message;
}

public function set_validation_error_message($error_message)
{
$this->validation_error_message=$error_message;
}




public function retrieve_value()
{
$request=AppContext::get_request();
if($request->has_parameter($this->get_html_id()))
{
$this->set_value($request->get_string($this->get_html_id()));
}
}




public function get_html_id()
{
return $this->form_id.'_'.$this->get_id();
}




public function add_constraint(FormFieldConstraint $constraint)
{
$this->constraints[]=$constraint;
}

public function add_form_constraint(FormConstraint $constraint)
{
$this->form_constraints[]=$constraint;
}




public function has_constraints()
{
return(count($this->constraints)>0 || count($this->form_constraints)>0);
}

public function get_js_validations()
{
$validations=array();
foreach($this->constraints as $constraint)
{
$validation=$constraint->get_js_validation($this);
if(!empty($validation))
{
$validations[]=$validation;
}
}
foreach($this->form_constraints as $constraint)
{
$validation=$constraint->get_js_validation();
if(!empty($validation))
{
$validations[]=$validation;
}
}
return $validations;
}

public function get_onblur_validation()
{
return 'formFieldConstraintsOnblurValidation(this, Array('.
implode(",",$this->get_js_validations()).'));';
}

public function add_event($event,$handler)
{
$this->events[$event]=$handler;
}

protected function compute_options(array&$field_options)
{
foreach($field_options as $attribute=>$value)
{
$attribute=strtolower($attribute);
switch($attribute)
{
case 'description':
$this->set_description($value);
unset($field_options['description']);
break;
case 'disabled':
$this->set_disabled($value);
unset($field_options['disabled']);
break;
case 'readonly':
$this->set_readonly($value);
unset($field_options['readonly']);
break;
case 'class':
$this->set_css_class($value);
unset($field_options['class']);
break;
case 'field_class':
$this->set_css_field_class($value);
unset($field_options['field_class']);
break;
case 'form_field_class':
$this->set_css_form_field_class($value);
unset($field_options['form_field_class']);
break;
case 'events':
$this->events=$value;
unset($field_options['events']);
break;
case 'hidden':
$this->set_hidden($value);
unset($field_options['hidden']);
break;
case 'pattern':
$this->set_pattern($value);
unset($field_options['pattern']);
break;
case 'placeholder':
$this->set_placeholder($value);
unset($field_options['placeholder']);
break;
case 'required':
if(is_string($value))
{
$this->set_required(true);
$this->add_constraint(new FormFieldConstraintNotEmpty($value,$value));
}
elseif(is_bool($value)&&$value===true)
{
$this->set_required(true);
$this->add_constraint(new FormFieldConstraintNotEmpty());
}
unset($field_options['required']);
break;
default:
throw new FormBuilderException('The class '.get_class($this).' hasn\'t the '.$attribute.' attribute');
}
}
}

protected function assign_common_template_variables(Template $template)
{
$has_js_validations=false;
$js_tpl=new FileTemplate('framework/builder/form/AddFieldJS.tpl');

foreach($this->get_related_fields()as $field)
{
$js_tpl->assign_block_vars('related_field',array(
'ID'=>$field
));
$has_js_validations=true;
}

foreach($this->events as $event=>$handler)
{
$js_tpl->assign_block_vars('event_handler',array(
'EVENT'=>$event,
'HANDLER'=>$handler
));
$has_js_validations=true;
}

foreach($this->get_js_validations()as $constraint)
{
$js_tpl->assign_block_vars('constraint',array(
'CONSTRAINT'=>$constraint
));
$has_js_validations=true;
}

$js_tpl->put_all(array(
'C_DISABLED'=>$this->is_disabled(),
'C_HAS_CONSTRAINTS'=>$this->has_constraints(),
'ID'=>$this->get_id(),
'HTML_ID'=>$this->get_html_id(),
'JS_SPECIALIZATION_CODE'=>$this->get_js_specialization_code(),
'FORM_ID'=>$this->form_id,
'FIELDSET_ID'=>$this->fieldset_id
));

$template->put('ADD_FIELD_JS',$js_tpl);

$description=$this->get_description();
$template->put_all(array(
'ID'=>$this->get_id(),
'HTML_ID'=>$this->get_html_id(),
'NAME'=>$this->get_html_id(),
'LABEL'=>$this->get_label(),
'DESCRIPTION'=>$description,
'C_DESCRIPTION'=>!empty($description),
'C_REQUIRED'=>$this->is_required(),
'C_REQUIRED_AND_HAS_VALUE'=>$this->is_required()&&(!empty($this->value)|| $this->value=='0'),
'VALUE'=>$this->get_value(),
'C_HAS_CONSTRAINTS'=>$this->has_constraints(),
'CLASS'=>$this->get_css_class(),
'FIELD_CLASS'=>$this->get_css_field_class(),
'C_HAS_FIELD_CLASS'=>$this->get_css_field_class()!='',
'FORM_FIELD_CLASS'=>$this->get_css_form_field_class(),
'C_HAS_FORM_FIELD_CLASS'=>$this->get_css_form_field_class()!='',
'FORM_ID'=>$this->form_id,
'FIELDSET_ID'=>$this->fieldset_id,
'C_HAS_LABEL'=>!empty($description)|| $this->get_label()!='',
'C_DISABLED'=>$this->is_disabled(),
'C_READONLY'=>$this->is_readonly(),
'C_HIDDEN'=>$this->is_hidden(),
'C_PATTERN'=>$this->has_pattern(),
'PATTERN'=>$this->pattern,
'C_PLACEHOLDER'=>$this->has_placeholder(),
'PLACEHOLDER'=>$this->placeholder
));
}

private function get_related_fields()
{
$related_fields=array();
foreach($this->form_constraints as $constraint)
{
foreach($constraint->get_related_fields()as $field)
{
if($field->get_id()!=$this->get_id()&&!in_array($field->get_id(),$related_fields))
{
$related_fields[]=$field->get_id();
}
}
}
return $related_fields;
}

protected function get_css_class()
{
return $this->css_class;
}

protected function set_css_class($css_class)
{
$this->css_class=$css_class;
}

protected function get_css_field_class()
{
return $this->css_field_class;
}


protected function set_css_field_class($css_field_class)
{
$this->css_field_class=$css_field_class;
}

protected function get_css_form_field_class()
{
return $this->css_form_field_class;
}


protected function set_css_form_field_class($css_form_field_class)
{
$this->css_form_field_class=$css_form_field_class;
}

public function is_disabled()
{
return $this->disabled;
}

public function disable()
{
$this->set_disabled(true);
}

public function enable()
{
$this->set_disabled(false);
}

protected function set_disabled($disabled)
{
$this->disabled=$disabled;
}

public function is_readonly()
{
return $this->readonly;
}

public function set_readonly($readonly)
{
$this->readonly=$readonly;
}

public function is_hidden()
{
return $this->hidden;
}

public function set_hidden($hidden)
{
$this->hidden=$hidden;
}

public function has_pattern()
{
return $this->pattern;
}

public function set_pattern($pattern)
{
$this->pattern=$pattern;
}

public function has_placeholder()
{
return $this->placeholder;
}

public function set_placeholder($placeholder)
{
$this->placeholder=$placeholder;
}

public function set_template(Template $template)
{
$this->template=$template;
}




protected function get_template_to_use()
{
if($this->template!==null)
{
return $this->template;
}
else
{
return $this->get_default_template();
}
}




abstract protected function get_default_template();

protected function get_js_specialization_code()
{
return '';
}
}
?>
