<?php $_result='	';if ($_data->is_true($_data->get('C_POLL_MAIN'))){$_result.='
		<section id="module-poll-main">
			<header>
				<h1>' . $_data->get('L_POLL') . ' <span class="actions">' . $_data->get('EDIT') . '</span></h1>
			</header>

			<div class="content center">
				' . $_data->get('L_POLL_MAIN') . '
				<br /><br />
				';foreach($_data->get_block('list') as $_tmp_list){$_result.='
				<a href="' . $_data->get('PATH_TO_ROOT') . '/poll/poll' . $_data->get_from_list('U_POLL_ID', $_tmp_list) . '">' . $_data->get_from_list('QUESTION', $_tmp_list) . '</a>
				<br />  
				<a href="' . $_data->get('PATH_TO_ROOT') . '/poll/poll' . $_data->get_from_list('U_POLL_ID', $_tmp_list) . '"><img src="' . $_data->get('PATH_TO_ROOT') . '/poll/poll.png" alt="' . $_data->get_from_list('QUESTION', $_tmp_list) . '" title="' . $_data->get_from_list('QUESTION', $_tmp_list) . '" /></a> 
				<br /><br />
				';}$_result.='
				
				<p class="center">' . $_data->get('U_ARCHIVE') . '</p>
			</div>
			<footer></footer>
		</section>
	';}$_result.='
		
		
	';if ($_data->is_true($_data->get('C_POLL_VIEW'))){$_result.='
		<form method="post" action="' . $_data->get('PATH_TO_ROOT') . '/poll/poll' . $_data->get('U_POLL_ACTION') . '">
			<section id="module-poll">
				<header>
					<h2>
						' . $_data->get('QUESTION') . '
						';if ($_data->is_true($_data->get('C_IS_ADMIN'))){$_result.='
						<span class="actions">
							<a href="' . $_data->get('PATH_TO_ROOT') . '/poll/admin_poll.php?id=' . $_data->get('IDPOLL') . '" title="' . $_data->get('L_EDIT') . '" title="' . LangLoader::get_message('edit', 'common') . '" class="fa fa-edit"></a>
							<a href="' . $_data->get('PATH_TO_ROOT') . '/poll/admin_poll.php?delete=1&amp;id=' . $_data->get('IDPOLL') . '&amp;token=' . $_data->get('TOKEN') . '" title="' . LangLoader::get_message('delete', 'common') . '" class="fa fa-delete" data-confirmation="delete-element"></a>
						</span>
						';}$_result.='
					</h2>
				</header>
				<div class="content">
					';$_subtpl=$_data->get('message_helper');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
					
					<article id="article-poll-' . $_data->get('IDPOLL') . '" class="article-poll block">
						<header><h2>' . $_data->get('QUESTION') . '</h2></header>
						<div class="content">
							';if ($_data->is_true($_data->get('C_POLL_QUESTION'))){$_result.='
							<div>
								';foreach($_data->get_block('radio') as $_tmp_radio){$_result.='
								<p class="poll-question-select"><label><input type="' . $_data->get_from_list('TYPE', $_tmp_radio) . '" name="radio" value="' . $_data->get_from_list('NAME', $_tmp_radio) . '"> ' . $_data->get_from_list('ANSWERS', $_tmp_radio) . '</label></p>
								';}$_result.='
							
								';foreach($_data->get_block('checkbox') as $_tmp_checkbox){$_result.='
								<p class="poll-question-select"><label><input type="' . $_data->get_from_list('TYPE', $_tmp_checkbox) . '" name="' . $_data->get_from_list('NAME', $_tmp_checkbox) . '" value="' . $_data->get_from_list('NAME', $_tmp_checkbox) . '"> ' . $_data->get_from_list('ANSWERS', $_tmp_checkbox) . '</label></p>
								';}$_result.='
								
								<p class="center">
									<button name="valid_poll" type="submit" value="' . $_data->get('L_VOTE') . '">' . $_data->get('L_VOTE') . '</button>
									<input type="hidden" name="token" value="' . $_data->get('TOKEN') . '">
								</p>
								<p class="center">
									<a class="small" href="' . $_data->get('PATH_TO_ROOT') . '/poll/poll' . $_data->get('U_POLL_RESULT') . '">' . $_data->get('L_RESULT') . '</a>
								</p>
							</div>
							';}$_result.='
							
							';if ($_data->is_true($_data->get('C_POLL_RESULTS'))){$_result.='
								';if ($_data->is_true($_data->get('C_DISPLAY_RESULTS'))){$_result.='
									';foreach($_data->get_block('result') as $_tmp_result){$_result.='
									<div>
										<h6>' . $_data->get_from_list('ANSWERS', $_tmp_result) . ' - (' . $_data->get_from_list('NBRVOTE', $_tmp_result) . ' ' . $_data->get('L_VOTE') . ')</h6>
										<div class="progressbar-container" title="' . $_data->get_from_list('PERCENT', $_tmp_result) . '%">
											<div class="progressbar-infos">' . $_data->get_from_list('PERCENT', $_tmp_result) . '%</div>
											<div class="progressbar" style="width:' . $_data->get_from_list('PERCENT', $_tmp_result) . '%;"></div>
											
										</div>
										<br/>
									</div>
									';}$_result.='
									<div>
										<span class="smaller left">' . $_data->get('VOTES') . ' ' . $_data->get('L_VOTE') . '</span>
										<span class="smaller right">' . $_data->get('L_ON') . ' : ' . $_data->get('DATE') . ' </span>
										&nbsp;
									</div>
								';}else{$_result.='
									<div class="notice">';if ($_data->is_true($_data->get('C_NO_VOTE'))){$_result.='' . $_data->get('L_NO_VOTE') . '';}else{$_result.='' . $_data->get('L_RESULTS_NOT_DISPLAYED_YET') . '';}$_result.='</div>
								';}$_result.='
							';}$_result.='
						</div>
						<footer></footer>
					</article>
				</div>
				<footer></footer>
			</section>
		</form>
	';}$_result.='
	
	
	';if ($_data->is_true($_data->get('C_POLL_ARCHIVES'))){$_result.='
		<section id="module-poll-archives">
			<header>
				<h1>' . $_data->get('L_ARCHIVE') . '</h1>
				';if ($_data->is_true($_data->get('C_PAGINATION'))){$_result.='<span class="right">';$_subtpl=$_data->get('PAGINATION');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='</span>';}$_result.='
			</header>
			<div class="content">
				';foreach($_data->get_block('list') as $_tmp_list){$_result.='
				<article id="article-poll-' . $_data->get_from_list('ID', $_tmp_list) . '" class="article-poll article-several block">
					<header>
						<h2>
							' . $_data->get_from_list('QUESTION', $_tmp_list) . '
							<span class="actions">
								';if ($_data->is_true($_data->get('C_IS_ADMIN'))){$_result.='
								<a href="' . $_data->get('PATH_TO_ROOT') . '/poll/admin_poll.php?id=' . $_data->get_from_list('ID', $_tmp_list) . '" title="' . $_data->get('L_EDIT') . '" title="' . LangLoader::get_message('edit', 'common') . '" class="fa fa-edit"></a>
								<a href="' . $_data->get('PATH_TO_ROOT') . '/poll/admin_poll.php?delete=1&amp;id=' . $_data->get_from_list('ID', $_tmp_list) . '&amp;token=' . $_data->get('TOKEN') . '" title="' . LangLoader::get_message('delete', 'common') . '" class="fa fa-delete" data-confirmation="delete-element"></a>
								';}$_result.='
							</span>
						</h2>
					</header>
					<div class="content">
						';foreach($_data->get_block_from_list('result', $_tmp_list) as $_tmp_list_result){$_result.='
							<div>
								<h6>' . $_data->get_from_list('ANSWERS', $_tmp_list_result) . ' - (' . $_data->get_from_list('NBRVOTE', $_tmp_list_result) . ' ' . $_data->get_from_list('L_VOTE', $_tmp_list) . ')</h6>
								<div class="progressbar-container" title="' . $_data->get_from_list('PERCENT', $_tmp_list_result) . '%">
									<div class="progressbar-infos">' . $_data->get_from_list('PERCENT', $_tmp_list_result) . '%</div>
									<div class="progressbar" style="width:' . $_data->get_from_list('PERCENT', $_tmp_list_result) . '%"></div>
								</div>
								<br/>
							</div>
						';}$_result.='
						<div>
							<span class="smaller left">' . $_data->get_from_list('VOTE', $_tmp_list) . ' ' . $_data->get_from_list('L_VOTE', $_tmp_list) . '</span>
							<span class="smaller right">' . $_data->get('L_ON') . ' : ' . $_data->get_from_list('DATE', $_tmp_list) . ' </span>
							&nbsp;
						</div>
					</div>
				</article>
				';}$_result.='
			</div>
			<footer>';if ($_data->is_true($_data->get('C_PAGINATION'))){$_result.='<span class="right">';$_subtpl=$_data->get('PAGINATION');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='</span>';}$_result.='</footer>
		</section>
	';}$_result.='
'; ?>