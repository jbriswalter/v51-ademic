<?php $_result='<section id="module-articles">
	<header>
		<h1>
			<a href="' . $_data->get('U_SYNDICATION') . '" title="' . LangLoader::get_message('syndication', 'common') . '"><i class="fa fa-syndication"></i></a>
			' . $_functions->i18n('articles') . '';if (!$_data->is_true($_data->get('C_ROOT_CATEGORY'))){$_result.=' - ' . $_data->get('CATEGORY_NAME') . '';}$_result.=' ';if ($_data->is_true($_data->get('IS_ADMIN'))){$_result.='<a href="' . $_data->get('U_EDIT_CATEGORY') . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit smaller"></i></a>';}$_result.='
		</h1>
	</header>
	<div class="content">
		';$_subtpl=$_data->get('NOT_VISIBLE_MESSAGE');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
		<article itemscope="itemscope" itemtype="http://schema.org/Article" id="article-articles-' . $_data->get('ID') . '" class="article-articles">
			<header>
				<h2>
					<span itemprop="name">' . $_data->get('TITLE') . '</span>
					<span class="actions">
						';if ($_data->is_true($_data->get('C_EDIT'))){$_result.='
							<a href="' . $_data->get('U_EDIT_ARTICLE') . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit"></i></a>
						';}$_result.='
						';if ($_data->is_true($_data->get('C_DELETE'))){$_result.='
							<a href="' . $_data->get('U_DELETE_ARTICLE') . '" title="' . LangLoader::get_message('delete', 'common') . '" data-confirmation="delete-element"><i class="fa fa-delete"></i></a>
						';}$_result.='
							<a href="' . $_data->get('U_PRINT_ARTICLE') . '" title="' . LangLoader::get_message('printable_version', 'main') . '" target="blank"><i class="fa fa-print"></i></a>
					</span>
				</h2>
				
				<div class="more">
					';if ($_data->is_true($_data->get('C_AUTHOR_DISPLAYED'))){$_result.='
					<i class="fa fa-user" title="' . LangLoader::get_message('author', 'common') . '"></i>
					';if ($_data->is_true($_data->get('C_AUTHOR_EXIST'))){$_result.='<a itemprop="author" href="' . $_data->get('U_AUTHOR') . '" class="' . $_data->get('USER_LEVEL_CLASS') . '" ';if ($_data->is_true($_data->get('C_USER_GROUP_COLOR'))){$_result.=' style="color:' . $_data->get('USER_GROUP_COLOR') . '"';}$_result.='>&nbsp;' . $_data->get('PSEUDO') . '&nbsp;</a>';}else{$_result.='' . $_data->get('PSEUDO') . '';}$_result.='|&nbsp;
					';}$_result.='
					<i class="fa fa-calendar" title="' . LangLoader::get_message('date', 'date-common') . '"></i>&nbsp;<time datetime="';if (!$_data->is_true($_data->get('C_DIFFERED'))){$_result.='' . $_data->get('DATE_ISO8601') . '';}else{$_result.='' . $_data->get('PUBLISHING_START_DATE_ISO8601') . '';}$_result.='" itemprop="datePublished">';if (!$_data->is_true($_data->get('C_DIFFERED'))){$_result.='' . $_data->get('DATE') . '';}else{$_result.='' . $_data->get('PUBLISHING_START_DATE') . '';}$_result.='</time>&nbsp;|
					&nbsp;<i class="fa fa-eye" title="' . $_data->get('NUMBER_VIEW') . ' ' . $_functions->i18n('articles.sort_field.views') . '"></i>&nbsp;<span title="' . $_data->get('NUMBER_VIEW') . ' ' . $_functions->i18n('articles.sort_field.views') . '">' . $_data->get('NUMBER_VIEW') . '</span>
					';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='
						&nbsp;|&nbsp;<i class="fa fa-comment" title="' . LangLoader::get_message('comments', 'comments-common') . '"></i><a itemprop="discussionUrl" class="small" href="' . $_data->get('U_COMMENTS') . '">&nbsp;' . $_data->get('L_COMMENTS') . '</a>
					';}$_result.='
					&nbsp;|&nbsp;<i class="fa fa-folder" title="' . LangLoader::get_message('category', 'categories-common') . '"></i>&nbsp;<a itemprop="about" class="small" href="' . $_data->get('U_CATEGORY') . '">' . $_data->get('CATEGORY_NAME') . '</a>
					';if ($_data->is_true($_data->get('C_KEYWORDS'))){$_result.='
					&nbsp;|&nbsp;<i title="' . LangLoader::get_message('form.keywords', 'common') . '" class="fa fa-tags"></i> 
						';foreach($_data->get_block('keywords') as $_tmp_keywords){$_result.='
							<a itemprop="keywords" href="' . $_data->get_from_list('URL', $_tmp_keywords) . '">' . $_data->get_from_list('NAME', $_tmp_keywords) . '</a>';if ($_data->is_true($_data->get_from_list('C_SEPARATOR', $_tmp_keywords))){$_result.=', ';}$_result.='
						';}$_result.='
					';}$_result.='
				</div>
				
				<meta itemprop="url" content="' . $_data->get('U_ARTICLE') . '">
				<meta itemprop="description" content="' . $_functions->escape($_data->get('DESCRIPTION')) . '">
				<meta itemprop="datePublished" content="';if (!$_data->is_true($_data->get('C_DIFFERED'))){$_result.='' . $_data->get('DATE_ISO8601') . '';}else{$_result.='' . $_data->get('PUBLISHING_START_DATE_ISO8601') . '';}$_result.='">
				<meta itemprop="discussionUrl" content="' . $_data->get('U_COMMENTS') . '">
				';if ($_data->is_true($_data->get('C_HAS_PICTURE'))){$_result.='<meta itemprop="thumbnailUrl" content="' . $_data->get('PICTURE') . '">';}$_result.='
				<meta itemprop="interactionCount" content="' . $_data->get('NUMBER_COMMENTS') . ' UserComments">
			</header>
			<div class="content">
				';if ($_data->is_true($_data->get('C_PAGINATION'))){$_result.='
					';$_subtpl=$_data->get('FORM');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
					<div class="spacer"></div>
				';}$_result.='
				';if ($_data->is_true($_data->get('PAGE_NAME'))){$_result.='
					<h2 class="title page_name">' . $_data->get('PAGE_NAME') . '</h2>
				';}$_result.='
					<div itemprop="text">' . $_data->get('CONTENTS') . '</div>
	
				<hr />
	
				';if ($_data->is_true($_data->get('C_PAGINATION'))){$_result.='
					<div class="pages-pagination right">
						';if ($_data->is_true($_data->get('C_NEXT_PAGE'))){$_result.='
						<a href="' . $_data->get('U_NEXT_PAGE') . '">' . $_data->get('L_NEXT_TITLE') . ' <i class="fa fa-arrow-right"></i></a>
						';}else{$_result.='
						&nbsp;
						';}$_result.='
					</div>
					<div class="pages-pagination center">';$_subtpl=$_data->get('PAGINATION_ARTICLES');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='</div>
					<div class="pages-pagination">
						';if ($_data->is_true($_data->get('C_PREVIOUS_PAGE'))){$_result.='
						<a href="' . $_data->get('U_PREVIOUS_PAGE') . '"><i class="fa fa-arrow-left"></i> ' . $_data->get('L_PREVIOUS_TITLE') . '</a>
						';}$_result.='
					</div>
				';}$_result.='
				<div class="spacer"></div>
			</div>
			<aside>
				';if ($_data->is_true($_data->get('C_SOURCES'))){$_result.='
				<div id="articles-sources-container">
					<span>' . LangLoader::get_message('form.sources', 'common') . '</span> :
					';foreach($_data->get_block('sources') as $_tmp_sources){$_result.='
					<a itemprop="isBasedOnUrl" href="' . $_data->get_from_list('URL', $_tmp_sources) . '" class="small">' . $_data->get_from_list('NAME', $_tmp_sources) . '</a>';if ($_data->is_true($_data->get_from_list('C_SEPARATOR', $_tmp_sources))){$_result.=', ';}$_result.='
					';}$_result.='
				</div>
				';}$_result.='
				';if ($_data->is_true($_data->get('C_DATE_UPDATED'))){$_result.='
				<div><i>' . LangLoader::get_message('form.date.update', 'common') . ' : <time datetime="' . $_data->get('DATE_UPDATED_ISO8601') . '" itemprop="datePublished">' . $_data->get('DATE_UPDATED') . '</time></i></div>
				';}$_result.='
				<div class="spacer"></div>
				';if ($_data->is_true($_data->get('C_NOTATION_ENABLED'))){$_result.='
				<div class="left smaller">
					' . $_data->get('KERNEL_NOTATION') . '
				</div>
				';}$_result.='
				<div class="spacer"></div>
				';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='
					';$_subtpl=$_data->get('COMMENTS');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
				';}$_result.='
			</aside>
			<footer></footer>
		</article>
	</div>
	<footer></footer>
</section>
'; ?>