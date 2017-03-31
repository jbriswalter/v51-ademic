<?php































class Theme
{
private $theme_id;
private $activated;
private $columns_disabled;
private $customize_interface;
private $authorizations;
const ACCES_THEME=1;

public function __construct($theme_id,array $authorizations=array(),$activated=false)
{
$this->theme_id=$theme_id;
$this->activated=$activated;
$this->authorizations=$authorizations;
$this->customize_interface=new CustomizeInterface();
}

public function get_id()
{
return $this->theme_id;
}

public function is_activated()
{
return $this->activated;
}

public function get_authorizations()
{
return $this->authorizations;
}

public function set_activated($activated)
{
$this->activated=$activated;
}

public function set_columns_disabled(ColumnsDisabled $columns_disabled)
{
$this->columns_disabled=$columns_disabled;
}

public function get_columns_disabled()
{
return $this->columns_disabled;
}

public function set_customize_interface(CustomizeInterface $customize_interface)
{
$this->customize_interface=$customize_interface;
}

public function get_customize_interface()
{
return $this->customize_interface;
}

public function set_authorizations($authorizations)
{
$this->authorizations=$authorizations;
}




public function get_configuration()
{
return ThemeConfigurationManager::get($this->theme_id);
}

public function check_auth()
{
if($this->theme_id==UserAccountsConfig::load()->get_default_theme())
{
return true;
}
return AppContext::get_current_user()->check_auth($this->authorizations,self::ACCES_THEME);
}
}
?>
