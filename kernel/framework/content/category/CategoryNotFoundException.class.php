<?php


























class CategoryNotFoundException extends Exception
{
public function __construct($id)
{
parent::__construct('The category #'.$id.' doesn\'t exist');
}
}
?>
