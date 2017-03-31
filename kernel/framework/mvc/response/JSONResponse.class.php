<?php

































class JSONResponse implements Response
{
private $json;

public function __construct(array $json_object)
{
$session=AppContext::get_session();
$session->no_session_location();
$session->update_location('');

$this->json=JSONBuilder::build($json_object);
}

public function send()
{
$response=AppContext::get_response();
$response->set_header('Content-type','application/json; charset=windows-1252');
echo $this->json;
}
}
?>
