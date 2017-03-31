<?php






class StringType extends Type
{

public function getSqlDeclaration(array $fieldDeclaration,AbstractPlatform $platform)
{
return $platform->getVarcharTypeDeclarationSql($fieldDeclaration);
}


public function getDefaultLength(AbstractPlatform $platform)
{
return $platform->getVarcharDefaultLength();
}


public function getName()
{
return 'string';
}
}

?>
