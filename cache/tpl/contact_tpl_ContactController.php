<?php $_result='<section id="module-contact">
	<header>
		<h1>' . $_functions->i18n('module_title') . '</h1>
	</header>
	<div class="content">
		';$_subtpl=$_data->get('MSG');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
		
		';if (!$_data->is_true($_data->get('C_MAIL_SENT'))){$_result.='
			';if ($_data->is_true($_data->get('C_INFORMATIONS_TOP'))){$_result.='
			<p>' . $_data->get('INFORMATIONS') . '</p>
			<div class="spacer"></div>
			';}$_result.='
			
			';if ($_data->is_true($_data->get('C_INFORMATIONS_SIDE'))){$_result.='
			<div>
			';}$_result.='
			
			';if ($_data->is_true($_data->get('C_INFORMATIONS_LEFT'))){$_result.='
			<div class="float-left informations-side">
				<p>' . $_data->get('INFORMATIONS') . '</p>
			</div>
			';}$_result.='
			
			';if ($_data->is_true($_data->get('C_INFORMATIONS_SIDE'))){$_result.='
			<div class="';if ($_data->is_true($_data->get('C_INFORMATIONS_LEFT'))){$_result.='float-right';}else{$_result.='float-left';}$_result.=' form-side">
			';}$_result.='
			';$_subtpl=$_data->get('FORM');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
			';if ($_data->is_true($_data->get('C_INFORMATIONS_SIDE'))){$_result.='
			</div>
			';}$_result.='
			
			';if ($_data->is_true($_data->get('C_INFORMATIONS_RIGHT'))){$_result.='
			<div class="float-right informations-side">
				<p>' . $_data->get('INFORMATIONS') . '</p>
			</div>
			';}$_result.='
			
			';if ($_data->is_true($_data->get('C_INFORMATIONS_SIDE'))){$_result.='
				<div class="spacer"></div>
			</div>
			';}$_result.='
			
			';if ($_data->is_true($_data->get('C_INFORMATIONS_BOTTOM'))){$_result.='
			<p>' . $_data->get('INFORMATIONS') . '</p>
			<div class="spacer"></div>
			';}$_result.='
		';}else{$_result.='
			<div class="spacer"></div>
			<div class="center"><a href="">' . $_functions->i18n('contact.send_another_mail') . '</a></div>
		';}$_result.='
	</div>
	<footer></footer>
</section>
'; ?>