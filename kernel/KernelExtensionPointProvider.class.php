<?php


























class KernelExtensionPointProvider extends ExtensionPointProvider
{
public function __construct()
{
parent::__construct('kernel');
}

public function commands()
{
return new CLICommandsList(array('help'=>'CLIHelpCommand','cache'=>'CLICacheCommand','htaccess'=>'CLIHtaccessCommand'));
}

public function url_mappings()
{
return new UrlMappings(array(
new DispatcherUrlMapping('/admin/cache/index.php'),
new DispatcherUrlMapping('/admin/config/index.php'),
new DispatcherUrlMapping('/admin/content/index.php'),
new DispatcherUrlMapping('/admin/errors/index.php'),
new DispatcherUrlMapping('/admin/files/index.php'),
new DispatcherUrlMapping('/admin/langs/index.php'),
new DispatcherUrlMapping('/admin/maintain/index.php'),
new DispatcherUrlMapping('/admin/member/index.php'),
new DispatcherUrlMapping('/admin/modules/index.php'),
new DispatcherUrlMapping('/admin/server/index.php'),
new DispatcherUrlMapping('/admin/smileys/index.php'),
new DispatcherUrlMapping('/admin/themes/index.php'),
new DispatcherUrlMapping('/syndication/index.php')
));
}

public function extended_field()
{
return new ExtendedFields(array(
new MemberShortTextExtendedField(),
new MemberHalfLongTextExtendedField(),
new MemberLongTextExtendedField(),
new MemberSimpleSelectExtendedField(),
new MemberMultipleSelectExtendedField(),
new MemberSimpleChoiceExtendedField(),
new MemberMultipleChoiceExtendedField(),
new MemberDateExtendedField(),
new MemberUserAvatarExtendedField(),
new MemberUserBornExtendedField(),
new MemberUserPMToMailExtendedField(),
new MemberUserSexExtendedField()
));
}
}
?>
