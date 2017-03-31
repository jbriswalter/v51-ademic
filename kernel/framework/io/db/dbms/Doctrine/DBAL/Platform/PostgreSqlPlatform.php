<?php



























class PostgreSqlPlatform extends AbstractPlatform
{




public function __construct()
{
parent::__construct();
}





















public function getMd5Expression($column)
{
if($this->_version>7){
return 'MD5('.$column.')';
}else{
return 'encode(digest('.$column.', md5), hex)';
}
}












public function getSubstringExpression($value,$from,$len=null)
{
if($len===null){
return 'SUBSTR('.$value.', '.$from.')';
}else{
return 'SUBSTR('.$value.', '.$from.', '.$len.')';
}
}








public function getAgeExpression($timestamp1,$timestamp2=null)
{
if($timestamp2==null){
return 'AGE('.$timestamp1.')';
}
return 'AGE('.$timestamp1.', '.$timestamp2.')';
}








public function getDatePartExpression($text,$time)
{
return 'DATE_PART('.$text.', '.$time.')';
}








public function getToCharExpression($time,$text)
{
return 'TO_CHAR('.$time.', '.$text.')';
}






public function getNowExpression()
{
return 'LOCALTIMESTAMP(0)';
}







public function getRegexpExpression()
{
return 'SIMILAR TO';
}








public function getRandomExpression()
{
return 'RANDOM()';
}



















public function getMatchPatternExpression($pattern,$operator=null,$field=null)
{
$match='';
if(!is_null($operator)){
$field=is_null($field)?'':$field.' ';
$operator=strtoupper($operator);
switch($operator){

case 'ILIKE':
$match=$field.'ILIKE ';
break;

case 'LIKE':
$match=$field.'LIKE ';
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



















public function supportsSequences()
{
return true;
}






public function supportsSchemas()
{
return true;
}







public function supportsIdentityColumns()
{
return true;
}






public function prefersSequences()
{
return true;
}

public function getListDatabasesSql()
{
return 'SELECT datname FROM pg_database';
}

public function getListFunctionsSql()
{
return "SELECT
                    proname
                FROM
                    pg_proc pr, pg_type tp
                WHERE
                    tp.oid = pr.prorettype
                AND pr.proisagg = FALSE
                AND tp.typname <> 'trigger'
                AND pr.pronamespace IN
                    (SELECT oid FROM pg_namespace
                    WHERE nspname NOT LIKE 'pg_%' AND nspname != 'information_schema'";
}

public function getListSequencesSql($database)
{
return "SELECT
                    relname
                FROM
                   pg_class
                WHERE relkind = 'S' AND relnamespace IN
                    (SELECT oid FROM pg_namespace
                        WHERE nspname NOT LIKE 'pg_%' AND nspname != 'information_schema')";
}

public function getListTablesSql()
{
return "SELECT
                    c.relname AS table_name
                FROM pg_class c, pg_user u
                WHERE c.relowner = u.usesysid
                    AND c.relkind = 'r'
                    AND NOT EXISTS (SELECT 1 FROM pg_views WHERE viewname = c.relname)
                    AND c.relname !~ '^(pg_|sql_)'
                UNION
                SELECT c.relname AS table_name
                FROM pg_class c
                WHERE c.relkind = 'r'
                    AND NOT EXISTS (SELECT 1 FROM pg_views WHERE viewname = c.relname)
                    AND NOT EXISTS (SELECT 1 FROM pg_user WHERE usesysid = c.relowner)
                    AND c.relname !~ '^pg_'";
}

public function getListViewsSql()
{
return 'SELECT viewname, definition FROM pg_views';
}

public function getListTriggersSql($table=null)
{
$sql='SELECT trg.tgname AS trigger_name
                    FROM pg_trigger trg,
                         pg_class tbl
                   WHERE trg.tgrelid = tbl.oid';

if(!is_null($table)){
$sql.=" AND tbl.relname = ".$table;
}

return $sql;
}

public function getListUsersSql()
{
return 'SELECT usename, passwd FROM pg_user';
}

public function getListTableForeignKeysSql($table,$database=null)
{
return "SELECT pg_catalog.pg_get_constraintdef(oid, true) as condef
                  FROM pg_catalog.pg_constraint r
                  WHERE r.conrelid =
                  (
                      SELECT c.oid
                      FROM pg_catalog.pg_class c
                      LEFT JOIN pg_catalog.pg_namespace n ON n.oid = c.relnamespace
                      WHERE c.relname = '".$table."' AND pg_catalog.pg_table_is_visible(c.oid)
                  )
                  AND r.contype = 'f'";
}

public function getCreateViewSql($name,$sql)
{
return 'CREATE VIEW '.$name.' AS '.$sql;
}

public function getDropViewSql($name)
{
return 'DROP VIEW '.$name;
}

public function getListTableConstraintsSql($table)
{
return "SELECT
                    relname
                FROM
                    pg_class
                WHERE oid IN (
                    SELECT indexrelid
                    FROM pg_index, pg_class
                    WHERE pg_class.relname = '$table'
                        AND pg_class.oid = pg_index.indrelid
                        AND (indisunique = 't' OR indisprimary = 't')
                        )";
}

public function getListTableIndexesSql($table)
{
return "SELECT
                    relname,
                    (
                        SELECT indisunique
                        FROM pg_index
                        WHERE oid = indexrelid
                    ) as unique
                FROM
                    pg_class
                WHERE oid IN (
                    SELECT indexrelid
                    FROM pg_index, pg_class
                    WHERE pg_class.relname = '$table'
                        AND pg_class.oid=pg_index.indrelid
                        AND indisprimary != 't'
                )";
}

public function getListTableColumnsSql($table)
{
return "SELECT
                    a.attnum,
                    a.attname AS field,
                    t.typname AS type,
                    format_type(a.atttypid, a.atttypmod) AS complete_type,
                    a.attnotnull AS isnotnull,
                    (SELECT 't'
                     FROM pg_index
                     WHERE c.oid = pg_index.indrelid
                        AND pg_index.indkey[0] = a.attnum
                        AND pg_index.indisprimary = 't'
                    ) AS pri,
                    (SELECT pg_attrdef.adsrc
                     FROM pg_attrdef
                     WHERE c.oid = pg_attrdef.adrelid
                        AND pg_attrdef.adnum=a.attnum
                    ) AS default
                    FROM pg_attribute a, pg_class c, pg_type t
                    WHERE c.relname = '$table'
                        AND a.attnum > 0
                        AND a.attrelid = c.oid
                        AND a.atttypid = t.oid
                    ORDER BY a.attnum";
}









public function getCreateDatabaseSql($name)
{
return 'CREATE DATABASE '.$name;
}








public function getDropDatabaseSql($name)
{
return 'DROP DATABASE '.$name;
}










public function getAdvancedForeignKeyOptionsSql(array $definition)
{
$query='';
if(isset($definition['match'])){
$query.=' MATCH '.$definition['match'];
}
if(isset($definition['onUpdate'])){
$query.=' ON UPDATE '.$definition['onUpdate'];
}
if(isset($definition['onDelete'])){
$query.=' ON DELETE '.$definition['onDelete'];
}
if(isset($definition['deferrable'])){
$query.=' DEFERRABLE';
}else{
$query.=' NOT DEFERRABLE';
}
if(isset($definition['feferred'])){
$query.=' INITIALLY DEFERRED';
}else{
$query.=' INITIALLY IMMEDIATE';
}
return $query;
}













public function getAlterTableSql($name,array $changes,$check=false)
{
foreach($changes as $changeName=>$change){
switch($changeName){
case 'add':
case 'remove':
case 'change':
case 'name':
case 'rename':
break;
default:
throw DoctrineException::alterTableChangeNotSupported($changeName);
}
}

if($check){
return true;
}

$sql=array();

if(isset($changes['add'])&&is_array($changes['add'])){
foreach($changes['add']as $fieldName=>$field){
$query='ADD '.$this->getColumnDeclarationSql($fieldName,$field);
$sql[]='ALTER TABLE '.$name.' '.$query;
}
}

if(isset($changes['remove'])&&is_array($changes['remove'])){
foreach($changes['remove']as $fieldName=>$field){
$query='DROP '.$fieldName;
$sql[]='ALTER TABLE '.$name.' '.$query;
}
}

if(isset($changes['change'])&&is_array($changes['change'])){
foreach($changes['change']as $fieldName=>$field){
if(isset($field['type'])){
$serverInfo=$this->getServerVersion();

if(is_array($serverInfo)&&$serverInfo['major']<8){
throw DoctrineException::changeColumnRequiresPostgreSQL8OrAbove($field['type']);
}
$query='ALTER '.$fieldName.' TYPE '.$this->getTypeDeclarationSql($field['definition']);
$sql[]='ALTER TABLE '.$name.' '.$query;
}
if(array_key_exists('default',$field)){
$query='ALTER '.$fieldName.' SET DEFAULT '.$this->quote($field['definition']['default'],$field['definition']['type']);
$sql[]='ALTER TABLE '.$name.' '.$query;
}
if(!empty($field['notnull'])){
$query='ALTER '.$fieldName.' '.($field['definition']['notnull']?'SET':'DROP').' NOT NULL';
$sql[]='ALTER TABLE '.$name.' '.$query;
}
}
}

if(isset($changes['rename'])&&is_array($changes['rename'])){
foreach($changes['rename']as $fieldName=>$field){
$sql[]='ALTER TABLE '.$name.' RENAME COLUMN '.$fieldName.' TO '.$field['name'];
}
}

if(isset($changes['name'])){
$sql[]='ALTER TABLE '.$name.' RENAME TO '.$changes['name'];
}

return $sql;
}







public function getCreateSequenceSql($sequenceName,$start=1,$allocationSize=1)
{
return 'CREATE SEQUENCE '.$sequenceName
.' INCREMENT BY '.$allocationSize.' START '.$start;
}







public function getDropSequenceSql($sequenceName)
{
return 'DROP SEQUENCE '.$sequenceName;
}









public function getCreateTableSql($name,array $fields,array $options=array())
{

$sql=array();
if(isset($options['primary'])&&count($options['primary'])===1){
$pk_name=$options['primary'][0];
if(isset($fields[$pk_name])&&isset($fields[$pk_name]['autoincrement'])&&
$fields[$pk_name]['autoincrement']){
$seq_name=$name.'_pk_seq';
$sql[]='CREATE SEQUENCE '.$seq_name;
$fields[$pk_name]['nextval']='nextval(\''.$seq_name.'\')';



$fields[$pk_name]['autoincrement']=false;
}
}


$queryFields=$this->getColumnDeclarationListSql($fields);

if(isset($options['primary'])&&!empty($options['primary'])){
$keyColumns=array_unique(array_values($options['primary']));
$queryFields.=', PRIMARY KEY('.implode(', ',$keyColumns).')';
}

$query='CREATE TABLE '.$name.' ('.$queryFields.')';

$sql[]=$query;

if(isset($options['indexes'])&&!empty($options['indexes'])){
foreach($options['indexes']as $index=>$definition){
$sql[]=$this->getCreateIndexSql($name,$index,$definition);
}
}

if(isset($options['foreignKeys'])){
foreach((array)$options['foreignKeys']as $k=>$definition){
if(is_array($definition)){
$sql[]=$this->getCreateForeignKeySql($name,$definition);
}
}
}

return $sql;
}







public function convertBooleans($item)
{
if(is_array($item)){
foreach($item as $key=>$value){
if(is_bool($value)|| is_numeric($item)){
$item[$key]=($value)?'true':'false';
}
}
}else{
if(is_bool($item)|| is_numeric($item)){
$item=($item)?'true':'false';
}
}
return $item;
}

public function getSequenceNextValSql($sequenceName)
{
return "SELECT NEXTVAL('".$sequenceName."')";
}

public function getSetTransactionIsolationSql($level)
{
return 'SET SESSION CHARACTERISTICS AS TRANSACTION ISOLATION LEVEL '
.$this->_getTransactionIsolationLevelSql($level);
}




public function getBooleanTypeDeclarationSql(array $field)
{
return 'BOOLEAN';
}




public function getIntegerTypeDeclarationSql(array $field)
{
if(!empty($field['autoincrement'])){
return 'SERIAL';
}

elseif(!empty($field['nextval'])){
return 'integer DEFAULT '.$field['nextval'];
}


return 'INT';
}





public function getDefaultValueDeclarationSql($field)
{
if(!empty($field['nextval'])){
return ' NOT NULL';
}else{
return parent::getDefaultValueDeclarationSql($field);
}
}





public function getBigIntTypeDeclarationSql(array $field)
{
if(!empty($field['autoincrement'])){
return 'BIGSERIAL';
}
return 'BIGINT';
}




public function getSmallIntTypeDeclarationSql(array $field)
{
return 'SMALLINT';
}




public function getDateTimeTypeDeclarationSql(array $fieldDeclaration)
{
return 'TIMESTAMP(0) WITH TIME ZONE';
}




public function getDateTypeDeclarationSql(array $fieldDeclaration)
{
return 'DATE';
}




protected function _getCommonIntegerTypeDeclarationSql(array $columnDef)
{
return '';
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
return 'TEXT';
}






public function getName()
{
return 'postgresql';
}









public function getSqlResultCasing($column)
{
return strtolower($column);
}

public function getDateTimeFormatString()
{
return 'Y-m-d H:i:sO';
}








public function getEmptyIdentityInsertSql($quotedTableName,$quotedIdentifierColumnName)
{
return 'INSERT INTO '.$quotedTableName.' ('.$quotedIdentifierColumnName.') VALUES (DEFAULT)';
}
}
