<?php


























class AjaxCommentsDisplayController extends AbstractCommentsController
{
public function execute(HTTPRequestCustom $request)
{
parent::execute($request);

$view=CommentsService::display_comments($this->get_module_id(),$this->get_id_in_module(),$this->get_topic_identifier(),
$this->get_number_comments_display(),$this->get_authorizations(),true);

return new SiteNodisplayResponse($view);
}

private function get_number_comments_display()
{
return $this->provider->get_number_comments_display();
}
}
?>
