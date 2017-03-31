<?php






class BooleanType extends Type
{
public function getSqlDeclaration(array $fieldDeclaration,AbstractPlatform $platform)
{
return $platform->getBooleanTypeDeclarationSql($fieldDeclaration);
}

public function convertToDatabaseValue($value,AbstractPlatform $platform)
{
return $platform->convertBooleans($value);
}

public function convertToPHPValue($value,AbstractPlatform $platform)
{
return(bool)$value;
}

public function getName()
{
return 'boolean';
}
}

?>
