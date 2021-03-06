<?php






class ArrayType extends Type
{
public function getSqlDeclaration(array $fieldDeclaration,AbstractPlatform $platform)
{
return $platform->getClobDeclarationSql($fieldDeclaration);
}

public function convertToDatabaseValue($value,AbstractPlatform $platform)
{
return serialize($value);
}

public function convertToPHPValue($value,AbstractPlatform $platform)
{
return unserialize($value);
}

public function getName()
{
return 'Array';
}
}

?>
