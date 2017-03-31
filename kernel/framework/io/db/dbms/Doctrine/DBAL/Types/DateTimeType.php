<?php






class DateTimeType extends Type
{
public function getName()
{
return 'DateTime';
}

public function getSqlDeclaration(array $fieldDeclaration,AbstractPlatform $platform)
{
return $platform->getDateTimeTypeDeclarationSql($fieldDeclaration);
}

public function convertToDatabaseValue($value,AbstractPlatform $platform)
{
return($value!==null)
?$value->format($platform->getDateTimeFormatString()):null;
}

public function convertToPHPValue($value,AbstractPlatform $platform)
{
return($value!==null)
?DateTime::createFromFormat($platform->getDateTimeFormatString(),$value):null;
}
}

?>
