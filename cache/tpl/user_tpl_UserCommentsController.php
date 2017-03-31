<?php $_result='';$_subtpl=$_data->get('MODULE_CHOICE_FORM');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
<div>
	';if ($_data->is_true($_data->get('C_PAGINATION'))){$_result.='
	<div class="center">
		';$_subtpl=$_data->get('PAGINATION');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
	</div>
	';}$_result.='
	';$_subtpl=$_data->get('COMMENTS');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
	';if ($_data->is_true($_data->get('C_NO_COMMENT'))){$_result.='
		<div class="center">
			' . LangLoader::get_message('no_item_now', 'common') . '
		</div>
		<div class="spacer"></div>
	';}else{$_result.='
		';if ($_data->is_true($_data->get('C_PAGINATION'))){$_result.='
		<div class="center">
			';$_subtpl=$_data->get('PAGINATION');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
		</div>
		';}$_result.='
	';}$_result.='
</div>
'; ?>