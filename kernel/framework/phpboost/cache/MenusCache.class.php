<?php
/*##################################################
 *                      	 MenusCache.class.php
 *                            -------------------
 *   begin                : August 10, 2014
 *   copyright            : (C) 2014 Kevin MASSY
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

/**
 * @author Kevin MASSY <kevin.massy@phpboost.com>
 */
class MenusCache implements CacheData
{
	private $menus = array();

	/**
	 * {@inheritdoc}
	 */
	public function synchronize()
	{
		$this->menus = array();

		$menus = MenuService::get_menu_list();
		foreach ($menus as $menu)
		{
			if ($menu->get_block() != Menu::BLOCK_POSITION__NOT_ENABLED && $menu->is_enabled())
			{
				$this->menus[] = new CachedMenu($menu);
			}
		}
	}

	public function get_menus()
	{
		return $this->menus;
	}

	/**
	 * Loads and returns the menus cached data.
	 * @return MenusCache The cached data
	 */
	public static function load()
	{
		return CacheManager::load(__CLASS__, 'kernel', 'menus');
	}

	/**
	 * Invalidates the current menus cached data.
	 */
	public static function invalidate()
	{
		CacheManager::invalidate('kernel', 'menus');
	}
}
?>