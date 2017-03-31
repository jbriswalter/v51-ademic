<?php $_result='';$_subtpl=$_data->get('MSG');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='

<section id="module-calendar">
	<header>
		<h1>
			<a href="' . $_functions->relative_url(SyndicationUrlBuilder::rss('calendar')) . '" title="' . LangLoader::get_message('syndication', 'common') . '"><i class="fa fa-syndication"></i></a>
			' . $_functions->i18n('module_title') . '
		</h1>
	</header>
	
	<div class="content">
		';if (!$_data->is_true($_data->get('C_PENDING_PAGE'))){$_result.='
		<div id="calendar">
			';$_subtpl=$_data->get('CALENDAR');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
		</div>
		
		<div class="spacer"></div>
		';}$_result.='
		
		<div id="events">
			';$_subtpl=$_data->get('EVENTS');if($_subtpl !== null){$_result.=$_subtpl->render();}$_result.='
		</div>
	</div>
	
	<footer></footer>
</section>
'; ?>