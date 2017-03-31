<?php $_result='<section id="module-calendar">
	<header>
		<h1>
			<a href="' . $_data->get('U_SYNDICATION') . '" title="' . LangLoader::get_message('syndication', 'common') . '"><i class="fa fa-syndication"></i></a>
			' . $_functions->i18n('module_title') . '';if (!$_data->is_true($_data->get('C_ROOT_CATEGORY'))){$_result.=' - ' . $_data->get('CATEGORY_NAME') . '';}$_result.=' ';if ($_data->is_true($_data->get('IS_ADMIN'))){$_result.='<a href="' . $_data->get('U_EDIT_CATEGORY') . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit smaller"></i></a>';}$_result.='
		</h1>
	</header>
	<div class="content">
		';if (!$_data->is_true($_data->get('C_APPROVED'))){$_result.='
			';$_subtpl=$_data->get('NOT_VISIBLE_MESSAGE');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
		';}$_result.='
		<article itemscope="itemscope" itemtype="http://schema.org/Event" id="article-calendar-' . $_data->get('ID') . '" class="article-calendar">
			<header>
				<h2>
					<span itemprop="name">' . $_data->get('TITLE') . '</span>
					<span class="actions">
						';if ($_data->is_true($_data->get('C_EDIT'))){$_result.='
							<a href="' . $_data->get('U_EDIT') . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit"></i></a>
						';}$_result.='
						';if ($_data->is_true($_data->get('C_DELETE'))){$_result.='
							<a href="' . $_data->get('U_DELETE') . '" title="' . LangLoader::get_message('delete', 'common') . '"';if (!$_data->is_true($_data->get('C_BELONGS_TO_A_SERIE'))){$_result.=' data-confirmation="delete-element"';}$_result.='><i class="fa fa-delete"></i></a>
						';}$_result.='
					</span>
				</h2>
				
				<a itemprop="url" href="' . $_data->get('U_LINK') . '"></a>
			</header>
			<div class="content">
				<div itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
					<meta itemprop="about" content="' . $_data->get('CATEGORY_NAME') . '">
					';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='
					<meta itemprop="discussionUrl" content="' . $_data->get('U_COMMENTS') . '">
					<meta itemprop="interactionCount" content="' . $_data->get('NUMBER_COMMENTS') . ' UserComments">
					';}$_result.='
					<div itemprop="text">' . $_data->get('CONTENTS') . '</div>
					
					';if ($_data->is_true($_data->get('C_LOCATION'))){$_result.='
					<div class="spacer"></div>
					<div itemprop="location" itemscope itemtype="http://schema.org/Place">
						<span class="text-strong">' . $_functions->i18n('calendar.labels.location') . '</span> :
						<span itemprop="name">' . $_data->get('LOCATION') . '</span>
					</div>
					';}$_result.='
					';if ($_data->is_true($_data->get('C_PARTICIPATION_ENABLED'))){$_result.='
						<div class="spacer"></div>
						';if ($_data->is_true($_data->get('C_DISPLAY_PARTICIPANTS'))){$_result.='
						<div>
							<span class="text-strong">' . $_functions->i18n('calendar.labels.participants') . '</span> :
							<span>
								';if ($_data->is_true($_data->get('C_PARTICIPANTS'))){$_result.='
									';foreach($_data->get_block('participant') as $_tmp_participant){$_result.='
										<a href="' . $_data->get_from_list('U_PROFILE', $_tmp_participant) . '" class="' . $_data->get_from_list('LEVEL_CLASS', $_tmp_participant) . '" ';if ($_data->is_true($_data->get_from_list('C_GROUP_COLOR', $_tmp_participant))){$_result.=' style="color:' . $_data->get_from_list('GROUP_COLOR', $_tmp_participant) . '" ';}$_result.='>' . $_data->get_from_list('DISPLAY_NAME', $_tmp_participant) . '</a>';if (!$_data->is_true($_data->get_from_list('C_LAST_PARTICIPANT', $_tmp_participant))){$_result.=',';}$_result.='
									';}$_result.='
								';}else{$_result.='
									' . $_functions->i18n('calendar.labels.no_one') . '
								';}$_result.='
							</span>
						</div>
						';}$_result.='
						';if ($_data->is_true($_data->get('C_PARTICIPATE'))){$_result.='
						<a href="' . $_data->get('U_SUSCRIBE') . '" class="basic-button">' . $_functions->i18n('calendar.labels.suscribe') . '</a>
							';if ($_data->is_true($_data->get('C_MISSING_PARTICIPANTS'))){$_result.='
							<span class="small text-italic">(' . $_data->get('L_MISSING_PARTICIPANTS') . ')</span>
							';}$_result.='
							';if ($_data->is_true($_data->get('C_REGISTRATION_DAYS_LEFT'))){$_result.='
							<div class="spacer"></div>
							<span class="small text-italic">' . $_data->get('L_REGISTRATION_DAYS_LEFT') . '</span>
							';}$_result.='
						';}$_result.='
						';if ($_data->is_true($_data->get('C_IS_PARTICIPANT'))){$_result.='
						<a href="' . $_data->get('U_UNSUSCRIBE') . '" class="basic-button">' . $_functions->i18n('calendar.labels.unsuscribe') . '</a>
						';}else{$_result.='
							';if ($_data->is_true($_data->get('C_MAX_PARTICIPANTS_REACHED'))){$_result.='<span class="small text-italic">' . $_functions->i18n('calendar.labels.max_participants_reached') . '</span>';}$_result.='
						';}$_result.='
						';if ($_data->is_true($_data->get('C_REGISTRATION_CLOSED'))){$_result.='<span class="small text-italic">' . $_functions->i18n('calendar.labels.registration_closed') . '</span>';}$_result.='
					';}$_result.='
					
					<div class="spacer"></div>
					<div class="event-display-author">
						' . $_functions->i18n('calendar.labels.created_by') . ' : ';if ($_data->is_true($_data->get('C_AUTHOR_EXIST'))){$_result.='<a itemprop="author" href="' . $_data->get('U_AUTHOR_PROFILE') . '" class="' . $_data->get('AUTHOR_LEVEL_CLASS') . '" ';if ($_data->is_true($_data->get('C_AUTHOR_GROUP_COLOR'))){$_result.=' style="color:' . $_data->get('AUTHOR_GROUP_COLOR') . '" ';}$_result.='>' . $_data->get('AUTHOR') . '</a>';}else{$_result.='' . $_data->get('AUTHOR') . '';}$_result.='
					</div>
				</div>
				<div class="event-display-dates">
					' . $_functions->i18n('calendar.labels.start_date') . ' : <span class="float-right"><time datetime="' . $_data->get('START_DATE_ISO8601') . '" itemprop="startDate">' . $_data->get('START_DATE') . '</time></span>
					<div class="spacer"></div>
					' . $_functions->i18n('calendar.labels.end_date') . ' : <span class="float-right"><time datetime="' . $_data->get('END_DATE_ISO8601') . '" itemprop="endDate">' . $_data->get('END_DATE') . '</time></span>
				</div>
				
				<hr>
				
				';$_subtpl=$_data->get('COMMENTS');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
			</div>
			<footer></footer>
		</article>
	</div>
	<footer></footer>
</section>
'; ?>