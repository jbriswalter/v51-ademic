<?php



























class SqlitePlatform extends AbstractPlatform
{



public function __construct()
{
parent::__construct();
}







public static function md5Impl($data)
{
return md5($data);
}








public static function modImpl($dividend,$divisor)
{
return $dividend%$divisor;
}










public static function locateImpl($substr,$str)
{
return strpos($str,$substr);
}

public static function sha1Impl($str)
{
return sha1($str);
}

public static function ltrimImpl($str)
{
return ltrim($str);
}

public static function rtrimImpl($str)
{
return rtrim($str);
}

public static function trimImpl($str)
{
return trim($str);
}







public function getRegexpExpression()
{
return 'RLIKE';
}










public function getSoundexExpression($value)
{
return 'SOUNDEX('.$value.')';
}








public function getNowExpression($type='timestamp')
{
switch($type){
case 'time':
return 'time(\'now\')';
case 'date':
return 'date(\'now\')';
case 'timestamp':
default:
return 'datetime(\'now\')';
}
}







public function getRandomExpression()
{
return '((RANDOM() + 2147483648) / 4294967296)';
}














public function getSubstringExpression($value,$position,$length=null)
{
if($length!==null){
return 'SUBSTR('.$value.', '.$position.', '.$length.')';
}
return 'SUBSTR('.$value.', '.$position.', LENGTH('.$value.'))';
}

protected function _getTransactionIsolationLevelSql($level)
{
switch($level){






default:
return parent::_getTransactionIsolationLevelSql($level);
}
}

public function getSetTransactionIsolationSql($level)
{
return 'PRAGMA read_uncommitted = '.$this->_getTransactionIsolationLevelSql($level);
}




public function prefersIdentityColumns()
{
return true;
}




public function getBooleanTypeDeclarationSql(array $field)
{
return 'BOOLEAN';
}




public function getIntegerTypeDeclarationSql(array $field)
{
return $this->_getCommonIntegerTypeDeclarationSql($field);
}




public function getBigIntTypeDeclarationSql(array $field)
{
return $this->_getCommonIntegerTypeDeclarationSql($field);
}




public function getTinyIntTypeDeclarationSql(array $field)
{
return $this->_getCommonIntegerTypeDeclarationSql($field);
}




public function getSmallIntTypeDeclarationSql(array $field)
{
return $this->_getCommonIntegerTypeDeclarationSql($field);
}




public function getMediumIntTypeDeclarationSql(array $field)
{
return $this->_getCommonIntegerTypeDeclarationSql($field);
}




public function getDateTimeTypeDeclarationSql(array $fieldDeclaration)
{
return 'DATETIME';
}




public function getDateTypeDeclarationSql(array $fieldDeclaration)
{
return 'DATE';
}




protected function _getCommonIntegerTypeDeclarationSql(array $columnDef)
{
$autoinc=!empty($columnDef['autoincrement'])?' AUTOINCREMENT':'';
$pk=!empty($columnDef['primary'])&&!empty($autoinc)?' PRIMARY KEY':'';

return 'INTEGER'.$pk.$autoinc;
}






























public function getCreateTableSql($name,array $fields,array $options=array())
{
if(!$name){
throw DoctrineException::invalidTableName($name);
}

if(empty($fields)){
throw DoctrineException::noFieldsSpecifiedForTable($name);
}
$queryFields=$this->getColumnDeclarationListSql($fields);

$autoinc=false;
foreach($fields as $field){
if(isset($field['autoincrement'])&&$field['autoincrement']){
$autoinc=true;
break;
}
}

if(!$autoinc&&isset($options['primary'])&&!empty($options['primary'])){
$keyColumns=array_unique(array_values($options['primary']));
$keyColumns=array_map(array($this,'quoteIdentifier'),$keyColumns);
$queryFields.=', PRIMARY KEY('.implode(', ',$keyColumns).')';
}

$sql='CREATE TABLE '.$name.' ('.$queryFields;









$sql.=')';

$query[]=$sql;

if(isset($options['indexes'])&&!empty($options['indexes'])){
foreach($options['indexes']as $index=>$definition){
$query[]=$this->getCreateIndexSql($name,$index,$definition);
}
}
return $query;
}




public function getVarcharTypeDeclarationSql(array $field)
{
if(!isset($field['length'])){
if(array_key_exists('default',$field)){
$field['length']=$this->getVarcharMaxLength();
}else{
$field['length']=false;
}
}
$length=($field['length']<=$this->getVarcharMaxLength())?$field['length']:false;
$fixed=(isset($field['fixed']))?$field['fixed']:false;

return $fixed?($length?'CHAR('.$length.')':'CHAR(255)')
:($length?'VARCHAR('.$length.')':'TEXT');
}

public function getClobTypeDeclarationSql(array $field)
{
return 'CLOB';
}

public function getListSequencesSql($database)
{
return "SELECT name FROM sqlite_master WHERE type='table' AND sql NOT NULL ORDER BY name";
}

public function getListTableConstraintsSql($table)
{
return "SELECT sql FROM sqlite_master WHERE type='index' AND tbl_name = '$table' AND sql NOT NULL ORDER BY name";
}

public function getListTableColumnsSql($table)
{
return "PRAGMA table_info($table)";
}

public function getListTableIndexesSql($table)
{
return "PRAGMA index_list($table)";
}

public function getListTablesSql()
{
return "SELECT name FROM sqlite_master WHERE type = 'table' AND name != 'sqlite_sequence' "
."UNION ALL SELECT name FROM sqlite_temp_master "
."WHERE type = 'table' ORDER BY name";
}

public function getListTableViews()
{
return "SELECT name, sql FROM sqlite_master WHERE type='view' AND sql NOT NULL";
}

public function getListViewsSql()
{
return "SELECT name, sql FROM sqlite_master WHERE type='view' AND sql NOT NULL";
}

public function getCreateViewSql($name,$sql)
{
return 'CREATE VIEW '.$name.' AS '.$sql;
}

public function getDropViewSql($name)
{
return 'DROP VIEW '.$name;
}









public function supportsForeignKeyConstraints()
{
return false;
}






public function getName()
{
return 'sqlite';
}
}
