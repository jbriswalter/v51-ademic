<?php $_result='';if ($_data->is_true($_data->get('C_ANY_MESSAGE_GUESTBOOK'))){$_result.='
<p>';if ($_data->is_true($_data->get('C_HORIZONTAL'))){$_result.='' . $_data->get('CONTENTS') . '';}else{$_result.='' . $_data->get('SHORT_CONTENTS') . '';if ($_data->is_true($_data->get('C_MORE_CONTENTS'))){$_result.='... <a href="' . $_data->get('U_MESSAGE') . '" class="small">[' . LangLoader::get_message('read-more', 'common') . ']</a>';}$_result.='';}$_result.='</p>
<p class="small">' . LangLoader::get_message('by', 'common') . ' ';if ($_data->is_true($_data->get('C_VISITOR'))){$_result.='<span class="text-italic">';if ($_data->is_true($_data->get('USER_PSEUDO'))){$_result.='' . $_data->get('USER_PSEUDO') . '';}else{$_result.='' . LangLoader::get_message('visitor', 'user-common') . '';}$_result.='</span>';}else{$_result.='<a href="' . $_data->get('U_PROFILE') . '" class="' . $_data->get('USER_LEVEL_CLASS') . '" ';if ($_data->is_true($_data->get('C_USER_GROUP_COLOR'))){$_result.=' style="color:' . $_data->get('USER_GROUP_COLOR') . '" ';}$_result.='>' . $_data->get('USER_PSEUDO') . '</a>';}$_result.='</p>
';}else{$_result.='
<p>' . LangLoader::get_message('no_item_now', 'common') . '</p>
';}$_result.='
<a class="small" href="' . $_data->get('U_GUESTBOOK') . '">' . $_functions->i18n('module_title') . '</a>
'; ?>