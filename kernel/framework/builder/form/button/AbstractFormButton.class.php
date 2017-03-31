<?php






























abstract class AbstractFormButton implements FormButton
{
private $form_id='';
private $name='';
private $label='';
private $type='';
private $onclick_action='';
private $css_class;
private $data_confirmation;

public function __construct($type,$label,$name,$onclick_action='',$css_class='',$data_confirmation='')
{
$this->type=$type;
$this->label=$label;
$this->name=$name;
$this->onclick_action=$onclick_action;
$this->css_class=$css_class;
$this->data_confirmation=$data_confirmation;
}




public function display()
{
$template=$this->get_template();
$template->put_all(array(
'LABEL'=>$this->label,
'HTML_NAME'=>$this->get_html_name(),
'CSS_CLASS'=>$this->css_class,
'C_DATA_CONFIRMATION'=>$this->data_confirmation!='',
'DATA_CONFIRMATION'=>$this->data_confirmation,
'TYPE'=>$this->type,
'ONCLICK_ACTION'=>$this->onclick_action
));
return $template;
}

public function get_name()
{
return $this->name;
}

public function get_html_name()
{
return $this->form_id.'_'.$this->name;
}

public function set_name($name)
{
$this->name=$name;
}

public function get_label()
{
return $this->label;
}

public function set_label($label)
{
$this->label=$label;
}

protected function get_template()
{
return new StringTemplate('<button type="${TYPE}" name="${HTML_NAME}" class="${CSS_CLASS}" onclick="${escape(ONCLICK_ACTION)}"# IF C_DATA_CONFIRMATION # data-confirmation="${escape(DATA_CONFIRMATION)}"# ENDIF # value="true">{LABEL}</button>');
}

public function set_css_class($css_class)
{
$this->css_class=$css_class;
}

public function get_css_class()
{
return $this->css_class;
}

public function set_data_confirmation($data_confirmation)
{
$this->data_confirmation=$data_confirmation;
}

public function get_data_confirmation()
{
return $this->data_confirmation;
}

public function set_form_id($form_id)
{
$this->form_id=$form_id;
}
}
?>
