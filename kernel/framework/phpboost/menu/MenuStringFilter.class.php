<?php































class MenuStringFilter extends Filter
{
public function __construct($pattern)
{
parent::__construct($pattern);
}

public function match()
{
if(substr($this->pattern,-10)=='/index.php')
{
return Url::is_current_url('/'.substr($this->pattern,0,-9),true)|| Url::is_current_url($this->pattern);
}
else
return Url::is_current_url($this->pattern);
}
}
?>
