<?php


























abstract class AbstractScheduledJobExtensionPoint implements ScheduledJobExtensionPoint
{



public function on_changeday(Date $yesterday,Date $today){}

public function on_changepage(){}

public function on_new_session($new_visitor,$is_robot){}
}
?>
