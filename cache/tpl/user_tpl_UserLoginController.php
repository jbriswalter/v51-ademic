<?php $_result='';if ($_data->is_true($_data->get('C_USER_LOGIN'))){$_result.='
	';$_subtpl=$_data->get('ERROR_MESSAGE');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
	';$_subtpl=$_data->get('LOGIN_FORM');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
	<div class="center">
		';if ($_data->is_true($_data->get('C_REGISTRATION_ENABLED'))){$_result.=' 
		<a href="' . $_data->get('U_REGISTER') . '"><i class="fa fa-ticket"></i> ' . $_functions->i18n('registration') . '</a><br />
			';if ($_data->is_true($_data->get('C_FB_AUTH_ENABLED'))){$_result.='
			<a class="social-connect fb" href="' . $_functions->relative_url(UserUrlBuilder::connect('fb')) . '" title="' . LangLoader::get_message('facebook-connect', 'user-common') . '"><i class="fa fa-facebook"></i></a>
			';}$_result.='
			';if ($_data->is_true($_data->get('C_GOOGLE_AUTH_ENABLED'))){$_result.='
			<a class="social-connect google" href="' . $_functions->relative_url(UserUrlBuilder::connect('google')) . '" title="' . LangLoader::get_message('google-connect', 'user-common') . '"><i class="fa fa-google-plus"></i></a>
			';}$_result.='
		';}$_result.='
		<div class="spacer"></div>
		<a href="' . $_data->get('U_FORGET_PASSWORD') . '"><i class="fa fa-question-circle"></i> ' . $_data->get('L_FORGET_PASSWORD') . '</a>
	</div>
';}else{$_result.='
	<div id="global" class="global-maintain">
		';if ($_data->is_true($_data->get('C_MAINTAIN'))){$_result.='
			<div id="maintain" class="center">
				' . $_data->get('L_MAINTAIN') . '
				
				';if ($_data->is_true($_data->get('C_DISPLAY_DELAY'))){$_result.='
				<div class="delay">
					' . LangLoader::get_message('maintain_delay', 'main') . '
					<div id="release">' . LangLoader::get_message('loading', 'main') . '...</div>
				</div>
				
				<script>
				<!--
				var release_timeout_seconds = 0;
				function release(year, month, day, hour, minute, second)
				{
					if(document.getElementById(\'release\'))
					{
						var sp_day = 86400;
						var sp_hour = 3600;
						var sp_minute = 60;
						
						now = new Date(' . $_data->get('MAINTAIN_NOW_FORMAT') . '+release_timeout_seconds++);
						end = new Date(year, month, day, hour, minute, second);
						
						release_time = (end.getTime() - now.getTime())/1000;
						if( release_time <= 0 )
						{
							document.location.reload();
							release_time = \'0\';
						}
						else
							timeout = setTimeout(\'release(\'+year+\', \'+month+\', \'+day+\', \'+hour+\', \'+minute+\', \'+second+\')\', 1000);
							
							release_days = Math.floor(release_time/sp_day);
							release_time -= (release_days * sp_day);
							
							release_hours = Math.floor(release_time/sp_hour);
							release_time -= (release_hours * sp_hour);
							
							release_minutes = Math.floor(release_time/sp_minute);
							release_time -= (release_minutes * sp_minute);
							
							release_seconds = Math.floor(release_time);
							release_seconds = (release_seconds < 10) ? \'0\' + release_seconds : release_seconds;
							
							document.getElementById(\'release\').innerHTML = \'<strong>\' + release_days + \'</strong> ' . LangLoader::get_message('days', 'date-common') . ' <strong>\' + release_hours + \'</strong> ' . LangLoader::get_message('hours', 'date-common') . ' <strong>\' + release_minutes + \'</strong> ' . LangLoader::get_message('minutes', 'date-common') . ' <strong>\' + release_seconds + \'</strong> ' . LangLoader::get_message('seconds', 'date-common') . '\';
					}
				}
				release(' . $_data->get('MAINTAIN_RELEASE_FORMAT') . ');
				-->
				</script>
				';}$_result.='
			</div>

			';if (!$_data->is_true($_data->get('C_HAS_ERROR'))){$_result.='
			<p class="center">
				<a href="" id="connect" onclick="jQuery(\'#loginForm\').toggle();return false;">' . LangLoader::get_message('connection', 'user-common') . '</a>
			</p>
			
			<script>
			<!--
				jQuery(document).ready(function() {
					jQuery(\'#loginForm\').hide();
				});
			-->
			</script>
			';}$_result.='
		';}$_result.='

		';$_subtpl=$_data->get('ERROR_MESSAGE');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
		';$_subtpl=$_data->get('LOGIN_FORM');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
	</div>

';}$_result.='
'; ?>