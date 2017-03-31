<?php
/*##################################################
 *		                NewsletterStreamsManageController.class.php
 *                            -------------------
 *   begin                : May 21, 2014
 *   copyright            : (C) 2014 Julien BRISWALTER
 *   email                : j1.seth@phpboost.com
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
 * @author Julien BRISWALTER <j1.seth@phpboost.com>
 */
class NewsletterStreamsManageController extends AbstractCategoriesManageController
{
	protected function generate_response(View $view)
	{
		return new AdminNewsletterDisplayResponse($view, $this->get_title());
	}
	
	protected function get_categories_manager()
	{
		return NewsletterService::get_streams_manager();
	}
	
	protected function get_display_category_url(Category $category)
	{
		return NewsletterUrlBuilder::archives($category->get_id(), $category->get_rewrited_name());
	}
	
	protected function get_edit_category_url(Category $category)
	{
		return NewsletterUrlBuilder::edit_stream($category->get_id());
	}
	
	protected function get_delete_category_url(Category $category)
	{
		return NewsletterUrlBuilder::delete_stream($category->get_id());
	}
	
	protected function get_title()
	{
		return LangLoader::get_message('newsletter.streams', 'common', 'newsletter');
	}
	
	protected function get_delete_confirmation_message()
	{
		return LangLoader::get_message('stream.message.delete_confirmation', 'common', 'newsletter');
	}
}
?>