<?php $_result='<section id="module-web">
	<header>
		<h1>
			<a href="' . $_data->get('U_SYNDICATION') . '" title="' . LangLoader::get_message('syndication', 'common') . '"><i class="fa fa-syndication"></i></a>
			' . $_functions->i18n('module_title') . '';if (!$_data->is_true($_data->get('C_ROOT_CATEGORY'))){$_result.=' - ' . $_data->get('CATEGORY_NAME') . '';}$_result.=' ';if ($_data->is_true($_data->get('IS_ADMIN'))){$_result.='<a href="' . $_data->get('U_EDIT_CATEGORY') . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit smaller"></i></a>';}$_result.='
		</h1>
	</header>
	<div class="content">
		';if (!$_data->is_true($_data->get('C_VISIBLE'))){$_result.='
			';$_subtpl=$_data->get('NOT_VISIBLE_MESSAGE');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
		';}$_result.='
		<article id="article-web-' . $_data->get('ID') . '" itemscope="itemscope" itemtype="http://schema.org/CreativeWork" class="article-web';if ($_data->is_true($_data->get('C_IS_PARTNER'))){$_result.=' web-partner';}$_result.='';if ($_data->is_true($_data->get('C_IS_PRIVILEGED_PARTNER'))){$_result.=' web-privileged-partner';}$_result.='">
			<header>
				<h2>
					<span id="name" itemprop="name">' . $_data->get('NAME') . '</span>
					<span class="actions">
						';if ($_data->is_true($_data->get('C_EDIT'))){$_result.='
							<a href="' . $_data->get('U_EDIT') . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit"></i></a>
						';}$_result.='
						';if ($_data->is_true($_data->get('C_DELETE'))){$_result.='
							<a href="' . $_data->get('U_DELETE') . '" title="' . LangLoader::get_message('delete', 'common') . '" data-confirmation="delete-element"><i class="fa fa-delete"></i></a>
						';}$_result.='
					</span>
				</h2>
				
				<meta itemprop="url" content="' . $_data->get('U_LINK') . '">
				<meta itemprop="description" content="' . $_functions->escape($_data->get('DESCRIPTION')) . '" />
				';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='
				<meta itemprop="discussionUrl" content="' . $_data->get('U_COMMENTS') . '">
				<meta itemprop="interactionCount" content="' . $_data->get('NUMBER_COMMENTS') . ' UserComments">
				';}$_result.='
				
			</header>
			<div class="content">
				<div class="options infos">
					<div class="center">
						';if ($_data->is_true($_data->get('C_HAS_PARTNER_PICTURE'))){$_result.='
							<img src="' . $_data->get('U_PARTNER_PICTURE') . '" alt="' . $_data->get('NAME') . '" itemprop="image" />
							<div class="spacer"></div>
						';}$_result.='
						';if ($_data->is_true($_data->get('C_VISIBLE'))){$_result.='
							<a href="' . $_data->get('U_VISIT') . '" class="basic-button">
								<i class="fa fa-globe"></i> ' . $_functions->i18n('visit') . '
							</a>
							';if ($_data->is_true($_data->get('IS_USER_CONNECTED'))){$_result.='
							<a href="' . $_data->get('U_DEADLINK') . '" class="basic-button alt" title="' . LangLoader::get_message('deadlink', 'common') . '">
								<i class="fa fa-unlink"></i>
							</a>
							';}$_result.='
						';}$_result.='
					</div>
					<h6>' . $_functions->i18n('link_infos') . '</h6>
					<span class="text-strong">' . $_functions->i18n('visits_number') . ' : </span><span>' . $_data->get('NUMBER_VIEWS') . '</span><br/>
					<span class="text-strong">' . LangLoader::get_message('category', 'categories-common') . ' : </span><span><a itemprop="about" class="small" href="' . $_data->get('U_CATEGORY') . '">' . $_data->get('CATEGORY_NAME') . '</a></span><br/>
					';if ($_data->is_true($_data->get('C_KEYWORDS'))){$_result.='
						<span class="text-strong">' . LangLoader::get_message('form.keywords', 'common') . ' : </span>
						<span>
							';foreach($_data->get_block('keywords') as $_tmp_keywords){$_result.='
								<a itemprop="keywords" class="small" href="' . $_data->get_from_list('URL', $_tmp_keywords) . '">' . $_data->get_from_list('NAME', $_tmp_keywords) . '</a>';if ($_data->is_true($_data->get_from_list('C_SEPARATOR', $_tmp_keywords))){$_result.=', ';}$_result.='
							';}$_result.='
						</span><br/>
					';}$_result.='
					';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='
						<span>';if ($_data->is_true($_data->get('C_COMMENTS'))){$_result.=' ' . $_data->get('NUMBER_COMMENTS') . ' ';}$_result.=' ' . $_data->get('L_COMMENTS') . '</span>
					';}$_result.='
					';if ($_data->is_true($_data->get('C_VISIBLE'))){$_result.='
						';if ($_data->is_true($_data->get('C_NOTATION_ENABLED'))){$_result.='
							<div class="spacer"></div>
							<div class="center">' . $_data->get('NOTATION') . '</div>
						';}$_result.='
					';}$_result.='
				</div>
				
				<div itemprop="text">' . $_data->get('CONTENTS') . '</div>
			</div>
			<aside>
				';$_subtpl=$_data->get('COMMENTS');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
			</aside>
			<footer></footer>
		</article>
	</div>
	<footer></footer>	
</section>
'; ?>