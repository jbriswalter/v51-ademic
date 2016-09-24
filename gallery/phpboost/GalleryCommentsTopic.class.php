<?php
/*##################################################
 *                           GalleryCommentsTopic.class.php
 *                            -------------------
 *   begin                : April 09, 2012
 *   copyright            : (C) 2012 Kevin MASSY
 *   email                : kevin.massy@phpboost.com
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

class GalleryCommentsTopic extends CommentsTopic
{
	public function __construct()
	{
		parent::__construct('gallery');
	}
	
	public function get_authorizations()
	{
		$authorizations = new CommentsAuthorizations();
		$authorizations->set_authorized_access_module(GalleryAuthorizationsService::check_authorizations($this->get_id_category())->read());
		return $authorizations;
	}
	
	public function is_display()
	{
		return (bool)PersistenceContext::get_querier()->get_column_value(GallerySetup::$gallery_table, 'aprob', 'WHERE id = :id', array('id' => $this->get_id_in_module()));
	}

	private function get_id_category()
	{
		return PersistenceContext::get_querier()->get_column_value(GallerySetup::$gallery_table, 'idcat', 'WHERE id = :id', array('id' => $this->get_id_in_module()));
	}
}
?>