<?php






























interface FormConstraint
{
function validate();

function get_js_validation();

function get_related_fields();
}

?>
