		<script>
		<!--
			function check_form_rank_add()
			{	
				if(document.getElementById('name').value == "") {
					alert("{L_REQUIRE_RANK_NAME}");
					return false;
			    }
				if(document.getElementById('msg').value == "") {
					alert("{L_REQUIRE_NBR_MSG_RANK}");
					return false;
			    }
				return true;
			}

			function img_change(id, url)
			{
				if( document.getElementById(id) && url != '' )
				{
					document.getElementById(id).style.display = 'inline';
					document.getElementById(id).src = url;
				}
				else
					document.getElementById(id).style.display = 'none';
			}
		-->
		</script>

		<nav id="admin-quick-menu">
			<a href="" class="js-menu-button" onclick="open_submenu('admin-quick-menu');return false;" title="{L_FORUM_MANAGEMENT}">
				<i class="fa fa-bars"></i> {L_FORUM_MANAGEMENT}
			</a>
			<ul>
				<li>
					<a href="${relative_url(ForumUrlBuilder::manage_categories())}" class="quick-link">{L_CAT_MANAGEMENT}</a>
				</li>
				<li>
					<a href="${relative_url(ForumUrlBuilder::add_category())}" class="quick-link">{L_ADD_CAT}</a>
				</li>
				<li>
					<a href="admin_ranks.php" class="quick-link">{L_FORUM_RANKS_MANAGEMENT}</a>
				</li>
				<li>
					<a href="admin_ranks_add.php" class="quick-link">{L_FORUM_ADD_RANKS}</a>
				</li>
				<li>
					<a href="${relative_url(ForumUrlBuilder::configuration())}" class="quick-link">${LangLoader::get_message('configuration', 'admin-common')}</a>
				</li>
			</ul>	
		</nav>
		
		<div id="admin-contents">
		
			# INCLUDE message_helper #
			
			<form action="admin_ranks_add.php" method="post" enctype="multipart/form-data" class="fieldset-content">
				<fieldset>
					<legend>{L_UPLOAD_RANKS}</legend>
					<div class="fieldset-inset">
						<div class="form-element">
							<label for="upload_ranks">{L_UPLOAD_RANKS}<br />{L_UPLOAD_FORMAT}</label>
							<div class="form-field">
								<input type="hidden" name="max_file_size" value="2000000">
								<input type="file" id="upload_ranks" name="upload_ranks" class="file">
							</div>
						</div>
					</div>
				</fieldset>
				<fieldset class="fieldset-submit">
					<legend>{L_UPLOAD}</legend>
					<div class="fieldset-inset">
						<button type="submit" name="upload" value="true" class="submit">{L_UPLOAD}</button>
						<input type="hidden" name="token" value="{TOKEN}">
					</div>
				</fieldset>
				</form>
	
				<form action="admin_ranks_add.php" method="post" onsubmit="return check_form_rank_add();" class="fieldset-content">
					<p class="center">{L_REQUIRE}</p>
					<fieldset>
						<legend>{L_ADD_RANKS}</legend>
						<div class="fieldset-inset">
							<div class="form-element">
								<label for="name">* {L_RANK_NAME}</label>
								<div class="form-field"><label><input type="text" maxlength="30" id="name" name="name"></label></div>
							</div>
							<div class="form-element">
								<label for="msg">* {L_NBR_MSG}</label>
								<div class="form-field"><label><input type="number" min="0" id="msg" name="msg"></label></div>
							</div>
							<div class="form-element">
								<label for="icon">{L_IMG_ASSOC}</label>
								<div class="form-field"><label>
									<select name="icon" id="icon" onchange="img_change('img_icon', '{PATH_TO_ROOT}/forum/templates/images/ranks/' + this.options[selectedIndex].value)">
										{RANK_OPTIONS}
									</select>
									<img src="{PATH_TO_ROOT}/forum/templates/images/ranks/rank_0.png" id="img_icon" alt="rank_0.png" style="display:none;" />
								</label></div>
							</div>
						</div>
				</fieldset>
				
				<fieldset class="fieldset-submit">
					<legend>{L_UPDATE}</legend>
					<div class="fieldset-inset">
						<input type="hidden" name="idc" value="{NEXT_ID}">
						<input type="hidden" name="token" value="{TOKEN}">
						<button type="submit" name="add" value="true" class="submit">{L_ADD}</button>
						<button type="reset" value="true">{L_RESET}</button>
					</div>
				</fieldset>
			</form>
		</div>
			