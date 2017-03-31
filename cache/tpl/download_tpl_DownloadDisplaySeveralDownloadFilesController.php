<?php $_result='<section id="module-download">
	<header>
		<h1>
			<a href="' . $_functions->relative_url(SyndicationUrlBuilder::rss('download', $_data->get('ID_CAT'))) . '" title="' . LangLoader::get_message('syndication', 'common') . '"><i class="fa fa-syndication"></i></a>
			';if ($_data->is_true($_data->get('C_PENDING'))){$_result.='' . $_functions->i18n('download.pending') . '';}else{$_result.='' . $_functions->i18n('module_title') . '';if (!$_data->is_true($_data->get('C_ROOT_CATEGORY'))){$_result.=' - ' . $_data->get('CATEGORY_NAME') . '';}$_result.='';}$_result.=' ';if ($_data->is_true($_data->get('C_CATEGORY'))){$_result.='';if ($_data->is_true($_data->get('IS_ADMIN'))){$_result.='<a href="' . $_data->get('U_EDIT_CATEGORY') . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit smaller"></i></a>';}$_result.='';}$_result.='
		</h1>
		';if ($_data->is_true($_data->get('C_CATEGORY_DESCRIPTION'))){$_result.='
			<div class="cat-description">
				' . $_data->get('CATEGORY_DESCRIPTION') . '
			</div>
		';}$_result.='
	</header>
	
	';if ($_data->is_true($_data->get('C_SUB_CATEGORIES'))){$_result.='
	<div class="subcat-container">
		';foreach($_data->get_block('sub_categories_list') as $_tmp_sub_categories_list){$_result.='
		<div class="subcat-element" style="width:' . $_data->get('CATS_COLUMNS_WIDTH') . '%;">
			<div class="subcat-content">
				';if ($_data->is_true($_data->get_from_list('C_CATEGORY_IMAGE', $_tmp_sub_categories_list))){$_result.='<a itemprop="about" href="' . $_data->get_from_list('U_CATEGORY', $_tmp_sub_categories_list) . '"><img itemprop="thumbnailUrl" src="' . $_data->get_from_list('CATEGORY_IMAGE', $_tmp_sub_categories_list) . '" alt="' . $_data->get_from_list('CATEGORY_NAME', $_tmp_sub_categories_list) . '" /></a>';}$_result.='
				<br />
				<a itemprop="about" href="' . $_data->get_from_list('U_CATEGORY', $_tmp_sub_categories_list) . '">' . $_data->get_from_list('CATEGORY_NAME', $_tmp_sub_categories_list) . '</a>
				<br />
				<span class="small">' . $_data->get_from_list('DOWNLOADFILES_NUMBER', $_tmp_sub_categories_list) . ' ';if ($_data->is_true($_data->get_from_list('C_MORE_THAN_ONE_DOWNLOADFILE', $_tmp_sub_categories_list))){$_result.='' . TextHelper::lowercase_first(LangLoader::get_message('files', 'common', 'download')) . '';}else{$_result.='' . TextHelper::lowercase_first(LangLoader::get_message('file', 'common', 'download')) . '';}$_result.='</span>
			</div>
		</div>
		';}$_result.='
		<div class="spacer"></div>
	</div>
	';if ($_data->is_true($_data->get('C_SUBCATEGORIES_PAGINATION'))){$_result.='<span class="center">';$_subtpl=$_data->get('SUBCATEGORIES_PAGINATION');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='</span>';}$_result.='
	';}else{$_result.='
		';if (!$_data->is_true($_data->get('C_CATEGORY_DISPLAYED_TABLE'))){$_result.='<div class="spacer"></div>';}$_result.='
	';}$_result.='
	
	<div class="content">
	';if ($_data->is_true($_data->get('C_FILES'))){$_result.='
		';if ($_data->is_true($_data->get('C_MORE_THAN_ONE_FILE'))){$_result.='
			';$_subtpl=$_data->get('SORT_FORM');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
			<div class="spacer"></div>
		';}$_result.='
		';if ($_data->is_true($_data->get('C_CATEGORY_DISPLAYED_TABLE'))){$_result.='
			<table id="table">
				<thead>
					<tr>
						<th>' . LangLoader::get_message('form.name', 'common') . '</th>
						<th class="col-small">' . LangLoader::get_message('form.keywords', 'common') . '</th>
						<th class="col-small">' . LangLoader::get_message('form.date.creation', 'common') . '</th>
						<th class="col-small">' . $_functions->i18n('downloads_number') . '</th>
						';if ($_data->is_true($_data->get('C_NOTATION_ENABLED'))){$_result.='<th>' . LangLoader::get_message('note', 'common') . '</th>';}$_result.='
						';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='<th class="col-small">' . LangLoader::get_message('comments', 'comments-common') . '</th>';}$_result.='
						';if ($_data->is_true($_data->get('C_MODERATION'))){$_result.='<th class="col-smaller"></th>';}$_result.='
					</tr>
				</thead>
				<tbody>
					';foreach($_data->get_block('downloadfiles') as $_tmp_downloadfiles){$_result.='
					<tr>
						<td>
							<a href="' . $_data->get_from_list('U_LINK', $_tmp_downloadfiles) . '" itemprop="name">' . $_data->get_from_list('NAME', $_tmp_downloadfiles) . '</a>
						</td>
						<td>
							';if ($_data->is_true($_data->get_from_list('C_KEYWORDS', $_tmp_downloadfiles))){$_result.='
								';foreach($_data->get_block_from_list('keywords', $_tmp_downloadfiles) as $_tmp_downloadfiles_keywords){$_result.='
									<a itemprop="keywords" href="' . $_data->get_from_list('URL', $_tmp_downloadfiles_keywords) . '">' . $_data->get_from_list('NAME', $_tmp_downloadfiles_keywords) . '</a>';if ($_data->is_true($_data->get_from_list('C_SEPARATOR', $_tmp_downloadfiles_keywords))){$_result.=', ';}$_result.='
								';}$_result.='
							';}else{$_result.='
								' . LangLoader::get_message('none', 'common') . '
							';}$_result.='
						</td>
						<td>
							<time datetime="';if (!$_data->is_true($_data->get_from_list('C_DIFFERED', $_tmp_downloadfiles))){$_result.='' . $_data->get_from_list('DATE_ISO8601', $_tmp_downloadfiles) . '';}else{$_result.='' . $_data->get_from_list('DIFFERED_START_DATE_ISO8601', $_tmp_downloadfiles) . '';}$_result.='" itemprop="datePublished">';if (!$_data->is_true($_data->get_from_list('C_DIFFERED', $_tmp_downloadfiles))){$_result.='' . $_data->get_from_list('DATE', $_tmp_downloadfiles) . '';}else{$_result.='' . $_data->get_from_list('DIFFERED_START_DATE', $_tmp_downloadfiles) . '';}$_result.='</time>
						</td>
						<td>
							' . $_data->get_from_list('NUMBER_DOWNLOADS', $_tmp_downloadfiles) . '
						</td>
						';if ($_data->is_true($_data->get('C_NOTATION_ENABLED'))){$_result.='
						<td>
							' . $_data->get_from_list('STATIC_NOTATION', $_tmp_downloadfiles) . '
						</td>
						';}$_result.='
						';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='
						<td>
							';if ($_data->is_true($_data->get_from_list('C_COMMENTS', $_tmp_downloadfiles))){$_result.=' ' . $_data->get_from_list('NUMBER_COMMENTS', $_tmp_downloadfiles) . ' ';}$_result.=' ' . $_data->get_from_list('L_COMMENTS', $_tmp_downloadfiles) . '
						</td>
						';}$_result.='
						';if ($_data->is_true($_data->get('C_MODERATION'))){$_result.='
						<td>
							';if ($_data->is_true($_data->get_from_list('C_EDIT', $_tmp_downloadfiles))){$_result.='
								<a href="' . $_data->get_from_list('U_EDIT', $_tmp_downloadfiles) . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit"></i></a>
							';}$_result.='
							';if ($_data->is_true($_data->get_from_list('C_DELETE', $_tmp_downloadfiles))){$_result.='
								<a href="' . $_data->get_from_list('U_DELETE', $_tmp_downloadfiles) . '" title="' . LangLoader::get_message('delete', 'common') . '" data-confirmation="delete-element"><i class="fa fa-delete"></i></a>
							';}$_result.='
						</td>
						';}$_result.='
					</tr>
					';}$_result.='
				</tbody>
			</table>
		';}else{$_result.='
			';foreach($_data->get_block('downloadfiles') as $_tmp_downloadfiles){$_result.='
			<article id="article-download-' . $_data->get_from_list('ID', $_tmp_downloadfiles) . '" class="article-download article-several';if ($_data->is_true($_data->get('C_CATEGORY_DISPLAYED_SUMMARY'))){$_result.=' block';}$_result.='" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
				<header>
					<h2>
						<span class="actions">
							';if ($_data->is_true($_data->get_from_list('C_EDIT', $_tmp_downloadfiles))){$_result.='<a href="' . $_data->get_from_list('U_EDIT', $_tmp_downloadfiles) . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit"></i></a>';}$_result.='
							';if ($_data->is_true($_data->get_from_list('C_DELETE', $_tmp_downloadfiles))){$_result.='<a href="' . $_data->get_from_list('U_DELETE', $_tmp_downloadfiles) . '" title="' . LangLoader::get_message('delete', 'common') . '" data-confirmation="delete-element"><i class="fa fa-delete"></i></a>';}$_result.='
						</span>
						<a href="' . $_data->get_from_list('U_LINK', $_tmp_downloadfiles) . '" itemprop="name">' . $_data->get_from_list('NAME', $_tmp_downloadfiles) . '</a>
					</h2>
					
					<meta itemprop="url" content="' . $_data->get_from_list('U_LINK', $_tmp_downloadfiles) . '">
					<meta itemprop="description" content="' . $_functions->escape($_data->get_from_list('DESCRIPTION', $_tmp_downloadfiles)) . '"/>
					';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='
					<meta itemprop="discussionUrl" content="' . $_data->get_from_list('U_COMMENTS', $_tmp_downloadfiles) . '">
					<meta itemprop="interactionCount" content="' . $_data->get_from_list('NUMBER_COMMENTS', $_tmp_downloadfiles) . ' UserComments">
					';}$_result.='
				</header>
				
				';if ($_data->is_true($_data->get('C_CATEGORY_DISPLAYED_SUMMARY'))){$_result.='
					<div class="more">
						<i class="fa fa-download" title="' . $_data->get_from_list('L_DOWNLOADED_TIMES', $_tmp_downloadfiles) . '"></i>
						<span title="' . $_data->get_from_list('L_DOWNLOADED_TIMES', $_tmp_downloadfiles) . '">' . $_data->get_from_list('NUMBER_DOWNLOADS', $_tmp_downloadfiles) . '</span>
						';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='
							| <i class="fa fa-comment" title="' . LangLoader::get_message('comments', 'comments-common') . '"></i>
							';if ($_data->is_true($_data->get_from_list('C_COMMENTS', $_tmp_downloadfiles))){$_result.=' ' . $_data->get_from_list('NUMBER_COMMENTS', $_tmp_downloadfiles) . ' ';}$_result.=' ' . $_data->get_from_list('L_COMMENTS', $_tmp_downloadfiles) . '
						';}$_result.='
						';if ($_data->is_true($_data->get_from_list('C_KEYWORDS', $_tmp_downloadfiles))){$_result.='
							| <i class="fa fa-tags" title="' . LangLoader::get_message('form.keywords', 'common') . '"></i> 
							';foreach($_data->get_block_from_list('keywords', $_tmp_downloadfiles) as $_tmp_downloadfiles_keywords){$_result.='
								<a itemprop="keywords" href="' . $_data->get_from_list('URL', $_tmp_downloadfiles_keywords) . '">' . $_data->get_from_list('NAME', $_tmp_downloadfiles_keywords) . '</a>
								';if ($_data->is_true($_data->get_from_list('C_SEPARATOR', $_tmp_downloadfiles_keywords))){$_result.=', ';}$_result.='
							';}$_result.='
						';}$_result.='
						';if ($_data->is_true($_data->get('C_NOTATION_ENABLED'))){$_result.='
							<span class="float-right">' . $_data->get_from_list('STATIC_NOTATION', $_tmp_downloadfiles) . '</span>
						';}$_result.='
						<div class="spacer"></div>
					</div>
					<div class="content">
						';if ($_data->is_true($_data->get_from_list('C_PICTURE', $_tmp_downloadfiles))){$_result.='
						<span class="download-picture">
							<img src="' . $_data->get_from_list('U_PICTURE', $_tmp_downloadfiles) . '" alt="' . $_data->get_from_list('NAME', $_tmp_downloadfiles) . '" itemprop="image" />
						</span>
						';}$_result.='
						' . $_data->get_from_list('DESCRIPTION', $_tmp_downloadfiles) . '';if ($_data->is_true($_data->get_from_list('C_READ_MORE', $_tmp_downloadfiles))){$_result.='... <a href="' . $_data->get_from_list('U_LINK', $_tmp_downloadfiles) . '" class="read-more">[' . LangLoader::get_message('read-more', 'common') . ']</a>';}$_result.='
						<div class="spacer"></div>
					</div>
				';}else{$_result.='
					<div class="content">
						<div class="options infos">
							<div class="center">
								';if ($_data->is_true($_data->get_from_list('C_PICTURE', $_tmp_downloadfiles))){$_result.='
									<img src="' . $_data->get_from_list('U_PICTURE', $_tmp_downloadfiles) . '" alt="' . $_data->get_from_list('NAME', $_tmp_downloadfiles) . '" itemprop="image" />
									<div class="spacer"></div>
								';}$_result.='
								';if ($_data->is_true($_data->get_from_list('C_VISIBLE', $_tmp_downloadfiles))){$_result.='
									<a href="' . $_data->get_from_list('U_DOWNLOAD', $_tmp_downloadfiles) . '" class="basic-button">
										<i class="fa fa-download"></i> ' . $_functions->i18n('download') . '
									</a>
									';if ($_data->is_true($_data->get('IS_USER_CONNECTED'))){$_result.='
									<a href="' . $_data->get_from_list('U_DEADLINK', $_tmp_downloadfiles) . '" class="basic-button alt" title="' . LangLoader::get_message('deadlink', 'common') . '">
										<i class="fa fa-unlink"></i>
									</a>
									';}$_result.='
								';}$_result.='
							</div>
							<h6>' . $_functions->i18n('file_infos') . '</h6>
							<span class="text-strong">' . LangLoader::get_message('size', 'common') . ' : </span><span>';if ($_data->is_true($_data->get_from_list('C_SIZE', $_tmp_downloadfiles))){$_result.='' . $_data->get_from_list('SIZE', $_tmp_downloadfiles) . '';}else{$_result.='' . LangLoader::get_message('unknown_size', 'common') . '';}$_result.='</span><br/>
							<span class="text-strong">' . LangLoader::get_message('form.date.creation', 'common') . ' : </span><span><time datetime="';if (!$_data->is_true($_data->get_from_list('C_DIFFERED', $_tmp_downloadfiles))){$_result.='' . $_data->get_from_list('DATE_ISO8601', $_tmp_downloadfiles) . '';}else{$_result.='' . $_data->get_from_list('DIFFERED_START_DATE_ISO8601', $_tmp_downloadfiles) . '';}$_result.='" itemprop="datePublished">';if (!$_data->is_true($_data->get_from_list('C_DIFFERED', $_tmp_downloadfiles))){$_result.='' . $_data->get_from_list('DATE', $_tmp_downloadfiles) . '';}else{$_result.='' . $_data->get_from_list('DIFFERED_START_DATE', $_tmp_downloadfiles) . '';}$_result.='</time></span><br/>
							';if ($_data->is_true($_data->get('C_UPDATED_DATE'))){$_result.='<span class="text-strong">' . LangLoader::get_message('form.date.update', 'common') . ' : </span><span><time datetime="' . $_data->get_from_list('UPDATED_DATE_ISO8601', $_tmp_downloadfiles) . '" itemprop="dateModified">' . $_data->get_from_list('UPDATED_DATE', $_tmp_downloadfiles) . '</time></span><br/>';}$_result.='
							<span class="text-strong">' . $_functions->i18n('downloads_number') . ' : </span><span>' . $_data->get_from_list('NUMBER_DOWNLOADS', $_tmp_downloadfiles) . '</span><br/>
							';if (!$_data->is_true($_data->get('C_CATEGORY'))){$_result.='<span class="text-strong">' . LangLoader::get_message('category', 'categories-common') . ' : </span><span><a itemprop="about" class="small" href="' . $_data->get_from_list('U_CATEGORY', $_tmp_downloadfiles) . '">' . $_data->get_from_list('CATEGORY_NAME', $_tmp_downloadfiles) . '</a></span><br/>';}$_result.='
							';if ($_data->is_true($_data->get_from_list('C_KEYWORDS', $_tmp_downloadfiles))){$_result.='
								<span class="text-strong">' . LangLoader::get_message('form.keywords', 'common') . ' : </span>
								<span>
									';foreach($_data->get_block_from_list('keywords', $_tmp_downloadfiles) as $_tmp_downloadfiles_keywords){$_result.='
										<a itemprop="keywords" class="small" href="' . $_data->get_from_list('URL', $_tmp_downloadfiles_keywords) . '">' . $_data->get_from_list('NAME', $_tmp_downloadfiles_keywords) . '</a>';if ($_data->is_true($_data->get_from_list('C_SEPARATOR', $_tmp_downloadfiles_keywords))){$_result.=', ';}$_result.='
									';}$_result.='
								</span><br/>
							';}$_result.='
							';if ($_data->is_true($_data->get('C_AUTHOR_DISPLAYED'))){$_result.='
								<span class="text-strong">' . LangLoader::get_message('author', 'common') . ' : </span>
								<span>
									';if ($_data->is_true($_data->get_from_list('C_CUSTOM_AUTHOR_DISPLAY_NAME', $_tmp_downloadfiles))){$_result.='
										' . $_data->get_from_list('CUSTOM_AUTHOR_DISPLAY_NAME', $_tmp_downloadfiles) . '
									';}else{$_result.='
										';if ($_data->is_true($_data->get_from_list('C_AUTHOR_EXIST', $_tmp_downloadfiles))){$_result.='<a itemprop="author" rel="author" class="small ' . $_data->get_from_list('USER_LEVEL_CLASS', $_tmp_downloadfiles) . '" href="' . $_data->get_from_list('U_AUTHOR_PROFILE', $_tmp_downloadfiles) . '" ';if ($_data->is_true($_data->get_from_list('C_USER_GROUP_COLOR', $_tmp_downloadfiles))){$_result.=' style="color:' . $_data->get_from_list('USER_GROUP_COLOR', $_tmp_downloadfiles) . '" ';}$_result.='>' . $_data->get_from_list('PSEUDO', $_tmp_downloadfiles) . '</a>';}else{$_result.='' . $_data->get_from_list('PSEUDO', $_tmp_downloadfiles) . '';}$_result.='  
									';}$_result.='
								</span><br/>
							';}$_result.='
							';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='
								<span>';if ($_data->is_true($_data->get_from_list('C_COMMENTS', $_tmp_downloadfiles))){$_result.=' ' . $_data->get_from_list('NUMBER_COMMENTS', $_tmp_downloadfiles) . ' ';}$_result.=' ' . $_data->get_from_list('L_COMMENTS', $_tmp_downloadfiles) . '</span>
							';}$_result.='
							';if ($_data->is_true($_data->get_from_list('C_VISIBLE', $_tmp_downloadfiles))){$_result.='
								';if ($_data->is_true($_data->get('C_NOTATION_ENABLED'))){$_result.='
									<div class="spacer"></div>
									<div class="center">' . $_data->get_from_list('NOTATION', $_tmp_downloadfiles) . '</div>
								';}$_result.='
							';}$_result.='
						</div>
						
						<div itemprop="text">' . $_data->get_from_list('CONTENTS', $_tmp_downloadfiles) . '</div>
					</div>
				';}$_result.='
				
				<footer></footer>
			</article>
			';}$_result.='
		';}$_result.='
	';}else{$_result.='
		';if (!$_data->is_true($_data->get('C_HIDE_NO_ITEM_MESSAGE'))){$_result.='
		<div class="center">
			' . LangLoader::get_message('no_item_now', 'common') . '
		</div>
		';}$_result.='
	';}$_result.='
	</div>
	<footer>';if ($_data->is_true($_data->get('C_PAGINATION'))){$_result.=' ';$_subtpl=$_data->get('PAGINATION');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.=' ';}$_result.='</footer>
</section>'; ?>