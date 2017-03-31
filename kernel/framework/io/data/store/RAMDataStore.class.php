<?php



































class RAMDataStore implements DataStore
{
private $data=array();




public function get($id)
{
if($this->contains($id))
{
return $this->data[$id];
}
throw new DataStoreException($id);
}




public function contains($id)
{
return isset($this->data[$id]);
}




public function store($id,$data)
{
$this->data[$id]=$data;
}




public function delete($id)
{
unset($this->data[$id]);
}




public function clear()
{
$this->data=array();
}
}
?>
