<?php $_result='';if ($_data->is_true($_data->get('C_EDITOR_NOT_ALREADY_INCLUDED'))){$_result.='
<script>
<!--
function XMLHttpRequest_preview(field)
{
	if( XMLHttpRequest_preview.arguments.length == 0 )
		field = ' . $_functions->escapejs($_data->get('FIELD')) . ';

	var contents = jQuery(\'#\' + field).val();
	var preview_field = \'xmlhttprequest-preview\' + field;

	if( contents != "" )
	{
		jQuery("#" + preview_field).slideDown(500);

		jQuery(\'#loading-preview-\' + field).show();

		jQuery.ajax({
			url: PATH_TO_ROOT + "/kernel/framework/ajax/content_xmlhttprequest.php",
			type: "post",
			data: {
				token: \'' . $_data->get('TOKEN') . '\',
				path_to_root: \'' . $_data->get('PHP_PATH_TO_ROOT') . '\',
				editor: \'BBCode\',
				page_path: \'' . $_data->get('PAGE_PATH') . '\',
				contents: contents,
				ftags: \'' . $_data->get('FORBIDDEN_TAGS') . '\'
			},
			success: function(returnData){
				jQuery(\'#\' + preview_field).html(returnData);
				jQuery(\'#loading-preview-\' + field).hide();
			}
		});
	}
	else
		alert("' . $_data->get('L_REQUIRE_TEXT') . '");
}
-->
</script>
<script src="' . $_data->get('PATH_TO_ROOT') . '/BBCode/templates/js/bbcode.js"></script>
';}$_result.='

<div id="loading-preview-' . $_data->get('FIELD') . '" class="loading-preview-container" style="display:none;">
	<div class="loading-preview">
		<i class="fa fa-spinner fa-2x fa-spin"></i>
	</div>
</div>

<div id="xmlhttprequest-preview' . $_data->get('FIELD') . '" class="xmlhttprequest-preview" style="display:none;"></div>

<div id="bbcode-expanded" class="bbcode expand">
	<div class="bbcode-containers">
		<ul id="bbcode-container-smileys" class="bbcode-container">
			<li class="bbcode-elements">
				<a href="" onclick="bb_display_block(\'1\', \'' . $_data->get('FIELD') . '\');return false;" onmouseover="bb_hide_block(\'1\', \'' . $_data->get('FIELD') . '\', 1);" onmouseout="bb_hide_block(\'1\', \'' . $_data->get('FIELD') . '\', 0);" class="bbcode-hover" title="' . $_data->get('L_BB_SMILEYS') . '">
					<i class="fa bbcode-icon-smileys" ' . $_data->get('AUTH_SMILEYS') . '></i>
				</a>
				<div id="bb-block1' . $_data->get('FIELD') . '" class="bbcode-block-container" style="display:none;">
					<ul class="bbcode-block block-smileys" onmouseover="bb_hide_block(\'1\', \'' . $_data->get('FIELD') . '\', 1);" onmouseout="bb_hide_block(\'1\', \'' . $_data->get('FIELD') . '\', 0);">
						';foreach($_data->get_block('smileys') as $_tmp_smileys){$_result.='
							<li>
							<a href="" onclick="insertbbcode(\'' . $_data->get_from_list('CODE', $_tmp_smileys) . '\', \'smile\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'1\', \'' . $_data->get('FIELD') . '\', 0);return false;" class="bbcode-hover" title="' . $_data->get_from_list('CODE', $_tmp_smileys) . '"><img src="' . $_data->get_from_list('URL', $_tmp_smileys) . '" title="' . $_data->get_from_list('CODE', $_tmp_smileys) . '" alt="' . $_data->get_from_list('CODE', $_tmp_smileys) . '"></a>
							</li>
						';}$_result.='
					</ul>
				</div>
			</li>
		</ul>

		<ul id="bbcode-container-fonts" class="bbcode-container">
			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-bold" ' . $_data->get('AUTH_B') . ' onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[b]\', \'[/b]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_BOLD') . '"></a>
			</li>

			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-italic" ' . $_data->get('AUTH_I') . ' onclick="' . $_data->get('DISABLED_I') . 'insertbbcode(\'[i]\', \'[/i]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_ITALIC') . '"></a>
			</li>

			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-underline" ' . $_data->get('AUTH_U') . ' onclick="' . $_data->get('DISABLED_U') . 'insertbbcode(\'[u]\', \'[/u]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_UNDERLINE') . '"></a>
			</li>

			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-strike" ' . $_data->get('AUTH_S') . ' onclick="' . $_data->get('DISABLED_S') . 'insertbbcode(\'[s]\', \'[/s]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_STRIKE') . '"></a>
			</li>

			<li class="bbcode-elements">
				<a href="" onclick="' . $_data->get('DISABLED_COLOR') . 'bbcode_color(\'5\', \'' . $_data->get('FIELD') . '\');bb_display_block(\'5\', \'' . $_data->get('FIELD') . '\');return false;" onmouseout="' . $_data->get('DISABLED_COLOR') . 'bb_hide_block(\'5\', \'' . $_data->get('FIELD') . '\', 0);" title="' . $_data->get('L_BB_COLOR') . '">
					<i class="fa bbcode-icon-color" ' . $_data->get('AUTH_COLOR') . '></i>
				</a>
				<div id="bb-block5' . $_data->get('FIELD') . '" class="bbcode-block-container color-picker" style="display:none;">
					<div id="bbcolor' . $_data->get('FIELD') . '" class="bbcode-block" onmouseover="bb_hide_block(\'5\', \'' . $_data->get('FIELD') . '\', 1);" onmouseout="bb_hide_block(\'5\', \'' . $_data->get('FIELD') . '\', 0);">
					</div>
				</div>
			</li>
			
			<li class="bbcode-elements">
				<a href="" onclick="' . $_data->get('DISABLED_SIZE') . 'bb_display_block(\'6\', \'' . $_data->get('FIELD') . '\');return false;" onmouseout="' . $_data->get('DISABLED_SIZE') . 'bb_hide_block(\'6\', \'' . $_data->get('FIELD') . '\', 0);" class="bbcode-hover" title="' . $_data->get('L_BB_SIZE') . '">
					<i class="fa bbcode-icon-size" ' . $_data->get('AUTH_SIZE') . '></i>
				</a>
				<div id="bb-block6' . $_data->get('FIELD') . '" class="bbcode-block-container" style="display:none;">
					<ul class="bbcode-block bbcode-block-list" style="width: 40px;" onmouseover="bb_hide_block(\'6\', \'' . $_data->get('FIELD') . '\', 1);" onmouseout="bb_hide_block(\'6\', \'' . $_data->get('FIELD') . '\', 0);">
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[size=5]\', \'[/size]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'6\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_SIZE') . ' 05"> 05 </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[size=10]\', \'[/size]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'6\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_SIZE') . ' 10"> 10 </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[size=15]\', \'[/size]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'6\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_SIZE') . ' 15"> 15 </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[size=20]\', \'[/size]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'6\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_SIZE') . ' 20"> 20 </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[size=25]\', \'[/size]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'6\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_SIZE') . ' 25"> 25 </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[size=30]\', \'[/size]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'6\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_SIZE') . ' 30"> 30 </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[size=35]\', \'[/size]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'6\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_SIZE') . ' 35"> 35 </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[size=40]\', \'[/size]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'6\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_SIZE') . ' 40"> 40 </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[size=45]\', \'[/size]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'6\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_SIZE') . ' 45"> 45 </a></li>
					</ul>
				</div>
			</li>
			
			<li class="bbcode-elements">
				<a href="" onclick="' . $_data->get('DISABLED_FONT') . 'bb_display_block(\'10\', \'' . $_data->get('FIELD') . '\');return false;" onmouseout="' . $_data->get('DISABLED_FONT') . 'bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);" class="bbcode-hover" title="' . $_data->get('L_BB_FONT') . '">
					<i class="fa bbcode-icon-font" ' . $_data->get('AUTH_FONT') . '></i>
				</a>
				<div id="bb-block10' . $_data->get('FIELD') . '" class="bbcode-block-container" style="display:none;">
					<ul class="bbcode-block bbcode-block-list bbcode-block-fonts" onmouseover="bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 1);" onmouseout="bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);">
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=andale mono]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Andale Mono"> <span style="font-family: andale mono;">Andale Mono</span> </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=arial]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Arial"> <span style="font-family: arial;">Arial</span> </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=arial black]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Arial Black"> <span style="font-family: arial black;">Arial Black</span> </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=book antiqua]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Book Antiqua"> <span style="font-family: book antiqua;">Book Antiqua</span> </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=comic sans ms]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Comic Sans MS"> <span style="font-family: comic sans ms;">Comic Sans MS</span> </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=courier new]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Courier New"> <span style="font-family: courier new;">Courier New</span> </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=georgia]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Georgia"> <span style="font-family: georgia;">Georgia</span> </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=helvetica]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Helvetica"> <span style="font-family: helvetica;">Helvetica</span> </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=impact]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Impact"> <span style="font-family: impact;">Impact</span> </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=symbol]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Symbol"> <span style="font-family: symbol;">Symbol</span> </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=tahoma]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Tahoma"> <span style="font-family: tahoma;">Tahoma</span> </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=terminal]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Terminal"> <span style="font-family: terminal;">Terminal</span> </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=times new roman]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Times New Roman"> <span style="font-family: times new roman;">Times New Roman</span> </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=trebuchet ms]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Trebuchet MS"> <span style="font-family: trebuchet ms;">Trebuchet MS</span> </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=verdana]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Verdana"> <span style="font-family: verdana;">Verdana</span> </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=webdings]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Webdings"> Webdings </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[font=wingdings]\', \'[/font]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'10\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_FONT') . ' Wingdings"> Wingdings </a></li>
					</ul>
				</div>
			</li>
		</ul>

		<ul id="bbcode-container-titles" class="bbcode-container">
			<li class="bbcode-elements">
				<a href="" onclick="' . $_data->get('DISABLED_TITLE') . 'bb_display_block(\'2\', \'' . $_data->get('FIELD') . '\');return false;" onmouseout="' . $_data->get('DISABLED_TITLE') . 'bb_hide_block(\'2\', \'' . $_data->get('FIELD') . '\', 0);" class="bbcode-hover" title="' . $_data->get('L_BB_TITLE') . '">
					<i class="fa bbcode-icon-title" ' . $_data->get('AUTH_TITLE') . '></i>
				</a>
				<div id="bb-block2' . $_data->get('FIELD') . '" class="bbcode-block-container" style="display:none;">
					<ul class="bbcode-block bbcode-block-list bbcode-block-title" onmouseover="bb_hide_block(\'2\', \'' . $_data->get('FIELD') . '\', 1);" onmouseout="bb_hide_block(\'2\', \'' . $_data->get('FIELD') . '\', 0);">
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[title=1]\', \'[/title]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'2\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_TITLE') . ' 1"> ' . $_data->get('L_TITLE') . ' 1 </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[title=2]\', \'[/title]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'2\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_TITLE') . ' 2"> ' . $_data->get('L_TITLE') . ' 2 </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[title=3]\', \'[/title]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'2\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_TITLE') . ' 3"> ' . $_data->get('L_TITLE') . ' 3 </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[title=4]\', \'[/title]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'2\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_TITLE') . ' 4"> ' . $_data->get('L_TITLE') . ' 4 </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[title=5]\', \'[/title]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'2\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_TITLE') . ' 5"> ' . $_data->get('L_TITLE') . ' 5 </a></li>
					</ul>
				</div>
			</li>

			<li class="bbcode-elements">
				<a href="" onclick="' . $_data->get('DISABLED_LIST') . 'bb_display_block(\'9\', \'' . $_data->get('FIELD') . '\');return false;" onmouseout="' . $_data->get('DISABLED_LIST') . 'bb_hide_block(\'9\', \'' . $_data->get('FIELD') . '\', 0);" class="bbcode-hover" title="' . $_data->get('L_BB_LIST') . '">
					<i class="fa bbcode-icon-list" ' . $_data->get('AUTH_LIST') . '></i>
				</a>
				<div id="bb-block9' . $_data->get('FIELD') . '" class="bbcode-block-container" style="display:none;">
					<div class="bbcode-block bbcode-block-ul" onmouseover="bb_hide_block(\'9\', \'' . $_data->get('FIELD') . '\', 1);" onmouseout="bb_hide_block(\'9\', \'' . $_data->get('FIELD') . '\', 0);">
						<div class="form-element">
							<label class="smaller" for="bb_list' . $_data->get('FIELD') . '">' . $_data->get('L_LINES') . '</label>
							<div class="form-field">
								<input id="bb_list' . $_data->get('FIELD') . '" class="field-smaller" size="3" type="text" name="bb_list' . $_data->get('FIELD') . '" maxlength="3" value="3">
							</div>
						</div>
						<div class="form-element">
							<label class="smaller" for="bb_ordered_list' . $_data->get('FIELD') . '">' . $_data->get('L_ORDERED_LIST') . '</label>
							<div class="form-field">
								<input id="bb_ordered_list' . $_data->get('FIELD') . '" type="checkbox" name="bb_ordered_list' . $_data->get('FIELD') . '" >
							</div>
						</div>
						<div class="bbcode-form-element-text">
							<a class="small" href="" onclick="' . $_data->get('DISABLED_LIST') . 'bbcode_list(\'' . $_data->get('FIELD') . '\');bb_hide_block(\'9\', \'' . $_data->get('FIELD') . '\', 0);return false;">
								<i class="fa bbcode-icon-list valign-middle" title="' . $_data->get('L_BB_LIST') . '"></i> ' . $_data->get('L_INSERT_LIST') . '
							</a>
						</div>
					</div>
				</div>
			</li>
		</ul>

		<ul id="bbcode-container-blocks" class="bbcode-container">
			<li class="bbcode-elements">
				<a href="" onclick="' . $_data->get('DISABLED_BLOCK') . 'bb_display_block(\'3\', \'' . $_data->get('FIELD') . '\');return false;" onmouseout="' . $_data->get('DISABLED_BLOCK') . 'bb_hide_block(\'3\', \'' . $_data->get('FIELD') . '\', 0);" class="bbcode-hover" title="' . $_data->get('L_BB_CONTAINER') . '">
					<i class="fa bbcode-icon-subtitle" ' . $_data->get('AUTH_BLOCK') . '></i>
				</a>
				<div id="bb-block3' . $_data->get('FIELD') . '" class="bbcode-block-container" style="display:none;">
					<ul class="bbcode-block bbcode-block-list bbcode-block-block" onmouseover="bb_hide_block(\'3\', \'' . $_data->get('FIELD') . '\', 1);" onmouseout="bb_hide_block(\'3\', \'' . $_data->get('FIELD') . '\', 0);">
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[block]\', \'[/block]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'3\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CONTAINER') . ' ' . $_data->get('L_BLOCK') . '"> ' . $_data->get('L_BLOCK') . ' </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[fieldset]\', \'[/fieldset]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'3\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CONTAINER') . ' ' . $_data->get('L_FIELDSET') . '"> ' . $_data->get('L_FIELDSET') . ' </a></li>
					</ul>
				</div>
			</li>

			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-quote" ' . $_data->get('AUTH_QUOTE') . ' onclick="' . $_data->get('DISABLED_QUOTE') . 'insertbbcode(\'[quote]\', \'[/quote]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_QUOTE') . '"></a>
			</li>

			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-hide" ' . $_data->get('AUTH_HIDE') . ' onclick="' . $_data->get('DISABLED_HIDE') . 'insertbbcode(\'[hide]\', \'[/hide]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_HIDE') . '"></a>
			</li>

			<li class="bbcode-elements">
				<a href="" onclick="' . $_data->get('DISABLED_STYLE') . 'bb_display_block(\'4\', \'' . $_data->get('FIELD') . '\');return false;" onmouseout="' . $_data->get('DISABLED_STYLE') . 'bb_hide_block(\'4\', \'' . $_data->get('FIELD') . '\', 0);" class="bbcode-hover" title="' . $_data->get('L_BB_STYLE') . '">
					<i class="fa bbcode-icon-style" ' . $_data->get('AUTH_STYLE') . '></i>
				</a>
				<div class="bbcode-block-container" style="display:none;" id="bb-block4' . $_data->get('FIELD') . '">
					<ul class="bbcode-block bbcode-block-list bbcode-block-message" onmouseover="bb_hide_block(\'4\', \'' . $_data->get('FIELD') . '\', 1);" onmouseout="bb_hide_block(\'4\', \'' . $_data->get('FIELD') . '\', 0);">
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[style=success] \', \'[/style]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'4\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_SUCCESS') . ' "> ' . $_data->get('L_SUCCESS') . '  </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[style=question]\', \'[/style]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'4\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_QUESTION') . '"> ' . $_data->get('L_QUESTION') . ' </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[style=notice]  \', \'[/style]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'4\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_NOTICE') . '  "> ' . $_data->get('L_NOTICE') . '   </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[style=warning] \', \'[/style]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'4\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_WARNING') . ' "> ' . $_data->get('L_WARNING') . '  </a></li>
						<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[style=error]   \', \'[/style]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'4\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_ERROR') . '   "> ' . $_data->get('L_ERROR') . '    </a></li>
					</ul>
				</div>
			</li>
		</ul>

		<ul id="bbcode-container-links" class="bbcode-container">
			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-url" ' . $_data->get('AUTH_URL') . ' onclick="' . $_data->get('DISABLED_URL') . 'bbcode_url(\'' . $_data->get('FIELD') . '\', ' . $_functions->escapejs($_data->get('L_URL_PROMPT')) . ');return false;" title="' . $_data->get('L_BB_URL') . '"></a>
			</li>
		</ul>

		<ul id="bbcode-container-pictures" class="bbcode-container">
			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-image" ' . $_data->get('AUTH_IMG') . ' onclick="' . $_data->get('DISABLED_IMG') . 'insertbbcode(\'[img]\', \'[/img]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_IMAGE') . '"></a>
			</li>

			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-lightbox" ' . $_data->get('AUTH_LIGHTBOX') . ' onclick="' . $_data->get('DISABLED_lightbox') . 'bbcode_lightbox(\'' . $_data->get('FIELD') . '\', ' . $_functions->escapejs($_data->get('L_URL_PROMPT')) . ');return false;" title="' . $_data->get('L_BB_LIGHTBOX') . '"></a>
			</li>
		</ul>

		';if ($_data->is_true($_data->get('C_UPLOAD_MANAGEMENT'))){$_result.='
		<ul id="bbcode-container-upload" class="bbcode-container">
			<li class="bbcode-elements">
				<a title="' . $_data->get('L_BB_UPLOAD') . '" href="#" onclick="window.open(\'' . $_data->get('PATH_TO_ROOT') . '/user/upload.php?popup=1&amp;fd=' . $_data->get('FIELD') . '&amp;edt=BBCode\', \'\', \'height=550,width=720,resizable=yes,scrollbars=yes\');return false;">
					<i class="fa bbcode-icon-upload"></i>
				</a>
			</li>
		</ul>
		';}$_result.='
		
		<span class="bbcode-backspace"><br /></span>

		<ul id="bbcode-container-aligns" class="bbcode-container bbcode-container-more">
			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-left" ' . $_data->get('AUTH_ALIGN') . ' onclick="' . $_data->get('DISABLED_ALIGN') . 'insertbbcode(\'[align=left]\', \'[/align]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_LEFT') . '"></a>
			</li>

			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-center" ' . $_data->get('AUTH_ALIGN') . ' onclick="' . $_data->get('DISABLED_ALIGN') . 'insertbbcode(\'[align=center]\', \'[/align]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_CENTER') . '"></a>
			</li>

			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-right" ' . $_data->get('AUTH_ALIGN') . ' onclick="' . $_data->get('DISABLED_ALIGN') . 'insertbbcode(\'[align=right]\', \'[/align]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_RIGHT') . '"></a>
			</li>

			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-justify" ' . $_data->get('AUTH_ALIGN') . ' onclick="' . $_data->get('DISABLED_ALIGN') . 'insertbbcode(\'[align=justify]\', \'[/align]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_JUSTIFY') . '"></a>
			</li>
		</ul>

		<ul id="bbcode-container-positions" class="bbcode-container bbcode-container-more">
			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-float-left" ' . $_data->get('AUTH_FLOAT') . ' onclick="' . $_data->get('DISABLED_FLOAT') . 'insertbbcode(\'[float=left]\', \'[/float]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_FLOAT_LEFT') . '"></a>
			</li>

			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-float-right" ' . $_data->get('AUTH_FLOAT') . ' onclick="' . $_data->get('DISABLED_FLOAT') . 'insertbbcode(\'[float=right]\', \'[/float]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_FLOAT_RIGHT') . '"></a>
			</li>

			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-indent" ' . $_data->get('AUTH_INDENT') . ' onclick="' . $_data->get('DISABLED_INDENT') . 'insertbbcode(\'[indent]\', \'[/indent]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_INDENT') . '"></a>
			</li>

			<li class="bbcode-elements">
				<a href="" onclick="' . $_data->get('DISABLED_TABLE') . 'bb_display_block(\'7\', \'' . $_data->get('FIELD') . '\');return false;" onmouseover="' . $_data->get('DISABLED_TABLE') . 'bb_hide_block(\'7\', \'' . $_data->get('FIELD') . '\', 1);" class="bbcode-hover" title="' . $_data->get('L_BB_TABLE') . '">
					<i class="fa bbcode-icon-table" ' . $_data->get('AUTH_TABLE') . '></i>
				</a>
				<div id="bb-block7' . $_data->get('FIELD') . '" class="bbcode-block-container" style="display:none;">
					<div id="bbtable' . $_data->get('FIELD') . '" class="bbcode-block bbcode-block-table" onmouseover="bb_hide_block(\'7\', \'' . $_data->get('FIELD') . '\', 1);" onmouseout="bb_hide_block(\'7\', \'' . $_data->get('FIELD') . '\', 0);">
						<div class="form-element">
							<label class="smaller" for="bb-lines' . $_data->get('FIELD') . '">' . $_data->get('L_LINES') . '</label>
							<div class="form-field">
								<input type="text" maxlength="2" name="bb-lines' . $_data->get('FIELD') . '" id="bb-lines' . $_data->get('FIELD') . '" value="2" class="field-smaller">
							</div>
						</div>
						<div class="form-element">
							<label class="smaller" for="bb-cols' . $_data->get('FIELD') . '">' . $_data->get('L_COLS') . '</label>
							<div class="form-field">
								<input type="text" maxlength="2" name="bb-cols' . $_data->get('FIELD') . '" id="bb-cols' . $_data->get('FIELD') . '" value="2" class="field-smaller">
							</div>
						</div>
						<div class="form-element">
							<label class="smaller" for="bb-head' . $_data->get('FIELD') . '">' . $_data->get('L_ADD_HEAD') . '</label>
							<div class="form-field">
								<input type="checkbox" name="bb-head' . $_data->get('FIELD') . '" id="bb-head' . $_data->get('FIELD') . '" class="field-smaller">
							</div>
						</div>
						<div class="bbcode-form-element-text">
							<a class="small" href="" onclick="' . $_data->get('DISABLED_TABLE') . 'bbcode_table(\'' . $_data->get('FIELD') . '\', \'' . $_data->get('L_TABLE_HEAD') . '\');bb_hide_block(\'7\', \'' . $_data->get('FIELD') . '\', 0);return false;">
								<i class="fa bbcode-icon-table" title="' . $_data->get('L_BB_TABLE') . '"></i> ' . $_data->get('L_INSERT_TABLE') . '
							</a>
						</div>
					</div>
				</div>
			</li>
		</ul>
		
		<ul id="bbcode-container-exp" class="bbcode-container bbcode-container-more">
			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-sup" ' . $_data->get('AUTH_SUP') . ' onclick="' . $_data->get('DISABLED_SUP') . 'insertbbcode(\'[sup]\', \'[/sup]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_SUP') . '"></a>
			</li>
			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-sub" ' . $_data->get('AUTH_SUB') . ' onclick="' . $_data->get('DISABLED_SUB') . 'insertbbcode(\'[sub]\', \'[/sub]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_SUB') . '"></a>
			</li>
		</ul>

		<ul id="bbcode-container-anchor" class="bbcode-container bbcode-container-more">
			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-anchor" ' . $_data->get('AUTH_ANCHOR') . ' onclick="' . $_data->get('DISABLED_ANCHOR') . 'bbcode_anchor(\'' . $_data->get('FIELD') . '\', ' . $_functions->escapejs($_data->get('L_ANCHOR_PROMPT')) . ');return false;" title="' . $_data->get('L_BB_ANCHOR') . '"></a>
			</li>
		</ul>

		<ul id="bbcode-container-movies" class="bbcode-container bbcode-container-more">
			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-flash" ' . $_data->get('AUTH_SWF') . ' onclick="' . $_data->get('DISABLED_SWF') . 'insertbbcode(\'[swf=425,344]\', \'[/swf]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_SWF') . '"></a>
			</li>
			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-movie" ' . $_data->get('AUTH_MOVIE') . ' onclick="' . $_data->get('DISABLED_MOVIE') . 'insertbbcode(\'[movie=100,100]\', \'[/movie]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_MOVIE') . '"></a>
			</li>
			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-youtube" ' . $_data->get('AUTH_YOUTUBE') . ' onclick="' . $_data->get('DISABLED_YOUTUBE') . 'insertbbcode(\'[youtube]\', \'[/youtube]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_YOUTUBE') . '"></a>
			</li>
			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-sound" ' . $_data->get('AUTH_SOUND') . ' onclick="' . $_data->get('DISABLED_SOUND') . 'insertbbcode(\'[sound]\', \'[/sound]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_SOUND') . '"></a>
			</li>
		</ul>
		
		<ul id="bbcode-container-code" class="bbcode-container bbcode-container-more">
			<li class="bbcode-elements">
				<a href="" onclick="' . $_data->get('DISABLED_CODE') . 'bb_display_block(\'8\', \'' . $_data->get('FIELD') . '\');return false;" onmouseout="' . $_data->get('DISABLED_CODE') . 'bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);" class="bbcode-hover" title="' . $_data->get('L_BB_CODE') . '">
					<i class="fa bbcode-icon-code" ' . $_data->get('AUTH_CODE') . '></i>
				</a>
				<div id="bb-block8' . $_data->get('FIELD') . '" class="bbcode-block-container" style="display:none;">
					<div class="bbcode-block bbcode-block-list bbcode-block-code" onmouseover="bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 1);" onmouseout="bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);">
						<ul>
							<li class="bbcode-code-title"><span>' . $_data->get('L_TEXT') . '</span></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=text]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' text">Text</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=sql]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' sql">SqL</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=xml]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' xml">Xml</a></li>

							<li class="bbcode-code-title"><span>' . $_data->get('L_PHPBOOST_LANGUAGES') . '</span></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=bbcode]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' bbcode">BBCode</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=tpl]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' template">Template</a></li>

							<li class="bbcode-code-title"><span>' . $_data->get('L_SCRIPT') . '</span></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=php]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' php">PHP</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=asp]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' asp">Asp</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=python]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' python">Python</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=pearl]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' text">Pearl</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=ruby]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' ruby">Ruby</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=bash]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' bash">Bash</a></li>

							<li class="bbcode-code-title"><span>' . $_data->get('L_WEB') . '</span></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=html]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' html">Html</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=css]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' css">Css</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=javascript]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' javascript">Javascript</a></li>

							<li class="bbcode-code-title"><span>' . $_data->get('L_PROG') . '</span></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=c]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' c">C</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=cpp]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' c++">C++</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=c#]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' c#">C#</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=d]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' d">D</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=go]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' go">Go</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=java]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' java">Java</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=pascal]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' pascal">Pascal</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=delphi]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' delphi">Delphi</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=fortran]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' fortran">Fortran</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=vb]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' vb">Vb</a></li>
							<li><a href="" onclick="' . $_data->get('DISABLED_B') . 'insertbbcode(\'[code=asm]\', \'[/code]\', \'' . $_data->get('FIELD') . '\');bb_hide_block(\'8\', \'' . $_data->get('FIELD') . '\', 0);return false;" title="' . $_data->get('L_CODE') . ' asm">Asm</a></li>
						</ul>
					</div>
				</div>
			</li>

			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-math" ' . $_data->get('AUTH_MATH') . ' onclick="' . $_data->get('DISABLED_MATH') . 'insertbbcode(\'[math]\', \'[/math]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_MATH') . '"></a>
			</li>
			<li class="bbcode-elements">
				<a href="" class="fa bbcode-icon-html" ' . $_data->get('AUTH_HTML') . ' onclick="' . $_data->get('DISABLED_HTML') . 'insertbbcode(\'[html]\', \'[/html]\', \'' . $_data->get('FIELD') . '\');return false;" title="' . $_data->get('L_BB_HTML') . '"></a>
			</li>
		</ul>

		<ul id="bbcode-container-help" class="bbcode-container bbcode-container-more">
			<li class="bbcode-elements">
				<a href="https://www.phpboost.com/wiki/bbcode" title="' . $_data->get('L_BB_HELP') . '" target="_blank">
					<i class="fa bbcode-icon-help"></i>
				</a>
			</li>
		</ul>
	</div>

	<div class="bbcode-elements bbcode-elements-more">
		<a href="" title="' . $_data->get('L_BB_MORE') . '" onclick="show_bbcode_div(\'bbcode-container-more\');return false;">
			<i class="fa bbcode-icon-more bbcode-hover"></i>
		</a>
	</div>

</div>

<script>
<!--
set_bbcode_preference(\'bbcode-container-more\');
-->
</script>
'; ?>