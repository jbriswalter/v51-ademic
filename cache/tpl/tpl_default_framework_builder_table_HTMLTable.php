<?php $_result='';if ($_data->is_true($_data->get('C_FILTERS'))){$_result.='
<div id="filters_' . $_data->get('TABLE_ID') . '" style="border:1px #aaa solid;">
   <script src="' . $_data->get('PATH_TO_ROOT') . '/kernel/lib/js/phpboost/UrlSerializedParameterEncoder.js"></script>
	';$_subtpl=$_data->get('filters');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
</div>
';}$_result.='
<table
	';if ($_data->is_true($_data->get('C_ID'))){$_result.=' id="' . $_data->get('ID') . '"';}$_result.='
	';if ($_data->is_true($_data->get('C_CSS_CLASSES'))){$_result.=' class="' . $_data->get('CSS_CLASSES') . '"';}$_result.='
	';if ($_data->is_true($_data->get('C_CSS_STYLE'))){$_result.=' style="' . $_data->get('CSS_STYLE') . '"';}$_result.='>
	';if ($_data->is_true($_data->get('C_CAPTION'))){$_result.='
	<caption>
		<a href="' . $_data->get('U_TABLE_DEFAULT_OPIONS') . '" title="' . $_functions->escape($_data->get('CAPTION')) . '">' . $_functions->escape($_data->get('CAPTION')) . '</a>
	</caption>
	';}$_result.='
	<thead>
		<tr>
			';foreach($_data->get_block('header_column') as $_tmp_header_column){$_result.='
			<th
			';if ($_data->is_true($_data->get_from_list('C_CSS_CLASSES', $_tmp_header_column))){$_result.=' class="' . $_data->get_from_list('CSS_CLASSES', $_tmp_header_column) . '"';}$_result.='
			';if ($_data->is_true($_data->get_from_list('C_CSS_STYLE', $_tmp_header_column))){$_result.=' style="' . $_data->get_from_list('CSS_STYLE', $_tmp_header_column) . '"';}$_result.='>
				
				';if ($_data->is_true($_data->get_from_list('C_SORTABLE', $_tmp_header_column))){$_result.='
				<a href="' . $_data->get_from_list('U_SORT_DESC', $_tmp_header_column) . '" title="' . $_data->get('EL_DESCENDING') . '" class="fa fa-arrow-circle-up';if ($_data->is_true($_data->get_from_list('C_SORT_DESC_SELECTED', $_tmp_header_column))){$_result.=' table-arrow-color';}$_result.='"></a>
				';}$_result.='
				' . $_data->get_from_list('NAME', $_tmp_header_column) . '
				';if ($_data->is_true($_data->get_from_list('C_SORTABLE', $_tmp_header_column))){$_result.='
				<a href="' . $_data->get_from_list('U_SORT_ASC', $_tmp_header_column) . '" title="' . $_data->get('EL_ASCENDING') . '" class="fa fa-arrow-circle-down';if ($_data->is_true($_data->get_from_list('C_SORT_ASC_SELECTED', $_tmp_header_column))){$_result.=' table-arrow-color';}$_result.='"></a>
				';}$_result.='
			</th>
			';}$_result.='
		</tr>
	</thead>
	
	';if ($_data->is_true($_data->get('C_DISPLAY_FOOTER'))){$_result.='
	<tfoot>
		<tr>
			<th colspan="' . $_data->get('NUMBER_OF_COLUMNS') . '">
				<div style="float:left;">
					<span>
						' . $_data->get('NUMBER_OF_ELEMENTS') . '
					</span>
				</div>
				';if ($_data->is_true($_data->get('C_PAGINATION_ACTIVATED'))){$_result.='
					';if ($_data->is_true($_data->get('C_NB_ROWS_OPTIONS'))){$_result.='
					<div class="table-rows-options">
						<select name="nbItemsPerPage" onchange="window.location=this.value">
							';foreach($_data->get_block('nbItemsOption') as $_tmp_nbItemsOption){$_result.='
							<option value="' . $_data->get_from_list('URL', $_tmp_nbItemsOption) . '"
								';if ($_data->is_true($_data->get_from_list('C_SELECTED', $_tmp_nbItemsOption))){$_result.=' selected="selected"';}$_result.='>
								' . $_data->get_from_list('VALUE', $_tmp_nbItemsOption) . '
							</option>
							';}$_result.='
						</select>
					</div>
					';}$_result.='
					<div class="table-pagination">
						';$_subtpl=$_data->get('pagination');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
					</div>
				';}$_result.='
			</th>
		</tr>
	</tfoot>
	';}$_result.='
	
	<tbody>
		';foreach($_data->get_block('row') as $_tmp_row){$_result.='
		<tr
		';if ($_data->is_true($_data->get_from_list('C_ID', $_tmp_row))){$_result.=' id="' . $_data->get_from_list('ID', $_tmp_row) . '"';}$_result.='
		';if ($_data->is_true($_data->get_from_list('C_CSS_CLASSES', $_tmp_row))){$_result.=' class="' . $_data->get_from_list('CSS_CLASSES', $_tmp_row) . '"';}$_result.='
		';if ($_data->is_true($_data->get_from_list('C_CSS_STYLE', $_tmp_row))){$_result.=' style="' . $_data->get_from_list('CSS_STYLE', $_tmp_row) . '"';}$_result.='>
			';foreach($_data->get_block_from_list('cell', $_tmp_row) as $_tmp_row_cell){$_result.='
			<td
			';if ($_data->is_true($_data->get_from_list('C_COLSPAN', $_tmp_row_cell))){$_result.='colspan="' . $_data->get_from_list('COLSPAN', $_tmp_row_cell) . '"';}$_result.='
			';if ($_data->is_true($_data->get_from_list('C_ID', $_tmp_row_cell))){$_result.=' id="' . $_data->get_from_list('ID', $_tmp_row_cell) . '"';}$_result.='
			';if ($_data->is_true($_data->get_from_list('C_CSS_CLASSES', $_tmp_row_cell))){$_result.=' class="' . $_data->get_from_list('CSS_CLASSES', $_tmp_row_cell) . '"';}$_result.='
			';if ($_data->is_true($_data->get_from_list('C_CSS_STYLE', $_tmp_row_cell))){$_result.=' style="' . $_data->get_from_list('CSS_STYLE', $_tmp_row_cell) . '"';}$_result.='>
				' . $_data->get_from_list('VALUE', $_tmp_row_cell) . '
			</td>
			';}$_result.='
		</tr>
		';}$_result.='
		';if (!$_data->is_true($_data->get('C_HAS_ROWS'))){$_result.='
		<tr> 
			<td colspan="' . $_data->get('NUMBER_OF_COLUMNS') . '">
				' . LangLoader::get_message('no_item_now', 'common') . '
			</td>
		</tr>
		';}$_result.='
	</tbody>
</table>
';if ($_data->is_true($_data->get('C_FILTERS'))){$_result.='
<script>
<!--
function ' . $_data->get('SUBMIT_FUNCTION') . '() {
	var filters = new Array();
	var filtersObjects = new Array();
	var has_filter = false;
	';foreach($_data->get_block('filterElt') as $_tmp_filterElt){$_result.='
	filtersObjects.push({formId: ' . $_functions->escapejs($_data->get_from_list('FORM_ID', $_tmp_filterElt)) . ', tableId: ' . $_functions->escapejs($_data->get_from_list('TABLE_ID', $_tmp_filterElt)) . '});
	';}$_result.='
	for (var i = 0; i < filtersObjects.length; i++) {
		var filter = filtersObjects[i];
		var domFilter = jQuery(\'#\' + filter.formId);
		if (domFilter) {
			var filterValue = domFilter.val();
			if (filterValue) {
				filters[filter.tableId] = filterValue;
				has_filter = true;
			}
		} else {
			window.alert(\'element \' + filter.formId + \' not found\');
		}
	}
	var serializer = new UrlSerializedParameterEncoder();
	var filtersUrl = has_filter ? \',filters:{\' + serializer.encode(filters) + \'}\' : \'\';
	var submitUrl = ' . $_functions->escapejs($_data->get('SUBMIT_URL')) . ' + filtersUrl;
	window.location = submitUrl;
	return false;
}
-->
</script>
';}$_result.=''; ?>