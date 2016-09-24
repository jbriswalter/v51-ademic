<?php
/*##################################################
 *                          SmalladsModuleMiniMenu.class.php
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

class SmalladsModuleMiniMenu extends ModuleMiniMenu
{
	private $category;
	
	public function get_default_block()
	{
		return self::BLOCK_POSITION__LEFT;
	}
	
	public function admin_display()
	{
		return '';
	}
	
	public function get_menu_id()
	{
		return 'module-mini-smallads';
	}
	
	public function get_menu_title()
	{
		return LangLoader::get_message('module_title', 'common', 'smallads');
	}
	
	public function is_displayed()
	{
		return SmalladsAuthorizationsService::check_authorizations()->read();
	}
	
	public function get_menu_content()
	{
		$tpl = $this->get_content();
		
		$tpl->put('C_VERTICAL', $this->get_block() == Menu::BLOCK_POSITION__LEFT || $this->get_block() == Menu::BLOCK_POSITION__RIGHT);
		
		return $tpl->render();
	}
	
	public function get_content()
	{
		$tpl = new FileTemplate('smallads/SmalladsModuleMiniMenu.tpl');
		$tpl->add_lang(LangLoader::get('common', 'smallads'));
		
		$now = new Date();
		
		//Compte le nombre d'offre en respectant les autorisations des catégories
		$tpl->put_all(array(
			'NB_SMALLADS' => PersistenceContext::get_querier()->count(SmalladsSetup::$smallads_table)
		));
		
		//Récupère la dernière offre postée
		$querier = PersistenceContext::get_querier();
		$results = $querier->select('SELECT smallads.*, member.*, cat.rewrited_name AS rewrited_name_cat
			FROM '. SmalladsSetup::$smallads_table .' smallads
			LEFT JOIN ' . PREFIX . 'smallads_cats cat ON cat.id = smallads.id_category
			LEFT JOIN ' . DB_TABLE_MEMBER . ' member ON member.user_id = smallads.author_user_id
			WHERE (approbation_type = 1 OR (approbation_type = 2 AND start_date < :timestamp_now AND (end_date > :timestamp_now OR end_date = 0)))
			ORDER BY smallads.creation_date DESC
			LIMIT 1
			', array(
				'user_id' => AppContext::get_current_user()->get_id(),
				'timestamp_now' => $now->get_timestamp()
			));
	
		while($row = $results->fetch())
		{
			$smallads = new Smallad();
			$smallads->set_properties($row);
 
			$tpl->assign_block_vars('smallads_items', $smallads->get_array_tpl_vars());
		}
		
		return $tpl;
	}
	
	public function display()
	{
		if ($this->is_displayed())
		{
			if ($this->get_block() == Menu::BLOCK_POSITION__LEFT || $this->get_block() == Menu::BLOCK_POSITION__RIGHT)
			{
				$template = $this->get_template_to_use();
				MenuService::assign_positions_conditions($template, $this->get_block());
				$this->assign_common_template_variables($template);
				
				$template->put_all(array(
					'ID' => $this->get_menu_id(),
					'TITLE' => $this->get_menu_title(),
					'CONTENTS' => $this->get_menu_content()
				));
				
				return $template->render();
			}
			else
			{
				$tpl = $this->get_content();
				
				MenuService::assign_positions_conditions($tpl, $this->get_block());
				
				return $tpl->render();
			}
		}
		return '';
	}
}
?>
