<?php $_result='<section id="module-user-messages">
	<header>
		<h1>' . $_data->get('L_MESSAGES') . '</h1>
	</header>
	<div class="content">
		';foreach($_data->get_block('available_modules_msg') as $_tmp_available_modules_msg){$_result.='
		<p class="available-modules-msg"> 
			<a href="' . $_data->get_from_list('U_LINK_USER_MSG', $_tmp_available_modules_msg) . '">
			';if ($_data->is_true($_data->get_from_list('C_IMG_USER_MSG', $_tmp_available_modules_msg))){$_result.='
			' . $_data->get_from_list('IMG_USER_MSG', $_tmp_available_modules_msg) . '
			';}$_result.='
			' . $_data->get_from_list('NAME_USER_MSG', $_tmp_available_modules_msg) . '</a>
		</p>
		';}$_result.='
		<br /><br />
	</div>
	<footer></footer>
</section>'; ?>