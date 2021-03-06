<?php
/*##################################################
 *                        CalendarEventContent.class.php
 *                            -------------------
 *   begin                : October 29, 2013
 *   copyright            : (C) 2013 Julien BRISWALTER
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

class CalendarEventContent
{
	private $id;
	private $category_id;
	private $title;
	private $rewrited_title;
	private $contents;
	
	private $location;
	
	private $approved;
	
	private $creation_date;
	private $author_user;
	
	private $registration_authorized;
	private $max_registered_members;
	private $last_registration_date_enabled;
	private $last_registration_date;
	private $register_authorizations;
	
	private $repeat_number;
	private $repeat_type;
	
	const NEVER = 'never';
	const DAILY = 'daily';
	const WEEKLY = 'weekly';
	const MONTHLY = 'monthly';
	const YEARLY = 'yearly';
	
	const DISPLAY_REGISTERED_USERS_AUTHORIZATION = 1;
	const REGISTER_AUTHORIZATION = 2;
	
	public function set_id($id)
	{
		$this->id = $id;
	}
	
	public function get_id()
	{
		return $this->id;
	}
	
	public function set_category_id($category_id)
	{
		$this->category_id = $category_id;
	}
	
	public function get_category_id()
	{
		return $this->category_id;
	}
	
	public function get_category()
	{
		return CalendarService::get_categories_manager()->get_categories_cache()->get_category($this->category_id);
	}
	
	public function set_title($title)
	{
		$this->title = $title;
	}
	
	public function get_title()
	{
		return $this->title;
	}
	
	public function set_rewrited_title($rewrited_title)
	{
		$this->rewrited_title = $rewrited_title;
	}
	
	public function get_rewrited_title()
	{
		return $this->rewrited_title;
	}
	
	public function set_contents($contents)
	{
		$this->contents = $contents;
	}
	
	public function get_contents()
	{
		return $this->contents;
	}
	
	public function set_location($location)
	{
		$this->location = $location;
	}
	
	public function get_location()
	{
		return $this->location;
	}
	
	public function approve()
	{
		$this->approved = true;
	}
	
	public function unapprove()
	{
		$this->approved = false;
	}
	
	public function is_approved()
	{
		return $this->approved;
	}
	
	public function set_creation_date(Date $creation_date)
	{
		$this->creation_date = $creation_date;
	}
	
	public function get_creation_date()
	{
		return $this->creation_date;
	}
	
	public function set_author_user(User $author)
	{
		$this->author_user = $author;
	}
	
	public function get_author_user()
	{
		return $this->author_user;
	}
	
	public function authorize_registration()
	{
		$this->registration_authorized = true;
	}
	
	public function unauthorize_registration()
	{
		$this->registration_authorized = false;
	}
	
	public function is_registration_authorized()
	{
		return $this->registration_authorized;
	}
	
	public function set_max_registered_members($max_registered_members)
	{
		$this->max_registered_members = $max_registered_members;
	}
	
	public function get_max_registered_members()
	{
		return $this->max_registered_members;
	}
	
	public function enable_last_registration_date()
	{
		$this->last_registration_date_enabled = true;
	}
	
	public function disable_last_registration_date()
	{
		$this->last_registration_date_enabled = false;
	}
	
	public function is_last_registration_date_enabled()
	{
		return $this->last_registration_date_enabled;
	}
	
	public function set_last_registration_date($last_registration_date)
	{
		$this->last_registration_date = $last_registration_date;
	}
	
	public function get_last_registration_date()
	{
		return $this->last_registration_date;
	}
	
	public function set_register_authorizations(array $authorizations)
	{
		$this->register_authorizations = $authorizations;
	}
	
	public function get_register_authorizations()
	{
		return $this->register_authorizations;
	}
	
	public function is_authorized_to_display_registered_users()
	{
		return $this->registration_authorized && AppContext::get_current_user()->check_auth($this->register_authorizations, self::DISPLAY_REGISTERED_USERS_AUTHORIZATION);
	}
	
	public function is_authorized_to_register()
	{
		return $this->registration_authorized && AppContext::get_current_user()->check_auth($this->register_authorizations, self::REGISTER_AUTHORIZATION);
	}
	
	public function set_repeat_number($number)
	{
		$this->repeat_number = $number;
	}
	
	public function get_repeat_number()
	{
		return $this->repeat_number;
	}
	
	public function set_repeat_type($type)
	{
		$this->repeat_type = $type;
	}
	
	public function get_repeat_type()
	{
		return $this->repeat_type;
	}
	
	public function is_repeatable()
	{
		return $this->repeat_type != self::NEVER;
	}
	
	public function get_properties()
	{
		return array(
			'id' => $this->get_id(),
			'id_category' => $this->get_category_id(),
			'title' => $this->get_title(),
			'rewrited_title' => $this->get_rewrited_title(),
			'contents' => $this->get_contents(),
			'location' => $this->get_location(),
			'approved' => (int)$this->is_approved(),
			'creation_date' => (int)$this->get_creation_date()->get_timestamp(),
			'author_id' => $this->get_author_user()->get_id(),
			'registration_authorized' => (int)$this->is_registration_authorized(),
			'max_registered_members' => $this->get_max_registered_members(),
			'last_registration_date' => (int)($this->get_last_registration_date() !== null ? $this->get_last_registration_date()->get_timestamp() : ''),
			'register_authorizations' => serialize($this->get_register_authorizations()),
			'repeat_number' => $this->get_repeat_number(),
			'repeat_type' => $this->get_repeat_type()
		);
	}
	
	public function set_properties(array $properties)
	{
		$this->id = $properties['id'];
		$this->category_id = $properties['id_category'];
		$this->title = $properties['title'];
		$this->rewrited_title = $properties['rewrited_title'];
		$this->contents = $properties['contents'];
		$this->location = $properties['location'];
		
		if ($properties['approved'])
			$this->approve();
		else
			$this->unapprove();
		
		if ($properties['registration_authorized'])
			$this->authorize_registration();
		else
			$this->unauthorize_registration();
		
		$this->max_registered_members = $properties['max_registered_members'];
		$this->last_registration_date_enabled = !empty($properties['last_registration_date']);
		$this->last_registration_date = !empty($properties['last_registration_date']) ? new Date($properties['last_registration_date'], Timezone::SERVER_TIMEZONE) : null;
		$this->register_authorizations = unserialize($properties['register_authorizations']);
		
		$this->creation_date = new Date($properties['creation_date'], Timezone::SERVER_TIMEZONE);
		
		$this->repeat_number = $properties['repeat_number'];
		$this->repeat_type = $properties['repeat_type'];
		
		$user = new User();
		if (!empty($properties['user_id']))
			$user->set_properties($properties);
		else
			$user->init_visitor_user();
		
		$this->set_author_user($user);
	}
	
	public function init_default_properties($category_id = Category::ROOT_CATEGORY)
	{
		$this->category_id = $category_id;
		$this->author_user = AppContext::get_current_user();
		$this->creation_date = new Date();
		
		$this->registration_authorized = false;
		$this->max_registered_members = 0;
		$this->last_registration_date_enabled = false;
		$this->register_authorizations = array('r0' => 3, 'r1' => 3);
		
		if (CalendarAuthorizationsService::check_authorizations()->write())
			$this->approve();
		else
			$this->unapprove();
		
		$this->repeat_number = 1;
		$this->repeat_type = self::NEVER;
	}
}
?>
