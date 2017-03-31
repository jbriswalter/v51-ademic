<?php $_result='';foreach($_data->get_block('comments') as $_tmp_comments){$_result.='
	<article id="com' . $_data->get_from_list('ID_COMMENT', $_tmp_comments) . '" class="message" itemscope="itemscope" itemtype="http://schema.org/Comment">
		<header>
			<h2>' . LangLoader::get_message('comment', 'comments-common') . '</h2>
		</header>
		<div class="message-container">

			<div class="message-user-infos">
				<div class="message-pseudo">
					';if ($_data->is_true($_data->get_from_list('C_VISITOR', $_tmp_comments))){$_result.='
						<span itemprop="author">' . $_data->get_from_list('PSEUDO', $_tmp_comments) . '</span>
					';}else{$_result.='
						<a itemprop="author" href="' . $_data->get_from_list('U_PROFILE', $_tmp_comments) . '" class="' . $_data->get_from_list('LEVEL_CLASS', $_tmp_comments) . '" ';if ($_data->is_true($_data->get_from_list('C_GROUP_COLOR', $_tmp_comments))){$_result.=' style="color:' . $_data->get_from_list('GROUP_COLOR', $_tmp_comments) . '" ';}$_result.='>
							' . $_data->get_from_list('PSEUDO', $_tmp_comments) . '
						</a>
					';}$_result.='
				</div>
				<div class="message-level">' . $_data->get_from_list('L_LEVEL', $_tmp_comments) . '</div>
				';if ($_data->is_true($_data->get_from_list('C_AVATAR', $_tmp_comments))){$_result.='<img src="' . $_data->get_from_list('U_AVATAR', $_tmp_comments) . '" alt="' . LangLoader::get_message('avatar', 'user-common') . '" class="message-avatar" />';}$_result.='
			</div>

			<div class="message-date">
				<span class="actions">
					<a itemprop="url" href="#com' . $_data->get_from_list('ID_COMMENT', $_tmp_comments) . '">#' . $_data->get_from_list('ID_COMMENT', $_tmp_comments) . '</a>
					';if ($_data->is_true($_data->get_from_list('C_MODERATOR', $_tmp_comments))){$_result.='
						<a href="' . $_data->get_from_list('U_EDIT', $_tmp_comments) . '" title="' . LangLoader::get_message('edit', 'common') . '" class="fa fa-edit"></a>
						<a href="' . $_data->get_from_list('U_DELETE', $_tmp_comments) . '" title="' . LangLoader::get_message('delete', 'common') . '" class="fa fa-delete" data-confirmation="delete-element"></a>
					';}$_result.='
				</span>
				<time itemprop="datePublished" datetime="' . $_data->get_from_list('DATE_ISO8601', $_tmp_comments) . '">' . $_data->get_from_list('DATE', $_tmp_comments) . '</time>
			</div>

			<div class="message-message">
				<div itemprop="text" class="message-content content">' . $_data->get_from_list('MESSAGE', $_tmp_comments) . '</div>
				';if ($_data->is_true($_data->get_from_list('C_VIEW_TOPIC', $_tmp_comments))){$_result.='
					<div class="view-topic">
						<a href="' . $_data->get_from_list('U_TOPIC', $_tmp_comments) . '#com' . $_data->get_from_list('ID_COMMENT', $_tmp_comments) . '">
						' . $_data->get('L_VIEW_TOPIC') . '
						<i class="fa fa-arrow-circle-right"></i>
					</a>
					</div>
				';}$_result.='
				<!-- 
				<div id="message-rating">
					<div class="positive_vote_button">+</div>
					<div class="negative_vote_button">-</div>
				</div>
				 -->
			</div>
			
		</div>
		<footer></footer>
	</article>
';}$_result.='
'; ?>