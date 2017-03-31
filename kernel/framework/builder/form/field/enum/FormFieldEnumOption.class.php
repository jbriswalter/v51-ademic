<?php






























interface FormFieldEnumOption
{



function display();

function get_label();

function set_label($label);

function get_raw_value();

function set_raw_value($raw_value);

function get_field();

function set_field(FormField $field);

function get_option($raw_option);
}

?>
