<?php



































interface DataStore
{






function get($id);






function contains($id);






function store($id,$object);





function delete($id);




function clear();
}
?>
