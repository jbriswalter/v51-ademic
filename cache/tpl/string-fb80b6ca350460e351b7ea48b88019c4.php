<?php $_result='<input type="' . $_data->get('TYPE') . '"';if ($_data->is_true($_data->get('C_MIN'))){$_result.=' min="' . $_data->get('MIN') . '"';}$_result.='';if ($_data->is_true($_data->get('C_MAX'))){$_result.=' max="' . $_data->get('MAX') . '"';}$_result.='';if ($_data->is_true($_data->get('C_STEP'))){$_result.=' step="' . $_data->get('STEP') . '"';}$_result.=' name="' . $_functions->escape($_data->get('NAME')) . '" id="' . $_functions->escape($_data->get('HTML_ID')) . '" value="' . $_data->get('VALUE') . '"
	class="';if ($_data->is_true($_data->get('C_READONLY'))){$_result.='low-opacity ';}$_result.='' . $_functions->escape($_data->get('CLASS')) . '" ';if ($_data->is_true($_data->get('C_PLACEHOLDER'))){$_result.=' placeholder="' . $_data->get('PLACEHOLDER') . '" ';}$_result.=' ';if ($_data->is_true($_data->get('C_PATTERN'))){$_result.=' pattern="' . $_data->get('PATTERN') . '" ';}$_result.=' ';if ($_data->is_true($_data->get('C_DISABLED'))){$_result.=' disabled="disabled" ';}$_result.=' ';if ($_data->is_true($_data->get('C_READONLY'))){$_result.=' readonly="readonly" ';}$_result.='>'; ?>