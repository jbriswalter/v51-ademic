<?php $_result='		<script>
		<!--
			const FORM = \'form-\';
			const SPECIALIZED_FORM_LINK = \'specialize-form-link-\';
			var LastSpecializedFormUsed = \'' . $_data->get('SEARCH_MODE_MODULE') . '\';

			function ChangeForm(module)
			// Change le cadre des résultats
			{
				jQuery(\'#\' + FORM + LastSpecializedFormUsed).fadeOut();
				jQuery(\'#\' + FORM + module).fadeIn();

				document.getElementById(SPECIALIZED_FORM_LINK + LastSpecializedFormUsed).className = \'\';

				LastSpecializedFormUsed = module;
				document.getElementById(\'search-in\').value = module;

				document.getElementById(SPECIALIZED_FORM_LINK + module).className = \'SFL-current\';
			}

			function check_search_form_post()
			// Vérifie la validité du formulaire
			{
				var textSearched = document.getElementById("TxTsearched").value;
				if ( textSearched.length > 3 && textSearched != \'' . $_data->get('L_SEARCH') . '...\')
				{
					textSearched = escape_xmlhttprequest(textSearched);
					return true;
				}
				else
				{
					alert(' . $_data->get('L_WARNING_LENGTH_STRING_SEARCH') . ');
					return false;
				}
			}
		-->
		</script>

	   <section id="module-search">
		   <header>
				<h1>' . $_data->get('L_TITLE_SEARCH') . '</h1>
			</header>
			<div class="content">
				<div class="spacer"></div>
				<form action="' . $_data->get('U_FORM_VALID') . '" onsubmit="return check_search_form_post();" method="post">
					<div class="search-field"><input type="search" id="TxTsearched" name="q" value="' . $_data->get('TEXT_SEARCHED') . '" class="field-xlarge" placeholder="' . $_data->get('L_SEARCH') . '..."></div>
					<div class="spacer"></div>
					<div id="forms-selection" class="options">
						<a id="specialize-form-link-all" href="javascript:ChangeForm(\'all\');" ';if ($_data->is_true($_data->get('C_SIMPLE_SEARCH'))){$_result.=' class="SFL-current" ';}$_result.='>' . $_data->get('L_SEARCH_ALL') . '</a>
						';foreach($_data->get_block('forms') as $_tmp_forms){$_result.='
							<a id="specialize-form-link-' . $_data->get_from_list('MODULE_NAME', $_tmp_forms) . '" href="javascript:ChangeForm(\'' . $_data->get_from_list('MODULE_NAME', $_tmp_forms) . '\');" ';if ($_data->is_true($_data->get_from_list('C_SELECTED', $_tmp_forms))){$_result.=' class="SFL-current" ';}$_result.='>' . $_data->get_from_list('L_MODULE_NAME', $_tmp_forms) . '</a>
						';}$_result.='
					</div>
					<div id="form-all" class="SpecializedForm" ';if (!$_data->is_true($_data->get('C_SIMPLE_SEARCH'))){$_result.=' style="display:none" ';}$_result.='>
						<fieldset class="searchFieldset">
							<div class="form-element">
								<label>' . $_data->get('L_SEARCH_IN_MODULES') . '<br /><span>' . $_data->get('L_SEARCH_IN_MODULES_EXPLAIN') . '</span></label>
								<div class="form-field">
									<select id="searched_modules" name="searched_modules[]" size="5" multiple="multiple" class="list-modules">
									';foreach($_data->get_block('searched_modules') as $_tmp_searched_modules){$_result.='
										<option value="' . $_data->get_from_list('MODULE', $_tmp_searched_modules) . '" ' . $_data->get_from_list('SELECTED', $_tmp_searched_modules) . '>' . $_data->get_from_list('L_MODULE_NAME', $_tmp_searched_modules) . '</option>
									';}$_result.='
									</select>
								</div>
							</div>
						</fieldset>
					</div>
					';foreach($_data->get_block('forms') as $_tmp_forms){$_result.='
					<div id="form-' . $_data->get_from_list('MODULE_NAME', $_tmp_forms) . '" class="SpecializedForm" ';if (!$_data->is_true($_data->get_from_list('C_SELECTED', $_tmp_forms))){$_result.=' style="display:none" ';}$_result.='>
						<fieldset class="searchFieldset">
						';if ($_data->is_true($_data->get_from_list('C_SEARCH_FORM', $_tmp_forms))){$_result.='' . $_data->get_from_list('SEARCH_FORM', $_tmp_forms) . '';}else{$_result.='<p class="center">' . $_data->get_from_list('SEARCH_FORM', $_tmp_forms) . '</p>';}$_result.='
						</fieldset>
					</div>
					';}$_result.='
					<fieldset class="fieldset-submit">
						<legend>' . $_data->get('L_SEARCH') . '</legend>
						<input type="hidden" id="search-in" name="search_in" value="all">
						<input type="hidden" name="query_mode" value="0">
						<button type="submit" name="search_submit" value="' . $_data->get('L_SEARCH') . '" class="submit"><i class="fa fa-search"></i> ' . $_data->get('L_SEARCH') . '</button>
						<input type="hidden" name="token" value="' . $_data->get('TOKEN') . '">
					</fieldset>
				</form>
			</div>
			 <footer></footer>
		</section>
		<script>
		<!--
			ChangeForm(\'' . $_data->get('SEARCH_MODE_MODULE') . '\');
		-->
		</script>
'; ?>