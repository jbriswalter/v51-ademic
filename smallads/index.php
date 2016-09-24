<?php
/*##################################################
 *                           index.php
 *                            -------------------
 *   begin                : June 23, 2016
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

define('PATH_TO_ROOT', '..');

require_once PATH_TO_ROOT . '/kernel/init.php';

$url_controller_mappers = array(
	//Admin
	new UrlControllerMapper('AdminSmalladsConfigController', '`^/admin(?:/config)?/?$`'),
	
	//Categories
	new UrlControllerMapper('SmalladsCategoriesManageController', '`^/categories/?$`'),
	new UrlControllerMapper('SmalladsCategoriesFormController', '`^/categories/add/?([0-9]+)?/?$`', array('id_parent')),
	new UrlControllerMapper('SmalladsCategoriesFormController', '`^/categories/([0-9]+)/edit/?$`', array('id')),
	new UrlControllerMapper('SmalladsDeleteCategoryController', '`^/categories/([0-9]+)/delete/?$`', array('id')),
	
	//Manage Smallads
	new UrlControllerMapper('SmalladsManageController', '`^/manage/?$`'),
	new UrlControllerMapper('SmalladsFormController', '`^/add/?([0-9]+)?/?$`', array('id_category')),
	new UrlControllerMapper('SmalladsFormController', '`^/([0-9]+)/edit/?$`', array('id')),
	new UrlControllerMapper('SmalladsDeleteController', '`^/([0-9]+)/delete/?$`', array('id')),
	
	new UrlControllerMapper('SmalladsDisplaySmalladsTagController', '`^/tag/([a-z0-9-_]+)?/?([0-9]+)?/?$`', array('tag', 'type', 'field', 'sort', 'page')),
	new UrlControllerMapper('SmalladsDisplayPendingSmalladsController', '`^/pending/([0-9]+)?/?$`', array('field', 'sort', 'page')),
	
	new UrlControllerMapper('SmalladsDisplaySmalladsController', '`^/([0-9]+)-([a-z0-9-_]+)/([0-9]+)-([a-z0-9-_]+)/?$`', array('id_category', 'rewrited_name_category', 'id', 'rewrited_name')),
	
	new UrlControllerMapper('SmalladsDisplayCategoryController', '`^(?:/([0-9]+)-([a-z0-9-_]+))?/?([0-9]+)?/?$`', array('id_category', 'rewrited_name', 'smallad_type', 'field', 'sort', 'page')),
);
DispatchManager::dispatch($url_controller_mappers);
?>