<?php
/*##################################################
 *                          SmalladsDisplaySmalladsTagController.class.php
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

class SmalladsDisplaySmalladsTagController extends ModuleController
{
	private $tpl;
	private $lang;
	
	/**
	 * @var SmalladsKeyword
	 */
	private $keyword;
	
	public function execute(HTTPRequestCustom $request)
	{
		$this->check_authorizations();
		
		$this->init();
		
		$this->build_view();
		
		return $this->generate_response();
	}
	
	public function init()
	{
		$this->lang = LangLoader::get('common', 'smallads');
		$this->tpl = new FileTemplate('smallads/SmalladsDisplaySeveralSmalladsController.tpl');
		$this->tpl->add_lang($this->lang);
	}
	
	public function build_view()
	{
		$now = new Date();
		$authorized_categories = SmalladsService::get_authorized_categories(Category::ROOT_CATEGORY);
		$smallads_config = SmalladsConfig::load();
		
		$condition = 'WHERE relation.id_keyword = :id_keyword
		AND id_category IN :authorized_categories
		AND (approbation_type = 1 OR (approbation_type = 2 AND start_date < :timestamp_now AND (end_date > :timestamp_now OR end_date = 0)))';
		$parameters = array(
			'id_keyword' => $this->get_keyword()->get_id(),
			'authorized_categories' => $authorized_categories,
			'timestamp_now' => $now->get_timestamp()
		);
		
		$page = AppContext::get_request()->get_getint('page', 1);
		$pagination = $this->get_pagination($condition, $parameters, $page);
		
		$result = PersistenceContext::get_querier()->select('SELECT smallads.*, member.*
		FROM '. SmalladsSetup::$smallads_table .' smallads
		LEFT JOIN '. DB_TABLE_KEYWORDS_RELATIONS .' relation ON relation.module_id = \'smallads\' AND relation.id_in_module = smallads.id 
		LEFT JOIN '. DB_TABLE_MEMBER .' member ON member.user_id = smallads.author_user_id
		' . $condition . '
		ORDER BY top_list_enabled DESC, smallads.creation_date DESC
		LIMIT :number_items_per_page OFFSET :display_from', array_merge($parameters, array(
			'number_items_per_page' => $pagination->get_number_items_per_page(),
			'display_from' => $pagination->get_display_from()
		)));
		
		$number_columns_display_smallads = $smallads_config->get_number_columns_display_smallads();
		$this->tpl->put_all(array(
			'C_DISPLAY_BLOCK_TYPE' => $smallads_config->get_display_type() == SmalladsConfig::DISPLAY_BLOCK,
			'C_DISPLAY_LIST_TYPE' => $smallads_config->get_display_type() == SmalladsConfig::DISPLAY_LIST,
			'C_DISPLAY_CONDENSED_CONTENT' => $smallads_config->get_display_condensed_enabled(),
			
			'C_SMALLADS_NO_AVAILABLE' => $result->get_rows_count() == 0,
			'C_PAGINATION' => $pagination->has_several_pages(),
			
			'PAGINATION' => $pagination->display(),
			'C_SEVERAL_COLUMNS' => $number_columns_display_smallads > 1,
			'NUMBER_COLUMNS' => $number_columns_display_smallads,
			'CATEGORY_NAME' => $this->get_keyword()->get_name()
		));
		
		while ($row = $result->fetch())
		{
			$smallad = new Smallad();
			$smallad->set_properties($row);
			
		}
		$result->dispose();
	}
	
	private function get_keyword()
	{
		if ($this->keyword === null)
		{
			$rewrited_name = AppContext::get_request()->get_getstring('tag', '');
			if (!empty($rewrited_name))
			{
				try {
					$this->keyword = SmalladsService::get_keywords_manager()->get_keyword('WHERE rewrited_name=:rewrited_name', array('rewrited_name' => $rewrited_name));
				} catch (RowNotFoundException $e) {
					$error_controller = PHPBoostErrors::unexisting_page();
					DispatchManager::redirect($error_controller);
				}
			}
			else
			{
				$error_controller = PHPBoostErrors::unexisting_page();
				DispatchManager::redirect($error_controller);
			}
		}
		return $this->keyword;
	}
	
	private function get_pagination($condition, $parameters, $page)
	{
		$result = PersistenceContext::get_querier()->select_single_row_query('SELECT COUNT(*) AS nbr_smallads
		FROM '. SmalladsSetup::$smallads_table .' smallads
		LEFT JOIN '. DB_TABLE_KEYWORDS_RELATIONS .' relation ON relation.module_id = \'smallads\' AND relation.id_in_module = smallads.id 
		' . $condition, $parameters);

		$pagination = new ModulePagination($page, $result['nbr_smallads'], (int)SmalladsConfig::load()->get_number_smallads_per_page());
		$pagination->set_url(SmalladsUrlBuilder::display_tag($this->get_keyword()->get_rewrited_name(), '%d'));
		
		if ($pagination->current_page_is_empty() && $page > 1)
        {
			$error_controller = PHPBoostErrors::unexisting_page();
			DispatchManager::redirect($error_controller);
		}
		
		return $pagination;
	}
	
	private function check_authorizations()
	{
		if (!SmalladsAuthorizationsService::check_authorizations()->read())
		{
			$error_controller = PHPBoostErrors::user_not_authorized();
	   		DispatchManager::redirect($error_controller);
		}
	}
	
	private function generate_response()
	{
		$response = new SiteDisplayResponse($this->tpl);
		
		$graphical_environment = $response->get_graphical_environment();
		$graphical_environment->set_page_title($this->get_keyword()->get_name(), $this->lang['smallads']);
		$graphical_environment->get_seo_meta_data()->set_description(StringVars::replace_vars($this->lang['smallads.seo.description.tag'], array('subject' => $this->get_keyword()->get_name())));
		$graphical_environment->get_seo_meta_data()->set_canonical_url(SmalladsUrlBuilder::display_tag($this->get_keyword()->get_rewrited_name(), AppContext::get_request()->get_getint('page', 1)));
		
		$breadcrumb = $graphical_environment->get_breadcrumb();
		$breadcrumb->add($this->lang['smallads'], SmalladsUrlBuilder::home());
		$breadcrumb->add($this->get_keyword()->get_name(), SmalladsUrlBuilder::display_tag($this->get_keyword()->get_rewrited_name(), AppContext::get_request()->get_getint('page', 1)));
		
		return $response;
	}
}
?>