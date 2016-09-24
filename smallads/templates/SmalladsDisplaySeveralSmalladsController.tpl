<section id="module-smallads">
	<nav class="cssmenu cssmenu-horizontal smallads-category smallads-right">
		<ul>
			<li class="has-sub">
				<span class="cssmenu-title">${Langloader::get_message('categories', 'categories-common')}</span>
				<ul>
					<li>
						<a class="cssmenu-title" href="{PATH_TO_ROOT}/smallads">Toutes les catégories</a>
					</li>
					# START category_menu #
					
					<li # IF category_menu.C_IS_PARENT #class="has-sub"# ENDIF #>
						<a class="cssmenu-title" href="{category_menu.PATH}">{category_menu.NAME}</a>
						{category_menu.CHILDREN}
						# IF category_menu.C_IS_PARENT #
						<ul>							
							# START subcategory_menu #
							<li>
								<a class="cssmenu-title" href="{subcategory_menu.PATH}">{subcategory_menu.NAME}</a>
							</li>
							# END subcategory_menu #
						</ul>
						# ENDIF #
						
					</li>
					# END category_menu #
					<li class="has-sub">
						<a class="cssmenu-title" href="{PATH_TO_ROOT}/smallads">Sous-menu</a>
						<ul>
							<li>
								<a class="cssmenu-title" href="{PATH_TO_ROOT}/smallads">Item menu</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
	
	<div class="smallads-options">
		# INCLUDE TYPE_FORM #
		# INCLUDE FORM #
	</div>			
		
	<header>
		<h1>
			<a href="${relative_url(SyndicationUrlBuilder::rss('smallads', ID_CAT))}" title="${LangLoader::get_message('syndication', 'common')}"><i class="fa fa-syndication"></i></a>
			# IF C_PENDING_SMALLADS #{@smallads.pending}# ELSE #{@smallads}# IF NOT C_ROOT_CATEGORY # - {CATEGORY_NAME}# ENDIF ## ENDIF # # IF C_CATEGORY ## IF IS_ADMIN #<a href="{U_EDIT_CATEGORY}" title="${LangLoader::get_message('edit', 'common')}"><i class="fa fa-edit smaller"></i></a># ENDIF ## ENDIF #
		</h1>
	</header>
	<div class="content">
	# IF C_SMALLADS_NO_AVAILABLE #
		<div class="center">
			${LangLoader::get_message('no_item_now', 'common')}
		</div>
	# ELSE #
		# START smallads #
			<article id="article-smallads-{smallads.ID}" class="article-smallads article-several# IF C_DISPLAY_BLOCK_TYPE # block# ENDIF ## IF C_SEVERAL_COLUMNS # inline-block# ENDIF #" # IF C_SEVERAL_COLUMNS # style="width:calc(98% / {NUMBER_COLUMNS})" # ENDIF # itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
				<header>
					<h2>
						<a href="{smallads.U_LINK}"><span itemprop="name">{smallads.SMALLAD_STATUS} - {smallads.NAME}# IF smallads.C_SOLD # - <span class="title-sold">{@smallads.sold}</span># ENDIF #</span></a>
						<span class="actions">
							# IF smallads.C_EDIT #
								<a href="{smallads.U_EDIT}" title="${LangLoader::get_message('edit', 'common')}"><i class="fa fa-edit"></i></a>
							# ENDIF #
							# IF smallads.C_DELETE #
								<a href="{smallads.U_DELETE}" title="${LangLoader::get_message('delete', 'common')}" data-confirmation="delete-element"><i class="fa fa-delete"></i></a>
							# ENDIF #
						</span>
					</h2>

					<div class="more">
						# IF smallads.C_AUTHOR_DISPLAYED #
							${LangLoader::get_message('by', 'common')}
							# IF smallads.C_AUTHOR_EXIST #<a itemprop="author" class="{smallads.USER_LEVEL_CLASS}" href="{smallads.U_AUTHOR_PROFILE}"# IF smallads.C_USER_GROUP_COLOR # style="color:{smallads.USER_GROUP_COLOR}"# ENDIF #>{smallads.PSEUDO}</a>, # ELSE #{smallads.PSEUDO}# ENDIF #
						# ENDIF #
						${TextHelper::lowercase_first(LangLoader::get_message('the', 'common'))}
						<time datetime="# IF NOT smallads.C_DIFFERED #{smallads.DATE_ISO8601}# ELSE #{smallads.DIFFERED_START_DATE_ISO8601}# ENDIF #" itemprop="datePublished">
							# IF NOT smallads.C_DIFFERED #{smallads.DATE_SHORT}# ELSE #{smallads.DIFFERED_START_DATE}# ENDIF #
						</time>
						${TextHelper::lowercase_first(LangLoader::get_message('in', 'common'))} <a itemprop="about" href="{smallads.U_CATEGORY}">{smallads.CATEGORY_NAME}</a>
						- <i class="fa fa-eye"></i> {smallads.NUMBER_VIEW}
					</div>

					<meta itemprop="url" content="{smallads.U_LINK}">
					<meta itemprop="description" content="${escape(smallads.DESCRIPTION)}"/>

				</header>

				<div class="content">
					<div class=" thumb float-right">
						<p class="euro right">{@smallads.price} : {smallads.PRICE} €</p>
						# IF smallads.C_PICTURE #<img itemprop="thumbnailUrl" src="{smallads.U_PICTURE}" alt="{smallads.NAME}" title="{smallads.NAME}" /># ENDIF #
					</div>
					<div itemprop="text"># IF C_DISPLAY_CONDENSED_CONTENT # {smallads.DESCRIPTION}# IF smallads.C_READ_MORE #... <a href="{smallads.U_LINK}">[${LangLoader::get_message('read-more', 'common')}]</a># ENDIF ## ELSE # {smallads.CONTENTS} # ENDIF #</div>
				</div>

				<footer></footer>
			</article>
		# END smallads #
	# ENDIF #
	</div>
	<footer># IF C_PAGINATION # # INCLUDE PAGINATION # # ENDIF #</footer>
</section>
