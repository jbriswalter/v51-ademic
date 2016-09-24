<?php
/*##################################################
 *		                         Smallads.class.php
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

class Smallad
{
	private $id;
	private $id_cat;
	private $name;
	private $rewrited_name;
	private $contents;
	private $short_contents;
	
	private $approbation_type;
	private $start_date;
	private $end_date;
	private $end_date_enabled;
	
	private $creation_date;
	private $updated_date;
	private $author_user;
	
	private $smallad_type;
	private $sold_enabled;
	private $top_list_enabled;
	private $price;
	private $number_view;
	private $carousels;
	private $colors;
	private $details;	
	private $smallad_city;
	private $smallad_zipcode;

	private $picture_url;
	private $keywords;
	
	const ALL = 0;
	const SELL = 1;
	const BUY = 2;
	const GIVE = 3;
	const EXCHANGE = 4;
	
	const NOT_APPROVAL = 0;
	const APPROVAL_NOW = 1;
	const APPROVAL_DATE = 2;
	
	const DEFAULT_PICTURE = '/smallads/templates/images/default.png';	
	
	public function set_id($id)
	{
		$this->id = $id;
	}
	
	public function get_id()
	{
		return $this->id;
	}
	
	public function set_id_cat($id_cat)
	{
		$this->id_cat = $id_cat;
	}
	
	public function get_id_cat()
	{
		return $this->id_cat;
	}

	public function get_category()
	{
		return SmalladsService::get_categories_manager()->get_categories_cache()->get_category($this->id_cat);
	}
	
	public function set_name($name)
	{
		$this->name = $name;
	}
	
	public function get_name()
	{
		return $this->name;
	}
	
	public function set_rewrited_name($rewrited_name)
	{
		$this->rewrited_name = $rewrited_name;
	}
	
	public function get_rewrited_name()
	{
		return $this->rewrited_name;
	}
	
	public function rewrited_name_is_personalized()
	{
		return $this->rewrited_name != Url::encode_rewrite($this->name);
	}
	
	public function set_contents($contents)
	{
		$this->contents = $contents;
	}
	
	public function get_contents()
	{
		return $this->contents;
	}
	
	public function set_short_contents($short_contents)
	{
		$this->short_contents = $short_contents;
	}
	
	public function get_short_contents()
	{
		return $this->short_contents;
	}
	
	public function get_real_short_contents()
	{
		if ($this->get_short_contents_enabled())
		{
			return FormatingHelper::second_parse($this->short_contents);
		}
		return substr(@strip_tags($this->contents, '<br><br/>'), 0, SmalladsConfig::load()->get_number_character_to_cut());
	}
		
	public function get_short_contents_enabled()
	{
		return !empty($this->short_contents);
	}
	
	public function set_approbation_type($approbation_type)
	{
		$this->approbation_type = $approbation_type;
	}
	
	public function get_approbation_type()
	{
		return $this->approbation_type;
	}
	
	public function is_visible()
	{
		$now = new Date();
		return SmalladsAuthorizationsService::check_authorizations($this->id_cat)->read() && ($this->get_approbation_type() == self::APPROVAL_NOW || ($this->get_approbation_type() == self::APPROVAL_DATE && $this->get_start_date()->is_anterior_to($now) && ($this->end_date_enabled ? $this->get_end_date()->is_posterior_to($now) : true)));
	}
	
	public function get_status()
	{
		switch ($this->approbation_type) {
			case self::APPROVAL_NOW:
				return LangLoader::get_message('status.approved.now', 'common');
			break;
			case self::APPROVAL_DATE:
				return LangLoader::get_message('status.approved.date', 'common');
			break;
			case self::NOT_APPROVAL:
				return LangLoader::get_message('status.approved.not', 'common');
			break;
		}
	}
	
	public function set_start_date(Date $start_date)
	{
		$this->start_date = $start_date;
	}
	
	public function get_start_date()
	{
		return $this->start_date;
	}
	
	public function set_end_date(Date $end_date)
	{
		$this->end_date = $end_date;
		$this->end_date_enabled = true;
	}
	
	public function get_end_date()
	{
		return $this->end_date;
	}
	
	public function end_date_enabled()
	{
		return $this->end_date_enabled;
	}

	public function set_creation_date(Date $creation_date)
	{
		$this->creation_date = $creation_date;
	}
	
	public function get_creation_date()
	{
		return $this->creation_date;
	}
	
	public function set_updated_date(Date $updated_date)
	{
		$this->updated_date = $updated_date;
	}
	
	public function get_updated_date()
	{
		return $this->updated_date;
	}
	
	public function has_updated_date()
	{
		return $this->updated_date !== null;
	}
	
	public function set_author_user(User $user)
	{
		$this->author_user = $user;
	}
	
	public function get_author_user()
	{
		return $this->author_user;
	}
	
	public function set_smallad_type($smallad_type)
	{
		$this->smallad_type = $smallad_type;
	}
	
	public function get_smallad_type()
	{
		return $this->smallad_type;
	}
	
	public function get_smallad_status()
	{
		switch ($this->smallad_type) {
			case self::ALL:
				return LangLoader::get_message('smallads.status.all', 'common', 'smallads');
			break;
			case self::SELL:
				return LangLoader::get_message('smallads.status.sell', 'common', 'smallads');
			break;
			case self::BUY:
				return LangLoader::get_message('smallads.status.buy', 'common', 'smallads');
			break;
			case self::GIVE:
				return LangLoader::get_message('smallads.status.give', 'common', 'smallads');
			break;
			case self::EXCHANGE:
				return LangLoader::get_message('smallads.status.exchange', 'common', 'smallads');
			break;
		}
	}
	
	public function set_top_list_enabled($top_list_enabled)
	{
		$this->top_list_enabled = $top_list_enabled;
	}
	
	public function get_top_list_enabled()
	{
		return $this->top_list_enabled;
	}
	
	public function set_sold_enabled($sold_enabled)
	{
		$this->sold_enabled = $sold_enabled;
	}
	
	public function get_sold_enabled()
	{
		return $this->sold_enabled;
	}

	public function set_price($price)
	{
		$this->price = $price;
	}

	public function get_price()
	{
		return $this->price;
	}
	
	public function set_number_view($number_view)
	{
		$this->number_view = $number_view;
	}

	public function get_number_view()
	{
		return $this->number_view;
	}
	
	public function add_carousel($carousel)
	{
		$this->carousels[] = $carousel;
	}

	public function set_carousels($carousels)
	{
		$this->carousels = $carousels;
	}

	public function get_carousels()
	{
		return $this->carousels;
	}
	
	public function add_color($color)
	{
		$this->colors[] = $color;
	}

	public function set_colors($colors)
	{
		$this->colors = $colors;
	}

	public function get_colors()
	{
		return $this->colors;
	}
	
	public function add_detail($detail)
	{
		$this->details[] = $detail;
	}

	public function set_details($details)
	{
		$this->details = $details;
	}

	public function get_details()
	{
		return $this->details;
	}
	
	public function set_smallad_city($smallad_city)
	{
		$this->smallad_city = $smallad_city;
	}
	
	public function get_smallad_city()
	{
		return $this->smallad_city;
	}
	
	public function set_smallad_zipcode($smallad_zipcode)
	{
		$this->smallad_zipcode = $smallad_zipcode;
	}
	
	public function get_smallad_zipcode()
	{
		return $this->smallad_zipcode;
	}
	
	public function set_picture(Url $picture)
	{
		$this->picture_url = $picture;
	}
	
	public function get_picture()
	{
		return $this->picture_url;
	}
	
	public function has_picture()
	{
		$picture = $this->picture_url->rel();
		return !empty($picture);
	}
	
	public function get_keywords()
	{
		if ($this->keywords === null)
		{
			$this->keywords = SmalladsService::get_keywords_manager()->get_keywords($this->id);
		}
		return $this->keywords;
	}
	
	public function get_keywords_name()
	{
		return array_keys($this->get_keywords());
	}
	
	public function is_authorized_to_add()
	{
		return SmalladsAuthorizationsService::check_authorizations($this->id_cat)->write() || SmalladsAuthorizationsService::check_authorizations($this->id_cat)->contribution();
	}
	
	public function is_authorized_to_edit()
	{
		return SmalladsAuthorizationsService::check_authorizations($this->id_cat)->moderation() || ((SmalladsAuthorizationsService::check_authorizations($this->get_id_cat())->write() || (SmalladsAuthorizationsService::check_authorizations($this->get_id_cat())->contribution() && !$this->is_visible())) && $this->get_author_user()->get_id() == AppContext::get_current_user()->get_id() && AppContext::get_current_user()->check_level(User::MEMBER_LEVEL));
	}
	
	public function is_authorized_to_delete()
	{
		return SmalladsAuthorizationsService::check_authorizations($this->id_cat)->moderation() || ((SmalladsAuthorizationsService::check_authorizations($this->get_id_cat())->write() || (SmalladsAuthorizationsService::check_authorizations($this->get_id_cat())->contribution() && !$this->is_visible())) && $this->get_author_user()->get_id() == AppContext::get_current_user()->get_id() && AppContext::get_current_user()->check_level(User::MEMBER_LEVEL));
	}
	
	public function get_properties()
	{
		return array(
			'id' => $this->get_id(),
			'id_category' => $this->get_id_cat(),
			'name' => $this->get_name(),
			'rewrited_name' => $this->get_rewrited_name(),
			'contents' => $this->get_contents(),
			'short_contents' => $this->get_short_contents(),
			'approbation_type' => $this->get_approbation_type(),
			'start_date' => $this->get_start_date() !== null ? $this->get_start_date()->get_timestamp() : 0,
			'end_date' => $this->get_end_date() !== null ? $this->get_end_date()->get_timestamp() : 0,
			'creation_date' => $this->get_creation_date()->get_timestamp(),
			'updated_date' => $this->get_updated_date() !== null ? $this->get_updated_date()->get_timestamp() : 0,
			'author_user_id' => $this->get_author_user()->get_id(),
			'picture_url' => $this->get_picture()->relative(),
			
			'smallad_type' => $this->get_smallad_type(),
			'sold_enabled' => (int)$this->get_sold_enabled(),
			'top_list_enabled' => (int)$this->get_top_list_enabled(),
			'price' => $this->get_price(),
			'number_view' => $this->get_number_view(),
			'carousels' => serialize($this->get_carousels()),
			'colors' => serialize($this->get_colors()),
			'details' => serialize($this->get_details()),
			'smallad_city' => $this->get_smallad_city(),
			'smallad_zipcode' => $this->get_smallad_zipcode()
			
		);
	}
	
	public function set_properties(array $properties)
	{
		$this->id = $properties['id'];
		$this->id_cat = $properties['id_category'];
		$this->name = $properties['name'];
		$this->rewrited_name = $properties['rewrited_name'];
		$this->contents = $properties['contents'];
		$this->short_contents = $properties['short_contents'];
		$this->approbation_type = $properties['approbation_type'];
		$this->start_date = !empty($properties['start_date']) ? new Date($properties['start_date'], Timezone::SERVER_TIMEZONE) : null;
		$this->end_date = !empty($properties['end_date']) ? new Date($properties['end_date'], Timezone::SERVER_TIMEZONE) : null;
		$this->end_date_enabled = !empty($properties['end_date']);
		$this->creation_date = new Date($properties['creation_date'], Timezone::SERVER_TIMEZONE);
		$this->updated_date = !empty($properties['updated_date']) ? new Date($properties['updated_date'], Timezone::SERVER_TIMEZONE) : null;
		$this->picture_url = new Url($properties['picture_url']);
		
		$this->smallad_type = $properties['smallad_type'];
		$this->sold_enabled = (bool)$properties['sold_enabled'];
		$this->top_list_enabled = (bool)$properties['top_list_enabled'];
		$this->price = $properties['price'];
		$this->number_view = $properties['number_view'];
		$this->carousels = !empty($properties['carousels']) ? unserialize($properties['carousels']) : array();
		$this->colors = !empty($properties['colors']) ? unserialize($properties['colors']) : array();
		$this->details = !empty($properties['details']) ? unserialize($properties['details']) : array();
		$this->smallad_city = $properties['smallad_city'];
		$this->smallad_zipcode = $properties['smallad_zipcode'];

		$user = new User();
		if (!empty($properties['user_id']))
			$user->set_properties($properties);
		else
			$user->init_visitor_user();
			
		$this->set_author_user($user);
	}
	
	public function init_default_properties($id_cat = Category::ROOT_CATEGORY)
	{
		$this->id_cat = $id_cat;
		$this->approbation_type = self::APPROVAL_NOW;
		$this->start_date = new Date();
		$this->end_date = new Date();
		$this->creation_date = new Date();
		$this->picture_url = new Url(self::DEFAULT_PICTURE);
		$this->end_date_enabled = false;
		
		$this->smallad_type = self::ALL;
		$this->price = 0;
		$this->number_view = 0;
		
		$this->carousels = array();
        $this->colors = array();
        $this->details = array();
	}
	
	public function clean_start_and_end_date()
	{
		$this->start_date = null;
		$this->end_date = null;
		$this->end_date_enabled = false;
	}
	
	public function clean_end_date()
	{
		$this->end_date = null;
		$this->end_date_enabled = false;
	}
	
	public function get_array_tpl_vars()
	{
		$smallads_config = SmalladsConfig::load();
		$category = $this->get_category();
		$contents = FormatingHelper::second_parse($this->contents);
		$description = $this->get_real_short_contents();
		$user = $this->get_author_user();
		$user_group_color = User::get_group_color($user->get_groups(), $user->get_level(), true);
		
		$carousels = $this->get_carousels();
		$nbr_carousels = count($carousels);
		$colors = $this->get_colors();
		$nbr_colors = count($colors);
		$details = $this->get_details();
		$nbr_details = count($details);
		$smallad_city = $this->get_smallad_city();
		$smallad_zipcode = $this->get_smallad_zipcode();
		
		
		return array(
			'C_VISIBLE' => $this->is_visible(),
			'C_EDIT' => $this->is_authorized_to_edit(),
			'C_DELETE' => $this->is_authorized_to_delete(),
			'C_PICTURE' => $this->has_picture(),
			'C_USER_GROUP_COLOR' => !empty($user_group_color),
			'C_AUTHOR_DISPLAYED' => $smallads_config->get_author_displayed(),
			'C_READ_MORE' => !$this->get_short_contents_enabled() && $description != $contents && strlen($description) >= $smallads_config->get_number_character_to_cut(),
			'C_DIFFERED' => $this->approbation_type == self::APPROVAL_DATE,
			
			'C_LOCATION' => !empty($this->get_smallad_zipcode()) OR !empty($this->get_smallad_city()),
			'C_SOLD' => $this->get_sold_enabled(),
			'C_CAROUSELS' => $nbr_carousels > 0,
			'C_COLORS' => $nbr_colors > 0,
			'C_DETAILS' => $nbr_details > 0,

			//Smallads
			'ID' => $this->id,
			'NAME' => $this->name,
			'CONTENTS' => $contents,
			'DESCRIPTION' => $description,
			'DATE' => $this->creation_date->format(Date::FORMAT_DAY_MONTH_YEAR_HOUR_MINUTE_TEXT),
			'DATE_SHORT' => $this->creation_date->format(Date::FORMAT_DAY_MONTH_YEAR_TEXT),
			'DATE_DAY' => $this->creation_date->get_day(),
			'DATE_MONTH' => $this->creation_date->get_month(),
			'DATE_YEAR' => $this->creation_date->get_year(),
			'DATE_ISO8601' => $this->creation_date->format(Date::FORMAT_ISO8601),
			'DIFFERED_START_DATE' => $this->start_date ? $this->start_date->format(Date::FORMAT_DAY_MONTH_YEAR_HOUR_MINUTE_TEXT) : '',
			'DIFFERED_START_DATE_DAY' => $this->start_date ? $this->start_date->get_day() : '',
			'DIFFERED_START_DATE_MONTH' => $this->start_date ? $this->start_date->get_month() : '',
			'DIFFERED_START_DATE_YEAR' =>  $this->start_date ? $this->start_date->get_year() : '',
			'DIFFERED_START_DATE_ISO8601' => $this->start_date ? $this->start_date->format(Date::FORMAT_ISO8601) : '',
			'STATUS' => $this->get_status(),
			'C_AUTHOR_EXIST' => $user->get_id() !== User::VISITOR_LEVEL,
			'PSEUDO' => $user->get_display_name(),
			'USER_LEVEL_CLASS' => UserService::get_level_class($user->get_level()),
			'USER_GROUP_COLOR' => $user_group_color,
			
			'SMALLAD_STATUS' => $this->get_smallad_status(),
			'PRICE' => $this->get_price(),
			'NUMBER_VIEW' => $this->get_number_view(),
			'SMALLAD_CITY' => $this->get_smallad_city(),
			'SMALLAD_ZIPCODE' => $this->get_smallad_zipcode(),
			'AUTHOR_EMAIL' => $user->get_email(),
			
			//Category
			'C_ROOT_CATEGORY' => $category->get_id() == Category::ROOT_CATEGORY,
			'CATEGORY_ID' => $category->get_id(),
			'CATEGORY_NAME' => $category->get_name(),
			'CATEGORY_DESCRIPTION' => $category->get_description(),
			'CATEGORY_IMAGE' => $category->get_image()->rel(),
			'U_EDIT_CATEGORY' => $category->get_id() == Category::ROOT_CATEGORY ? SmalladsUrlBuilder::configuration()->rel() : SmalladsUrlBuilder::edit_category($category->get_id())->rel(),
			
			'U_SYNDICATION' => SyndicationUrlBuilder::rss('smallads', $this->id_cat)->rel(),
			'U_AUTHOR_PROFILE' => UserUrlBuilder::profile($this->get_author_user()->get_id())->rel(),
			'U_LINK' => SmalladsUrlBuilder::display_smallad($category->get_id(), $category->get_rewrited_name(), $this->id, $this->rewrited_name)->rel(),
			'U_CATEGORY' => SmalladsUrlBuilder::display_category($category->get_id(), $category->get_rewrited_name())->rel(),
			'U_EDIT' => SmalladsUrlBuilder::edit_smallad($this->id)->rel(),
			'U_DELETE' => SmalladsUrlBuilder::delete_smallad($this->id)->rel(),
			'U_PICTURE' => $this->get_picture()->rel()
		);
	}
}
?>
