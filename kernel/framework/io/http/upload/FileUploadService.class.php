<?php































class FileUploadService
{







public static function retrieve_file($varname)
{
$properties=$_FILES[$varname];

switch($properties['error'])
{
case UPLOAD_ERR_OK:
return self::build_file($properties);
case UPLOAD_ERR_INI_SIZE:
case UPLOAD_ERR_FORM_SIZE:
throw new UploadedFileTooLargeException($varname,$properties['name']);
break;
default:
throw new Exception('The file of the field <i>'.$varname.'</i> of the HTTP request couldn\'t be uploaded');
break;
}
}




private static function build_file(array $properties)
{
return $file=new UploadedFile($properties['name'],$properties['type'],$properties['size'],$properties['tmp_name']);
}
}
?>
