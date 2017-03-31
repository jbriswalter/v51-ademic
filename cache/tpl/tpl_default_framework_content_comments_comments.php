<?php $_result='<script>
<!--
function refresh_comments() {
	jQuery.ajax({
		url: PATH_TO_ROOT + \'/kernel/framework/ajax/dispatcher.php?url=/comments/display/\',
		type: "post",
		dataType: "html",
		data: {module_id: ' . $_functions->escapejs($_data->get('MODULE_ID')) . ', id_in_module: ' . $_functions->escapejs($_data->get('ID_IN_MODULE')) . ', topic_identifier: ' . $_functions->escapejs($_data->get('TOPIC_IDENTIFIER')) . ', token: ' . $_functions->escapejs($_data->get('TOKEN')) . '},
		success: function(returnData){
			jQuery("#comments-list").append(returnData);
			jQuery(\'#refresh-comments\').remove();
		}
	});
}

';if ($_data->is_true($_data->get('C_DISPLAY_VIEW_ALL_COMMENTS'))){$_result.='
jQuery(document).ready(function(){ 
	jQuery("#refresh-comments").click(function() {
		refresh_comments();
	});
});
';}$_result.='

-->
</script>

<section id="comments-list">
	<header>
		<h2>' . LangLoader::get_message('comments', 'comments-common') . '</h2>
	</header>
	<div class="content">
		';if ($_data->is_true($_data->get('C_DISPLAY_FORM'))){$_result.='
			<div id="comment-form">
				';$_subtpl=$_data->get('COMMENT_FORM');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
			</div>
		';}$_result.='
		
		';$_subtpl=$_data->get('KEEP_MESSAGE');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
		
		';if ($_data->is_true($_data->get('C_MODERATE'))){$_result.='
			<div class="message-moderate">
				';if ($_data->is_true($_data->get('C_IS_LOCKED'))){$_result.='
				<a href="' . $_data->get('U_UNLOCK') . '"><i class="fa fa-ban"></i> ' . $_functions->i18n('unlock') . '</a>
				';}else{$_result.='
				<a href="' . $_data->get('U_LOCK') . '"><i class="fa fa-unban"></i> ' . $_functions->i18n('lock') . '</a>
				';}$_result.='
			</div>
		';}$_result.='
		
		<div class="spacer"></div>
		
		';$_subtpl=$_data->get('COMMENTS_LIST');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
	</div>
	<footer></footer>
</section>

';if ($_data->is_true($_data->get('C_DISPLAY_VIEW_ALL_COMMENTS'))){$_result.='
<div class="center">
	<button type="submit" class="submit" id="refresh-comments">' . $_functions->i18n('allComments') . '</button>
</div>
';}$_result.='
'; ?>