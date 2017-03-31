<?php $_result='';if ($_data->is_true($_data->get('C_USER_NOTCONNECTED'))){$_result.='
	<script>
	<!--
	function check_connect()
	{
		if( document.getElementById(\'login\').value == "" )
		{
			alert("' . $_data->get('L_REQUIRE_PSEUDO') . '");
			return false;
		}
		if( document.getElementById(\'password\').value == "" )
		{
			alert("' . $_data->get('L_REQUIRE_PASSWORD') . '");
			return false;
		}
	}
	-->
	</script>
';}$_result.='
<script>
	<!--
	function open_submenu(myid)
	{
		jQuery(\'#\' + myid).toggleClass(\'active\');
	}
	-->
</script>


';if ($_data->is_true($_data->get('C_VERTICAL'))){$_result.='
	';if ($_data->is_true($_data->get('C_USER_NOTCONNECTED'))){$_result.='
		<div id="connect-menu" class="module-mini-container">
			<div class="module-mini-top">
				<h5 class="sub-title">' . $_data->get('L_CONNECT') . '</h5>
			</div>
			<div class="module-mini-contents vertical-fieldset">
				<form action="' . $_data->get('U_CONNECT') . '" method="post" onsubmit="return check_connect();" class="form-element">
					<label>' . $_data->get('L_PSEUDO') . '<br /><input type="text" id="login" name="login" placeholder="' . $_data->get('L_PSEUDO') . '" maxlength="25"></label>
					<label>' . $_data->get('L_PASSWORD') . '<br /><input type="password" id="password" name="password" placeholder="' . $_data->get('L_PASSWORD') . '" maxlength="30"></label>
					<label>' . $_data->get('L_AUTOCONNECT') . ' <input checked="checked" type="checkbox" name="autoconnect"></label>
					<input type="hidden" name="redirect" value="' . $_data->get('SITE_REWRITED_SCRIPT') . '">
					<input type="hidden" name="token" value="' . $_data->get('TOKEN') . '">
					<button type="submit" name="authenticate" value="internal" class="submit">' . $_data->get('L_CONNECT') . '</button>
				</form>
				<div class="connect-register">
					';if ($_data->is_true($_data->get('C_USER_REGISTER'))){$_result.='
						<a class="small" href="' . $_functions->relative_url(UserUrlBuilder::registration()) . '"><i class="fa fa-ticket"></i> ' . $_data->get('L_REGISTER') . '</a>
						<br />
						';if ($_data->is_true($_data->get('C_FB_AUTH_ENABLED'))){$_result.='
						<a class="social-connect fb" href="' . $_functions->relative_url(UserUrlBuilder::connect('fb')) . '" title="' . LangLoader::get_message('facebook-connect', 'user-common') . '"><i class="fa fa-facebook"></i><span>' . LangLoader::get_message('facebook-connect', 'user-common') . '</span></a>
						';}$_result.='
						';if ($_data->is_true($_data->get('C_GOOGLE_AUTH_ENABLED'))){$_result.='
						<a class="social-connect google" href="' . $_functions->relative_url(UserUrlBuilder::connect('google')) . '" title="' . LangLoader::get_message('google-connect', 'user-common') . '"><i class="fa fa-google-plus"></i><span>' . LangLoader::get_message('google-connect', 'user-common') . '</span></a>
						';}$_result.='
					';}$_result.='
					<br />
					<a class="forgot-pass small" href="' . $_functions->relative_url(UserUrlBuilder::forget_password()) . '"><i class="fa fa-question-circle"></i> ' . $_data->get('L_FORGOT_PASS') . '</a>
				</div>
			</div>
			<div class="module-mini-bottom">
			</div>
		</div>
	';}else{$_result.='
		<div id="connect-menu" class="module-mini-container">
			<div class="module-mini-top">
				<h5 class="sub-title">' . $_data->get('L_PROFIL') . '</h5>
			</div>
			<div class="module-mini-contents vertical-fieldset">
				<ul class="connect-content">
					<li>
						<i class="fa fa-user"></i>
						<a href="' . $_functions->relative_url(UserUrlBuilder::home_profile()) . '" class="small"> ' . $_data->get('L_PRIVATE_PROFIL') . '</a>
					</li>
					<li>
						<i class="fa fa-envelope';if ($_data->is_true($_data->get('C_HAS_PM'))){$_result.=' blink';}$_result.='"></i>
						<a href="' . $_data->get('U_USER_PM') . '" class="small"> ' . $_data->get('L_NBR_PM') . '</a>
					</li>
					';if ($_data->is_true($_data->get('C_ADMIN_AUTH'))){$_result.='
					<li>
						<i class="fa fa-wrench';if ($_data->is_true($_data->get('C_UNREAD_ALERT'))){$_result.=' blink';}$_result.='"></i>
						<a href="' . $_functions->relative_url(UserUrlBuilder::administration()) . '" class="small"> ' . $_data->get('L_ADMIN_PANEL') . '</a>
					</li>
					';}$_result.='
					';if ($_data->is_true($_data->get('C_MODERATOR_AUTH'))){$_result.='
					<li>
						<i class="fa fa-legal"></i>
						<a href="' . $_functions->relative_url(UserUrlBuilder::moderation_panel()) . '" class="small"> ' . $_data->get('L_MODO_PANEL') . '</a>
					</li>
					';}$_result.='
					<li>
						<i class="fa fa-file-text';if ($_data->is_true($_data->get('C_UNREAD_CONTRIBUTION'))){$_result.=' blink';}$_result.='"></i>
						<a href="' . $_functions->relative_url(UserUrlBuilder::contribution_panel()) . '" class="small"> ' . $_data->get('L_CONTRIBUTION_PANEL') . '</a>
					</li>
					<li>
						<i class="fa fa-sign-out"></i>
						<a href="' . $_functions->relative_url(UserUrlBuilder::disconnect()) . '" class="small"> ' . $_data->get('L_DISCONNECT') . '</a>
					</li>
				</ul>
			</div>
			<div class="module-mini-bottom">
			</div>
		</div>
	';}$_result.='
';}else{$_result.='
	';if ($_data->is_true($_data->get('C_USER_NOTCONNECTED'))){$_result.='
	<div id="connect-menu">
		<div class="horizontal-fieldset">
			<a href="" class="js-menu-button" onclick="open_submenu(\'connect-menu\');return false;" title="' . $_data->get('L_CONNECT') . '"><i class="fa fa-sign-in"></i> ' . $_data->get('L_CONNECT') . '</a>
			<div class="connect-content">
				<form action="' . $_data->get('U_CONNECT') . '" method="post" onsubmit="return check_connect();">
					<input type="text" id="login" name="login" placeholder="' . $_data->get('L_PSEUDO') . '" class="connect_form">
					<input type="password" id="password" name="password" class="connect_form" placeholder="' . $_data->get('L_PASSWORD') . '">
					<input checked="checked" type="checkbox" name="autoconnect">
					<input type="hidden" name="redirect" value="' . $_data->get('SITE_REWRITED_SCRIPT') . '">
					<input type="hidden" name="token" value="' . $_data->get('TOKEN') . '">
					<button type="submit" name="authenticate" value="internal" class="submit">' . $_data->get('L_CONNECT') . '</button>
				</form>
				';if ($_data->is_true($_data->get('C_USER_REGISTER'))){$_result.='
					<form action="' . $_functions->relative_url(UserUrlBuilder::registration()) . '" method="post">
						<button type="submit" name="register" value="true" class="submit">' . $_data->get('L_REGISTER') . '</button>
						<input type="hidden" name="token" value="' . $_data->get('TOKEN') . '">
					</form>
					';if ($_data->is_true($_data->get('C_FB_AUTH_ENABLED'))){$_result.='
					<a class="social-connect fb" href="' . $_functions->relative_url(UserUrlBuilder::connect('fb')) . '" title="' . LangLoader::get_message('facebook-connect', 'user-common') . '"><i class="fa fa-facebook"></i><span>' . LangLoader::get_message('facebook-connect', 'user-common') . '</span></a>
					';}$_result.='
					';if ($_data->is_true($_data->get('C_GOOGLE_AUTH_ENABLED'))){$_result.='
					<a class="social-connect google" href="' . $_functions->relative_url(UserUrlBuilder::connect('google')) . '" title="' . LangLoader::get_message('google-connect', 'user-common') . '"><i class="fa fa-google-plus"></i><span>' . LangLoader::get_message('google-connect', 'user-common') . '</span></a>
					';}$_result.='
				';}$_result.='
				<a class="forgot-pass small" href="' . $_functions->relative_url(UserUrlBuilder::forget_password()) . '">' . $_data->get('L_FORGOT_PASS') . '</a>
			</div>
		</div>
	</div>
	';}else{$_result.='
	<div id="connect-menu">
		<div class="horizontal-fieldset">
			<a href="" class="js-menu-button" onclick="open_submenu(\'connect-menu\');return false;" title="' . $_data->get('L_PROFIL') . '"><i class="fa fa-bars"></i> ' . $_data->get('L_PROFIL') . '</a>
			<ul class="connect-content">
				<li>
					<a href="' . $_functions->relative_url(UserUrlBuilder::home_profile()) . '" title="' . $_data->get('L_PRIVATE_PROFIL') . '" class="block-round">
						<i class="fa fa-user"></i>
						<span>' . $_data->get('L_PRIVATE_PROFIL') . '</span>
					</a>
				</li>
				<li>
					<a href="' . $_data->get('U_USER_PM') . '" title="' . $_data->get('L_NBR_PM') . '" class="block-round';if ($_data->is_true($_data->get('C_HAS_PM'))){$_result.=' cyan';}$_result.='">
						<i class="fa fa-envelope';if ($_data->is_true($_data->get('C_HAS_PM'))){$_result.=' blink';}$_result.='"></i>
						<span>' . $_data->get('L_NBR_PM') . '</span>
					</a>
				</li>
				';if ($_data->is_true($_data->get('C_ADMIN_AUTH'))){$_result.='
				<li>
					<a href="' . $_functions->relative_url(UserUrlBuilder::administration()) . '" title="' . $_data->get('L_ADMIN_PANEL') . '';if ($_data->is_true($_data->get('C_UNREAD_ALERT'))){$_result.=' (' . $_data->get('NUMBER_UNREAD_ALERTS') . ')';}$_result.='" class="block-round';if ($_data->is_true($_data->get('C_UNREAD_ALERT'))){$_result.=' cyan';}$_result.='">
						<i class="fa fa-wrench';if ($_data->is_true($_data->get('C_UNREAD_ALERT'))){$_result.=' blink';}$_result.='"></i>
						<span>' . $_data->get('L_ADMIN_PANEL') . '';if ($_data->is_true($_data->get('C_UNREAD_ALERT'))){$_result.=' (' . $_data->get('NUMBER_UNREAD_ALERTS') . ')';}$_result.='</span>
					</a>
				</li>
				';}$_result.='
				';if ($_data->is_true($_data->get('C_MODERATOR_AUTH'))){$_result.='
				<li>
					<a href="' . $_functions->relative_url(UserUrlBuilder::moderation_panel()) . '" title="' . $_data->get('L_MODO_PANEL') . '" class="block-round">
						<i class="fa fa-legal"></i>
						<span>' . $_data->get('L_MODO_PANEL') . '</span>
					</a>
				</li>
				';}$_result.='
				<li>
					<a href="' . $_functions->relative_url(UserUrlBuilder::contribution_panel()) . '" title="' . $_data->get('L_CONTRIBUTION_PANEL') . '';if ($_data->is_true($_data->get('C_KNOWN_NUMBER_OF_UNREAD_CONTRIBUTION'))){$_result.=' (' . $_data->get('NUMBER_UNREAD_CONTRIBUTIONS') . ')';}$_result.='" class="block-round';if ($_data->is_true($_data->get('C_UNREAD_CONTRIBUTION'))){$_result.=' cyan';}$_result.='">
						<i class="fa fa-file-text';if ($_data->is_true($_data->get('C_UNREAD_CONTRIBUTION'))){$_result.=' blink';}$_result.='"></i>
						<span>' . $_data->get('L_CONTRIBUTION_PANEL') . '';if ($_data->is_true($_data->get('C_KNOWN_NUMBER_OF_UNREAD_CONTRIBUTION'))){$_result.=' (' . $_data->get('NUMBER_UNREAD_CONTRIBUTIONS') . ')';}$_result.='</span>
					</a>
				</li>
				<li>
					<a href="' . $_functions->relative_url(UserUrlBuilder::disconnect()) . '" title="' . $_data->get('L_DISCONNECT') . '" class="block-round">
						<i class="fa fa-sign-out"></i>
						<span>' . $_data->get('L_DISCONNECT') . '</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	';}$_result.='
';}$_result.='
'; ?>