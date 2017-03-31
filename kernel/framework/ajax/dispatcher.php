<?php


























define('PATH_TO_ROOT','../../..');

require_once PATH_TO_ROOT.'/kernel/init.php';

AppContext::get_session()->no_session_location();

$url_controller_mappers=array(

new UrlControllerMapper('AjaxCommentsDisplayController','`^/comments/display/?$`'),
new UrlControllerMapper('AjaxUserAutoCompleteController','`^/users_autocomplete/?$`'),
new UrlControllerMapper('AjaxSearchUserAutoCompleteController','`^/search_users_autocomplete/?$`'),
new UrlControllerMapper('AjaxImagePreviewController','`^/image/preview/?$`'),
new UrlControllerMapper('AjaxKeywordsAutoCompleteController','`^/tags/?$`'),
new UrlControllerMapper('AjaxUrlValidationController','`^/url_validation/?$`')
);

DispatchManager::dispatch($url_controller_mappers);
?>
