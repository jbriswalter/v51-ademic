<?php $_result='	';$_subtpl=$_data->get('MAINTAIN');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
	<header id="header">
		<div id="top-header">
			<div id="site-infos">
				<div id="site-logo" ';if ($_data->is_true($_data->get('C_HEADER_LOGO'))){$_result.='style="background-image: url(\'' . $_data->get('HEADER_LOGO') . '\');"';}$_result.='></div>
				<div id="site-name-container">
					<a id="site-name" href="' . $_data->get('PATH_TO_ROOT') . '/">' . $_data->get('SITE_NAME') . '</a>
					<span id="site-slogan">' . $_data->get('SITE_SLOGAN') . '</span>
				</div>
			</div>
			<div id="top-header-content">
			';if ($_data->is_true($_data->get('C_MENUS_HEADER_CONTENT'))){$_result.='
				';foreach($_data->get_block('menus_header') as $_tmp_menus_header){$_result.='
				' . $_data->get_from_list('MENU', $_tmp_menus_header) . '
				';}$_result.='
			';}$_result.='
			</div>
		</div>
		<div id="sub-header">
			<div id="sub-header-content">
			';if ($_data->is_true($_data->get('C_MENUS_SUB_HEADER_CONTENT'))){$_result.='
				';foreach($_data->get_block('menus_sub_header') as $_tmp_menus_sub_header){$_result.='
				' . $_data->get_from_list('MENU', $_tmp_menus_sub_header) . '
				';}$_result.='
			';}$_result.='
			</div>
			<div class="spacer"></div>
		</div>
		<div class="spacer"></div>
	</header>

	<div id="global">
		';if ($_data->is_true($_data->get('C_COMPTEUR'))){$_result.='
		<div id="compteur">
			<span class="text-strong">' . $_data->get('L_VISIT') . ' : </span>' . $_data->get('COMPTEUR_TOTAL') . '
			<br />
			<span class="text-strong">' . $_data->get('L_TODAY') . ' : </span>' . $_data->get('COMPTEUR_DAY') . '
		</div>
		';}$_result.='

		';if ($_data->is_true($_data->get('C_MENUS_LEFT_CONTENT'))){$_result.='
		<aside id="menu-left">
			';foreach($_data->get_block('menus_left') as $_tmp_menus_left){$_result.='
			' . $_data->get_from_list('MENU', $_tmp_menus_left) . '
			';}$_result.='
		</aside>
		';}$_result.='

		<div id="main" class="';if ($_data->is_true($_data->get('C_MENUS_LEFT_CONTENT'))){$_result.='main-with-left';}$_result.='';if ($_data->is_true($_data->get('C_MENUS_RIGHT_CONTENT'))){$_result.=' main-with-right';}$_result.='" role="main">
			';if ($_data->is_true($_data->get('C_MENUS_TOPCENTRAL_CONTENT'))){$_result.='
			<div id="top-content">
				';foreach($_data->get_block('menus_top_central') as $_tmp_menus_top_central){$_result.='
				' . $_data->get_from_list('MENU', $_tmp_menus_top_central) . '
				';}$_result.='
			</div>
			<div class="spacer"></div>
			';}$_result.='

			<div id="main-content" itemprop="mainContentOfPage">
				';$_subtpl=$_data->get('ACTIONS_MENU');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
				<nav id="breadcrumb" itemprop="breadcrumb">
					<ol>
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
							<a href="' . $_data->get('START_PAGE') . '" title="' . $_data->get('L_INDEX') . '" itemprop="url">
								<span itemprop="title">' . $_data->get('L_INDEX') . '</span>
							</a>
						</li>
						';foreach($_data->get_block('link_bread_crumb') as $_tmp_link_bread_crumb){$_result.='
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" ';if ($_data->is_true($_data->get_from_list('C_CURRENT', $_tmp_link_bread_crumb))){$_result.=' class="current" ';}$_result.='>
							<a href="' . $_data->get_from_list('URL', $_tmp_link_bread_crumb) . '" title="' . $_data->get_from_list('TITLE', $_tmp_link_bread_crumb) . '" itemprop="url">
								<span itemprop="title">' . $_data->get_from_list('TITLE', $_tmp_link_bread_crumb) . '</span>
							</a>
						</li>
						';}$_result.='
					</ol>
				</nav>
				';$_subtpl=$_data->get('KERNEL_MESSAGE');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
				' . $_data->get('CONTENT') . '
			</div>

			';if ($_data->is_true($_data->get('C_MENUS_BOTTOM_CENTRAL_CONTENT'))){$_result.='
			<div id="bottom-content">
				';foreach($_data->get_block('menus_bottom_central') as $_tmp_menus_bottom_central){$_result.='
				' . $_data->get_from_list('MENU', $_tmp_menus_bottom_central) . '
				';}$_result.='
			</div>
			';}$_result.='
		</div>

		';if ($_data->is_true($_data->get('C_MENUS_RIGHT_CONTENT'))){$_result.='
		<aside id="menu-right">
			';foreach($_data->get_block('menus_right') as $_tmp_menus_right){$_result.='
			' . $_data->get_from_list('MENU', $_tmp_menus_right) . '
			';}$_result.='
		</aside>
		';}$_result.='

		<div class="spacer"></div>

		';if ($_data->is_true($_data->get('C_MENUS_TOP_FOOTER_CONTENT'))){$_result.='
		<div id="top-footer">
			';foreach($_data->get_block('menus_top_footer') as $_tmp_menus_top_footer){$_result.='
			' . $_data->get_from_list('MENU', $_tmp_menus_top_footer) . '
			';}$_result.='
			<div class="spacer"></div>
		</div>
		';}$_result.='

	</div>

	<footer id="footer">

		';if ($_data->is_true($_data->get('C_MENUS_FOOTER_CONTENT'))){$_result.='
		<div class="footer-content">
			';foreach($_data->get_block('menus_footer') as $_tmp_menus_footer){$_result.='
			' . $_data->get_from_list('MENU', $_tmp_menus_footer) . '
			';}$_result.='
		</div>
		';}$_result.='

		<div class="footer-infos">
			<span>
				' . $_data->get('L_POWERED_BY') . ' <a href="http://www.phpboost.com" title="PHPBoost">PHPBoost</a> ' . $_data->get('L_PHPBOOST_RIGHT') . '
			</span>
			';if ($_data->is_true($_data->get('C_DISPLAY_BENCH'))){$_result.='
			<span>
				&nbsp;|&nbsp;
				' . $_data->get('L_ACHIEVED') . ' ' . $_data->get('BENCH') . '' . $_data->get('L_UNIT_SECOND') . ' - ' . $_data->get('REQ') . ' ' . $_data->get('L_REQ') . ' - ' . $_data->get('MEMORY_USED') . '
			</span>
			';}$_result.='
			';if ($_data->is_true($_data->get('C_DISPLAY_AUTHOR_THEME'))){$_result.='
			<span>
				| ' . $_data->get('L_THEME') . ' ' . $_data->get('L_THEME_NAME') . ' ' . $_data->get('L_BY') . '
				<a href="' . $_data->get('U_THEME_AUTHOR_LINK') . '">' . $_data->get('L_THEME_AUTHOR') . '</a>
			</span>
			';}$_result.='
		</div>

	</footer>'; ?>