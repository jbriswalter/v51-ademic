<?php


























class AjaxImagePreviewController extends AbstractController
{
public function execute(HTTPRequestCustom $request)
{
$url='';
$image=new Url($request->get_string('image',''));

if(Url::check_url_validity($image))
$url=$image->rel();

return new JSONResponse(array('url'=>$url));
}
}
?>
