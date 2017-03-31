<?php






class FloatType extends Type
{
public function getName()
{
return 'Float';
}

public function getSqlDeclaration(array $fieldDeclaration,AbstractPlatform $platform)
{
return $platform->getFloatTypeDeclarationSql($fieldDeclaration);
}

public function convertToPHPValue($value,AbstractPlatform $platform)
{
return(double)$value;
}
}

?>
