<?php






























abstract class Captcha implements ExtensionPoint
{
const EXTENSION_POINT='captcha';

private $html_id='captcha';
private $options;

abstract public function get_name();

abstract public function is_available();

abstract public function is_valid();

abstract public function display();

public function get_error()
{
return;
}

public function set_html_id($html_id){$this->html_id=$html_id;}
public function get_html_id(){return $this->html_id;}
public function set_options(CaptchaOptions $options){$this->options=$options;}
public function get_options(){return $this->options;}
}
?>
