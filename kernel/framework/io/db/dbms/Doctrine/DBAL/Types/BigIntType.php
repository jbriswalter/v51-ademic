<?php







class BigIntType extends Type
{
public function getName()
{
return 'BigInteger';
}

public function getSqlDeclaration(array $fieldDeclaration,AbstractPlatform $platform)
{
return $platform->getBigIntTypeDeclarationSql($fieldDeclaration);
}

public function getTypeCode()
{
return self::CODE_INT;
}
}

?>
