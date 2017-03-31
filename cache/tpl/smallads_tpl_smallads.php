<?php $_result='';if ($_data->is_true($_data->get('C_VIEW'))){$_result.='
';foreach($_data->get_block('item') as $_tmp_item){$_result.='
<article id="article-smallads-' . $_data->get_from_list('ID', $_tmp_item) . '">
	<header>
		<h1>
			<span>' . $_data->get_from_list('TYPE', $_tmp_item) . ' - ' . $_data->get_from_list('TITLE', $_tmp_item) . '</span>
			<span class="actions">
				';if ($_data->is_true($_data->get_from_list('C_EDIT', $_tmp_item))){$_result.='
					<a href="' . $_data->get('PATH_TO_ROOT') . '/smallads/smallads' . $_data->get_from_list('URL_EDIT', $_tmp_item) . '" title="' . LangLoader::get_message('edit', 'common') . '" class="fa fa-edit"></a>
				';}$_result.='
				';if ($_data->is_true($_data->get_from_list('C_DELETE', $_tmp_item))){$_result.='
					<a href="' . $_data->get('PATH_TO_ROOT') . '/smallads/smallads' . $_data->get_from_list('URL_DELETE', $_tmp_item) . '&token=' . $_data->get('TOKEN') . '" title="' . LangLoader::get_message('delete', 'common') . '" class="fa fa-delete" data-confirmation="delete-element"></a>
				';}$_result.='
			</span>
		</h1>
	</header>
	<div class="content">
		';if (!$_data->is_true($_data->get_from_list('C_DB_APPROVED', $_tmp_item))){$_result.='
		<p style="font-weight:bold; font-size:large; color:red">' . $_data->get('L_NOT_APPROVED') . '</p>
		';}$_result.='
		';if ($_data->is_true($_data->get_from_list('C_PICTURE', $_tmp_item))){$_result.='
		<div style="float:left;margin:10px">
			<a href="' . $_data->get_from_list('PICTURE', $_tmp_item) . '" data-lightbox="formatter"><img src="' . $_data->get_from_list('PICTURE', $_tmp_item) . '" /></a>
		</div>
		';}$_result.='
		<div>' . $_data->get_from_list('CONTENTS', $_tmp_item) . '</div>
		<br />
		<div class="small">
			<p>' . $_data->get('L_PRICE') . '&nbsp;: ' . $_data->get_from_list('PRICE', $_tmp_item) . '&nbsp;' . $_data->get('L_PRICE_UNIT') . '</p>
			';if ($_data->is_true($_data->get_from_list('C_SHIPPING', $_tmp_item))){$_result.='<p>' . $_data->get('L_SHIPPING') . '&nbsp;: ' . $_data->get_from_list('SHIPPING', $_tmp_item) . '&nbsp;' . $_data->get('L_SHIPPING_UNIT') . '</p>';}$_result.='
			<p>' . $_data->get_from_list('DB_CREATED', $_tmp_item) . '<br />' . $_data->get_from_list('DB_UPDATED', $_tmp_item) . '</p>
			<p>id #' . $_data->get_from_list('ID', $_tmp_item) . '</p>
			';if ($_data->is_true($_data->get_from_list('VID', $_tmp_item))){$_result.='
			<p>Contribution de modification de #' . $_data->get_from_list('VID', $_tmp_item) . '</p>
			';}$_result.='
		</div>
		<br />
		<span style="float:left;">
			' . $_data->get_from_list('USER', $_tmp_item) . ' ' . $_data->get_from_list('USER_PM', $_tmp_item) . ' ' . $_data->get_from_list('USER_MAIL', $_tmp_item) . '
		</span>
	</div>
	<footer></footer>
</article>
';}$_result.='
';}$_result.='


';if ($_data->is_true($_data->get('C_LIST'))){$_result.='
<script>
	<!--
	function radioClicked(Nom)
	{
		var r = false;
		var d = document.getElementsByName(Nom);
		for(var i=0; i<d.length; i++)
		{
			if(d[i].type==\'radio\' && d[i].checked)
			{
				r = d[i].value;
				break;
			}
		}
		return r ? r : 0;
	}

	function change_order()
	{
		window.location = "' . $_data->get('TARGET_ON_CHANGE_ORDER') . 'sort=" + document.getElementById("sort").value + "&mode=" + document.getElementById("mode").value + "&type=" + radioClicked("radio_type");
	}

	function change_filter()
	{
		window.location = "' . $_data->get('TARGET_ON_CHANGE_ORDER') . 'type=" + radioClicked("radio_type");
	}

	function view_not_approved()
	{
		window.location = "' . $_data->get('TARGET_ON_CHANGE_ORDER') . 'ViewNotApproved=1";
	}
	-->
</script>

<section id="module-smallads">
	<header>
		<h1>
			' . $_data->get('L_TITLE') . '
		</h1>
	</header>
	<div class="content">
		';if ($_data->is_true($_data->get('C_DESCRIPTION'))){$_result.='
			' . $_data->get('DESCRIPTION') . '
			<hr style="margin-top:25px;margin-bottom:10px;" />
		';}$_result.='

		<p>
		';foreach($_data->get_block('type_options') as $_tmp_type_options){$_result.='
		&nbsp;&nbsp;<input type="radio" name="radio_type" value="' . $_data->get_from_list('VALUE', $_tmp_type_options) . '" ' . $_data->get_from_list('CHECKED', $_tmp_type_options) . '>&nbsp;' . $_data->get_from_list('NAME', $_tmp_type_options) . '</input>
		';}$_result.='
		&nbsp;&nbsp;<button class="button" onclick="change_filter()" value="true">OK</button>
		</p>
		';if ($_data->is_true($_data->get('C_DISPLAY_NOT_APPROVED'))){$_result.='
		<p style="margin-top:1.5em"><button class="button" onclick="view_not_approved()" value="true">' . $_data->get('L_LIST_NOT_APPROVED') . '</button></p>
		';}$_result.='
		<hr style="margin-top:10px;" />
			<div class="spacer">&nbsp;</div>
		
		';if (!$_data->is_true($_data->get('C_NB_SMALLADS'))){$_result.='
			<div class="center">
				' . $_data->get('L_NO_SMALLADS') . '
			</div>
		';}else{$_result.='
			<div style="float:right;" id="form">
				' . $_data->get('L_ORDER_BY') . '
				<select name="sort" id="sort" class="nav" onchange="change_order()">
					';foreach($_data->get_block('sort_options') as $_tmp_sort_options){$_result.='
					<option value="' . $_data->get_from_list('VALUE', $_tmp_sort_options) . '" ' . $_data->get_from_list('SELECTED', $_tmp_sort_options) . '>' . $_data->get_from_list('NAME', $_tmp_sort_options) . '</option>
					';}$_result.='
				</select>
				<select name="mode" id="mode" class="nav" onchange="change_order()">
					';foreach($_data->get_block('mode_options') as $_tmp_mode_options){$_result.='
					<option value="' . $_data->get_from_list('VALUE', $_tmp_mode_options) . '" ' . $_data->get_from_list('SELECTED', $_tmp_mode_options) . '>' . $_data->get_from_list('NAME', $_tmp_mode_options) . '</option>
					';}$_result.='
				</select>
			</div>
			<div class="spacer">&nbsp;</div>

			';foreach($_data->get_block('item') as $_tmp_item){$_result.='
				<div id="smallads_' . $_data->get_from_list('ID', $_tmp_item) . '" class="block-container" style="margin-bottom:20px;">
					<div class="block_contents">
						<p style="margin-bottom:10px">
							<a href="' . $_data->get('PATH_TO_ROOT') . '/smallads/smallads' . $_data->get_from_list('URL_VIEW', $_tmp_item) . '" style="font-size:large">' . $_data->get_from_list('TYPE', $_tmp_item) . ' - ' . $_data->get_from_list('TITLE', $_tmp_item) . '</a>
							';if ($_data->is_true($_data->get_from_list('C_EDIT', $_tmp_item))){$_result.='
								&nbsp;&nbsp;
								<a href="' . $_data->get('PATH_TO_ROOT') . '/smallads/smallads' . $_data->get_from_list('URL_EDIT', $_tmp_item) . '" title="' . LangLoader::get_message('edit', 'common') . '" class="fa fa-edit"></a>
							';}$_result.='
							';if ($_data->is_true($_data->get_from_list('C_DELETE', $_tmp_item))){$_result.='
								<a href="' . $_data->get('PATH_TO_ROOT') . '/smallads/smallads' . $_data->get_from_list('URL_DELETE', $_tmp_item) . '&token=' . $_data->get('TOKEN') . '" title="' . LangLoader::get_message('delete', 'common') . '" class="fa fa-delete" data-confirmation="delete-element"></a>
							';}$_result.='
						</p>
						';if (!$_data->is_true($_data->get_from_list('C_DB_APPROVED', $_tmp_item))){$_result.='
						<p style="font-weight:bold; font-size:large; color:red">' . $_data->get_from_list('L_NOT_APPROVED', $_tmp_item) . '</p>
						';}$_result.='
						';if ($_data->is_true($_data->get_from_list('C_PICTURE', $_tmp_item))){$_result.='
						<div style="float:left;margin:10px">
							<a href="' . $_data->get_from_list('PICTURE', $_tmp_item) . '" data-lightbox="formatter"><img src="' . $_data->get_from_list('PICTURE', $_tmp_item) . '" /></a>
						</div>
						';}$_result.='
						<div>' . $_data->get_from_list('CONTENTS', $_tmp_item) . '</div>
						<br />
						<div class="small">
							<p>' . $_data->get('L_PRICE') . '&nbsp;: ' . $_data->get_from_list('PRICE', $_tmp_item) . '&nbsp;' . $_data->get('L_PRICE_UNIT') . '</p>
							';if ($_data->is_true($_data->get_from_list('C_SHIPPING', $_tmp_item))){$_result.='<p>' . $_data->get('L_SHIPPING') . '&nbsp;: ' . $_data->get_from_list('SHIPPING', $_tmp_item) . '&nbsp;' . $_data->get('L_SHIPPING_UNIT') . '</p>';}$_result.='
							<p>' . $_data->get_from_list('DB_CREATED', $_tmp_item) . '<br />' . $_data->get_from_list('DB_UPDATED', $_tmp_item) . '</p>
							<p>id #' . $_data->get_from_list('ID', $_tmp_item) . '</p>
							';if ($_data->is_true($_data->get_from_list('VID', $_tmp_item))){$_result.='
							<p>Contribution de modification de #' . $_data->get_from_list('VID', $_tmp_item) . '</p>
							';}$_result.='
						</div>
						<br />
						<span style="float:left;">
							' . $_data->get_from_list('USER', $_tmp_item) . ' ' . $_data->get_from_list('USER_PM', $_tmp_item) . ' ' . $_data->get_from_list('USER_MAIL', $_tmp_item) . '
						</span>
						<div class="spacer"></div>
					</div>
				</div>
			';}$_result.='
		';}$_result.='
	</div>
	<footer>';if ($_data->is_true($_data->get('C_PAGINATION'))){$_result.=' ';$_subtpl=$_data->get('PAGINATION');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.=' ';}$_result.='</footer>
</section>
';}$_result.='


';if ($_data->is_true($_data->get('C_FORM'))){$_result.='
	<script>
		<!--
		function trim(stringToTrim) {
			return stringToTrim.replace(/^\\s+|\\s+$/g,"");
		}

		function check_item(i, n)
		{
			i.value = trim(i.value);
			if(i.value == "") {
				alert(n + " : "+"' . $_data->get('L_ALERT_TEXT') . '");
				i.focus();
				return false;
			}
			return true;
		}

		function check_num(i, n)
		{
			i.value = trim(i.value);
			if(i.value != "" && isNaN(i.value)) {
				alert(n + " : " + "' . $_data->get('L_ALERT_FLOAT') . '");
				i.focus();
				return false;
			}
			return true;
		}

		function check_upload(i, n)
		{
			fname = trim(i.value);
			var recherche = /\\.(jpeg|jpg|gif|png)$/i;
			if(fname != "" && recherche.test(fname)==false) {
				alert(n + " : " + "' . $_data->get('L_ALERT_UPLOAD') . '");
				i.value = \'\';
				i.focus();
				return false;
			}
			return true;
		}

		function check_checkbox(i, msg)
		{
			if( i.checked == false )
			{
				alert(msg);
				return false;
			}
			return true;
		}

		function check_form(o){
			if (!check_item(o.smallads_title, "' . $_data->get('L_DB_TITLE') . '")) return false;
			if (!check_item(o.smallads_contents, "' . $_data->get('L_DB_CONTENTS') . '")) return false;
			if (!check_num(o.smallads_price, "' . $_data->get('L_DB_PRICE') . '")) return false;
			if (!check_num(o.smallads_shipping, "' . $_data->get('L_DB_SHIPPING') . '")) return false;
			if (!check_upload(o.smallads_picture, "' . $_data->get('L_DB_PICTURE') . '")) return false;
			if (!check_checkbox(o.usage_agreement, "' . $_data->get('L_CGU_NOT_AGREED') . '")) return false;
			return true;
		}

		// Original:  Ronnie T. Moore
		// Dynamic \'fix\' by: Nannette Thacker
		function textCounter(field, countfield, maxlimit) {
			field = document.getElementById(field);
			countfield = document.getElementById(countfield);
			var reg = new RegExp("\\r\\n", "g");
			
			value = field.value;
			length = value.replace(reg,"").length;
			
			if (length > maxlimit) // if too long...trim it!
				field.value = field.value.substring(0, maxlimit);
			// otherwise, update \'characters left\' counter
			else {
				new_value = maxlimit - (length + 1);
				if (new_value > 0)
					countfield.value = new_value;
				else
					countfield.value = 0;
			}
		}

		-->
	</script>

	';$_subtpl=$_data->get('MSG');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='

	<div>
	<form action="smallads.php?token=' . $_data->get('TOKEN') . '" method="post" onsubmit="return check_form(this);" class="fieldset-content" enctype="multipart/form-data" >
		<p class="center">' . $_data->get('L_REQUIRE') . '</p>
		
		';if ($_data->is_true($_data->get('C_USAGE_TERMS'))){$_result.='
		<fieldset>
			<legend>
				' . $_data->get('L_USAGE_LEGEND') . '
			</legend>
			<br />
			<div style="width:auto;height:250px;overflow-y:scroll;border:1px solid #DFDFDF;background-color:#F1F4F1">
				' . $_data->get('CGU_CONTENTS') . '
			</div>
			<div style="text-align:center;margin:1.5em;">
				<label style="cursor:pointer;">
					<input type="checkbox" name="usage_agreement" id="usage_agreement" class="valign-middle" />
					' . $_data->get('L_AGREE_TERMS') . '
				</label>
			</div>
		</fieldset>
		';}$_result.='

		<fieldset>
			<legend>' . $_data->get('L_LEGEND') . '</legend>
			<div class="form-element">
				<label for="smallads_type">' . $_data->get('L_DB_TYPE') . '</label>
				<div class="form-field">
					<label>
					<select id="smallads_type" name="smallads_type">
					';foreach($_data->get_block('type_options_edit') as $_tmp_type_options_edit){$_result.='
						<option value="' . $_data->get_from_list('VALUE', $_tmp_type_options_edit) . '" ' . $_data->get_from_list('SELECTED', $_tmp_type_options_edit) . '>' . $_data->get_from_list('NAME', $_tmp_type_options_edit) . '</option>
					';}$_result.='
					</select>
					</label>
				</div>
			</div>
			<div class="form-element">
				<label for="smallads_title">*&nbsp;' . $_data->get('L_DB_TITLE') . '</label>
				<div class="form-field">
					<label><input type="text" id="smallads_title" name="smallads_title" value="' . $_data->get('DB_TITLE') . '" class="field-large" /></label>
				</div>
			</div>
			
			<div class="form-element-textarea">
				<label for="smallads_contents">*&nbsp;' . $_data->get('L_DB_CONTENTS') . '</label>
				' . $_data->get('KERNEL_EDITOR') . '
				<div class="form-field-textarea">
					<textarea rows="10" cols="50" id="smallads_contents" name="smallads_contents" onKeyDown="textCounter(\'smallads_contents\',\'remLen\',' . $_data->get('DB_MAXLEN') . ');">' . $_data->get('DB_CONTENTS') . '</textarea>
				</div>
				<br />
				<center>
				<font size="1">car. restants : <input readonly="readonly" type=text name="remLen" id="remLen" size="4" maxlength="3" value="' . $_data->get('DB_CONTENTS_REMAIN') . '"></font>
				</center>
				<br />
			</div>

			<div class="form-element">
				<label for="smallads_picture">' . $_data->get('L_DB_PICTURE') . '
				<span class="field-description">' . $_data->get('L_MAX_PICTURE_WEIGHT') . '</span>
				</label>
				<div class="form-field">
					';if ($_data->is_true($_data->get('C_PICTURE'))){$_result.='
					<div style="float:left">
						<a href="' . $_data->get('DB_PICTURE') . '" data-lightbox="formatter"><img src="' . $_data->get('DB_PICTURE') . '" /></a>
						<a href="' . $_data->get('PATH_TO_ROOT') . '/smallads/smallads.php?delete_picture=' . $_data->get('ID') . '&token=' . $_data->get('TOKEN') . '" title="' . LangLoader::get_message('delete', 'common') . '" class="fa fa-delete" data-confirmation="delete-element"></a>
					</div>
					';}$_result.='
					<label><input type="file" id="smallads_picture" name="smallads_picture" value="" accept="image/jpeg,image/png,image/gif" /></label>
				</div>
			</div>
			<div class="form-element">
				<label for="smallads_price">' . $_data->get('L_DB_PRICE') . '</label>
				<div class="form-field">
					<label><input type="text" maxlength="10" size="10" id="smallads_price" name="smallads_price" value="' . $_data->get('DB_PRICE') . '" />&nbsp' . $_data->get('L_PRICE_UNIT') . '</label>
				</div>
			</div>
			<div class="form-element">
				<label for="smallads_shipping">' . $_data->get('L_DB_SHIPPING') . '</label>
				<div class="form-field">
					<label><input type="text" maxlength="10" size="10" id="smallads_shipping" name="smallads_shipping" value="' . $_data->get('DB_SHIPPING') . '" />&nbsp' . $_data->get('L_SHIPPING_UNIT') . '</label>
				</div>
			</div>
			<div class="form-element">
				<label for="view_mail">' . $_data->get('L_VIEW_MAIL_ENABLED') . '</label>
				<div class="form-field">
					<label><input type="checkbox" name="view_mail" id="view_mail" ';if ($_data->is_true($_data->get('C_VIEW_MAIL_CHECKED'))){$_result.=' checked="checked"';}$_result.='></label>
				</div>
			</div>
			<div class="form-element">
				<label for="view_pm">' . $_data->get('L_VIEW_PM_ENABLED') . '</label>
				<div class="form-field">
					<label><input type="checkbox" name="view_pm" id="view_pm" ';if ($_data->is_true($_data->get('C_VIEW_PM_CHECKED'))){$_result.=' checked="checked"';}$_result.='></label>
				</div>
			</div>
			';if ($_data->is_true($_data->get('C_MAX_WEEKS'))){$_result.='
			<div class="form-element">
				<label for="smallads_max_weeks">' . $_data->get('L_DB_MAX_WEEKS') . '</label>
				<div class="form-field">
					<label><input type="text" size="3" maxlength="2" id="smallads_max_weeks" name="smallads_max_weeks" value="' . $_data->get('DB_MAX_WEEKS') . '" />&nbsp' . $_data->get('L_MAX_WEEKS_DEFAULT') . '</label>
				</div>
			</div>
			';}$_result.='

			';if ($_data->is_true($_data->get('C_CAN_APPROVE'))){$_result.='
			<div class="form-element">
				<label for="smallads_approved">' . $_data->get('L_DB_APPROVED') . '</label>
				<div class="form-field">
					<label><input type="checkbox" name="smallads_approved" id="smallads_approved" ' . $_data->get('DB_APPROVED') . ' /></label>
				</div>
			</div>
			';}$_result.='
			<div class="small">
				<p>' . $_data->get('DB_CREATED') . '<br />' . $_data->get('DB_UPDATED') . '</p>
			</div>
		</fieldset>

		';if ($_data->is_true($_data->get('C_CONTRIBUTION'))){$_result.='
		<fieldset>
			<legend>' . $_data->get('L_CONTRIBUTION') . '</legend>
			<div class="message-helper notice">
				<div class="message-helper-content">' . $_data->get('L_CONTRIBUTION_NOTICE') . '</div>
			</div>
			<div class="form-element-textarea">
				<label for="contribution_counterpart">' . $_data->get('L_CONTRIBUTION_COUNTERPART') . '</label>
				<span class="field-description">' . $_data->get('L_CONTRIBUTION_COUNTERPART_EXPLAIN') . '</span>
				' . $_data->get('CONTRIBUTION_COUNTERPART_EDITOR') . '
				<div class="form-field-textarea">
					<textarea rows="20" cols="40" id="contribution_counterpart" name="contribution_counterpart">' . $_data->get('CONTRIBUTION_COUNTERPART') . '</textarea>
				</div>
			</div>
		</fieldset>
		';}$_result.='

		<fieldset class="fieldset-submit">
			<legend>' . $_data->get('L_SUBMIT') . '</legend>
			<button type="submit" name="submit" value="true">' . $_data->get('L_SUBMIT') . '</button>
			<button onclick="XMLHttpRequest_preview();" type="button">' . $_data->get('L_PREVIEW') . '</button>
			<button type="reset" value="true">' . $_data->get('L_RESET') . '</button>
			<input type="hidden" name="id" value="' . $_data->get('ID') . '" />
			<input type="hidden" name="token" value="' . $_data->get('TOKEN') . '" />
		</fieldset>
	</form>
	</div>
';}$_result.=''; ?>