<?php






class TimeType extends Type
{
public function getName()
{
return 'Time';
}




public function getSqlDeclaration(array $fieldDeclaration,AbstractPlatform $platform)
{
return $platform->getTimeTypeDeclarationSql($fieldDeclaration);
}






public function convertToDatabaseValue($value,AbstractPlatform $platform)
{
return($value!==null)
?$value->format($platform->getTimeFormatString()):null;
}






public function convertToPHPValue($value,AbstractPlatform $platform)
{
return($value!==null)
?\DateTime::createFromFormat($platform->getTimeFormatString(),$value):null;
}
}

?>
