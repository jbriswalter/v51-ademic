<?php $_result='';if ($_data->is_true($_data->get('HAS_TIME'))){$_result.='
<meta http-equiv="refresh" content="' . $_data->get('TIME') . ';url=' . $_data->get('U_LINK') . '">
';}$_result.='
<section id="module-user-error-404">
	<header><h1>' . $_functions->escape($_data->get('TITLE')) . '</h1></header>
	<div class="content">
		<i class="fa fa-warning fa-4x"></i>
		
		<div class="type-error">
			' . $_data->get('MESSAGE') . '
		</div>
		
		<div class="message-error">
			' . LangLoader::get_message('error.404.message', 'status-messages-common') . '
		</div>

		<div class="spacer"></div>
		';if ($_data->is_true($_data->get('HAS_LINK'))){$_result.='
		<div class="center">
			<strong><a href="' . $_data->get('U_LINK') . '" title="' . $_functions->escape($_data->get('LINK_NAME')) . '">' . $_functions->escape($_data->get('LINK_NAME')) . '</a></strong>
		</div>
		';}$_result.='
	</div>
	<footer></footer>
</section>
'; ?>