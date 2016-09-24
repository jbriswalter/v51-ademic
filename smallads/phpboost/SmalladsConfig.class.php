<?php
/*##################################################
 *		                   SmalladsConfig.class.php
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

class SmalladsConfig extends AbstractConfigData
{
	const NUMBER_SMALLADS_PER_PAGE = 'number_smallads_per_page';
	const NUMBER_COLUMNS_DISPLAY_SMALLADS = 'number_columns_display_smallads';
	
	const DISPLAY_CONDENSED_ENABLED = 'display_condensed_enabled';
	const DESCRIPTIONS_DISPLAYED_TO_GUESTS = 'descriptions_displayed_to_guests';
	const NUMBER_CHARACTER_TO_CUT = 'number_character_to_cut';
	
	const SMALLADS_SUGGESTIONS_ENABLED = 'smallads_suggestions_enabled';
	const AUTHOR_DISPLAYED = 'author_displayed';

	const DISPLAY_TYPE = 'display_type';
	const DISPLAY_BLOCK = 'block';
	const DISPLAY_LIST = 'list';
	
	const DEFERRED_OPERATIONS = 'deferred_operations';
	
	const AUTHORIZATIONS = 'authorizations';
	
	const SEND_AUTHOR_EMAIL = 'send_author_email';
	
	
	public function get_number_smallads_per_page()
	{
		return $this->get_property(self::NUMBER_SMALLADS_PER_PAGE);
	}

	public function set_number_smallads_per_page($number_smallads_per_page)
	{
		$this->set_property(self::NUMBER_SMALLADS_PER_PAGE, $number_smallads_per_page);
	}
	
	public function get_number_columns_display_smallads()
	{
		return $this->get_property(self::NUMBER_COLUMNS_DISPLAY_SMALLADS);
	}

	public function set_number_columns_display_smallads($number_columns_display_smallads)
	{
		$this->set_property(self::NUMBER_COLUMNS_DISPLAY_SMALLADS, $number_columns_display_smallads);
	}
	
	public function get_display_condensed_enabled()
	{
		return $this->get_property(self::DISPLAY_CONDENSED_ENABLED);
	}

	public function set_display_condensed_enabled($display_condensed_enabled)
	{
		$this->set_property(self::DISPLAY_CONDENSED_ENABLED, $display_condensed_enabled);
	}
	
	public function display_descriptions_to_guests()
	{
		$this->set_property(self::DESCRIPTIONS_DISPLAYED_TO_GUESTS, true);
	}
	
	public function hide_descriptions_to_guests()
	{
		$this->set_property(self::DESCRIPTIONS_DISPLAYED_TO_GUESTS, false);
	}
	
	public function are_descriptions_displayed_to_guests()
	{
		return $this->get_property(self::DESCRIPTIONS_DISPLAYED_TO_GUESTS);
	}
	
	public function get_number_character_to_cut()
	{
		return $this->get_property(self::NUMBER_CHARACTER_TO_CUT);
	}

	public function set_number_character_to_cut($number)
	{
		$this->set_property(self::NUMBER_CHARACTER_TO_CUT, $number);
	}
		
	public function get_smallads_suggestions_enabled()
	{
		return $this->get_property(self::SMALLADS_SUGGESTIONS_ENABLED);
	}

	public function set_smallads_suggestions_enabled($smallads_suggestions_enabled)
	{
		$this->set_property(self::SMALLADS_SUGGESTIONS_ENABLED, $smallads_suggestions_enabled);
	}
	
	public function get_author_displayed()
	{
		return $this->get_property(self::AUTHOR_DISPLAYED);
	}

	public function set_author_displayed($author_displayed)
	{
		$this->set_property(self::AUTHOR_DISPLAYED, $author_displayed);
	}
	
	public function get_display_type()
	{
		return $this->get_property(self::DISPLAY_TYPE);
	}

	public function set_display_type($display_type)
	{
		$this->set_property(self::DISPLAY_TYPE, $display_type);
	}
	
	public function get_authorizations()
	{
		return $this->get_property(self::AUTHORIZATIONS);
	}

	public function set_authorizations(Array $authorizations)
	{
		$this->set_property(self::AUTHORIZATIONS, $authorizations);
	}
	
	public function get_deferred_operations()
	{
		return $this->get_property(self::DEFERRED_OPERATIONS);
	}
	
	public function set_deferred_operations(Array $deferred_operations)
	{
		$this->set_property(self::DEFERRED_OPERATIONS, $deferred_operations);
	}
	
	public function get_send_author_email()
	{
		return $this->get_property(self::SEND_AUTHOR_EMAIL);
	}

	public function set_send_author_email($send_author_emaily)
	{
		$this->set_property(self::SEND_AUTHOR_EMAIL, $send_author_emaily);
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_default_values()
	{
		return array(
			self::NUMBER_SMALLADS_PER_PAGE => 10,
			self::NUMBER_COLUMNS_DISPLAY_SMALLADS => 1,
			self::DISPLAY_CONDENSED_ENABLED => false,
			self::DESCRIPTIONS_DISPLAYED_TO_GUESTS => false,
			self::NUMBER_CHARACTER_TO_CUT => 250,
			self::SMALLADS_SUGGESTIONS_ENABLED => true,
			self::AUTHOR_DISPLAYED => true,
			self::DISPLAY_TYPE => self::DISPLAY_LIST,
			self::AUTHORIZATIONS => array('r-1' => 1, 'r0' => 5, 'r1' => 13),
			self::DEFERRED_OPERATIONS => array(),
			self::SEND_AUTHOR_EMAIL => true
		);
	}

	/**
	 * Returns the configuration.
	 * @return SmalladsConfig
	 */
	public static function load()
	{
		return ConfigManager::load(__CLASS__, 'smallads', 'config');
	}

	/**
	 * Saves the configuration in the database. Has it become persistent.
	 */
	public static function save()
	{
		ConfigManager::save('smallads', self::load(), 'config');
	}
}
?>