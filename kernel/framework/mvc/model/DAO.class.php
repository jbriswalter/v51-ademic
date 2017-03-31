<?php






























interface DAO
{
const FIND_ALL=0;
const WHERE_ALL='WHERE 1';






function save(PropertiesMapInterface $object);







function update(array $fields,$where=DAO::WHERE_ALL,array $parameters=array());






function delete(PropertiesMapInterface $object);






function delete_all($where=DAO::WHERE_ALL,array $parameters=array());






function count($where=DAO::WHERE_ALL,array $parameters=array());







function find_by_id($id);













function find_all($limit=100,$offset=0,$order_by=array());







function find_by_criteria($criteria,$parameters=array());
}
?>
