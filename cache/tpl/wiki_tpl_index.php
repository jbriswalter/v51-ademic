<?php $_result='		<section id="module-wiki">					
			<header>
				<h1>
					<a href="' . $_functions->relative_url(SyndicationUrlBuilder::rss('wiki')) . '" title="' . LangLoader::get_message('syndication', 'common') . '" class="fa fa-syndication"></a>
					' . $_data->get('TITLE') . '
				</h1>
			</header>
			<div class="content">
				';$_subtpl=$_data->get('wiki_tools');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
				<br /><br />
				' . $_data->get('INDEX_TEXT') . '
				<br />
				';foreach($_data->get_block('cat_list') as $_tmp_cat_list){$_result.='
					<hr /><br />
					<strong><em>' . $_data->get_from_list('L_CATS', $_tmp_cat_list) . '</em></strong>
					<br /><br />
					';foreach($_data->get_block_from_list('list', $_tmp_cat_list) as $_tmp_cat_list_list){$_result.='
						<i class="fa fa-folder"></i> <a href="' . $_data->get('PATH_TO_ROOT') . '/wiki/' . $_data->get_from_list('U_CAT', $_tmp_cat_list_list) . '">' . $_data->get_from_list('CAT', $_tmp_cat_list_list) . '</a><br />
					';}$_result.='
					' . $_data->get('L_NO_CAT') . '
				';}$_result.='
				<br /><br />
				<div class="options">
					<a href="' . $_data->get('PATH_TO_ROOT') . '/wiki/' . $_data->get('U_EXPLORER') . '" title="' . $_data->get('L_EXPLORER') . '">
						<i class="fa fa-folder-open"></i>
						' . $_data->get('L_EXPLORER') . '
					</a>
				</div>
				<br />
				';foreach($_data->get_block('last_articles') as $_tmp_last_articles){$_result.='
				<hr /><br />
				<table id="table">
					<thead>
						<tr> 
							<th colspan="2">
								';if ($_data->is_true($_data->get_from_list('C_ARTICLES', $_tmp_last_articles))){$_result.='<a href="' . $_functions->relative_url(SyndicationUrlBuilder::rss('wiki')) . '" class="fa fa-syndication" title="' . LangLoader::get_message('syndication', 'common') . '"></a> ';}$_result.='<strong><em>' . $_data->get_from_list('L_ARTICLES', $_tmp_last_articles) . '</em></strong>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							';foreach($_data->get_block_from_list('list', $_tmp_last_articles) as $_tmp_last_articles_list){$_result.='
							' . $_data->get_from_list('TR', $_tmp_last_articles_list) . '
								<td class="left" style="width:50%;">
									<i class="fa fa-file-text"></i> <a href="' . $_data->get('PATH_TO_ROOT') . '/wiki/' . $_data->get_from_list('U_ARTICLE', $_tmp_last_articles_list) . '">' . $_data->get_from_list('ARTICLE', $_tmp_last_articles_list) . '</a>
								</td>
							';}$_result.='
							' . $_data->get('L_NO_ARTICLE') . '
						</tr>
					</tbody>
				</table>
				';}$_result.='
			</div>
			<footer></footer>
		</section>
		
'; ?>