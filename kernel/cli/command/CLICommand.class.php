<?php


























interface CLICommand
{




function short_description();





function help(array $args);





function execute(array $args);
}
?>
