<?php































class RegexHelper
{
const REGEX_MULTIPLICITY_NOT_USED=0x01;
const REGEX_MULTIPLICITY_OPTIONNAL=0x02;
const REGEX_MULTIPLICITY_REQUIRED=0x03;
const REGEX_MULTIPLICITY_AT_LEAST_ONE=0x04;
const REGEX_MULTIPLICITY_ALL=0x05;












public static function set_subregex_multiplicity($sub_regex,$multiplicity_option)
{
switch($multiplicity_option)
{
case self::REGEX_MULTIPLICITY_OPTIONNAL:

return '(?:'.$sub_regex.')?';
case self::REGEX_MULTIPLICITY_REQUIRED:

return $sub_regex;
case self::REGEX_MULTIPLICITY_AT_LEAST_ONE:

return '(?:'.$sub_regex.')+';
case self::REGEX_MULTIPLICITY_ALL:

return '(?:'.$sub_regex.')*';
case self::REGEX_MULTIPLICITY_NOT_USED:
default:

return '';
}
}
}
?>
