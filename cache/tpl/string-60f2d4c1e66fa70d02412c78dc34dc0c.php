<?php $_result='
	<div id="global" class="global-maintain">
		

		
		

 
<script src="/kernel/lib/js/phpboost/form/validator.js"></script>
<script src="/kernel/lib/js/phpboost/form/form.js"></script>  


<script>
<!--
jQuery(document).ready(function() {
	var form = new HTMLForm("loginForm");
	HTMLForms.add(form);
});
-->
</script>


<form id="loginForm" action="/wiki/admin_wiki.php/" method="post" onsubmit="return HTMLForms.get(\'loginForm\').validate();" class="fieldset-content">
	
	<p class="center">Les champs marqués * sont obligatoires !</p>
	
	
	
		<script>
<!--
jQuery(document).ready(function() {
	var form = HTMLForms.get("loginForm");
	var fieldset = new FormFieldset("loginFieldset");

	
	
	form.addFieldset(fieldset);
});
-->	
</script>
<fieldset id="loginForm_loginFieldset">
	<legend>Connexion</legend>
	<div class="fieldset-inset">
		
		
			<div id="loginForm_login_field" class="form-element">
	
		<label for="loginForm_login">
			Identifiant de connexion
			
			<span class="field-description">Adresse email ou votre login personnalisé si vous en avez choisi un.</span>
			
		</label>
	

	<div id="onblurContainerResponseloginForm_login" class="form-field form-field-text picture-status-constraint field-required ">
		
		<input type="text" size="30" maxlength="255" name="loginForm_login" id="loginForm_login" value=""
	class=""    >
		
		<span class="text-status-constraint" style="display:none" id="onblurMessageResponseloginForm_login"></span>
	</div>

</div>
<script>
<!--
jQuery(document).ready(function() {
	var field = new FormField("login");
	var fieldset = HTMLForms.getFieldset("loginFieldset");
	fieldset.addField(field);
	field.hasConstraints = true;
	field.doValidate = function() {
		var result = "";
		
			result = notEmptyFormFieldValidator(\'login\', \'Le champ &quot;identifiant de connexion&quot; doit être renseigné\');
			if (result != "") {
				return result;
			}
		
		return result;
	}
	if (jQuery("#loginForm_login").length)
	{
		jQuery("#loginForm_login").blur(function() {
			HTMLForms.get("loginForm").getField("login").enableValidationMessage();
			HTMLForms.get("loginForm").getField("login").liveValidate();
			
		});
	
		
	}

	
});
-->
</script>

		
			<div id="loginForm_password_field" class="form-element">
	
		<label for="loginForm_password">
			Mot de passe
			
		</label>
	

	<div id="onblurContainerResponseloginForm_password" class="form-field form-field-password picture-status-constraint field-required ">
		
		<input type="password" size="30" maxlength="255" name="loginForm_password"
	id="loginForm_password" value="" class=""  />
		
		<span class="text-status-constraint" style="display:none" id="onblurMessageResponseloginForm_password"></span>
	</div>

</div>
<script>
<!--
jQuery(document).ready(function() {
	var field = new FormField("password");
	var fieldset = HTMLForms.getFieldset("loginFieldset");
	fieldset.addField(field);
	field.hasConstraints = true;
	field.doValidate = function() {
		var result = "";
		
			result = notEmptyFormFieldValidator(\'password\', \'Le champ &quot;mot de passe&quot; doit être renseigné\');
			if (result != "") {
				return result;
			}
		
		return result;
	}
	if (jQuery("#loginForm_password").length)
	{
		jQuery("#loginForm_password").blur(function() {
			HTMLForms.get("loginForm").getField("password").enableValidationMessage();
			HTMLForms.get("loginForm").getField("password").liveValidate();
			
		});
	
		
	}

	
});
-->
</script>

		
			<script>
<!--
jQuery(document).ready(function() {
	jQuery("#loginForm_autoconnect").click(function() {
		HTMLForms.get("loginForm").getField("autoconnect").enableValidationMessage();
		HTMLForms.get("loginForm").getField("autoconnect").liveValidate();
	});
});
-->
</script>
<div id="loginForm_autoconnect_field" class="form-element form-element-date">
	
		<label for="loginForm_autoconnect">
			Connexion auto
			
		</label>
	
	
	<div id="onblurContainerResponseloginForm_autoconnect" class="form-field form-field-checkbox picture-status-constraint">
		<input type="checkbox" name="loginForm_autoconnect" id="loginForm_autoconnect"   checked="checked"  />
		<label for="loginForm_autoconnect"></label>
		<span class="text-status-constraint" style="display:none" id="onblurMessageResponseloginForm_autoconnect"></span>
	</div>
</div>

<script>
<!--
jQuery(document).ready(function() {
	var field = new FormField("autoconnect");
	var fieldset = HTMLForms.getFieldset("loginFieldset");
	fieldset.addField(field);
	
	field.doValidate = function() {
		var result = "";
		
		return result;
	}
	if (jQuery("#loginForm_autoconnect").length)
	{
		jQuery("#loginForm_autoconnect").blur(function() {
			HTMLForms.get("loginForm").getField("autoconnect").enableValidationMessage();
			HTMLForms.get("loginForm").getField("autoconnect").liveValidate();
			
		});
	
		
	}

	
});
-->
</script>

		
	</div>
</fieldset>
	
		<script>
<!--
jQuery(document).ready(function() {
	var form = HTMLForms.get("loginForm");
	var fieldset = new FormFieldset("fbuttons");

	
	
	form.addFieldset(fieldset);
});
-->	
</script>
<fieldset id="loginForm_fbuttons" class="fieldset-submit">
	
	<div class="fieldset-inset">
		
		
			<button type="submit" name="loginForm_authenticate" class="submit" onclick="" value="true">Connexion</button>
		
	</div>
</fieldset>
	
	
	<input type="hidden" id="loginForm_token" name="token" value="1e32e788730964cb">
	<input type="hidden" id="loginForm_disabled_fields" name="loginForm_disabled_fields" value="">
	<input type="hidden" id="loginForm_disabled_fieldsets" name="loginForm_disabled_fieldsets" value="">
</form>
	</div>


'; ?>