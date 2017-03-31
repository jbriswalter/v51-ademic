<?php


























class RichRootCategory extends RichCategory
{
public function __construct()
{
$this->set_id(self::ROOT_CATEGORY);
$this->set_id_parent(self::ROOT_CATEGORY);
$this->set_name(LangLoader::get_message('root','main'));
$this->set_rewrited_name('root');
$this->set_order(0);
}
}
?>
