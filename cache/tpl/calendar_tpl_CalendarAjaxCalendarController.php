<?php $_result='		<script>
		<!--
			function ChangeMonth(year, month)
			{
				jQuery.ajax({
					url: ' . $_functions->escapejs($_data->get('U_AJAX_CALENDAR')) . ' + year + \'/\' + month + \'/\' + ' . $_data->get('MINI_MODULE') . ',
					success: function(returnData){
						jQuery(\'#calendar\').html(returnData);
					}
				});

				';if (!$_data->is_true($_data->get('C_MINI_MODULE'))){$_result.='
				jQuery.ajax({
					url: ' . $_functions->escapejs($_data->get('U_AJAX_EVENTS')) . ' + year + \'/\' + month,
					success: function(returnData){
						jQuery(\'#events\').html(returnData);
					}
				});
				';}$_result.='
			}
		-->
		</script>

		<div id="date_select_form" class="center">
			<form method="post" class="fieldset-content">
				<div class="horizontal-fieldset" id="CalendarAjaxCalendarController_choose-date">
					<div id="CalendarAjaxCalendarController_month_field" class="form-element">
						<div class="form-field">
							<select name="CalendarAjaxCalendarController_month" id="CalendarAjaxCalendarController_month" onchange="ChangeMonth(jQuery(\'#CalendarAjaxCalendarController_year\').val(), jQuery(\'#CalendarAjaxCalendarController_month\').val());">
								';foreach($_data->get_block('months') as $_tmp_months){$_result.='
								<option value="' . $_data->get_from_list('VALUE', $_tmp_months) . '"';if ($_data->is_true($_data->get_from_list('SELECTED', $_tmp_months))){$_result.=' selected="selected"';}$_result.='>' . $_data->get_from_list('NAME', $_tmp_months) . '</option>
								';}$_result.='
							</select>
						</div>
					</div>
					<div id="CalendarAjaxCalendarController_year_field" class="form-element">
						<div class="form-field">
							<select name="CalendarAjaxCalendarController_year" id="CalendarAjaxCalendarController_year" onchange="ChangeMonth(jQuery(\'#CalendarAjaxCalendarController_year\').val(), jQuery(\'#CalendarAjaxCalendarController_month\').val());">
								';foreach($_data->get_block('years') as $_tmp_years){$_result.='
								<option value="' . $_data->get_from_list('VALUE', $_tmp_years) . '"';if ($_data->is_true($_data->get_from_list('SELECTED', $_tmp_years))){$_result.=' selected="selected"';}$_result.='>' . $_data->get_from_list('NAME', $_tmp_years) . '</option>
								';}$_result.='
							</select>
						</div>
					</div>
				</div>
			</form>
		</div>

		<div class="calendar-container">
			<div class="calendar-top-container">
				<div class="calendar-top-l">
					<a onclick="ChangeMonth(' . $_functions->escapejs($_data->get('PREVIOUS_YEAR')) . ', ' . $_functions->escapejs($_data->get('PREVIOUS_MONTH')) . ');" title="' . $_data->get('PREVIOUS_MONTH_TITLE') . '"><i class="fa fa-angle-double-left"></i></a>
				</div>
				<div class="calendar-top-r">
					<a onclick="ChangeMonth(' . $_functions->escapejs($_data->get('NEXT_YEAR')) . ', ' . $_functions->escapejs($_data->get('NEXT_MONTH')) . ');" title="' . $_data->get('NEXT_MONTH_TITLE') . '"><i class="fa fa-angle-double-right"></i></a>
				</div>
				<div class="calendar-top-content">
					<h5>' . $_data->get('DATE') . '</h5>
				</div>
			</div>

			<div class="calendar-content">
				<table class="';if ($_data->is_true($_data->get('C_MINI_MODULE'))){$_result.='mini ';}$_result.='calendar-table">
					<thead>
						<tr>
							<th></th>
							<th class="text-strong">' . $_functions->i18n('monday_mini') . '</th>
							<th class="text-strong">' . $_functions->i18n('tuesday_mini') . '</th>
							<th class="text-strong">' . $_functions->i18n('wednesday_mini') . '</th>
							<th class="text-strong">' . $_functions->i18n('thursday_mini') . '</th>
							<th class="text-strong">' . $_functions->i18n('friday_mini') . '</th>
							<th class="text-strong">' . $_functions->i18n('saturday_mini') . '</th>
							<th class="text-strong">' . $_functions->i18n('sunday_mini') . '</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							';foreach($_data->get_block('day') as $_tmp_day){$_result.='
							<td class="' . $_data->get_from_list('CLASS', $_tmp_day) . '"';if ($_data->is_true($_data->get_from_list('C_COLOR', $_tmp_day))){$_result.=' style="background-color:' . $_data->get_from_list('COLOR', $_tmp_day) . '"';}$_result.='>
								';if ($_data->is_true($_data->get_from_list('C_MONTH_DAY', $_tmp_day))){$_result.='<a title="' . $_data->get_from_list('TITLE', $_tmp_day) . '" href="' . $_data->get_from_list('U_DAY_EVENTS', $_tmp_day) . '">' . $_data->get_from_list('DAY', $_tmp_day) . '</a>';}$_result.='
								';if ($_data->is_true($_data->get_from_list('C_WEEK_LABEL', $_tmp_day))){$_result.='' . $_data->get_from_list('DAY', $_tmp_day) . '';}$_result.='
							</td>
							';if ($_data->is_true($_data->get_from_list('CHANGE_LINE', $_tmp_day))){$_result.='
						</tr>
						<tr>
							';}$_result.='
							';}$_result.='
						</tr>
						';if ($_data->is_true($_data->get('C_DISPLAY_LEGEND'))){$_result.='
						<tr>
							<td colspan="8" class="legend-line">';$_subtpl=$_data->get('LEGEND');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='</td>
						</tr>
						';}$_result.='
					</tbody>
				</table>
			</div>

		</div>
'; ?>