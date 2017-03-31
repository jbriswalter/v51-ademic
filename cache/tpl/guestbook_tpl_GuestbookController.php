<?php $_result='<section id="module-guestbook">
	<header>
		<h1>' . $_functions->i18n('module_title') . '</h1>
	</header>
	<div class="content">
		';$_subtpl=$_data->get('MSG');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
		';$_subtpl=$_data->get('FORM');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='

		';if ($_data->is_true($_data->get('C_PAGINATION'))){$_result.='
			<div class="center">';$_subtpl=$_data->get('PAGINATION');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='</div>
			<div class="spacer"></div>
		';}$_result.='
		';if ($_data->is_true($_data->get('C_NO_MESSAGE'))){$_result.='
			<div class="notice message-helper-small center">' . LangLoader::get_message('no_item_now', 'common') . '</div>
		';}$_result.='
		';foreach($_data->get_block('messages') as $_tmp_messages){$_result.='
			<article id="article-guestbook-' . $_data->get_from_list('ID', $_tmp_messages) . '" class="article-guestbook article-several message">
				<header>
					<h2>' . LangLoader::get_message('message', 'main') . '</h2>
				</header>
				<div id="m' . $_data->get_from_list('ID', $_tmp_messages) . '" class="message-container">

					<div class="message-user-infos">
						<div class="message-pseudo">
							';if ($_data->is_true($_data->get_from_list('C_AUTHOR_EXIST', $_tmp_messages))){$_result.='
							<a href="' . $_data->get_from_list('U_AUTHOR_PROFILE', $_tmp_messages) . '" class="' . $_data->get_from_list('USER_LEVEL_CLASS', $_tmp_messages) . '" ';if ($_data->is_true($_data->get_from_list('C_USER_GROUP_COLOR', $_tmp_messages))){$_result.=' style="color:' . $_data->get_from_list('USER_GROUP_COLOR', $_tmp_messages) . '" ';}$_result.='>' . $_data->get_from_list('PSEUDO', $_tmp_messages) . '</a>
							';}else{$_result.='
							' . $_data->get_from_list('PSEUDO', $_tmp_messages) . '
							';}$_result.='
						</div>
						';if ($_data->is_true($_data->get_from_list('C_AVATAR', $_tmp_messages))){$_result.='<img src="' . $_data->get_from_list('U_AVATAR', $_tmp_messages) . '" alt="' . LangLoader::get_message('avatar', 'user-common') . '" class="message-avatar" />';}$_result.='
						';if ($_data->is_true($_data->get_from_list('C_USER_GROUPS', $_tmp_messages))){$_result.='
							<div class="spacer"></div>
							';foreach($_data->get_block_from_list('user_groups', $_tmp_messages) as $_tmp_messages_user_groups){$_result.='
								';if ($_data->is_true($_data->get_from_list('C_GROUP_PICTURE', $_tmp_messages_user_groups))){$_result.='
								<img src="' . $_data->get('PATH_TO_ROOT') . '/images/group/' . $_data->get_from_list('GROUP_PICTURE', $_tmp_messages_user_groups) . '" alt="' . $_data->get_from_list('GROUP_NAME', $_tmp_messages_user_groups) . '" title="' . $_data->get_from_list('GROUP_NAME', $_tmp_messages_user_groups) . '" class="message-user-group"/>
								';}else{$_result.='
								' . LangLoader::get_message('group', 'main') . ': ' . $_data->get_from_list('GROUP_NAME', $_tmp_messages_user_groups) . '
								';}$_result.='
							';}$_result.='
						';}$_result.='
					</div>

					<div class="message-date">
						<span class="actions">
							';if ($_data->is_true($_data->get_from_list('C_EDIT', $_tmp_messages))){$_result.='
							<a href="' . $_data->get_from_list('U_EDIT', $_tmp_messages) . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit"></i></a>
							';}$_result.='
							';if ($_data->is_true($_data->get_from_list('C_DELETE', $_tmp_messages))){$_result.='
							<a href="' . $_data->get_from_list('U_DELETE', $_tmp_messages) . '" title="' . LangLoader::get_message('delete', 'common') . '" data-confirmation="delete-element"><i class="fa fa-delete"></i></a>
							';}$_result.='
						</span>
						<a href="' . $_data->get_from_list('U_ANCHOR', $_tmp_messages) . '"><i class="fa fa-hand-o-right"></i></a> ' . LangLoader::get_message('the', 'common') . ' ' . $_data->get_from_list('DATE', $_tmp_messages) . '
					</div>

					<div class="message-message">
						<div class="message-content">' . $_data->get_from_list('CONTENTS', $_tmp_messages) . '</div>
					</div>
					
				</div>
				<footer></footer>
			</article>
		';}$_result.='
	</div>
	<footer>';if ($_data->is_true($_data->get('C_PAGINATION'))){$_result.='<div class="center">';$_subtpl=$_data->get('PAGINATION');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='</div>';}$_result.='</footer>
</section>
'; ?>