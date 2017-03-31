<?php $_result='			<section id="module-calendar-events">
				<header>
					<h2 class="center">';if ($_data->is_true($_data->get('C_PENDING_PAGE'))){$_result.='' . $_functions->i18n('calendar.pending') . '';}else{$_result.='' . $_functions->i18n('calendar.titles.events_of') . ' ' . $_data->get('DATE') . '';}$_result.='</h2>
				</header>

				';if ($_data->is_true($_data->get('C_EVENTS'))){$_result.='
					';foreach($_data->get_block('event') as $_tmp_event){$_result.='
					<article itemscope="itemscope" itemtype="http://schema.org/Event" id="article-calendar-' . $_data->get_from_list('ID', $_tmp_event) . '" class="article-calendar article-several">
						<header>
							<h2>
								<a href="' . $_data->get_from_list('U_SYNDICATION', $_tmp_event) . '" title="' . LangLoader::get_message('syndication', 'common') . '"><i class="fa fa-syndication"></i></a>
								<a href="' . $_data->get_from_list('U_LINK', $_tmp_event) . '"><span itemprop="name">' . $_data->get_from_list('TITLE', $_tmp_event) . '</span></a>
								<span class="actions">
									';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='<a href="' . $_data->get_from_list('U_COMMENTS', $_tmp_event) . '"><i class="fa fa-comments-o"></i> ' . $_data->get_from_list('L_COMMENTS', $_tmp_event) . '</a>';}$_result.='
									';if ($_data->is_true($_data->get_from_list('C_EDIT', $_tmp_event))){$_result.='
										<a href="' . $_data->get_from_list('U_EDIT', $_tmp_event) . '" title="' . LangLoader::get_message('edit', 'common') . '"><i class="fa fa-edit"></i></a>
									';}$_result.='
									';if ($_data->is_true($_data->get_from_list('C_DELETE', $_tmp_event))){$_result.='
										<a href="' . $_data->get_from_list('U_DELETE', $_tmp_event) . '" title="' . LangLoader::get_message('delete', 'common') . '"';if (!$_data->is_true($_data->get_from_list('C_BELONGS_TO_A_SERIE', $_tmp_event))){$_result.=' data-confirmation="delete-element"';}$_result.='><i class="fa fa-delete"></i></a>
									';}$_result.='
								</span>
							</h2>

							<a itemprop="url" href="' . $_data->get_from_list('U_LINK', $_tmp_event) . '"></a>
						</header>
						<div class="content">
							<div itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
								<meta itemprop="about" content="' . $_data->get_from_list('CATEGORY_NAME', $_tmp_event) . '">
								';if ($_data->is_true($_data->get('C_COMMENTS_ENABLED'))){$_result.='
								<meta itemprop="discussionUrl" content="' . $_data->get_from_list('U_COMMENTS', $_tmp_event) . '">
								<meta itemprop="interactionCount" content="' . $_data->get_from_list('NUMBER_COMMENTS', $_tmp_event) . ' UserComments">
								';}$_result.='
								<div itemprop="text">' . $_data->get_from_list('CONTENTS', $_tmp_event) . '</div>

								';if ($_data->is_true($_data->get_from_list('C_LOCATION', $_tmp_event))){$_result.='
								<div class="spacer"></div>
								<div itemscope="itemscope" itemtype="http://schema.org/Place">
									<p itemprop="location">
										<span class="text-strong">' . $_functions->i18n('calendar.labels.location') . '</span> :
										<span itemprop="name">' . $_data->get_from_list('LOCATION', $_tmp_event) . '</span>
									</p>
								</div>
								';}$_result.='
								';if ($_data->is_true($_data->get_from_list('C_PARTICIPATION_ENABLED', $_tmp_event))){$_result.='
									<div class="spacer"></div>
									';if ($_data->is_true($_data->get_from_list('C_DISPLAY_PARTICIPANTS', $_tmp_event))){$_result.='
									<div>
										<span class="text-strong">' . $_functions->i18n('calendar.labels.participants') . '</span> :
										<span>
											';if ($_data->is_true($_data->get_from_list('C_PARTICIPANTS', $_tmp_event))){$_result.='
												';foreach($_data->get_block_from_list('participant', $_tmp_event) as $_tmp_event_participant){$_result.='
													<a href="' . $_data->get_from_list('U_PROFILE', $_tmp_event_participant) . '" class="' . $_data->get_from_list('LEVEL_CLASS', $_tmp_event_participant) . '" ';if ($_data->is_true($_data->get_from_list('C_GROUP_COLOR', $_tmp_event_participant))){$_result.=' style="color:' . $_data->get_from_list('GROUP_COLOR', $_tmp_event_participant) . '" ';}$_result.='>' . $_data->get_from_list('DISPLAY_NAME', $_tmp_event_participant) . '</a>';if (!$_data->is_true($_data->get_from_list('C_LAST_PARTICIPANT', $_tmp_event_participant))){$_result.=',';}$_result.='
												';}$_result.='
											';}else{$_result.='
												' . $_functions->i18n('calendar.labels.no_one') . '
											';}$_result.='
										</span>
									</div>
									';}$_result.='
									';if ($_data->is_true($_data->get_from_list('C_PARTICIPATE', $_tmp_event))){$_result.='
									<a href="' . $_data->get_from_list('U_SUSCRIBE', $_tmp_event) . '" class="basic-button">' . $_functions->i18n('calendar.labels.suscribe') . '</a>
										';if ($_data->is_true($_data->get_from_list('C_MISSING_PARTICIPANTS', $_tmp_event))){$_result.='
										<span class="small text-italic">(' . $_data->get_from_list('L_MISSING_PARTICIPANTS', $_tmp_event) . ')</span>
										';}$_result.='
										';if ($_data->is_true($_data->get_from_list('C_REGISTRATION_DAYS_LEFT', $_tmp_event))){$_result.='
										<div class="spacer"></div>
										<span class="small text-italic">' . $_data->get_from_list('L_REGISTRATION_DAYS_LEFT', $_tmp_event) . '</span>
										';}$_result.='
									';}$_result.='
									';if ($_data->is_true($_data->get_from_list('C_IS_PARTICIPANT', $_tmp_event))){$_result.='
									<a href="' . $_data->get_from_list('U_UNSUSCRIBE', $_tmp_event) . '" class="basic-button">' . $_functions->i18n('calendar.labels.unsuscribe') . '</a>
									';}else{$_result.='
										';if ($_data->is_true($_data->get_from_list('C_MAX_PARTICIPANTS_REACHED', $_tmp_event))){$_result.='<span class="small text-italic">' . $_functions->i18n('calendar.labels.max_participants_reached') . '</span>';}$_result.='
									';}$_result.='
									';if ($_data->is_true($_data->get_from_list('C_REGISTRATION_CLOSED', $_tmp_event))){$_result.='<span class="small text-italic">' . $_functions->i18n('calendar.labels.registration_closed') . '</span>';}$_result.='
								';}$_result.='

								<div class="spacer"></div>
								<div class="event-display-author">
									' . $_functions->i18n('calendar.labels.created_by') . ' : ';if ($_data->is_true($_data->get_from_list('C_AUTHOR_EXIST', $_tmp_event))){$_result.='<a itemprop="author" href="' . $_data->get_from_list('U_AUTHOR_PROFILE', $_tmp_event) . '" class="' . $_data->get_from_list('AUTHOR_LEVEL_CLASS', $_tmp_event) . '" ';if ($_data->is_true($_data->get_from_list('C_AUTHOR_GROUP_COLOR', $_tmp_event))){$_result.=' style="color:' . $_data->get_from_list('AUTHOR_GROUP_COLOR', $_tmp_event) . '" ';}$_result.='>' . $_data->get_from_list('AUTHOR', $_tmp_event) . '</a>';}else{$_result.='' . $_data->get_from_list('AUTHOR', $_tmp_event) . '';}$_result.='
								</div>
							</div>
							<div class="event-display-dates">
								' . $_functions->i18n('calendar.labels.start_date') . ' : <span class="float-right"><time datetime="' . $_data->get_from_list('START_DATE_ISO8601', $_tmp_event) . '" itemprop="startDate">' . $_data->get_from_list('START_DATE', $_tmp_event) . '</time></span>
								<div class="spacer"></div>
								' . $_functions->i18n('calendar.labels.end_date') . ' : <span class="float-right"><time datetime="' . $_data->get_from_list('END_DATE_ISO8601', $_tmp_event) . '" itemprop="endDate">' . $_data->get_from_list('END_DATE', $_tmp_event) . '</time></span>
							</div>
						</div>
						<footer></footer>
					</article>
					';}$_result.='
				';}else{$_result.='
					<div class="center">
						';if ($_data->is_true($_data->get('C_PENDING_PAGE'))){$_result.='' . $_functions->i18n('calendar.notice.no_pending_event') . '';}else{$_result.='' . $_functions->i18n('calendar.notice.no_current_action') . '';}$_result.='
					</div>
				';}$_result.='
			</section>
'; ?>