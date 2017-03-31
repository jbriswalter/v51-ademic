<?php





























class SmileysCache implements CacheData
{
private $smileys=array();




public function synchronize()
{
$this->smileys=array();

$querier=PersistenceContext::get_querier();

$columns=array('idsmiley','code_smiley','url_smiley');
$result=$querier->select_rows(PREFIX.'smileys',$columns);
while($row=$result->fetch())
{
$this->smileys[$row['code_smiley']]=array(
'idsmiley'=>$row['idsmiley'],
'url_smiley'=>$row['url_smiley']
);
}
$result->dispose();
}

public function get_smileys()
{
return $this->smileys;
}

public function get_url_smiley($code_smiley)
{
return $this->smileys[$code_smiley];
}





public static function load()
{
return CacheManager::load(__CLASS__,'kernel','smileys');
}




public static function invalidate()
{
CacheManager::invalidate('kernel','smileys');
}
}
?>
