<?php































class UrlRedirectMapper extends AbstractUrlMapper
{
private $redirect_url;








public function __construct($redirect_url,$capture_regex='`^/?$`')
{
$this->redirect_url=$redirect_url;
parent::__construct($capture_regex);
}




public function call()
{
AppContext::get_response()->redirect($this->redirect_url);
}
}
?>
