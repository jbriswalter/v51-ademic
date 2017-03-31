<?php $_result='<div class="themes-switcher';if ($_data->is_true($_data->get('C_VERTICAL'))){$_result.=' themes-switcher-vertical';}$_result.='">
	<form action="' . $_data->get('REWRITED_SCRIPT') . '" method="get">
		<select name="switchtheme" onchange="document.location = \'?switchtheme=\' + this.options[this.selectedIndex].value;">
		';foreach($_data->get_block('themes') as $_tmp_themes){$_result.='
			<option value="' . $_data->get_from_list('IDNAME', $_tmp_themes) . '"' . $_data->get_from_list('SELECTED', $_tmp_themes) . '>' . $_data->get_from_list('NAME', $_tmp_themes) . '</option>
		';}$_result.='
		</select>
		<a href="?switchtheme=' . $_data->get('DEFAULT_THEME') . '">' . $_functions->i18n('defaut_theme') . '</a>
	</form>
</div>
'; ?>