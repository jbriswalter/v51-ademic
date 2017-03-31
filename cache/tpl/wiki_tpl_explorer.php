<?php $_result='		<script>
		<!--
			var path = \'' . $_data->get('PICTURES_DATA_PATH') . '\';
			var selected_cat = ' . $_data->get('SELECTED_CAT') . ';
		-->
		</script>
		<script src="' . $_data->get('PICTURES_DATA_PATH') . '/js/wiki.js"></script>

<div class="explorer">
	<div class="cats">
		<h2>' . $_data->get('TITLE') . '</h2>
		<div class="content">
			<ul class="no-list">
				<li><a id="class_0" class="' . $_data->get('CAT_0') . '" href="javascript:open_cat(0);"><i class="fa fa-folder"></i> ' . $_data->get('L_ROOT') . '</a>
					<ul>
						';foreach($_data->get_block('list') as $_tmp_list){$_result.='
						<li class="sub">
							';if ($_data->is_true($_data->get_from_list('U_FOLDER', $_tmp_list))){$_result.='
								<a class="parent" href="javascript:show_wiki_cat_contents(' . $_data->get_from_list('ID', $_tmp_list) . ', 0);"><i class="fa fa-plus-square-o" id="img2_' . $_data->get_from_list('ID', $_tmp_list) . '"></i><i id ="img_' . $_data->get_from_list('ID', $_tmp_list) . '" class="fa fa-folder" ></i></a>
								<a id="class_' . $_data->get_from_list('ID', $_tmp_list) . '" href="javascript:open_cat(' . $_data->get_from_list('ID', $_tmp_list) . ');">' . $_data->get_from_list('TITLE', $_tmp_list) . '</a>
							';}else{$_result.='
								<a id="class_' . $_data->get_from_list('ID', $_tmp_list) . '" href="javascript:open_cat(' . $_data->get_from_list('ID', $_tmp_list) . ');"><i class="fa fa-folder"></i>' . $_data->get_from_list('TITLE', $_tmp_list) . '</a>
							';}$_result.='

							<span id="cat_' . $_data->get_from_list('ID', $_tmp_list) . '"></span>
						</li>
						';}$_result.='
						' . $_data->get('CAT_LIST') . '
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="files">
		<h2>' . $_data->get('L_CATS') . '</h2>
		<div class="content" id="cat_contents">
			<ul>
				';foreach($_data->get_block('list_cats') as $_tmp_list_cats){$_result.='
				<li>
					<a class="explorer-list-cat-link" href="javascript:open_cat(' . $_data->get_from_list('KEY', $_tmp_list_cats) . '); show_wiki_cat_contents(' . $_data->get_from_list('ID_PARENT', $_tmp_list_cats) . ', 0);"><i class="fa fa-folder"></i>' . $_data->get_from_list('TITLE', $_tmp_list_cats) . '</a>
				</li>
				';}$_result.='
				';foreach($_data->get_block('list_files') as $_tmp_list_files){$_result.='
				<li>
					<a class="explorer-list-file-link" href="' . $_data->get_from_list('URL_FILE', $_tmp_list_files) . '"><i class="fa fa-file"></i>' . $_data->get_from_list('TITLE', $_tmp_list_files) . '</a>
				</li>
				';}$_result.='
			</ul>
		</div>
	</div>
</div>'; ?>