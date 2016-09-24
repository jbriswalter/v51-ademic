<?php
/*##################################################
 *		               SmalladsDisplayCategoryController.class.php
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

class SmalladsDisplayCategoryController extends ModuleController
{
	private $lang;
	private $tpl;
	private $config;
	
	private $category;
	
	public function execute(HTTPRequestCustom $request)
	{
		$this->init();
		
		$this->check_authorizations();
		
		$this->build_view();
		
		return $this->generate_response();
	}
	
	private function init()
	{
		$this->lang = LangLoader::get('common', 'smallads');
		$this->tpl = new FileTemplate('smallads/SmalladsDisplaySeveralSmalladsController.tpl');
		$this->tpl->add_lang($this->lang);
		$this->config = SmalladsConfig::load();
	}
	
	private function build_view()
	{
		
		$now = new Date();
		$authorized_categories = SmalladsService::get_authorized_categories($this->get_category()->get_id());
		$request = AppContext::get_request();
		$smallad_type = $request->get_getstring('smallad_type', SmalladsUrlBuilder::DEFAULT_SORT_SMALLAD_TYPE);
		$mode = $request->get_getstring('sort', SmalladsUrlBuilder::DEFAULT_SORT_MODE);
		$field = $request->get_getstring('field', SmalladsUrlBuilder::DEFAULT_SORT_FIELD);
		
		switch ($smallad_type)
		{
			default:
				$sort_type = 'all';
				break;
			case 'sell':
				$sort_type = 'sell';
				break;
			case 'buy':
				$sort_type = 'buy';
				break;
			case 'give':
				$sort_type = 'give';
				break;
			case 'exchange':
				$sort_type = 'exchange';
				break;
		}
		
		$sort_mode = ($mode == 'asc') ? 'ASC' : 'DESC';
		
		switch ($field)
		{
			case 'price':
				$sort_field = 'price';
				break;
			case 'name':
				$sort_field = 'name';
				break;
			case 'view':
				$sort_field = 'number_view';
				break;
			case 'city':
				$sort_field = 'city';
				break;
			default:
				$sort_field = 'creation_date';
				break;
		}
		
		$condition = 'WHERE id_category IN :authorized_categories
		AND (approbation_type = 1 OR (approbation_type = 2 AND start_date < :timestamp_now AND (end_date > :timestamp_now OR end_date = 0)))';
		$parameters = array(
			'authorized_categories' => $authorized_categories,
			'timestamp_now' => $now->get_timestamp()
		);
		
		$page = AppContext::get_request()->get_getint('page', 1);
		$pagination = $this->get_pagination($condition, $parameters, $page);
		
		$result = PersistenceContext::get_querier()->select('SELECT smallads.*, member.*
		FROM '. SmalladsSetup::$smallads_table .' smallads
		LEFT JOIN '. DB_TABLE_MEMBER .' member ON member.user_id = smallads.author_user_id
		' . $condition . '
		ORDER BY top_list_enabled DESC, ' . $sort_field . ' ' . $sort_mode . '
		LIMIT :number_items_per_page OFFSET :display_from', array_merge($parameters, array(
			'user_id' => AppContext::get_current_user()->get_id(),
			'number_items_per_page' => $pagination->get_number_items_per_page(),
			'display_from' => $pagination->get_display_from()
		)));
		
		$number_columns_display_smallads = $this->config->get_number_columns_display_smallads();
		$this->tpl->put_all(array(
			'C_CATEGORY' => true,
			'C_DISPLAY_BLOCK_TYPE' => $this->config->get_display_type() == SmalladsConfig::DISPLAY_BLOCK,
			'C_DISPLAY_LIST_TYPE' => $this->config->get_display_type() == SmalladsConfig::DISPLAY_LIST,
			'C_DISPLAY_CONDENSED_CONTENT' => $this->config->get_display_condensed_enabled(),
			'C_ROOT_CATEGORY' => $this->get_category()->get_id() == Category::ROOT_CATEGORY,
			'ID_CAT' => $this->get_category()->get_id(),
			'CATEGORY_NAME' => $this->get_category()->get_name(),
			'U_EDIT_CATEGORY' => $this->get_category()->get_id() == Category::ROOT_CATEGORY ? SmalladsUrlBuilder::configuration()->rel() : SmalladsUrlBuilder::edit_category($this->get_category()->get_id())->rel(),
			
			'C_SMALLADS_NO_AVAILABLE' => $result->get_rows_count() == 0,
			'C_PAGINATION' => $pagination->has_several_pages(),
			'PAGINATION' => $pagination->display(),
			
			'C_SEVERAL_COLUMNS' => $number_columns_display_smallads > 1,
			'NUMBER_COLUMNS' => $number_columns_display_smallads
		));

		while ($row = $result->fetch())
		{
			$smallad = new Smallad();
			$smallad->set_properties($row);
			
			$this->tpl->assign_block_vars('smallads', $smallad->get_array_tpl_vars());
		}
		$result->dispose();
		
		$this->build_category_menu_view();
		$this->build_sorting_form($field, $mode);
		$this->build_sorting_type_form($smallad_type);
	}
	
	private function build_sorting_type_form($smallad_type)
	{
		$common_lang = LangLoader::get('common');
		$lang = LangLoader::get('common', 'smallads');
		
		$form = new HTMLForm(__CLASS__, '', false);
		$form->set_css_class('smallads-filters');
		
		$fieldset = new FormFieldsetHorizontal('filters', array('description' => $lang['smallads.type']));
		$form->add_fieldset($fieldset);
		
		$fieldset->add_field(new FormFieldSimpleSelectChoice('sort_type', '', $smallad_type,
			array(
				new FormFieldSelectChoiceOption($lang['smallads.status.all'], 'all'),
				new FormFieldSelectChoiceOption($lang['smallads.status.sell'], 'sell'),
				new FormFieldSelectChoiceOption($lang['smallads.status.buy'], 'buy'),
				new FormFieldSelectChoiceOption($lang['smallads.status.give'], 'give'),
				new FormFieldSelectChoiceOption($lang['smallads.status.exchange'], 'exchange'),
			), 
			array('events' => array('change' => 'document.location = "' . SmalladsUrlBuilder::display_category($this->category->get_id(), $this->category->get_rewrited_name())->rel() . '" + HTMLForms.getField("sort_type").getValue();'))
		));
		
		$this->tpl->put('TYPE_FORM', $form->display());
	}
	
	private function build_sorting_form($field, $mode)
	{
		$common_lang = LangLoader::get('common');
		$lang = LangLoader::get('common', 'smallads');
		
		$form = new HTMLForm(__CLASS__, '', false);
		$form->set_css_class('smallads-filters');
		
		$fieldset = new FormFieldsetHorizontal('filters', array('description' => $common_lang['sort_by']));
		$form->add_fieldset($fieldset);
		
		$fieldset->add_field(new FormFieldSimpleSelectChoice('sort_fields', '', $field, 
			array(
				new FormFieldSelectChoiceOption($lang['smallads.form.price'], 'price'),
				new FormFieldSelectChoiceOption($common_lang['form.title'], 'name'),
				new FormFieldSelectChoiceOption($common_lang['sort_by.number_views'], 'view'),
				new FormFieldSelectChoiceOption($lang['smallads.form.city'], 'city'),
				new FormFieldSelectChoiceOption($common_lang['form.date.creation'], 'date')
			), 
			array('events' => array('change' => 'document.location = "'. SmalladsUrlBuilder::display_category($this->category->get_id(), $this->category->get_rewrited_name())->rel() .'" + HTMLForms.getField("sort_fields").getValue() + "/" + HTMLForms.getField("sort_mode").getValue();'))
		));
		
		$fieldset->add_field(new FormFieldSimpleSelectChoice('sort_mode', '', $mode,
			array(
				new FormFieldSelectChoiceOption($common_lang['sort.asc'], 'asc'),
				new FormFieldSelectChoiceOption($common_lang['sort.desc'], 'desc')
			), 
			array('events' => array('change' => 'document.location = "' . SmalladsUrlBuilder::display_category($this->category->get_id(), $this->category->get_rewrited_name())->rel() . '" + HTMLForms.getField("sort_fields").getValue() + "/" + HTMLForms.getField("sort_mode").getValue();'))
		));
		
		$this->tpl->put('FORM', $form->display());
	}
	
	private function get_pagination($condition, $parameters, $page)
	{
		$number_smallads = PersistenceContext::get_querier()->count(SmalladsSetup::$smallads_table, $condition, $parameters);
		
		$pagination = new ModulePagination($page, $number_smallads, (int)SmalladsConfig::load()->get_number_smallads_per_page());
		$pagination->set_url(SmalladsUrlBuilder::display_category($this->get_category()->get_id(), $this->get_category()->get_rewrited_name(), '%d'));
		
		if ($pagination->current_page_is_empty() && $page > 1)
		{
			$error_controller = PHPBoostErrors::unexisting_page();
			DispatchManager::redirect($error_controller);
		}
		
		return $pagination;
	}
	
	private function build_category_menu_view($idcat = 0, $name = '')
	{
		if (SmalladsService::get_categories_manager()->get_categories_cache()->category_exists($idcat))
		{			
			$result = PersistenceContext::get_querier()->select('SELECT id, name, rewrited_name, id_parent
			FROM '. SmalladsSetup::$smallads_cats_table .'
			');		
			
			while ($row = $result->fetch())
			{
				if($row['id_parent'] == 0)
				$this->tpl->assign_block_vars('category_menu', array(
					'PATH' => SmalladsUrlBuilder::display_category($row['id'], $row['rewrited_name'])->rel(),
					'NAME' => $row['name'],
					'C_IS_PARENT' => SmalladsService::get_categories_manager()->get_children($idcat, new SearchCategoryChildrensOptions(), true),
				));
				
				if($row['id_parent'] != 0)
				$this->tpl->assign_block_vars('subcategory_menu', array(
					'PATH' => SmalladsUrlBuilder::display_category($row['id'], $row['rewrited_name'])->rel(),
					'NAME' => $row['name']
					
				));
			}
			$result->dispose();
		}
	}
	
	private function get_category()
	{
		if ($this->category === null)
		{
			$id = AppContext::get_request()->get_getint('id_category', 0);
			if (!empty($id))
			{
				try {
					$this->category = SmalladsService::get_categories_manager()->get_categories_cache()->get_category($id);
				} catch (CategoryNotFoundException $e) {
					$error_controller = PHPBoostErrors::unexisting_page();
   					DispatchManager::redirect($error_controller);
				}
			}
			else
			{
				$this->category = SmalladsService::get_categories_manager()->get_categories_cache()->get_category(Category::ROOT_CATEGORY);
			}
		}
		return $this->category;
	}
	
	private function check_authorizations()
	{
		if (AppContext::get_current_user()->is_guest())
		{
			if (($this->config->are_descriptions_displayed_to_guests() && (!Authorizations::check_auth(RANK_TYPE, User::MEMBER_LEVEL, $this->get_category()->get_authorizations(), Category::READ_AUTHORIZATIONS) || !$this->config->get_display_condensed_enabled())) || (!$this->config->are_descriptions_displayed_to_guests() && !SmalladsAuthorizationsService::check_authorizations($this->get_category()->get_id())->read()))
			{
				$error_controller = PHPBoostErrors::user_not_authorized();
				DispatchManager::redirect($error_controller);
			}
		}
		else
		{
			if (!SmalladsAuthorizationsService::check_authorizations($this->get_category()->get_id())->read())
			{
				$error_controller = PHPBoostErrors::user_not_authorized();
				DispatchManager::redirect($error_controller);
			}
		}
	}
	
	private function generate_response()
	{
		$response = new SiteDisplayResponse($this->tpl);
		
		$graphical_environment = $response->get_graphical_environment();
		
		if ($this->get_category()->get_id() != Category::ROOT_CATEGORY)
			$graphical_environment->set_page_title($this->get_category()->get_name(), $this->lang['smallads']);
		else
			$graphical_environment->set_page_title($this->lang['smallads']);
		
		$graphical_environment->get_seo_meta_data()->set_description($this->get_category()->get_description());
		$graphical_environment->get_seo_meta_data()->set_canonical_url(SmalladsUrlBuilder::display_category($this->get_category()->get_id(), $this->get_category()->get_rewrited_name(), AppContext::get_request()->get_getint('page', 1)));
	
		$breadcrumb = $graphical_environment->get_breadcrumb();
		$breadcrumb->add($this->lang['smallads'], SmalladsUrlBuilder::home());
		
		$categories = array_reverse(SmalladsService::get_categories_manager()->get_parents($this->get_category()->get_id(), true));
		foreach ($categories as $id => $category)
		{
			if ($category->get_id() != Category::ROOT_CATEGORY)
				$breadcrumb->add($category->get_name(), SmalladsUrlBuilder::display_category($category->get_id(), $category->get_rewrited_name()));
		}
		
		return $response;
	}
	
	public static function get_view()
	{
		$object = new self();
		$object->init();
		$object->check_authorizations();
		$object->build_view();
		return $object->tpl;
	}
}
?>
