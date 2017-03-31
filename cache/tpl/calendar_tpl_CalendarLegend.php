<?php $_result='';foreach($_data->get_block('legend') as $_tmp_legend){$_result.='
	<span class="legend"><span style="color:' . $_data->get_from_list('COLOR', $_tmp_legend) . ';" class="legend-color">&#9632;</span> ' . $_data->get_from_list('NAME', $_tmp_legend) . '</span>
	';if ($_data->is_true($_data->get_from_list('C_NEW_LINE', $_tmp_legend))){$_result.='<div class="spacer"></div>';}$_result.='
';}$_result.=''; ?>