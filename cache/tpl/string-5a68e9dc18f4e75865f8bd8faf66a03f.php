<?php $_result='';$_subtpl=$_data->get('ADD_FIELDSET_JS');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='<div id="' . $_functions->escape($_data->get('HTML_ID')) . '" class="horizontal-fieldset"';if ($_data->is_true($_data->get('C_DISABLED'))){$_result.=' style="display:none;"';}$_result.='>
	    ';if ($_data->is_true($_data->get('C_DESCRIPTION'))){$_result.='<span class="horizontal-fieldset-desc">' . $_functions->escape($_data->get('DESCRIPTION')) . '</span>';}$_result.='
	    ';foreach($_data->get_block('elements') as $_tmp_elements){$_result.='<div class="horizontal-fieldset-element">';$_subtpl=$_data->get_from_list('ELEMENT', $_tmp_elements);if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='</div>';}$_result.='
    </div>
	<div class="spacer"></div>'; ?>