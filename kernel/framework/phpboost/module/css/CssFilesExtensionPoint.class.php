<?php


























interface CssFilesExtensionPoint extends ExtensionPoint
{
const EXTENSION_POINT='css_files';




function get_css_files_always_displayed();




function get_css_files_running_module_displayed();
}
?>
