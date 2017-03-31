<?php


































abstract class AbstractPlatform
{



public function __construct(){}






public function getIdentifierQuoteCharacter()
{
return '"';
}






public function getSqlCommentStartString()
{
return "--";
}






public function getSqlCommentEndString()
{
return "\n";
}






public function getVarcharMaxLength()
{
return 255;
}






public function getWildcards()
{
return array('%','_');
}






public function getRegexpExpression()
{
throw DoctrineException::regularExpressionOperatorNotSupported($this);
}







public function getAvgExpression($column)
{
return 'AVG('.$column.')';
}










public function getCountExpression($column)
{
return 'COUNT('.$column.')';
}







public function getMaxExpression($column)
{
return 'MAX('.$column.')';
}







public function getMinExpression($column)
{
return 'MIN('.$column.')';
}







public function getSumExpression($column)
{
return 'SUM('.$column.')';
}










public function getMd5Expression($column)
{
return 'MD5('.$column.')';
}








public function getLengthExpression($column)
{
return 'LENGTH('.$column.')';
}








public function getRoundExpression($column,$decimals=0)
{
return 'ROUND('.$column.', '.$decimals.')';
}









public function getModExpression($expression1,$expression2)
{
return 'MOD('.$expression1.', '.$expression2.')';
}








public function getTrimExpression($str)
{
return 'TRIM('.$str.')';
}








public function getRtrimExpression($str)
{
return 'RTRIM('.$str.')';
}








public function getLtrimExpression($str)
{
return 'LTRIM('.$str.')';
}









public function getUpperExpression($str)
{
return 'UPPER('.$str.')';
}









public function getLowerExpression($str)
{
return 'LOWER('.$str.')';
}









public function getLocateExpression($str,$substr)
{
return 'LOCATE('.$str.', '.$substr.')';
}






public function getNowExpression()
{
return 'NOW()';
}













public function getSubstringExpression($value,$from,$len=null)
{
if($len===null)
return 'SUBSTRING('.$value.' FROM '.$from.')';
else{
return 'SUBSTRING('.$value.' FROM '.$from.' FOR '.$len.')';
}
}










public function getConcatExpression()
{
return join(' || ',func_get_args());
}














public function getNotExpression($expression)
{
return 'NOT('.$expression.')';
}














public function getInExpression($column,$values)
{
if(!is_array($values)){
$values=array($values);
}
$values=$this->getIdentifiers($values);

if(count($values)==0){
throw DoctrineException::valuesArrayForInOperatorInvalid();
}
return $column.' IN ('.implode(', ',$values).')';
}







public function getIsNullExpression($expression)
{
return $expression.' IS NULL';
}







public function getIsNotNullExpression($expression)
{
return $expression.' IS NOT NULL';
}
















public function getBetweenExpression($expression,$value1,$value2)
{
return $expression.' BETWEEN '.$value1.' AND '.$value2;
}

public function getAcosExpression($value)
{
return 'ACOS('.$value.')';
}

public function getSinExpression($value)
{
return 'SIN('.$value.')';
}

public function getPiExpression()
{
return 'PI()';
}

public function getCosExpression($value)
{
return 'COS('.$value.')';
}

public function getForUpdateSql()
{
return 'FOR UPDATE';
}

public function getDropDatabaseSql($database)
{
return 'DROP DATABASE '.$database;
}

public function getDropTableSql($table)
{
return 'DROP TABLE '.$table;
}

public function getDropIndexSql($table,$name)
{
return 'DROP INDEX '.$name;
}

public function getDropConstraintSql($table,$name,$primary=false)
{
return 'ALTER TABLE '.$table.' DROP CONSTRAINT '.$name;
}

public function getDropForeignKeySql($table,$name)
{
return 'ALTER TABLE '.$table.' DROP FOREIGN KEY '.$name;
}










public function getCreateTableSql($table,array $columns,array $options=array())
{
$columnListSql=$this->getColumnDeclarationListSql($columns);

if(isset($options['uniqueConstraints'])&&!empty($options['uniqueConstraints'])){
foreach($options['uniqueConstraints']as $uniqueConstraint){
$columnListSql.=', UNIQUE('.implode(', ',array_values($uniqueConstraint)).')';
}
}

if(isset($options['primary'])&&!empty($options['primary'])){
$columnListSql.=', PRIMARY KEY('.implode(', ',array_unique(array_values($options['primary']))).')';
}

if(isset($options['indexes'])&&!empty($options['indexes'])){
foreach($options['indexes']as $index=>$definition){
$columnListSql.=', '.$this->getIndexDeclarationSql($index,$definition);
}
}

$query='CREATE TABLE '.$table.' ('.$columnListSql;

$check=$this->getCheckDeclarationSql($columns);
if(!empty($check)){
$query.=', '.$check;
}
$query.=')';

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

public function getCreateTemporaryTableSnippetSql()
{
return "CREATE TEMPORARY TABLE";
}










public function getCreateSequenceSql($sequenceName,$start=1,$allocationSize=1)
{
throw DoctrineException::createSequenceNotSupported($this);
}






















public function getCreateConstraintSql($table,$name,$definition)
{
$query='ALTER TABLE '.$table.' ADD CONSTRAINT '.$name;

if(isset($definition['primary'])&&$definition['primary']){
$query.=' PRIMARY KEY';
}elseif(isset($definition['unique'])&&$definition['unique']){
$query.=' UNIQUE';
}

$fields=array();
foreach(array_keys($definition['fields'])as $field){
$fields[]=$field;
}
$query.=' ('.implode(', ',$fields).')';

return $query;
}









public function getCreateIndexSql($table,$name,array $definition)
{
if(!isset($definition['fields'])){
throw DoctrineException::indexFieldsArrayRequired();
}

$type='';
if(isset($definition['type'])){
switch(strtolower($definition['type'])){
case 'unique':
$type=strtoupper($definition['type']).' ';
break;
default:
throw DoctrineException::unknownIndexType($definition['type']);
}
}

$query='CREATE '.$type.'INDEX '.$name.' ON '.$table;

$query.=' ('.$this->getIndexFieldDeclarationListSql($definition['fields']).')';

return $query;
}












public function quoteIdentifier($str)
{
$c=$this->getIdentifierQuoteCharacter();

return $c.$str.$c;
}








public function getCreateForeignKeySql($table,array $definition)
{
$query='ALTER TABLE '.$table.' ADD '.$this->getForeignKeyDeclarationSql($definition);

return $query;
}












public function getAlterTableSql($name,array $changes,$check=false)
{
throw DoctrineException::alterTableNotSupported($this);
}






























public function getColumnDeclarationListSql(array $fields)
{
$queryFields=array();
foreach($fields as $fieldName=>$field){
$query=$this->getColumnDeclarationSql($fieldName,$field);
$queryFields[]=$query;
}
return implode(', ',$queryFields);
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

return $name.' '.$typeDecl.$charset.$default.$notnull.$unique.$check.$collation;
}







public function getDecimalTypeDeclarationSql(array $columnDef)
{
$columnDef['precision']=(!isset($columnDef['precision'])|| empty($columnDef['precision']))
?((!isset($columnDef['length'])|| empty($columnDef['length']))?10:$columnDef['length'])
:$columnDef['precision'];
$columnDef['scale']=(!isset($columnDef['scale'])|| empty($columnDef['scale']))
?0:$columnDef['scale'];

return 'NUMERIC('.$columnDef['precision'].', '.$columnDef['scale'].')';
}

public function getFloatTypeDeclarationSql(array $fieldDeclaration)
{
return 'DOUBLE PRECISION';
}







abstract public function getBooleanTypeDeclarationSql(array $columnDef);







abstract public function getIntegerTypeDeclarationSql(array $columnDef);







abstract public function getBigIntTypeDeclarationSql(array $columnDef);







abstract public function getSmallIntTypeDeclarationSql(array $columnDef);







abstract protected function _getCommonIntegerTypeDeclarationSql(array $columnDef);








public function getDefaultValueDeclarationSql($field)
{
$default=empty($field['notnull'])?' DEFAULT NULL':'';

if(isset($field['default'])){
$default=' DEFAULT '.$field['default'];
}
return $default;
}








public function getCheckDeclarationSql(array $definition)
{
$constraints=array();
foreach($definition as $field=>$def){
if(is_string($def)){
$constraints[]='CHECK ('.$def.')';
}else{
if(isset($def['min'])){
$constraints[]='CHECK ('.$field.' >= '.$def['min'].')';
}

if(isset($def['max'])){
$constraints[]='CHECK ('.$field.' <= '.$def['max'].')';
}
}
}

return implode(', ',$constraints);
}









public function getIndexDeclarationSql($name,array $definition)
{
$type='';

if(isset($definition['type'])){
if(strtolower($definition['type'])=='unique'){
$type=strtoupper($definition['type']).' ';
}else{
throw DoctrineException::unknownIndexType($definition['type']);
}
}

if(!isset($definition['fields'])||!is_array($definition['fields'])){
throw DoctrineException::indexFieldsArrayRequired();
}

$query=$type.'INDEX '.$name;

$query.=' ('.$this->getIndexFieldDeclarationListSql($definition['fields']).')';

return $query;
}








public function getIndexFieldDeclarationListSql(array $fields)
{
$ret=array();
foreach($fields as $field=>$definition){
if(is_array($definition)){
$ret[]=$field;
}else{
$ret[]=$definition;
}
}
return implode(', ',$ret);
}















public function getTemporaryTableSql()
{
return 'TEMPORARY';
}






public function getShowDatabasesSql()
{
throw DoctrineException::showDatabasesNotSupported($this);
}











































public function getForeignKeyDeclarationSql(array $definition)
{
$sql=$this->getForeignKeyBaseDeclarationSql($definition);
$sql.=$this->getAdvancedForeignKeyOptionsSql($definition);

return $sql;
}








public function getAdvancedForeignKeyOptionsSql(array $definition)
{
$query='';
if(!empty($definition['onUpdate'])){
$query.=' ON UPDATE '.$this->getForeignKeyReferentialActionSql($definition['onUpdate']);
}
if(!empty($definition['onDelete'])){
$query.=' ON DELETE '.$this->getForeignKeyReferentialActionSql($definition['onDelete']);
}
return $query;
}









public function getForeignKeyReferentialActionSql($action)
{
$upper=strtoupper($action);
switch($upper){
case 'CASCADE':
case 'SET NULL':
case 'NO ACTION':
case 'RESTRICT':
case 'SET DEFAULT':
return $upper;
break;
default:
throw DoctrineException::unknownForeignKeyReferentialAction($upper);
}
}








public function getForeignKeyBaseDeclarationSql(array $definition)
{
$sql='';
if(isset($definition['name'])){
$sql.=' CONSTRAINT '.$definition['name'].' ';
}
$sql.='FOREIGN KEY (';

if(!isset($definition['local'])){
throw DoctrineException::localReferenceFieldMissing();
}
if(!isset($definition['foreign'])){
throw DoctrineException::foreignReferenceFieldMissing();
}
if(!isset($definition['foreignTable'])){
throw DoctrineException::foreignReferenceTableMissing();
}

if(!is_array($definition['local'])){
$definition['local']=array($definition['local']);
}
if(!is_array($definition['foreign'])){
$definition['foreign']=array($definition['foreign']);
}

$sql.=implode(', ',$definition['local'])
.') REFERENCES '
.$definition['foreignTable'].'('
.implode(', ',$definition['foreign']).')';

return $sql;
}








public function getUniqueFieldDeclarationSql()
{
return 'UNIQUE';
}









public function getColumnCharsetDeclarationSql($charset)
{
return '';
}









public function getColumnCollationDeclarationSql($collation)
{
return '';
}


















public function getMatchPatternExpression($pattern,$operator=null,$field=null)
{
throw DoctrineException::matchPatternExpressionNotSupported($this);
}







public function prefersSequences()
{
return false;
}







public function prefersIdentityColumns()
{
return false;
}












public function writeLimitClause($query,$limit=false,$offset=false)
{
$limit=(int)$limit;
$offset=(int)$offset;

if($limit&&$offset){
$query.=' LIMIT '.$limit.' OFFSET '.$offset;
}elseif($limit&&!$offset){
$query.=' LIMIT '.$limit;
}elseif(!$limit&&$offset){
$query.=' LIMIT 999999999999 OFFSET '.$offset;
}

return $query;
}







public function convertBooleans($item)
{
if(is_array($item)){
foreach($item as $k=>$value){
if(is_bool($value)){
$item[$k]=(int)$value;
}
}
}else if(is_bool($item)){
$item=(int)$item;
}
return $item;
}







public function getSetCharsetSql($charset)
{
return 'SET NAMES '.$this->quote($charset);
}






public function getCurrentDateSql()
{
return 'CURRENT_DATE';
}






public function getCurrentTimeSql()
{
return 'CURRENT_TIME';
}






public function getCurrentTimestampSql()
{
return 'CURRENT_TIMESTAMP';
}






protected function _getTransactionIsolationLevelSql($level)
{
switch($level){
case Connection::TRANSACTION_READ_UNCOMMITTED:
return 'READ UNCOMMITTED';
case Connection::TRANSACTION_READ_COMMITTED:
return 'READ COMMITTED';
case Connection::TRANSACTION_REPEATABLE_READ:
return 'REPEATABLE READ';
case Connection::TRANSACTION_SERIALIZABLE:
return 'SERIALIZABLE';
default:
throw DoctrineException::isolationLevelNotSupported($isolation);
}
}

public function getListDatabasesSql()
{
throw DoctrineException::listDatabasesNotSupported($this);
}

public function getListFunctionsSql()
{
throw DoctrineException::listFunctionsNotSupported($this);
}

public function getListTriggersSql($table=null)
{
throw DoctrineException::listTriggersNotSupported($this);
}

public function getListSequencesSql($database)
{
throw DoctrineException::listSequencesNotSupported($this);
}

public function getListTableConstraintsSql($table)
{
throw DoctrineException::listTableConstraintsNotSupported($this);
}

public function getListTableColumnsSql($table)
{
throw DoctrineException::listTableColumnsNotSupported($this);
}

public function getListTablesSql()
{
throw DoctrineException::listTablesNotSupported($this);
}

public function getListUsersSql()
{
throw DoctrineException::listUsersNotSupported($this);
}

public function getListViewsSql()
{
throw DoctrineException::listViewsNotSupported($this);
}

public function getListTableIndexesSql($table)
{
throw DoctrineException::listTableIndexesNotSupported($this);
}

public function getListTableForeignKeysSql($table)
{
throw DoctrineException::listTableForeignKeysNotSupported($this);
}

public function getCreateViewSql($name,$sql)
{
throw DoctrineException::createViewNotSupported($this);
}

public function getDropViewSql($name)
{
throw DoctrineException::dropViewNotSupported($this);
}

public function getDropSequenceSql($sequenceName)
{
throw DoctrineException::dropSequenceNotSupported($this);
}

public function getSequenceNextValSql($sequenceName)
{
throw DoctrineException::sequenceNotSupported($this);
}

public function getCreateDatabaseSql($database)
{
throw DoctrineException::createDatabaseNotSupported($this);
}






public function getSetTransactionIsolationSql($level)
{
throw DoctrineException::setTransactionIsolationLevelNotSupported($this);
}









public function getCharsetFieldDeclaration($charset)
{
throw DoctrineException::getCharsetFieldDeclarationNotSupported($this);
}








public function getDateTimeTypeDeclarationSql(array $fieldDeclaration)
{
throw DoctrineException::getDateTimeTypeDeclarationNotSupported($this);
}








public function getDateTypeDeclarationSql(array $fieldDeclaration)
{
throw DoctrineException::getDateTypeDeclarationNotSupported($this);
}







public function getDefaultTransactionIsolationLevel()
{
return Connection::TRANSACTION_READ_COMMITTED;
}








public function supportsSequences()
{
return false;
}








public function supportsIdentityColumns()
{
return false;
}






public function supportsIndexes()
{
return true;
}






public function supportsTransactions()
{
return true;
}






public function supportsSavepoints()
{
return true;
}






public function supportsPrimaryConstraints()
{
return true;
}






public function supportsForeignKeyConstraints()
{
return true;
}






public function supportsSchemas()
{
return false;
}







public function supportsGettingAffectedRows()
{
return true;
}

public function getIdentityColumnNullInsertSql()
{
return "";
}










public function getDateTimeFormatString()
{
return 'Y-m-d H:i:s';
}







public function getDateFormatString()
{
return 'Y-m-d';
}







public function getTimeFormatString()
{
return 'H:i:s';
}

public function modifyLimitQuery($query,$limit,$offset=null)
{
if(!is_null($offset)){
$query.=' OFFSET '.$offset;
}

if(!is_null($limit)){
$query.=' LIMIT '.$limit;
}

return $query;
}






abstract public function getVarcharTypeDeclarationSql(array $field);






abstract public function getClobTypeDeclarationSql(array $field);






abstract public function getName();







public function getSqlResultCasing($column)
{
return $column;
}








public function fixSchemaElementName($schemaElementName)
{
return $schemaElementName;
}








public function getEmptyIdentityInsertSql($tableName,$identifierColumnName)
{
return 'INSERT INTO '.$tableName.' ('.$identifierColumnName.') VALUES (null)';
}
}
