<?php




























class AjaxKeywordsAutoCompleteController extends AbstractController
{
public function execute(HTTPRequestCustom $request)
{
$suggestions=array();

try{
$result=PersistenceContext::get_querier()->select("SELECT name, rewrited_name FROM ".DB_TABLE_KEYWORDS." WHERE name LIKE '".$request->get_value('value','')."%'");

while($row=$result->fetch())
{
$suggestions[]=$row['name'];
}
$result->dispose();
}catch(Exception $e){
}

return new JSONResponse(array('suggestions'=>$suggestions));
}
}
?>
