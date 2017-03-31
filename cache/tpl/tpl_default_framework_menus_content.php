<?php $_result='';if ($_data->is_true($_data->get('C_VERTICAL_BLOCK'))){$_result.='
<div class="module-mini-container';if ($_data->is_true($_data->get('C_HIDDEN_WITH_SMALL_SCREENS'))){$_result.=' hidden-small-screens';}$_result.='">
	<div class="module-mini-top">
		';if ($_data->is_true($_data->get('C_DISPLAY_TITLE'))){$_result.='<h5 class="sub-title">' . $_data->get('TITLE') . '</h5>';}$_result.='
	</div>
	<div class="module-mini-contents">
		' . $_data->get('CONTENT') . '
	</div>
	<div class="module-mini-bottom">
	</div>
</div>
';}else{$_result.='
<div class="block-container';if ($_data->is_true($_data->get('C_HIDDEN_WITH_SMALL_SCREENS'))){$_result.=' hidden-small-screens';}$_result.='">
	<div class="block-contents">
		';if ($_data->is_true($_data->get('C_DISPLAY_TITLE'))){$_result.='<h5 class="sub-title">' . $_data->get('TITLE') . '</h5>';}$_result.='
		<div>' . $_data->get('CONTENT') . '</div>
		&nbsp;
	</div>
</div>
';}$_result.='
'; ?>