<?php $_result='		';if ($_data->is_true($_data->get('C_CATEGORIES'))){$_result.='
			<section id="module-media">
				<header>
					<h1>
						<a href="' . $_functions->relative_url(SyndicationUrlBuilder::rss('media', $_data->get('ID_CAT'))) . '" title="' . LangLoader::get_message('syndication', 'common') . '"><i class="fa fa-syndication"></i></a>
						' . LangLoader::get_message('module_title', 'common', 'media') . '';if (!$_data->is_true($_data->get('C_ROOT_CATEGORY'))){$_result.=' - ' . $_data->get('CATEGORY_NAME') . '';}$_result.=' ';if ($_data->is_true($_data->get('IS_ADMIN'))){$_result.='<a href="' . $_data->get('U_EDIT_CATEGORY') . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit smaller"></i></a>';}$_result.='
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
							<span class="small">' . $_data->get_from_list('MEDIAFILES_NUMBER', $_tmp_sub_categories_list) . '</span>
						</div>
					</div>
					';}$_result.='
					<div class="spacer"></div>
				</div>
				';if ($_data->is_true($_data->get('C_SUBCATEGORIES_PAGINATION'))){$_result.='<span class="center">';$_subtpl=$_data->get('SUBCATEGORIES_PAGINATION');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='</span>';}$_result.='
				';}else{$_result.='
					<div class="spacer"></div>
				';}$_result.='
				
				<div class="content">
					';if ($_data->is_true($_data->get('C_FILES'))){$_result.='
						<div class="options" id="form">
							<script>
							<!--
							function change_order()
							{
								window.location = "' . $_data->get('TARGET_ON_CHANGE_ORDER') . 'sort=" + document.getElementById("sort").value + "&mode=" + document.getElementById("mode").value;
							}
							-->
							</script>
							' . $_data->get('L_ORDER_BY') . '
							<select name="sort" id="sort" class="nav" onchange="change_order()">
								<option value="alpha"' . $_data->get('SELECTED_ALPHA') . '>' . $_data->get('L_ALPHA') . '</option>
								<option value="date"' . $_data->get('SELECTED_DATE') . '>' . $_data->get('L_DATE') . '</option>
								<option value="nbr"' . $_data->get('SELECTED_NBR') . '>' . $_data->get('L_NBR') . '</option>
								<option value="note"' . $_data->get('SELECTED_NOTE') . '>' . $_data->get('L_NOTE') . '</option>
								<option value="com"' . $_data->get('SELECTED_COM') . '>' . $_data->get('L_COM') . '</option>
							</select>
							<select name="mode" id="mode" class="nav" onchange="change_order()">
								<option value="asc"' . $_data->get('SELECTED_ASC') . '>' . $_data->get('L_ASC') . '</option>
								<option value="desc"' . $_data->get('SELECTED_DESC') . '>' . $_data->get('L_DESC') . '</option>
							</select>
						</div>
						<div class="spacer"></div>
	
						';foreach($_data->get_block('file') as $_tmp_file){$_result.='
							<article id="article-media-' . $_data->get_from_list('ID', $_tmp_file) . '" class="article-media article-several block">
								<header>
									<h2>
										<a href="' . $_data->get_from_list('U_MEDIA_LINK', $_tmp_file) . '">' . $_data->get_from_list('NAME', $_tmp_file) . '</a>
										';if ($_data->is_true($_data->get('C_MODO'))){$_result.='
										<span class="actions">
											<a href="' . $_data->get_from_list('U_ADMIN_UNVISIBLE_MEDIA', $_tmp_file) . '" class="fa fa-eye-slash" title="' . $_data->get('L_UNAPROBED') . '"></a>
											<a href="' . $_data->get_from_list('U_ADMIN_EDIT_MEDIA', $_tmp_file) . '" title="' . LangLoader::get_message('edit', 'common') . '" class="fa fa-edit"></a>
											<a href="' . $_data->get_from_list('U_ADMIN_DELETE_MEDIA', $_tmp_file) . '" title="' . LangLoader::get_message('delete', 'common') . '" class="fa fa-delete" data-confirmation="delete-element"></a>
										</span>
										';}$_result.='
									</h2>
								</header>
								<div class="content">
									';if ($_data->is_true($_data->get_from_list('C_DESCRIPTION', $_tmp_file))){$_result.='
										<div class="media-desc">
										' . $_data->get_from_list('DESCRIPTION', $_tmp_file) . '
										</div>
									';}$_result.='
									<div class="spacer"></div>
									<div class="smaller">
										' . $_data->get('L_BY') . ' ' . $_data->get_from_list('POSTER', $_tmp_file) . '
										<br />
										' . $_data->get_from_list('COUNT', $_tmp_file) . '
										<br />
										';if ($_data->is_true($_data->get('C_DISPLAY_COMMENTS'))){$_result.='
										' . $_data->get_from_list('U_COM_LINK', $_tmp_file) . '
										<br />
										';}$_result.='
										';if ($_data->is_true($_data->get('C_DISPLAY_NOTATION'))){$_result.='
										' . $_data->get('L_NOTE') . ' ' . $_data->get_from_list('NOTE', $_tmp_file) . '
										';}$_result.='
									</div>
								</div>
								<footer></footer>
							</article>
						';}$_result.='
					';}$_result.='
	
					';if ($_data->is_true($_data->get('C_DISPLAY_NO_FILE_MSG'))){$_result.='
						<div class="notice">' . LangLoader::get_message('no_item_now', 'common') . '</div>
					';}$_result.='
				</div>
				<footer>';if ($_data->is_true($_data->get('C_PAGINATION'))){$_result.='<span class="center">';$_subtpl=$_data->get('PAGINATION');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='</span>';}$_result.='</footer>
			</section>
		';}$_result.='

		';if ($_data->is_true($_data->get('C_DISPLAY_MEDIA'))){$_result.='
		<section id="module-media">
			<header>
				<h1>
					' . LangLoader::get_message('module_title', 'common', 'media') . '';if (!$_data->is_true($_data->get('C_ROOT_CATEGORY'))){$_result.=' - ' . $_data->get('CATEGORY_NAME') . '';}$_result.=' ';if ($_data->is_true($_data->get('IS_ADMIN'))){$_result.='<a href="' . $_data->get('U_EDIT_CATEGORY') . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit smaller"></i></a>';}$_result.='
				</h1>
			</header>
			<div class="content">
				<article id="article-media-' . $_data->get('ID') . '" class="article-media">
					<header>
						<h2>
							' . $_data->get('NAME') . ' 
							<span class="actions">
								';if ($_data->is_true($_data->get('C_DISPLAY_COMMENTS'))){$_result.='
									<a href="' . $_data->get('U_COM') . '"><i class="fa fa-comments-o"></i> ' . $_data->get('L_COM') . '</a>
								';}$_result.='
								';if ($_data->is_true($_data->get('C_MODO'))){$_result.='
									<a href="' . $_data->get('U_UNVISIBLE_MEDIA') . '" class="fa fa-eye-slash" title="' . $_data->get('L_UNAPROBED') . '"></a>
									<a href="' . $_data->get('U_EDIT_MEDIA') . '" title="' . LangLoader::get_message('edit', 'common') . '" class="fa fa-edit"></a>
									<a href="' . $_data->get('U_DELETE_MEDIA') . '" title="' . LangLoader::get_message('delete', 'common') . '" class="fa fa-delete" data-confirmation="delete-element"></a>
								';}$_result.='
							</span>
						</h2>
					</header>
					<div class="content">
					
						<div class="options infos">
							<h6>' . $_data->get('L_MEDIA_INFOS') . '</h6>
								<span class="text-strong">' . $_data->get('L_DATE') . ' : </span><span>' . $_data->get('DATE') . '</span><br/>
								<span class="text-strong">' . $_data->get('L_BY') . ' : </span><span>' . $_data->get('BY') . '</span><br/>
								<span class="text-strong">' . $_data->get('L_VIEWED') . ' : </span><span>' . $_data->get('HITS') . '</span><br/>
							';if ($_data->is_true($_data->get('C_DISPLAY_NOTATION'))){$_result.='
							<div class="center text-strong">' . $_data->get('KERNEL_NOTATION') . '</div>
							';}$_result.='
						</div>
						
						<div class="media-desc">
							' . $_data->get('CONTENTS') . '
						</div>
						<div class="spacer"></div>
						
						<div class="media-content">
							';$_subtpl=$_data->get('media_format');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
						</div>
		
						';if ($_data->is_true($_data->get('C_DISPLAY_COMMENTS'))){$_result.='
						' . $_data->get('COMMENTS') . '
						';}$_result.='
					</div>
					<footer></footer>
				</article>
			</div>
			<footer></footer>
		</section>
		';}$_result.='
'; ?>