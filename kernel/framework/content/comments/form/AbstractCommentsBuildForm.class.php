<?php






























abstract class AbstractCommentsBuildForm
{
private $form;
private $submit_button;
private $message_response;

public function display()
{
return $this->form->display();
}

protected abstract function create_form();

protected abstract function handle_submit();

protected function has_been_submited()
{
return $this->submit_button->has_been_submited()&&$this->form->validate();
}

protected function get_form()
{
return $this->form;
}

protected function set_form(HTMLForm $form)
{
$this->form=$form;
}

protected function set_submit_button(FormButtonSubmit $submit_button)
{
$this->submit_button=$submit_button;
}
}
?>
