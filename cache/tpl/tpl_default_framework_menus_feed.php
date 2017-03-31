<?php $_result='';if ($_data->is_true($_data->get('C_VERTICAL_BLOCK'))){$_result.='
<div class="module-mini-container';if ($_data->is_true($_data->get('C_HIDDEN_WITH_SMALL_SCREENS'))){$_result.=' hidden-small-screens';}$_result.='">
	<div class="module-mini-top">
		<h5 class="sub-title">
			<a href="' . $_data->get('U_LINK') . '" class="fa fa-syndication"></a>
			';if ($_data->is_true($_data->get('C_NAME'))){$_result.='' . $_data->get('NAME') . '';}else{$_result.='' . $_data->get('TITLE') . '';}$_result.='
		</h5>
	</div>
	<div class="module-mini-contents">
		<ul class="feed-list">
			';foreach($_data->get_block('item') as $_tmp_item){$_result.='
			<li><span class="smaller">' . $_data->get_from_list('DATE', $_tmp_item) . '</span> <a href="' . $_data->get_from_list('U_LINK', $_tmp_item) . ' ">' . $_data->get_from_list('TITLE', $_tmp_item) . ' </a></li>
			';}$_result.='
		</ul>
	</div>
	<div class="module-mini-bottom">
	</div>
</div>
';}else{$_result.='
<div class="block-container';if ($_data->is_true($_data->get('C_HIDDEN_WITH_SMALL_SCREENS'))){$_result.=' hidden-small-screens';}$_result.='">
	<div class="block-contents">
		<h5 class="sub-title">
			<a href="' . $_data->get('U_LINK') . '" class="fa fa-syndication"></a>
			';if ($_data->is_true($_data->get('C_NAME'))){$_result.='' . $_data->get('NAME') . '';}else{$_result.='' . $_data->get('TITLE') . '';}$_result.='
		</h5>
		<ul class="feed-list">
			';foreach($_data->get_block('item') as $_tmp_item){$_result.='
			<li><span class="smaller">' . $_data->get_from_list('DATE', $_tmp_item) . '</span> <a href="' . $_data->get_from_list('U_LINK', $_tmp_item) . ' ">' . $_data->get_from_list('TITLE', $_tmp_item) . '</a></li>
			';}$_result.='
		</ul>
	</div>
</div>
';}$_result.='
'; ?>