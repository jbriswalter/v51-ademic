<section id="module-smallads">
		<nav class="cssmenu cssmenu-horizontal smallads-category smallads-right">
			<ul>
				<li class="has-sub">
					<span class="cssmenu-title">${Langloader::get_message('categories', 'categories-common')}</span>
					<ul>
						<li>
							<a class="cssmenu-title" href="{PATH_TO_ROOT}/smallads"><!--@all.categories-->Toutes les catégories</a>
						</li>
						# START category_menu #
						<li>
							<a class="cssmenu-title" href="{category_menu.PATH}">{category_menu.NAME}</a>
						</li>
						# END category_menu #						
					</ul>
				</li>
			</ul>
		</nav>
		<!--# INCLUDE CATEGORY_FILTER #-->
	<header>
		<h1>
			<a href="{U_SYNDICATION}" title="${LangLoader::get_message('syndication', 'common')}"><i class="fa fa-syndication"></i></a>
			{@smallads}# IF NOT C_ROOT_CATEGORY # - {CATEGORY_NAME}# ENDIF # # IF IS_ADMIN #<a href="{U_EDIT_CATEGORY}" title="${LangLoader::get_message('edit', 'common')}"><i class="fa fa-edit smaller"></i></a># ENDIF #
		</h1>
	</header>
	<div class="content">
		# IF NOT C_VISIBLE #
			# INCLUDE NOT_VISIBLE_MESSAGE #
		# ENDIF #
		<article itemscope="itemscope" itemtype="http://schema.org/CreativeWork" id="article-smallads-{ID}" class="article-smallads">
			<header>
				<h2>
					<span itemprop="name">{SMALLAD_STATUS} - {NAME}# IF C_SOLD # - <span class="title-sold">{@smallads.sold}</span># ENDIF #</span>
					<span class="actions">
						# IF C_EDIT #
							<a href="{U_EDIT}" title="${LangLoader::get_message('edit', 'common')}"><i class="fa fa-edit"></i></a>
						# ENDIF #
						# IF C_DELETE #
							<a href="{U_DELETE}" title="${LangLoader::get_message('delete', 'common')}" data-confirmation="delete-element"><i class="fa fa-delete"></i></a>
						# ENDIF #
					</span>
				</h2>
	
				<div class="more">
					# IF C_AUTHOR_DISPLAYED #
						${LangLoader::get_message('by', 'common')}
						# IF C_AUTHOR_EXIST #<a itemprop="author" rel="author" class="small {USER_LEVEL_CLASS}" href="{U_AUTHOR_PROFILE}" # IF C_USER_GROUP_COLOR # style="color:{USER_GROUP_COLOR}" # ENDIF #>{PSEUDO}</a># ELSE #{PSEUDO}# ENDIF #,
					# ENDIF #
					${TextHelper::lowercase_first(LangLoader::get_message('the', 'common'))}
					<time datetime="# IF NOT C_DIFFERED #{DATE_ISO8601}# ELSE #{DIFFERED_START_DATE_ISO8601}# ENDIF #" itemprop="datePublished">
						# IF NOT C_DIFFERED #{DATE_SHORT}# ELSE #{DIFFERED_START_DATE}# ENDIF #
					</time>
					${TextHelper::lowercase_first(LangLoader::get_message('in', 'common'))} <a itemprop="about" href="{U_CATEGORY}">{CATEGORY_NAME}</a>
					- <i class="fa fa-eye"></i> {NUMBER_VIEW}
				</div>
	
				<meta itemprop="url" content="{U_LINK}">
				<meta itemprop="description" content="${escape(DESCRIPTION)}" />
	
			</header>
			# IF C_CAROUSELS #
			<div id="smallads-carousel-container">
				<div class="smallads-carousel">
				# START carousels #
					<a data-rel="lightcase:collection" href="{PATH_TO_ROOT}{carousels.URL}" data-lightbox="formatter">
						<img src="{PATH_TO_ROOT}{carousels.URL}" alt="{carousels.NAME}" />
					</a>
				# END carousels #
				</div>
			</div>
			# ENDIF #
			<div class="smallads-options">
				# IF C_SOLD #
					<div class="smallads-sold">{@smallads.sold}</div>
				# ENDIF #
				# IF C_PICTURE #
					<a data-rel="lightcase:collection" href="{U_PICTURE}" data-lightbox="formatter">
						<img itemprop="thumbnailUrl" src="{U_PICTURE}" alt="{NAME}" />
					</a>
				# ENDIF #
				<ul class="smallads-ref">
					<li>{@smallads.reference}<span class="right-ref">{ID}</span></li>
					<li>{@smallads.price}<span class="right-ref">{PRICE} €</span></li>
					# IF C_COLORS #
					<li>
						{@smallads.colors}
						<span class="right-ref">
							# START colors #
							<span title="{colors.NAME}" class="colors-smallads" style="background-color:{colors.HEXA}"></span>
							# END colors #
						</span>
					</li>
					# ENDIF #
					# IF C_DETAILS #
						# START details #
					<li>
						{details.NAME}<span class="right-ref">{details.TYPE}</span>
					</li>
						# END details #
					# ENDIF #
					# IF C_LOCATION #
					<li>
						{@smallads.location}
						<span class="right-ref">{SMALLAD_ZIPCODE} {SMALLAD_CITY}</span>
					</li>
					# ENDIF #
				</ul>
			</div>
			<strong>{@smallads.description}</strong>
			<div class="content">
					
				<div itemprop="text">{CONTENTS}</div>
				
				<div class="spacer"></div>
				
				<a href="#openmodal-smallads" title="" class="answer-modal-bnt"><i class="fa fa-pencil-square"></i> <span>{@answer.btn}</span></a>
				<div id="openmodal-smallads" class="openmodal-smallads">
					<a href="#closemodal-smallads" title="${LangLoader::get_message('close_menu', 'admin')}" class="close-smallads"><span>x</span></a>
					<div class="answer-form">
						
						# IF C_MAIL_SENT # 
							# IF C_SUCCESS # 
								<div class="success">{@answer.mail.success}</div>
							# ELSE # 
								<div class="error">{ERROR}</div>
							# ENDIF #
						# ENDIF #
						
						# INCLUDE ANSWER_EMAIL #
					</div>
				</div>
				
				<div class="spacer"></div>
			</div>
			<aside>	
				# IF C_KEYWORDS #
				<div id="smallads-tags-container">
					<span class="smallads-tags-title"><i class="fa fa-tags"></i> ${LangLoader::get_message('form.keywords', 'common')}</span> :
						# START keywords #
							<a itemprop="keywords" rel="tag" href="{keywords.URL}" class="smallads-tags-item">{keywords.NAME}</a># IF keywords.C_SEPARATOR #, # ENDIF #
						# END keywords #
				</div>
				# ENDIF #
	
				# IF C_SUGGESTED_SMALLADS #
					<div id="smallads-suggested-container">
						<span class="smallads-suggested-title"><i class="fa fa-lightbulb-o"></i> ${LangLoader::get_message('suggestions', 'common')} :</span>
						<ul>
							# START suggested #
							<li><a href="{suggested.URL}" class="smallads-suggested-item">{suggested.NAME}</a></li>
							# END suggested #
						</ul>
					</div>
				# ENDIF #
	
				<hr class="smallads-separator">
	
				# IF C_SMALLADS_NAVIGATION_LINKS #
				<div class="navigation-link">
					# IF C_PREVIOUS_SMALLADS #
					<span class="navigation-link-previous">
						<a href="{U_PREVIOUS_SMALLADS}"><i class="fa fa-arrow-circle-left"></i>{PREVIOUS_SMALLADS}</a>
					</span>
					# ENDIF #
					# IF C_NEXT_SMALLADS #
					<span class="navigation-link-next">
						<a href="{U_NEXT_SMALLADS}">{NEXT_SMALLADS}<i class="fa fa-arrow-circle-right"></i></a>
					</span>
					# ENDIF #
					<div class="spacer"></div>
				</div>
				# ENDIF #
	
			</aside>
			<footer></footer>
		</article>
	</div>
	<footer></footer>
</section>
	<script src="{PATH_TO_ROOT}/smallads/templates/jQuery.Brazzers-Carousel.min.js"></script>

	<script>

		$(document).ready(function() {
			$(".smallads-carousel").brazzersCarousel();
		});

	</script>
