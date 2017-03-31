<?php

























class AjaxUrlValidationController extends AbstractController
{
public function execute(HTTPRequestCustom $request)
{
return new JSONResponse(array('is_valid'=>(int)Url::check_url_validity($request->get_value('url_to_check',''))));
}
}
?>
