<?php
/*##################################################
 *		                         SmalladsTreeLinks.class.php
 *                            -------------------
 *   begin                : January 02, 2016
 *   copyright            : (C) 2016 Sebastien LARTIGUE
 *   email                : babsolune@phpboost.com
 *
 *
 ###################################################
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 ###################################################*/

/**
 * @author Sebastien LARTIGUE <babsolune@phpboost.com>
 */

class SmalladsTreeLinks implements ModuleTreeLinksExtensionPoint
{
	public function get_actions_tree_links()
	{
		$lang = LangLoader::get('common', 'smallads');
		$tree = new ModuleTreeLinks();
		
		$manage_categories_link = new ModuleLink(LangLoader::get_message('categories.manage', 'categories-common'), SmalladsUrlBuilder::manage_categories(), SmalladsAuthorizationsService::check_authorizations()->manage_categories());
		$manage_categories_link->add_sub_link(new ModuleLink(LangLoader::get_message('categories.manage', 'categories-common'), SmalladsUrlBuilder::manage_categories(), SmalladsAuthorizationsService::check_authorizations()->manage_categories()));
		$manage_categories_link->add_sub_link(new ModuleLink(LangLoader::get_message('category.add', 'categories-common'), SmalladsUrlBuilder::add_category(AppContext::get_request()->get_getint('id_category', Category::ROOT_CATEGORY)), SmalladsAuthorizationsService::check_authorizations()->manage_categories()));
		$tree->add_link($manage_categories_link);
	
		$manage_smallads_link = new ModuleLink($lang['smallads.manage'], SmalladsUrlBuilder::manage_smallad(), SmalladsAuthorizationsService::check_authorizations()->moderation());
		$manage_smallads_link->add_sub_link(new ModuleLink($lang['smallads.manage'], SmalladsUrlBuilder::manage_smallad(), SmalladsAuthorizationsService::check_authorizations()->moderation()));
		$manage_smallads_link->add_sub_link(new ModuleLink($lang['smallads.add'], SmalladsUrlBuilder::add_smallad(AppContext::get_request()->get_getint('id_category', Category::ROOT_CATEGORY)), SmalladsAuthorizationsService::check_authorizations()->moderation()));
		$tree->add_link($manage_smallads_link);
		
		$tree->add_link(new AdminModuleLink(LangLoader::get_message('configuration', 'admin-common'), SmalladsUrlBuilder::configuration()));
	
		if (!SmalladsAuthorizationsService::check_authorizations()->moderation())
		{
			$tree->add_link(new ModuleLink($lang['smallads.add'], SmalladsUrlBuilder::add_smallad(AppContext::get_request()->get_getint('id_category', Category::ROOT_CATEGORY)), SmalladsAuthorizationsService::check_authorizations()->write() || SmalladsAuthorizationsService::check_authorizations()->contribution()));
		}

		$tree->add_link(new ModuleLink($lang['smallads.pending'], SmalladsUrlBuilder::display_pending_smallad(), SmalladsAuthorizationsService::check_authorizations()->write() || SmalladsAuthorizationsService::check_authorizations()->contribution() || SmalladsAuthorizationsService::check_authorizations()->moderation()));
	
		return $tree;
	}
}
?>