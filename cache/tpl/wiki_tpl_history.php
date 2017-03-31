<?php $_result='		';if ($_data->is_true($_data->get('C_ARTICLE'))){$_result.='
		<table id="table">
			<caption>' . $_data->get('L_HISTORY') . ': <a href="' . $_data->get('U_ARTICLE') . '">' . $_data->get('TITLE') . '</a></caption>
			<thead>
				<tr>
					<th>
						' . $_data->get('L_VERSIONS') . '
					</th>
					<th>
						' . $_data->get('L_DATE') . '
					</th>
					<th>
						' . $_data->get('L_AUTHOR') . '
					</th>
					<th>
						' . $_data->get('L_ACTIONS') . '
					</th>
				</tr>
			</thead>
			<tbody>
				';foreach($_data->get_block('list') as $_tmp_list){$_result.='
				<tr>
					<td>
						<a href="' . $_data->get_from_list('U_ARTICLE', $_tmp_list) . '">' . $_data->get_from_list('TITLE', $_tmp_list) . '</a> ' . $_data->get_from_list('CURRENT_RELEASE', $_tmp_list) . '
					</td>
					<td>
						' . $_data->get_from_list('DATE', $_tmp_list) . '
					</td>
					<td>
						' . $_data->get_from_list('AUTHOR', $_tmp_list) . '
					</td>
					<td>
						' . $_data->get_from_list('ACTIONS', $_tmp_list) . '
					</td>
				</tr>
				';}$_result.='
			</tbody>
		</table>
		';}else{$_result.='
		<table id="table2">
			<caption>' . $_data->get('L_HISTORY') . '</caption>
			<thead>
				<tr>
					<th>
						<a href="' . $_data->get('TOP_TITLE') . '" class="fa fa-table-sort-up"></a>
						' . $_data->get('L_TITLE') . '
						<a href="' . $_data->get('BOTTOM_TITLE') . '" class="fa fa-table-sort-down"></a>
					</th>
					<th>
						<a href="' . $_data->get('TOP_DATE') . '" class="fa fa-table-sort-up"></a>
						' . $_data->get('L_DATE') . '
						<a href="' . $_data->get('BOTTOM_DATE') . '" class="fa fa-table-sort-down"></a>
					</th>
					<th>
						' . $_data->get('L_AUTHOR') . '
					</th>
				</tr>
			</thead>
			';if ($_data->is_true($_data->get('C_PAGINATION'))){$_result.='
			<tfoot>
				<tr>
					<th colspan="3">
						';$_subtpl=$_data->get('PAGINATION');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
					</th>
				</tr>
			</tfoot>
			';}$_result.='
			<tbody>
				';foreach($_data->get_block('list') as $_tmp_list){$_result.='
				<tr>
					<td>
						<a href="' . $_data->get_from_list('U_ARTICLE', $_tmp_list) . '">' . $_data->get_from_list('TITLE', $_tmp_list) . '</a>
					</td>
					<td>
						' . $_data->get_from_list('DATE', $_tmp_list) . '
					</td>
					<td>
						' . $_data->get_from_list('AUTHOR', $_tmp_list) . '
					</td>
				</tr>
				';}$_result.='
			</tbody>
		</table>
		';}$_result.='
		'; ?>