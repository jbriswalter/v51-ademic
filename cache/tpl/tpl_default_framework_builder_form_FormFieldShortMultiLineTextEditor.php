<?php $_result='<div id="' . $_functions->escape($_data->get('HTML_ID')) . '_field" class="form-element';if ($_data->is_true($_data->get('C_REQUIRED_AND_HAS_VALUE'))){$_result.=' constraint-status-right';}$_result.='"';if ($_data->is_true($_data->get('C_HIDDEN'))){$_result.=' style="display:none;"';}$_result.='>
	<label for="' . $_functions->escape($_data->get('HTML_ID')) . '">
		' . $_data->get('LABEL') . '
		';if ($_data->is_true($_data->get('C_DESCRIPTION'))){$_result.='<span class="field-description">' . $_data->get('DESCRIPTION') . '</span>';}$_result.='
		<br/>

	</label>
	<div id="onblurContainerResponse' . $_functions->escape($_data->get('HTML_ID')) . '" class="form-field-textarea picture-status-constraint';if ($_data->is_true($_data->get('C_REQUIRED'))){$_result.=' field-required';}$_result.='">
		';foreach($_data->get_block('fieldelements') as $_tmp_fieldelements){$_result.='
		' . $_data->get_from_list('ELEMENT', $_tmp_fieldelements) . '
		';}$_result.='
		<span class="text-status-constraint" style="display:none" id="onblurMessageResponse' . $_functions->escape($_data->get('HTML_ID')) . '"></span>
	</div>
</div>
';$_subtpl=$_data->get('ADD_FIELD_JS');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.=''; ?>