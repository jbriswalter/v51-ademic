<?php
/*##################################################
 *		                         AdminSmalladsConfigController.class.php
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

class AdminSmalladsConfigController extends AdminModuleController
{
	/**
	 * @var HTMLForm
	 */
	private $form;
	/**
	 * @var FormButtonSubmit
	 */
	private $submit_button;
	
	private $lang;
	private $admin_common_lang;
	
	/**
	 * @var SmalladsConfig
	 */
	private $config;
	
	public function execute(HTTPRequestCustom $request)
	{
		$this->init();
		
		$this->build_form();
		
		$tpl = new StringTemplate('# INCLUDE MSG # # INCLUDE FORM #');
		$tpl->add_lang($this->lang);
		
		if ($this->submit_button->has_been_submited() && $this->form->validate())
		{
			$this->save();
			$this->form->get_field_by_id('display_descriptions_to_guests')->set_hidden(!$this->config->get_display_condensed_enabled());
			$this->form->get_field_by_id('number_character_to_cut')->set_hidden(!$this->config->get_display_condensed_enabled());
			$tpl->put('MSG', MessageHelper::display(LangLoader::get_message('message.success.config', 'status-messages-common'), MessageHelper::SUCCESS, 5));
		}
		
		$tpl->put('FORM', $this->form->display());
		
		return new AdminSmalladsDisplayResponse($tpl, $this->lang['module_config_title']);
	}
	
	private function init()
	{
		$this->lang = LangLoader::get('common', 'smallads');
		$this->admin_common_lang = LangLoader::get('admin-common');
		$this->config = SmalladsConfig::load();
	}
	
	private function build_form()
	{
		$form = new HTMLForm(__CLASS__);
		
		$fieldset = new FormFieldsetHTML('config', $this->admin_common_lang['configuration']);
		$form->add_fieldset($fieldset);
		
		$fieldset->add_field(new FormFieldNumberEditor('number_smallads_per_page', $this->admin_common_lang['config.items_number_per_page'], $this->config->get_number_smallads_per_page(), 
			array('min' => 1, 'max' => 50, 'required' => true),
			array(new FormFieldConstraintIntegerRange(1, 50))
		));
		
		$fieldset->add_field(new FormFieldNumberEditor('number_columns_display_smallads', $this->lang['admin.config.number_columns_display_smallads'], $this->config->get_number_columns_display_smallads(), 
			array('min' => 1, 'max' => 4, 'required' => true),
			array(new FormFieldConstraintIntegerRange(1, 4))
		));
		
		$fieldset->add_field(new FormFieldCheckbox('display_condensed', $this->lang['admin.config.display_condensed'], $this->config->get_display_condensed_enabled(), array(
		'events' => array('click' => '
			if (HTMLForms.getField("display_condensed").getValue()) {
				HTMLForms.getField("display_descriptions_to_guests").enable();
				HTMLForms.getField("number_character_to_cut").enable();
			} else {
				HTMLForms.getField("display_descriptions_to_guests").disable();
				HTMLForms.getField("number_character_to_cut").disable();
			}'
		))));
		
		$fieldset->add_field(new FormFieldCheckbox('display_descriptions_to_guests', $this->lang['admin.config.display_descriptions_to_guests'], $this->config->are_descriptions_displayed_to_guests(),
			array('hidden' => !$this->config->get_display_condensed_enabled())
		));
		
		$fieldset->add_field(new FormFieldNumberEditor('number_character_to_cut', $this->lang['admin.config.number_character_to_cut'], $this->config->get_number_character_to_cut(), 
			array('min' => 20, 'max' => 1000, 'required' => true, 'hidden' => !$this->config->get_display_condensed_enabled()), 
			array(new FormFieldConstraintIntegerRange(20, 1000)
		)));
		
		$fieldset->add_field(new FormFieldCheckbox('smallads_suggestions_enabled', $this->lang['admin.config.smallads_suggestions_enabled'], $this->config->get_smallads_suggestions_enabled()));
		
		$fieldset->add_field(new FormFieldCheckbox('author_displayed', $this->admin_common_lang['config.author_displayed'], $this->config->get_author_displayed()));
		
		$fieldset->add_field(new FormFieldSimpleSelectChoice('display_type', $this->admin_common_lang['config.display_type'], $this->config->get_display_type(),
			array(
				new FormFieldSelectChoiceOption($this->admin_common_lang['config.display_type.block'], SmalladsConfig::DISPLAY_BLOCK),
				new FormFieldSelectChoiceOption($this->admin_common_lang['config.display_type.list'], SmalladsConfig::DISPLAY_LIST),
			)
		));
		
		$fieldset_options = new FormFieldsetHTML('options_fieldset',  $this->lang['admin.config.display.options']);
		$form->add_fieldset($fieldset_options);
		
		$fieldset_options->add_field(new FormFieldCheckbox('send_author_email', $this->lang['admin.config.send.author.email'], $this->config->get_send_author_email()
		));
		
		$common_lang = LangLoader::get('common');
		$fieldset_authorizations = new FormFieldsetHTML('authorizations_fieldset', $common_lang['authorizations'],
			array('description' => $this->admin_common_lang['config.authorizations.explain'])
		);
		$form->add_fieldset($fieldset_authorizations);
		
		$auth_settings = new AuthorizationsSettings(array(
			new ActionAuthorization($common_lang['authorizations.read'], Category::READ_AUTHORIZATIONS),
			new ActionAuthorization($common_lang['authorizations.write'], Category::WRITE_AUTHORIZATIONS),
			new ActionAuthorization($common_lang['authorizations.contribution'], Category::CONTRIBUTION_AUTHORIZATIONS),
			new ActionAuthorization($common_lang['authorizations.moderation'], Category::MODERATION_AUTHORIZATIONS),
			new ActionAuthorization($common_lang['authorizations.categories_management'], Category::CATEGORIES_MANAGEMENT_AUTHORIZATIONS),
		));
		$auth_setter = new FormFieldAuthorizationsSetter('authorizations', $auth_settings);
		$auth_settings->build_from_auth_array($this->config->get_authorizations());
		$fieldset_authorizations->add_field($auth_setter);
		
		$this->submit_button = new FormButtonDefaultSubmit();
		$form->add_button($this->submit_button);
		$form->add_button(new FormButtonReset());
		
		$this->form = $form;
	}
	
	private function save()
	{
		$this->config->set_number_smallads_per_page($this->form->get_value('number_smallads_per_page'));
		$this->config->set_number_columns_display_smallads($this->form->get_value('number_columns_display_smallads'));
		$this->config->set_display_condensed_enabled($this->form->get_value('display_condensed'));
		
		if ($this->config->get_display_condensed_enabled())
		{
			if ($this->form->get_value('display_descriptions_to_guests'))
			{
				$this->config->display_descriptions_to_guests();
			}
			else
			{
				$this->config->hide_descriptions_to_guests();
			}
		}
		
		$this->config->set_number_character_to_cut($this->form->get_value('number_character_to_cut', $this->config->get_number_character_to_cut()));
		$this->config->set_smallads_suggestions_enabled($this->form->get_value('smallads_suggestions_enabled'));
		$this->config->set_author_displayed($this->form->get_value('author_displayed'));
		$this->config->set_display_type($this->form->get_value('display_type')->get_raw_value());
		$this->config->set_send_author_email($this->form->get_value('send_author_email'));
		$this->config->set_authorizations($this->form->get_value('authorizations')->build_auth_array());
		SmalladsConfig::save();
		SmalladsService::get_categories_manager()->regenerate_cache();
	}
}
?>