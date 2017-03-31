<?php































class NumberHelper
{






public static function numeric($var,$type='int')
{
if(is_numeric($var))
{
if($type==='float')
{
return(float)$var;
}
else
{
return(int)$var;
}
}
else
{
return 0;
}
}







public static function round($number,$dec)
{
return trim(number_format($number,$dec,'.',''));
}
}
?>
