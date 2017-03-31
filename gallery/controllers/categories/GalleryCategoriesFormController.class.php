<?php
/*##################################################
 *                               GalleryCategoriesFormController.class.php
 *                            -------------------
 *   begin                : February 10, 2015
 *   copyright            : (C) 2015 Julien BRISWALTER
 *   email                : j1.seth@phpboost.com
 *
 *
 ###################################################
 *
 * This program is a free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 ###################################################*/

 /**
 * @author Julien BRISWALTER <j1.seth@phpboost.com>
 */

class GalleryCategoriesFormController extends AbstractRichCategoriesFormController
{
	/**
	 * @return AuthorizationsSettings
	 */
	public function get_authorizations_settings()
	{
		return new AuthorizationsSettings(array(
			new ActionAuthorization($this->common_lang['authorizations.read'], Category::READ_AUTHORIZATIONS),
			new ActionAuthorization($this->common_lang['authorizations.write'], Category::WRITE_AUTHORIZATIONS),
			new ActionAuthorization($this->common_lang['authorizations.moderation'], Category::MODERATION_AUTHORIZATIONS),
		));
	}
	
	protected function generate_response(View $view)
	{
		return new AdminGalleryDisplayResponse($view, $this->get_title());
	}
	
	protected function get_categories_manager()
	{
		return GalleryService::get_categories_manager();
	}
	
	protected function get_id_category()
	{
		return AppContext::get_request()->get_getint('id', 0);
	}
	
	protected function get_categories_management_url()
	{
		return GalleryUrlBuilder::manage_categories();
	}
}
?>
