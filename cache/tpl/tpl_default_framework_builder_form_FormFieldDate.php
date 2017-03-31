<?php $_result='';if ($_data->is_true($_data->get('C_HOUR'))){$_result.='
<script>
<!--
jQuery(document).ready(function() {
	if (jQuery("#' . $_functions->escape($_data->get('HTML_ID')) . '_hours").length)
	{
		jQuery("#' . $_functions->escape($_data->get('HTML_ID')) . '_hours").blur(function() {
			HTMLForms.get("' . $_functions->escape($_data->get('FORM_ID')) . '").getField("' . $_functions->escape($_data->get('ID')) . '").enableValidationMessage();
			HTMLForms.get("' . $_functions->escape($_data->get('FORM_ID')) . '").getField("' . $_functions->escape($_data->get('ID')) . '").liveValidate();
		});
	}
	if (jQuery("#' . $_functions->escape($_data->get('HTML_ID')) . '_minutes").length)
	{
		jQuery("#' . $_functions->escape($_data->get('HTML_ID')) . '_minutes").blur(function() {
			HTMLForms.get("' . $_functions->escape($_data->get('FORM_ID')) . '").getField("' . $_functions->escape($_data->get('ID')) . '").enableValidationMessage();
			HTMLForms.get("' . $_functions->escape($_data->get('FORM_ID')) . '").getField("' . $_functions->escape($_data->get('ID')) . '").liveValidate();
		});
	}
});
-->
</script>
';}$_result.='
<div id="' . $_functions->escape($_data->get('HTML_ID')) . '_field" class="form-element form-element-date';if ($_data->is_true($_data->get('C_REQUIRED_AND_HAS_VALUE'))){$_result.=' constraint-status-right';}$_result.='"';if ($_data->is_true($_data->get('C_HIDDEN'))){$_result.=' style="display:none;"';}$_result.='>
	';if ($_data->is_true($_data->get('C_HAS_LABEL'))){$_result.='
		<label for="' . $_functions->escape($_data->get('HTML_ID')) . '">
			' . $_data->get('LABEL') . '
			';if ($_data->is_true($_data->get('C_DESCRIPTION'))){$_result.='
			<span class="field-description">' . $_data->get('DESCRIPTION') . '</span>
			';}$_result.='
		</label>
	';}$_result.='
	
	<div id="onblurContainerResponse' . $_functions->escape($_data->get('HTML_ID')) . '" class="form-field';if ($_data->is_true($_data->get('C_HAS_FORM_FIELD_CLASS'))){$_result.=' ' . $_data->get('FORM_FIELD_CLASS') . '';}$_result.=' picture-status-constraint';if ($_data->is_true($_data->get('C_REQUIRED'))){$_result.=' field-required ';}$_result.='">
		' . $_data->get('CALENDAR') . '
		<span class="text-status-constraint" style="display:none" id="onblurMessageResponse' . $_functions->escape($_data->get('HTML_ID')) . '"></span>
		';if ($_data->is_true($_data->get('C_HOUR'))){$_result.='
		' . $_data->get('L_AT') . '
		<input type="number" min="0" max="23" id="' . $_functions->escape($_data->get('HTML_ID')) . '_hours" class="input-hours" name="' . $_functions->escape($_data->get('HTML_ID')) . '_hours" value="' . $_data->get('HOURS') . '" ';if ($_data->is_true($_data->get('C_DISABLED'))){$_result.=' disabled="disabled"';}$_result.='';if ($_data->is_true($_data->get('C_READONLY'))){$_result.=' readonly="readonly"';}$_result.='/> ' . $_data->get('L_H') . '
		<input type="number" min="0" max="59" id="' . $_functions->escape($_data->get('HTML_ID')) . '_minutes" class="input-minutes" name="' . $_functions->escape($_data->get('HTML_ID')) . '_minutes" value="' . $_data->get('MINUTES') . '"';if ($_data->is_true($_data->get('C_DISABLED'))){$_result.=' disabled="disabled"';}$_result.='';if ($_data->is_true($_data->get('C_READONLY'))){$_result.=' readonly="readonly"';}$_result.='/>
		';}$_result.='
	</div>
</div>

';$_subtpl=$_data->get('ADD_FIELD_JS');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
'; ?>