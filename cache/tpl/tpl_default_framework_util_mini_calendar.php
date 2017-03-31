<?php $_result='';if ($_data->is_true($_data->get('C_INCLUDE_JS'))){$_result.='
<script>
<!--
function insert_date(field, input_field, date, calendar_number) 
{
	if (jQuery(\'#\' + input_field)) {
		if (date) {
			jQuery(\'#\' + input_field).val(date);
			
			var array = date.split(\'-\');
			year = array[0];
			month = array[1];
			day = array[2];
			jQuery(\'#\' + input_field + \'_link\').attr(\'onclick\', "xmlhttprequest_calendar(\'" + field + "\', \'" + input_field + "\', \'" + year + "\', \'" + month + "\', \'" + day + "\', \'" + calendar_number + "\', 1);return false;");
			jQuery(\'#\' + input_field).attr(\'onclick\', "xmlhttprequest_calendar(\'" + field + "\', \'" + input_field + "\', \'" + year + "\', \'" + month + "\', \'" + day + "\', \'" + calendar_number + "\');return false;");
			
			jQuery(\'#\' + input_field).focus();
			jQuery(\'#calendar\' + calendar_number).hide();
		}
	}
}

function xmlhttprequest_calendar(field, input_field, year, month, day, calendar_number, toggle)
{
	jQuery.ajax({
		url: \'' . $_data->get('PATH_TO_ROOT') . '/kernel/framework/ajax/mini_calendar_xmlhttprequest.php?input_field=\' + input_field + \'&field=\' + field + \'&calendar_number=\' + calendar_number + \'&d=\' + day + \'&m=\' + month + \'&y=\' + year,
		type: "get",
		data: { token: \'' . $_data->get('TOKEN') . '\' },
		success: function(returnData){
			jQuery(\'#\' + field).html(returnData);
			
			if (toggle)
				jQuery(\'#calendar\' + calendar_number).toggle();
			else
				jQuery(\'#calendar\' + calendar_number).show();
		}
	});
}
-->
</script>
';}$_result.='

<input type="text" size="11" maxlength="10" id="' . $_data->get('CALENDAR_ID') . '" class="input-date" name="' . $_data->get('CALENDAR_ID') . '" value="' . $_data->get('DEFAULT_DATE') . '" onclick="xmlhttprequest_calendar(\'' . $_data->get('CALENDAR_ID') . '_date\', ' . $_functions->escapejs($_data->get('CALENDAR_ID')) . ', ' . $_functions->escapejs($_data->get('YEAR')) . ', ' . $_functions->escapejs($_data->get('MONTH')) . ', ' . $_functions->escapejs($_data->get('DAY')) . ', ' . $_functions->escapejs($_data->get('CALENDAR_NUMBER')) . ');return false;" placeholder="' . LangLoader::get_message('date_format', 'date-common') . '">
<div class="calendar-container">
	<a id="' . $_data->get('CALENDAR_ID') . '_link" href="" onclick="xmlhttprequest_calendar(\'' . $_data->get('CALENDAR_ID') . '_date\', ' . $_functions->escapejs($_data->get('CALENDAR_ID')) . ', ' . $_functions->escapejs($_data->get('YEAR')) . ', ' . $_functions->escapejs($_data->get('MONTH')) . ', ' . $_functions->escapejs($_data->get('DAY')) . ', ' . $_functions->escapejs($_data->get('CALENDAR_NUMBER')) . ', 1);return false;"><i class="fa fa-calendar"></i></a>
	<div id="calendar' . $_data->get('CALENDAR_NUMBER') . '" style="display:none;' . $_data->get('CALENDAR_STYLE') . '">
		<div id="' . $_data->get('CALENDAR_ID') . '_date" class="calendar-block"></div>
	</div>
</div>
'; ?>