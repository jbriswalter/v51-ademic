<?php




























class MySqlPlatform extends AbstractPlatform
{



public function __construct()
{
parent::__construct();
}







public function getIdentifierQuoteCharacter()
{
return '`';
}







public function getRegexpExpression()
{
return 'RLIKE';
}






public function getRandomExpression()
{
return 'RAND()';
}

















public function getMatchPatternExpression($pattern,$operator=null,$field=null)
{
$match='';
if(!is_null($operator)){
$field=is_null($field)?'':$field.' ';
$operator=strtoupper($operator);
switch($operator){

case 'ILIKE':
$match=$field.'LIKE ';
break;

case 'LIKE':
$match=$field.'LIKE BINARY ';
break;
default:
throw DoctrineException::operatorNotSupported($operator);
}
}
$match.="'";
foreach($pattern as $key=>$value){
if($key%2){
$match.=$value;
}else{
$match.=$this->conn->escapePattern($this->conn->escape($value));
}
}
$match.="'";
$match.=$this->patternEscapeString();

return $match;
}







public function getGuidExpression()
{
return 'UUID()';
}










public function getConcatExpression()
{
$args=func_get_args();
return 'CONCAT('.join(', ',(array)$args).')';
}

public function getListDatabasesSql()
{
return 'SHOW DATABASES';
}

public function getListSequencesSql($database)
{
$query='SHOW TABLES';
if(!is_null($database)){
$query.=' FROM '.$database;
}
return $query;
}

public function getListTableConstraintsSql($table)
{
return 'SHOW INDEX FROM '.$table;
}

public function getListTableIndexesSql($table)
{
return 'SHOW INDEX FROM '.$table;
}

public function getListUsersSql()
{
return "SELECT * FROM mysql.user WHERE user != '' GROUP BY user";
}

public function getListViewsSql($database=null)
{
if(is_null($database)){
return 'SELECT * FROM information_schema.VIEWS';
}else{
return "SHOW FULL TABLES FROM ".$database." WHERE Table_type = 'VIEW'";
}
}

public function getListTableForeignKeysSql($table,$database=null)
{
$sql="SELECT column_name, REFERENCED_TABLE_NAME, REFERENCED_COLUMN_NAME FROM information_schema.key_column_usage WHERE table_name = '".$table."'";

if(!is_null($database)){
$sql.=" AND table_schema = '$database'";
}

$sql.=" AND REFERENCED_COLUMN_NAME is not NULL";

return $sql;
}

public function getCreateViewSql($name,$sql)
{
return 'CREATE VIEW '.$name.' AS '.$sql;
}

public function getDropViewSql($name)
{
return 'DROP VIEW '.$name;
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
:($length?'VARCHAR('.$length.')':'VARCHAR(255)');
}


public function getClobTypeDeclarationSql(array $field)
{
if(!empty($field['length'])){
$length=$field['length'];
if($length<=255){
return 'TINYTEXT';
}else if($length<=65532){
return 'TEXT';
}else if($length<=16777215){
return 'MEDIUMTEXT';
}
}
return 'LONGTEXT';
}









public function getCharsetFieldDeclaration($charset)
{
return 'CHARACTER SET '.$charset;
}




public function getDateTimeTypeDeclarationSql(array $fieldDeclaration)
{
if($fieldDeclaration['version']){
return 'TIMESTAMP';
}else{
return 'DATETIME';
}
}




public function getDateTypeDeclarationSql(array $fieldDeclaration)
{
return 'DATE';
}




public function getBooleanTypeDeclarationSql(array $field)
{
return 'TINYINT(1)';
}









public function getCollationFieldDeclaration($collation)
{
return 'COLLATE '.$collation;
}









public function prefersIdentityColumns()
{
return true;
}








public function supportsIdentityColumns()
{
return true;
}







public function supportsSavepoints()
{
return false;
}

public function getShowDatabasesSql()
{
return 'SHOW DATABASES';
}

public function getListTablesSql()
{
return 'SHOW TABLES';
}

public function getListTableColumnsSql($table)
{
return 'DESCRIBE '.$table;
}








public function getCreateDatabaseSql($name)
{
return 'CREATE DATABASE '.$name;
}








public function getDropDatabaseSql($name)
{
return 'DROP DATABASE '.$name;
}




































public function getCreateTableSql($name,array $fields,array $options=array())
{
if(!$name){
throw DoctrineException::missingTableName();
}
if(empty($fields)){
throw DoctrineException::missingFieldsArrayForTable($name);
}
$queryFields=$this->getColumnDeclarationListSql($fields);

if(isset($options['uniqueConstraints'])&&!empty($options['uniqueConstraints'])){
foreach($options['uniqueConstraints']as $uniqueConstraint){
$queryFields.=', UNIQUE('.implode(', ',array_values($uniqueConstraint)).')';
}
}


if(isset($options['indexes'])&&!empty($options['indexes'])){
foreach($options['indexes']as $index=>$definition){
$queryFields.=', '.$this->getIndexDeclarationSql($index,$definition);
}
}


if(isset($options['primary'])&&!empty($options['primary'])){
$keyColumns=array_unique(array_values($options['primary']));
$queryFields.=', PRIMARY KEY('.implode(', ',$keyColumns).')';
}

$query='CREATE ';
if(!empty($options['temporary'])){
$query.='TEMPORARY ';
}
$query.='TABLE '.$name.' ('.$queryFields.')';

$optionStrings=array();

if(isset($options['comment'])){
$optionStrings['comment']='COMMENT = '.$this->quote($options['comment'],'text');
}
if(isset($options['charset'])){
$optionStrings['charset']='DEFAULT CHARACTER SET '.$options['charset'];
if(isset($options['collate'])){
$optionStrings['charset'].=' COLLATE '.$options['collate'];
}
}


if(isset($options['engine'])){
$optionStrings[]='ENGINE = '.$options['engine'];
}else{


$optionStrings[]='ENGINE = MyISAM';
}

if(!empty($optionStrings)){
$query.=' '.implode(' ',$optionStrings);
}
$sql[]=$query;

if(isset($options['foreignKeys'])){
foreach((array)$options['foreignKeys']as $k=>$definition){
if(is_array($definition)){
$sql[]=$this->getCreateForeignKeySql($name,$definition);
}
}
}

return $sql;
}
































public function getColumnDeclarationSql($name,array $field)
{
$default=$this->getDefaultValueDeclarationSql($field);

$charset=(isset($field['charset'])&&$field['charset'])?
' '.$this->getColumnCharsetDeclarationSql($field['charset']):'';

$collation=(isset($field['collation'])&&$field['collation'])?
' '.$this->getColumnCollationDeclarationSql($field['collation']):'';

$notnull=(isset($field['notnull'])&&$field['notnull'])?' NOT NULL':'';

$unique=(isset($field['unique'])&&$field['unique'])?
' '.$this->getUniqueFieldDeclarationSql():'';

$check=(isset($field['check'])&&$field['check'])?
' '.$field['check']:'';

$typeDecl=Type::getType($field['type'])->getSqlDeclaration($field,$this);

return '`'.$name.'` '.$typeDecl.$charset.$default.$notnull.$unique.$check.$collation;
}


























































































public function getAlterTableSql($name,array $changes,$check=false)
{
if(!$name){
throw DoctrineException::missingTableName();
}

foreach($changes as $changeName=>$change){
switch($changeName){
case 'add':
case 'remove':
case 'change':
case 'rename':
case 'name':
break;
default:
throw DoctrineException::alterTableChangeNotSupported($changeName);
}
}

if($check){
return true;
}

$query='';
if(!empty($changes['name'])){
$query.='RENAME TO '.$changes['name'];
}

if(!empty($changes['add'])&&is_array($changes['add'])){
foreach($changes['add']as $fieldName=>$field){
if($query){
$query.=', ';
}
$query.='ADD '.$this->getColumnDeclarationSql($fieldName,$field);
}
}

if(!empty($changes['remove'])&&is_array($changes['remove'])){
foreach($changes['remove']as $fieldName=>$field){
if($query){
$query.=', ';
}
$query.='DROP '.$fieldName;
}
}

$rename=array();
if(!empty($changes['rename'])&&is_array($changes['rename'])){
foreach($changes['rename']as $fieldName=>$field){
$rename[$field['name']]=$fieldName;
}
}

if(!empty($changes['change'])&&is_array($changes['change'])){
foreach($changes['change']as $fieldName=>$field){
if($query){
$query.=', ';
}
if(isset($rename[$fieldName])){
$oldFieldName=$rename[$fieldName];
unset($rename[$fieldName]);
}else{
$oldFieldName=$fieldName;
}
$query.='CHANGE '.$oldFieldName.' '
.$this->getColumnDeclarationSql($fieldName,$field['definition']);
}
}

if(!empty($rename)&&is_array($rename)){
foreach($rename as $renameName=>$renamedField){
if($query){
$query.=', ';
}
$field=$changes['rename'][$renamedField];
$query.='CHANGE '.$renamedField.' '
.$this->getColumnDeclarationSql($field['name'],$field['definition']);
}
}

if(!$query){
return false;
}

return 'ALTER TABLE '.$name.' '.$query;
}



























public function getIntegerTypeDeclarationSql(array $field)
{
return 'INT'.$this->_getCommonIntegerTypeDeclarationSql($field);
}


public function getBigIntTypeDeclarationSql(array $field)
{
return 'BIGINT'.$this->_getCommonIntegerTypeDeclarationSql($field);
}


public function getSmallIntTypeDeclarationSql(array $field)
{
return 'SMALLINT'.$this->_getCommonIntegerTypeDeclarationSql($field);
}


protected function _getCommonIntegerTypeDeclarationSql(array $columnDef)
{
$length='';
if(isset($columnDef['length'])){
$length='('.$columnDef['length'].')';
}
$autoinc='';
if(!empty($columnDef['autoincrement'])){
$autoinc=' AUTO_INCREMENT';
}
$unsigned=(isset($columnDef['unsigned'])&&$columnDef['unsigned'])?' UNSIGNED':'';

return $length.$unsigned.$autoinc;
}











public function getIndexDeclarationSql($name,array $definition)
{
$type='';
if(isset($definition['type'])){
switch(strtolower($definition['type'])){
case 'fulltext':
$type='FULLTEXT KEY';
break;
case 'unique':
$type='UNIQUE INDEX';
break;
case 'key':
$type='KEY';
break;
default:
throw DoctrineException::invalidIndexType($definition['type']);
}
}

if(!isset($definition['fields'])){
throw DoctrineException::indexFieldsArrayRequired();
}
if(!is_array($definition['fields'])){
$definition['fields']=array($definition['fields']);
}

$query=$type.' `'.$name.'`';

$query.=' ('.$this->getIndexFieldDeclarationListSql($definition['fields']).')';

return $query;
}








public function getIndexFieldDeclarationListSql(array $fields)
{
$declFields=array();

foreach($fields as $fieldName=>$field){
$fieldString='`'.$fieldName.'`';

if(is_array($field)){
if(isset($field['length'])){
$fieldString.='('.$field['length'].')';
}

if(isset($field['sorting'])){
$sort=strtoupper($field['sorting']);
switch($sort){
case 'ASC':
case 'DESC':
$fieldString.=' '.$sort;
break;
default:
throw DoctrineException::unknownIndexSortingOption($sort);
}
}
}else{
$fieldString='`'.$field.'`';
}
$declFields[]=$fieldString;
}
return implode(', ',$declFields);
}









public function getAdvancedForeignKeyOptionsSql(array $definition)
{
$query='';
if(!empty($definition['match'])){
$query.=' MATCH '.$definition['match'];
}
if(!empty($definition['onUpdate'])){
$query.=' ON UPDATE '.$this->getForeignKeyReferentialActionSql($definition['onUpdate']);
}
if(!empty($definition['onDelete'])){
$query.=' ON DELETE '.$this->getForeignKeyReferentialActionSql($definition['onDelete']);
}
return $query;
}








public function getDropIndexSql($table,$name)
{
return 'DROP INDEX '.$name.' ON '.$table;
}







public function getDropTableSql($table)
{
return 'DROP TABLE '.$table;
}

public function getSetTransactionIsolationSql($level)
{
return 'SET SESSION TRANSACTION ISOLATION LEVEL '.$this->_getTransactionIsolationLevelSql($level);
}






public function getName()
{
return 'mysql';
}
}
