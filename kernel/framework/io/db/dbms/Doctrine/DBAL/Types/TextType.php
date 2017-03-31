<?php






class TextType extends Type
{

public function getSqlDeclaration(array $fieldDeclaration,AbstractPlatform $platform)
{
return $platform->getClobTypeDeclarationSql($fieldDeclaration);
}

public function getName()
{
return 'text';
}
}

?>
