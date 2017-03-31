<?php


























interface CLICommands extends ExtensionPoint
{
const EXTENSION_POINT='commands';





function get_commands();






function get_short_description($command);






function help($command,array $args);






function execute($command,array $args);
}
?>
