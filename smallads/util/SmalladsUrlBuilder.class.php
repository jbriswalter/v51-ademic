<?php
/*##################################################
 *		                SmalladsUrlBuilder.class.php
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

class SmalladsUrlBuilder
{
	const DEFAULT_SORT_FIELD = 'date';
	const DEFAULT_SORT_MODE = 'desc';
	const DEFAULT_SORT_SMALLAD_TYPE = 'sell';
	
	private static $dispatcher = '/smallads';
	
	public static function configuration()
	{
		return DispatchManager::get_url(self::$dispatcher, '/admin/config/');
	}
	
	public static function add_category($id_parent = null)
	{
		$id_parent = !empty($id_parent) ? $id_parent . '/' : '';
		return DispatchManager::get_url(self::$dispatcher, '/categories/add/' . $id_parent);
	}
	
	public static function edit_category($id)
	{
		return DispatchManager::get_url(self::$dispatcher, '/categories/'. $id .'/edit/');
	}
	
	public static function delete_category($id)
	{
		return DispatchManager::get_url(self::$dispatcher, '/categories/'. $id .'/delete/');
	}
	
	public static function manage_categories()
	{
		return DispatchManager::get_url(self::$dispatcher, '/categories/');
	}
	
	public static function manage_smallad()
	{
		return DispatchManager::get_url(self::$dispatcher, '/manage/');
	}
	
	public static function category_syndication($id)
	{
		return SyndicationUrlBuilder::rss('smallads', $id);
	}
	
	public static function display_smallad($id_category, $rewrited_name_category, $id_smallads, $rewrited_title)
	{
		return DispatchManager::get_url(self::$dispatcher, '/' . $id_category . '-' . $rewrited_name_category . '/' . $id_smallads . '-' . $rewrited_title . '/');
	}
	
	public static function display_category($id, $rewrited_name, $sort_type = self::DEFAULT_SORT_SMALLAD_TYPE, $sort_field = self::DEFAULT_SORT_FIELD, $sort_mode = self::DEFAULT_SORT_MODE, $page = 1)
	{
		$category = $id > 0 ? $id . '-' . $rewrited_name .'/' : '';
		$page = $page !== 1 ? $page . '/' : '';
		$sort_type = $sort_type !== self::DEFAULT_SORT_SMALLAD_TYPE ? $sort_type . '/' : '';
		$sort_field = $sort_field !== self::DEFAULT_SORT_FIELD ? $sort_field . '/' : '';
		$sort_mode = $sort_mode !== self::DEFAULT_SORT_MODE ? $sort_mode . '/' : '';
		return DispatchManager::get_url(self::$dispatcher, '/' . $category . $sort_field . $sort_mode . $page);
	}
	
	public static function display_tag($rewrited_name, $sort_type = self::DEFAULT_SORT_SMALLAD_TYPE,  $sort_field = self::DEFAULT_SORT_FIELD, $sort_mode = self::DEFAULT_SORT_MODE, $page = 1)
	{
		$page = $page !== 1 ? $page . '/' : '';
		$sort_type = $sort_type !== self::DEFAULT_SORT_SMALLAD_TYPE ? $sort_field . '/' : '';
		$sort_field = $sort_field !== self::DEFAULT_SORT_FIELD ? $sort_field . '/' : '';
		$sort_mode = $sort_mode !== self::DEFAULT_SORT_MODE ? $sort_mode . '/' : '';
		return DispatchManager::get_url(self::$dispatcher, '/tag/'. $rewrited_name .'/' . $sort_field . $sort_mode . $page);
	}
	
	public static function display_pending_smallad($sort_type = self::DEFAULT_SORT_SMALLAD_TYPE, $sort_field = self::DEFAULT_SORT_FIELD, $sort_mode = self::DEFAULT_SORT_MODE, $page = 1)
	{
		$page = $page !== 1 ? $page . '/' : '';
		$sort_type = $sort_type !== self::DEFAULT_SORT_SMALLAD_TYPE ? $sort_field . '/' : '';
		$sort_field = $sort_field !== self::DEFAULT_SORT_FIELD ? $sort_field . '/' : '';
		$sort_mode = $sort_mode !== self::DEFAULT_SORT_MODE ? $sort_mode . '/' : '';
		return DispatchManager::get_url(self::$dispatcher, '/pending/' . $sort_field . $sort_mode . $page);
	}
	
	public static function add_smallad($id_category = null)
	{
		$id_category = !empty($id_category) ? $id_category . '/': '';
		return DispatchManager::get_url(self::$dispatcher, '/add/' . $id_category);
	}
	
	public static function edit_smallad($id)
	{
		return DispatchManager::get_url(self::$dispatcher, '/' . $id . '/edit/');
	}
	
	public static function delete_smallad($id)
	{
		return DispatchManager::get_url(self::$dispatcher, '/' . $id . '/delete/?' . 'token=' . AppContext::get_session()->get_token());
	}
	
	public static function home()
	{
		return DispatchManager::get_url(self::$dispatcher, '/');
	}
}
?>