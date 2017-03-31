<?php $_result='<section id="module-news">
	<header>
		<h1>
			<a href="' . $_data->get('U_SYNDICATION') . '" title="' . LangLoader::get_message('syndication', 'common') . '"><i class="fa fa-syndication"></i></a>
			' . $_functions->i18n('news') . '';if (!$_data->is_true($_data->get('C_ROOT_CATEGORY'))){$_result.=' - ' . $_data->get('CATEGORY_NAME') . '';}$_result.=' ';if ($_data->is_true($_data->get('IS_ADMIN'))){$_result.='<a href="' . $_data->get('U_EDIT_CATEGORY') . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit smaller"></i></a>';}$_result.='
		</h1>
	</header>
	<div class="content">
		';if (!$_data->is_true($_data->get('C_VISIBLE'))){$_result.='
			';$_subtpl=$_data->get('NOT_VISIBLE_MESSAGE');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
		';}$_result.='
		<article itemscope="itemscope" itemtype="http://schema.org/CreativeWork" id="article-news-' . $_data->get('ID') . '" class="article-news">
			<header>
				<h2>
					<span itemprop="name">' . $_data->get('NAME') . '</span>
					<span class="actions">
						';if ($_data->is_true($_data->get('C_EDIT'))){$_result.='
							<a href="' . $_data->get('U_EDIT') . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit"></i></a>
						';}$_result.='
						';if ($_data->is_true($_data->get('C_DELETE'))){$_result.='
							<a href="' . $_data->get('U_DELETE') . '" title="' . LangLoader::get_message('delete', 'common') . '" data-confirmation="delete-element"><i class="fa fa-delete"></i></a>
						';}$_result.='
					</span>
				</h2>
	
				<div class="more">
					';if ($_data->is_true($_data->get('C_AUTHOR_DISPLAYED'))){$_result.='
						' . LangLoader::get_message('by', 'common') . '
						';if ($_data->is_true($_data->get('C_AUTHOR_EXIST'))){$_result.='<a itemprop="author" rel="author" class="small ' . $_data->get('USER_LEVEL_CLASS') . '" href="' . $_data->get('U_AUTHOR_PROFILE') . '" ';if ($_data->is_true($_data->get('C_USER_GROUP_COLOR'))){$_result.=' style="color:' . $_data->get('USER_GROUP_COLOR') . '" ';}$_result.='>' . $_data->get('PSEUDO') . '</a>';}else{$_result.='' . $_data->get('PSEUDO') . '';}$_result.=',
					';}$_result.='
					' . TextHelper::lowercase_first(LangLoader::get_message('the', 'common')) . ' <time datetime="';if (!$_data->is_true($_data->get('C_DIFFERED'))){$_result.='' . $_data->get('DATE_ISO8601') . '';}else{$_result.='' . $_data->get('DIFFERED_START_DATE_ISO8601') . '';}$_result.='" itemprop="datePublished">';if (!$_data->is_true($_data->get('C_DIFFERED'))){$_result.='' . $_data->get('DATE') . '';}else{$_result.='' . $_data->get('DIFFERED_START_DATE') . '';}$_result.='</time>
					' . TextHelper::lowercase_first(LangLoader::get_message('in', 'common')) . ' <a itemprop="about" href="' . $_data->get('U_CATEGORY') . '">' . $_data->get('CATEGORY_NAME') . '</a>
					';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='- ';if ($_data->is_true($_data->get('C_COMMENTS'))){$_result.=' ' . $_data->get('NUMBER_COMMENTS') . ' ';}$_result.=' ' . $_data->get('L_COMMENTS') . '';}$_result.='
				</div>
	
				<meta itemprop="url" content="' . $_data->get('U_LINK') . '">
				<meta itemprop="description" content="' . $_functions->escape($_data->get('DESCRIPTION')) . '" />
				';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='
				<meta itemprop="discussionUrl" content="' . $_data->get('U_COMMENTS') . '">
				<meta itemprop="interactionCount" content="' . $_data->get('NUMBER_COMMENTS') . ' UserComments">
				';}$_result.='
	
			</header>
			<div class="content">
				';if ($_data->is_true($_data->get('C_PICTURE'))){$_result.='<img itemprop="thumbnailUrl" src="' . $_data->get('U_PICTURE') . '" alt="' . $_data->get('NAME') . '" title="' . $_data->get('NAME') . '" class="right" />';}$_result.='
	
				<div itemprop="text">' . $_data->get('CONTENTS') . '</div>
			</div>
			<aside>
				';if ($_data->is_true($_data->get('C_SOURCES'))){$_result.='
				<div id="news-sources-container">
					<span class="news-sources-title"><i class="fa fa-map-signs"></i> ' . LangLoader::get_message('form.sources', 'common') . '</span> :
					';foreach($_data->get_block('sources') as $_tmp_sources){$_result.='
					<a itemprop="isBasedOnUrl" href="' . $_data->get_from_list('URL', $_tmp_sources) . '" class="small news-sources-item">' . $_data->get_from_list('NAME', $_tmp_sources) . '</a>';if ($_data->is_true($_data->get_from_list('C_SEPARATOR', $_tmp_sources))){$_result.=', ';}$_result.='
					';}$_result.='
				</div>
				';}$_result.='
	
				';if ($_data->is_true($_data->get('C_KEYWORDS'))){$_result.='
				<div id="news-tags-container">
					<span class="news-tags-title"><i class="fa fa-tags"></i> ' . LangLoader::get_message('form.keywords', 'common') . '</span> :
						';foreach($_data->get_block('keywords') as $_tmp_keywords){$_result.='
							<a itemprop="keywords" rel="tag" href="' . $_data->get_from_list('URL', $_tmp_keywords) . '" class="news-tags-item">' . $_data->get_from_list('NAME', $_tmp_keywords) . '</a>';if ($_data->is_true($_data->get_from_list('C_SEPARATOR', $_tmp_keywords))){$_result.=', ';}$_result.='
						';}$_result.='
				</div>
				';}$_result.='
	
				';if ($_data->is_true($_data->get('C_SUGGESTED_NEWS'))){$_result.='
					<div id="news-suggested-container">
						<span class="news-suggested-title"><i class="fa fa-lightbulb-o"></i> ' . LangLoader::get_message('suggestions', 'common') . ' :</span>
						<ul>
							';foreach($_data->get_block('suggested') as $_tmp_suggested){$_result.='
							<li><a href="' . $_data->get_from_list('URL', $_tmp_suggested) . '" class="news-suggested-item">' . $_data->get_from_list('NAME', $_tmp_suggested) . '</a></li>
							';}$_result.='
						</ul>
					</div>
				';}$_result.='
	
				<hr class="news-separator">
	
				';if ($_data->is_true($_data->get('C_NEWS_NAVIGATION_LINKS'))){$_result.='
				<div class="navigation-link">
					';if ($_data->is_true($_data->get('C_PREVIOUS_NEWS'))){$_result.='
					<span class="navigation-link-previous">
						<a href="' . $_data->get('U_PREVIOUS_NEWS') . '"><i class="fa fa-arrow-circle-left"></i>' . $_data->get('PREVIOUS_NEWS') . '</a>
					</span>
					';}$_result.='
					';if ($_data->is_true($_data->get('C_NEXT_NEWS'))){$_result.='
					<span class="navigation-link-next">
						<a href="' . $_data->get('U_NEXT_NEWS') . '">' . $_data->get('NEXT_NEWS') . '<i class="fa fa-arrow-circle-right"></i></a>
					</span>
					';}$_result.='
					<div class="spacer"></div>
				</div>
				';}$_result.='
	
				';$_subtpl=$_data->get('COMMENTS');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
			</aside>
			<footer></footer>
		</article>
	</div>
	<footer></footer>
</section>
'; ?>