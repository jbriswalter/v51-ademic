<?php
/*##################################################
 *                             SmalladsSetup.class.php
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

class SmalladsSetup extends DefaultModuleSetup
{
	public static $smallads_table;
	public static $smallads_cats_table;

	/**
	 * @var string[string] localized messages
	 */
	private $messages;

	public static function __static()
	{
		self::$smallads_table = PREFIX . 'smallads';
		self::$smallads_cats_table = PREFIX . 'smallads_cats';
	}
	
	public function upgrade($installed_version)
	{
		return '0.0.7';
	}

	public function install()
	{
		$this->drop_tables();
		$this->create_tables();
		$this->insert_data();
	}

	public function uninstall()
	{
		$this->drop_tables();
		ConfigManager::delete('smallads', 'config');
		SmalladsService::get_keywords_manager()->delete_module_relations();
	}

	private function drop_tables()
	{
		PersistenceContext::get_dbms_utils()->drop(array(self::$smallads_table, self::$smallads_cats_table));
	}

	private function create_tables()
	{
		$this->create_smallads_table();
		$this->create_smallads_cats_table();
	}

	private function create_smallads_table()
	{
		$fields = array(
			'id' => array('type' => 'integer', 'length' => 11, 'autoincrement' => true, 'notnull' => 1),
			'id_category' => array('type' => 'integer', 'length' => 11, 'notnull' => 1, 'default' => 0),
			'name' => array('type' => 'string', 'length' => 255, 'notnull' => 1, 'default' => "''"),
			'rewrited_name' => array('type' => 'string', 'length' => 250, 'default' => "''"),
			'contents' => array('type' => 'text', 'length' => 65000),
			'short_contents' => array('type' => 'text', 'length' => 65000),
			'creation_date' => array('type' => 'integer', 'length' => 11, 'notnull' => 1, 'default' => 0),
			'updated_date' => array('type' => 'integer', 'length' => 11, 'notnull' => 1, 'default' => 0),
			'approbation_type' => array('type' => 'integer', 'length' => 1, 'notnull' => 1, 'default' => 0),
			'start_date' => array('type' => 'integer', 'length' => 11, 'notnull' => 1, 'default' => 0),
			'end_date' => array('type' => 'integer', 'length' => 11, 'notnull' => 1, 'default' => 0),
			'picture_url' => array('type' => 'string', 'length' => 255, 'notnull' => 1, 'default' => "''"),
			'author_user_id' => array('type' => 'integer', 'length' => 11, 'notnull' => 1, 'default' => 0),
			
			'smallad_type' => array('type' => 'integer', 'length' => 1, 'notnull' => 1, 'default' => 0),
			'price' => array('type' => 'decimal', 'notnull' => 1, 'length' => 18, 'scale' => 2),
			'number_view' => array('type' => 'integer', 'length' => 11, 'default' => 0),
			'sold_enabled' => array('type' => 'boolean', 'notnull' => 1, 'notnull' => 1, 'default' => 0),
			'top_list_enabled' => array('type' => 'boolean', 'notnull' => 1, 'notnull' => 1, 'default' => 0),
			'carousels' => array('type' => 'text', 'length' => 65000),
			'colors' => array('type' => 'text', 'length' => 65000),
			'details' => array('type' => 'text', 'length' => 65000),			
			'smallad_city' => array('type' => 'text', 'length' => 255, 'default' => "''"),
			'smallad_zipcode' => array('type' => 'text', 'length' => 255, 'default' => "''")
		);
		$options = array(
			'primary' => array('id'),
			'indexes' => array(
				'id_category' => array('type' => 'key', 'fields' => 'id_category'),
				'title' => array('type' => 'fulltext', 'fields' => 'name'),
				'contents' => array('type' => 'fulltext', 'fields' => 'contents'),
				'short_contents' => array('type' => 'fulltext', 'fields' => 'short_contents')
		));
		PersistenceContext::get_dbms_utils()->create_table(self::$smallads_table, $fields, $options);
	}

	private function create_smallads_cats_table()
	{
		RichCategory::create_categories_table(self::$smallads_cats_table);
	}
		
	private function insert_data()
	{
        $this->messages = LangLoader::get('install', 'smallads');
		$this->insert_smallads_cats_data();
		$this->insert_smallads_data();
	}

	private function insert_smallads_cats_data()
	{
		PersistenceContext::get_querier()->insert(self::$smallads_cats_table, array(
			'id' => 1,
			'id_parent' => 0,
			'c_order' => 1,
			'auth' => '',
			'rewrited_name' => Url::encode_rewrite($this->messages['cat.name']),
			'name' => $this->messages['cat.name'],
			'description' => $this->messages['cat.description'],
			'image' => '/smallads/smallads.png'
		));
	}
	
	private function insert_smallads_data()
	{
		PersistenceContext::get_querier()->insert(self::$smallads_table, array(
			'id' => 1,
			'id_category' => 1,
			'name' => $this->messages['smallads.title'],
			'rewrited_name' => Url::encode_rewrite($this->messages['smallads.title']),
			'contents' => $this->messages['smallads.content'],
			'short_contents' => '',
			'creation_date' => time(),
			'updated_date' => 0,
			'approbation_type' => Smallad::APPROVAL_NOW,
			'start_date' => 0,
			'end_date' => 0,
			'picture_url' => '/smallads/templates/images/default.png',
			'author_user_id' => 1,
			
			'smallad_type' => Smallad::GIVE,
			'price' => 0,
			'number_view' => 0,
			'sold_enabled' => 0,
			'top_list_enabled' => 0,
			'carousels' => serialize(array()),
			'colors' => serialize(array()),
			'details' => serialize(array()),			
			'smallad_city' =>  $this->messages['smallads.install.smallads.city'],
			'smallad_zipcode' =>  $this->messages['smallads.install.smallads.zipcode']
		));
	}
}
?>