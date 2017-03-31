<?php






class DecimalType extends Type
{
public function getName()
{
return 'Decimal';
}

public function getSqlDeclaration(array $fieldDeclaration,AbstractPlatform $platform)
{
return $platform->getDecimalTypeDeclarationSql($fieldDeclaration);
}

public function convertToPHPValue($value,AbstractPlatform $platform)
{
return(double)$value;
}
}

?>
