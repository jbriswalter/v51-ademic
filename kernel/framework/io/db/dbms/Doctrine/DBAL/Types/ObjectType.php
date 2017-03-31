<?php






class ObjectType extends Type
{
public function getSqlDeclaration(array $fieldDeclaration,AbstractPlatform $platform)
{
return $platform->getClobTypeDeclarationSql($fieldDeclaration);
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
return 'Object';
}
}

?>
