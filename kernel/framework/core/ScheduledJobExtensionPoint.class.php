<?php


























interface ScheduledJobExtensionPoint extends ExtensionPoint
{
const EXTENSION_POINT='scheduled_jobs';






function on_changeday(Date $yesterday,Date $today);




function on_changepage();






function on_new_session($new_visitor,$is_robot);
}
?>
