<?php $_result='<section id="module-web">
	<header>
		<h1>
			<a href="' . $_functions->relative_url(SyndicationUrlBuilder::rss('web', $_data->get('ID_CAT'))) . '" title="' . LangLoader::get_message('syndication', 'common') . '"><i class="fa fa-syndication"></i></a>
			';if ($_data->is_true($_data->get('C_PENDING'))){$_result.='' . $_functions->i18n('web.pending') . '';}else{$_result.='' . $_functions->i18n('module_title') . '';if (!$_data->is_true($_data->get('C_ROOT_CATEGORY'))){$_result.=' - ' . $_data->get('CATEGORY_NAME') . '';}$_result.='';}$_result.=' ';if ($_data->is_true($_data->get('C_CATEGORY'))){$_result.='';if ($_data->is_true($_data->get('IS_ADMIN'))){$_result.='<a href="' . $_data->get('U_EDIT_CATEGORY') . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit smaller"></i></a>';}$_result.='';}$_result.='
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
				<span class="small">' . $_data->get_from_list('WEBLINKS_NUMBER', $_tmp_sub_categories_list) . ' ';if ($_data->is_true($_data->get_from_list('C_MORE_THAN_ONE_WEBLINK', $_tmp_sub_categories_list))){$_result.='' . TextHelper::lowercase_first(LangLoader::get_message('links', 'common', 'web')) . '';}else{$_result.='' . TextHelper::lowercase_first(LangLoader::get_message('link', 'common', 'web')) . '';}$_result.='</span>
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
	';if ($_data->is_true($_data->get('C_WEBLINKS'))){$_result.='
		';if ($_data->is_true($_data->get('C_MORE_THAN_ONE_WEBLINK'))){$_result.='
			';$_subtpl=$_data->get('SORT_FORM');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
			<div class="spacer"></div>
		';}$_result.='
		';if ($_data->is_true($_data->get('C_CATEGORY_DISPLAYED_TABLE'))){$_result.='
			<table id="table">
				<thead>
					<tr>
						<th>' . LangLoader::get_message('form.name', 'common') . '</th>
						<th class="col-small">' . LangLoader::get_message('form.keywords', 'common') . '</th>
						<th class="col-small">' . $_functions->i18n('visits_number') . '</th>
						';if ($_data->is_true($_data->get('C_NOTATION_ENABLED'))){$_result.='<th>' . LangLoader::get_message('note', 'common') . '</th>';}$_result.='
						';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='<th class="col-small">' . LangLoader::get_message('comments', 'comments-common') . '</th>';}$_result.='
						';if ($_data->is_true($_data->get('C_MODERATE'))){$_result.='<th class="col-smaller"></th>';}$_result.='
					</tr>
				</thead>
				<tbody>
					';foreach($_data->get_block('weblinks') as $_tmp_weblinks){$_result.='
					<tr>
						<td>
							<a href="' . $_data->get_from_list('U_LINK', $_tmp_weblinks) . '" itemprop="name">' . $_data->get_from_list('NAME', $_tmp_weblinks) . '</a>
						</td>
						<td>
							';if ($_data->is_true($_data->get_from_list('C_KEYWORDS', $_tmp_weblinks))){$_result.='
								';foreach($_data->get_block_from_list('keywords', $_tmp_weblinks) as $_tmp_weblinks_keywords){$_result.='
									<a itemprop="keywords" href="' . $_data->get_from_list('URL', $_tmp_weblinks_keywords) . '">' . $_data->get_from_list('NAME', $_tmp_weblinks_keywords) . '</a>';if ($_data->is_true($_data->get_from_list('C_SEPARATOR', $_tmp_weblinks_keywords))){$_result.=', ';}$_result.='
								';}$_result.='
							';}else{$_result.='
								' . LangLoader::get_message('none', 'common') . '
							';}$_result.='
						</td>
						<td>
							' . $_data->get_from_list('NUMBER_VIEWS', $_tmp_weblinks) . '
						</td>
						';if ($_data->is_true($_data->get('C_NOTATION_ENABLED'))){$_result.='
						<td>
							' . $_data->get_from_list('STATIC_NOTATION', $_tmp_weblinks) . '
						</td>
						';}$_result.='
						';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='
						<td>
							';if ($_data->is_true($_data->get_from_list('C_COMMENTS', $_tmp_weblinks))){$_result.=' ' . $_data->get_from_list('NUMBER_COMMENTS', $_tmp_weblinks) . ' ';}$_result.=' ' . $_data->get_from_list('L_COMMENTS', $_tmp_weblinks) . '
						</td>
						';}$_result.='
						';if ($_data->is_true($_data->get('C_MODERATE'))){$_result.='
						<td>
							';if ($_data->is_true($_data->get_from_list('C_EDIT', $_tmp_weblinks))){$_result.='
							<a href="' . $_data->get_from_list('U_EDIT', $_tmp_weblinks) . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit"></i></a>
							';}$_result.='
							';if ($_data->is_true($_data->get_from_list('C_DELETE', $_tmp_weblinks))){$_result.='
							<a href="' . $_data->get_from_list('U_DELETE', $_tmp_weblinks) . '" title="' . LangLoader::get_message('delete', 'common') . '" data-confirmation="delete-element"><i class="fa fa-delete"></i></a>
							';}$_result.='
						</td>
						';}$_result.='
					</tr>
					';}$_result.='
				</tbody>
			</table>
		';}else{$_result.='
			';foreach($_data->get_block('weblinks') as $_tmp_weblinks){$_result.='
			<article id="article-web-' . $_data->get_from_list('ID', $_tmp_weblinks) . '" class="article-web article-several';if ($_data->is_true($_data->get('C_CATEGORY_DISPLAYED_SUMMARY'))){$_result.=' block';if ($_data->is_true($_data->get_from_list('C_IS_PARTNER', $_tmp_weblinks))){$_result.=' web-partner';}$_result.='';if ($_data->is_true($_data->get_from_list('C_IS_PRIVILEGED_PARTNER', $_tmp_weblinks))){$_result.=' web-privileged-partner';}$_result.='" ';}$_result.='itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
				<header>
					<h2>
						<span class="actions">
							';if ($_data->is_true($_data->get_from_list('C_EDIT', $_tmp_weblinks))){$_result.='<a href="' . $_data->get_from_list('U_EDIT', $_tmp_weblinks) . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit"></i></a>';}$_result.='
							';if ($_data->is_true($_data->get_from_list('C_DELETE', $_tmp_weblinks))){$_result.='<a href="' . $_data->get_from_list('U_DELETE', $_tmp_weblinks) . '" title="' . LangLoader::get_message('delete', 'common') . '" data-confirmation="delete-element"><i class="fa fa-delete"></i></a>';}$_result.='
						</span>
						<a href="' . $_data->get_from_list('U_LINK', $_tmp_weblinks) . '" itemprop="name">' . $_data->get_from_list('NAME', $_tmp_weblinks) . '</a>
					</h2>
					
					<meta itemprop="url" content="' . $_data->get_from_list('U_LINK', $_tmp_weblinks) . '">
					<meta itemprop="description" content="' . $_functions->escape($_data->get_from_list('DESCRIPTION', $_tmp_weblinks)) . '"/>
					';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='
					<meta itemprop="discussionUrl" content="' . $_data->get_from_list('U_COMMENTS', $_tmp_weblinks) . '">
					<meta itemprop="interactionCount" content="' . $_data->get_from_list('NUMBER_COMMENTS', $_tmp_weblinks) . ' UserComments">
					';}$_result.='
				</header>
				
				';if ($_data->is_true($_data->get('C_CATEGORY_DISPLAYED_SUMMARY'))){$_result.='
					<div class="more">
						<i class="fa fa-eye" title="' . $_data->get_from_list('L_VISITED_TIMES', $_tmp_weblinks) . '"></i>
						<span title="' . $_data->get_from_list('L_VISITED_TIMES', $_tmp_weblinks) . '">' . $_data->get_from_list('NUMBER_VIEWS', $_tmp_weblinks) . '</span>
						';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='
							| <i class="fa fa-comment" title="' . LangLoader::get_message('comments', 'comments-common') . '"></i>
							';if ($_data->is_true($_data->get_from_list('C_COMMENTS', $_tmp_weblinks))){$_result.=' ' . $_data->get_from_list('NUMBER_COMMENTS', $_tmp_weblinks) . ' ';}$_result.=' ' . $_data->get_from_list('L_COMMENTS', $_tmp_weblinks) . '
						';}$_result.='
						';if ($_data->is_true($_data->get_from_list('C_KEYWORDS', $_tmp_weblinks))){$_result.='
							| <i class="fa fa-tags" title="' . LangLoader::get_message('form.keywords', 'common') . '"></i> 
							';foreach($_data->get_block_from_list('keywords', $_tmp_weblinks) as $_tmp_weblinks_keywords){$_result.='
								<a itemprop="keywords" href="' . $_data->get_from_list('URL', $_tmp_weblinks_keywords) . '">' . $_data->get_from_list('NAME', $_tmp_weblinks_keywords) . '</a>
								';if ($_data->is_true($_data->get_from_list('C_SEPARATOR', $_tmp_weblinks_keywords))){$_result.=', ';}$_result.='
							';}$_result.='
						';}$_result.='
						';if ($_data->is_true($_data->get('C_NOTATION_ENABLED'))){$_result.='
							<span class="float-right">' . $_data->get_from_list('STATIC_NOTATION', $_tmp_weblinks) . '</span>
						';}$_result.='
						<div class="spacer"></div>
					</div>
					<div class="content">
						' . $_data->get_from_list('DESCRIPTION', $_tmp_weblinks) . '';if ($_data->is_true($_data->get_from_list('C_READ_MORE', $_tmp_weblinks))){$_result.='... <a href="' . $_data->get_from_list('U_LINK', $_tmp_weblinks) . '" class="read-more">[' . LangLoader::get_message('read-more', 'common') . ']</a>';}$_result.='
					</div>
				';}else{$_result.='
					<div class="content">
						<div class="options infos">
							<div class="center">
								';if ($_data->is_true($_data->get_from_list('C_HAS_PARTNER_PICTURE', $_tmp_weblinks))){$_result.='
									<img src="' . $_data->get_from_list('U_PARTNER_PICTURE', $_tmp_weblinks) . '" alt="' . $_data->get_from_list('NAME', $_tmp_weblinks) . '" itemprop="image" />
									<div class="spacer"></div>
								';}$_result.='
								';if ($_data->is_true($_data->get_from_list('C_VISIBLE', $_tmp_weblinks))){$_result.='
									<a href="' . $_data->get_from_list('U_VISIT', $_tmp_weblinks) . '" class="basic-button">
										<i class="fa fa-globe"></i> ' . $_functions->i18n('visit') . '
									</a>
									';if ($_data->is_true($_data->get('IS_USER_CONNECTED'))){$_result.='
									<a href="' . $_data->get_from_list('U_DEADLINK', $_tmp_weblinks) . '" class="basic-button alt" title="' . LangLoader::get_message('deadlink', 'common') . '">
										<i class="fa fa-unlink"></i>
									</a>
									';}$_result.='
								';}$_result.='
							</div>
							<h6>' . $_functions->i18n('link_infos') . '</h6>
							<span class="text-strong">' . $_functions->i18n('visits_number') . ' : </span><span>' . $_data->get_from_list('NUMBER_VIEWS', $_tmp_weblinks) . '</span><br/>
							';if (!$_data->is_true($_data->get('C_CATEGORY'))){$_result.='<span class="text-strong">' . LangLoader::get_message('category', 'categories-common') . ' : </span><span><a itemprop="about" class="small" href="' . $_data->get_from_list('U_CATEGORY', $_tmp_weblinks) . '">' . $_data->get_from_list('CATEGORY_NAME', $_tmp_weblinks) . '</a></span><br/>';}$_result.='
							';if ($_data->is_true($_data->get_from_list('C_KEYWORDS', $_tmp_weblinks))){$_result.='
								<span class="text-strong">' . LangLoader::get_message('form.keywords', 'common') . ' : </span>
								<span>
									';foreach($_data->get_block_from_list('keywords', $_tmp_weblinks) as $_tmp_weblinks_keywords){$_result.='
										<a itemprop="keywords" class="small" href="' . $_data->get_from_list('URL', $_tmp_weblinks_keywords) . '">' . $_data->get_from_list('NAME', $_tmp_weblinks_keywords) . '</a>';if ($_data->is_true($_data->get_from_list('C_SEPARATOR', $_tmp_weblinks_keywords))){$_result.=', ';}$_result.='
									';}$_result.='
								</span><br/>
							';}$_result.='
							';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='
								<span>';if ($_data->is_true($_data->get_from_list('C_COMMENTS', $_tmp_weblinks))){$_result.=' ' . $_data->get_from_list('NUMBER_COMMENTS', $_tmp_weblinks) . ' ';}$_result.=' ' . $_data->get_from_list('L_COMMENTS', $_tmp_weblinks) . '</span>
							';}$_result.='
							';if ($_data->is_true($_data->get('C_NOTATION_ENABLED'))){$_result.='
								<div class="spacer"></div>
								<div class="center">' . $_data->get_from_list('NOTATION', $_tmp_weblinks) . '</div>
							';}$_result.='
						</div>
						
						<div itemprop="text">' . $_data->get_from_list('CONTENTS', $_tmp_weblinks) . '</div>
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