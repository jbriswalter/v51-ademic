<?php $_result='';if ($_data->is_true($_data->get('C_RECAPTCHA_V2'))){$_result.='
<script>
<!--
jQuery(document).ready(function() {
	if(window.innerWidth >= 360) {
		jQuery(\'#recaptcha-widget-container\').html(\'<div id="' . $_data->get('HTML_ID') . '" class="g-recaptcha" data-sitekey="' . $_data->get('SITE_KEY') . '"></div><script src="https://www.google.com/recaptcha/api.js" async></ script>\');
	}
});
-->
</script>
';}$_result.='
<div id="recaptcha-widget-container">
	<div id="recaptcha-widget" style="display:none">
		<div id="recaptcha_response_field" style="display:none;"></div>
		<div id="recaptcha-container">
			<div id="recaptcha_image"></div>
			<div class="recaptcha_only_if_incorrect_sol color-alert">' . $_functions->i18n('incorrect_sol') . '</div>
			<input type="text" id="' . $_data->get('HTML_ID') . '" name="' . $_data->get('HTML_ID') . '" placeholder="' . $_functions->i18n('type_the_answer_here') . '"/>
		</div>
		<div class="options">
			<a href="javascript:Recaptcha.reload()" title="' . $_functions->i18n('refresh_captcha') . '" class="fa fa-refresh"></a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type(\'audio\')" title="' . $_functions->i18n('audio_captcha') . '" class="fa fa-volume-up"></a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type(\'image\')" title="' . $_functions->i18n('image_captcha') . '" class="fa fa-picture-o"></a></div>
			<div><a href="javascript:Recaptcha.showhelp()" title="' . $_functions->i18n('captcha_help') . '" class="fa fa-question-circle"></a></div>
		</div>
	</div>

	<script >
	var RecaptchaOptions = {
		theme : \'custom\',
		lang : \'' . $_data->get('LANG') . '\',
		custom_theme_widget: \'recaptcha-widget\'
	};
	</script >
	<script src="https://www.google.com/recaptcha/api/challenge?k=' . $_data->get('SITE_KEY') . '" ></script >
</div>
'; ?>