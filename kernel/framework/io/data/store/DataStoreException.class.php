<?php
































class DataStoreException extends Exception
{
public function __construct($id)
{
parent::__construct('The data store doesn\'t contains element "'.$id.'"');
}
}
?>
