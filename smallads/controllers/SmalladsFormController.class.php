<?php
/*##################################################
 *		                         SmalladsFormController.class.php
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

class SmalladsFormController extends ModuleController
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
	private $common_lang;
	
	private $smallad;
	private $is_new_smallad;
	
	public function execute(HTTPRequestCustom $request)
	{
		$this->init();
		
		$this->check_authorizations();
		
		$this->build_form($request);
		
		$tpl = new StringTemplate('# INCLUDE FORM #');
		$tpl->add_lang($this->lang);
		
		if ($this->submit_button->has_been_submited() && $this->form->validate())
		{
			$this->save();
			$this->redirect();
		}
		
		$tpl->put('FORM', $this->form->display());
		
		return $this->generate_response($tpl);
	}
	
	private function init()
	{
		$this->lang = LangLoader::get('common', 'smallads');
		$this->common_lang = LangLoader::get('common');
	}
	
	private function build_form(HTTPRequestCustom $request)
	{
		$form = new HTMLForm(__CLASS__);
		
		$fieldset = new FormFieldsetHTML('smallads', $this->lang['smallads']);
		$form->add_fieldset($fieldset);
		
		$fieldset->add_field(new FormFieldSimpleSelectChoice('smallad_type', $this->lang['smallads.type'], $this->get_smallad()->get_smallad_type(),
				array(
					new FormFieldSelectChoiceOption($this->lang['smallads.status.sell'], Smallad::SELL),
					new FormFieldSelectChoiceOption($this->lang['smallads.status.buy'], Smallad::BUY),
					new FormFieldSelectChoiceOption($this->lang['smallads.status.give'], Smallad::GIVE),
					new FormFieldSelectChoiceOption($this->lang['smallads.status.exchange'], Smallad::EXCHANGE),
				)
			));
		
		$fieldset->add_field(new FormFieldTextEditor('name', $this->common_lang['form.name'], $this->get_smallad()->get_name(), array('required' => true)));

		if (!$this->is_contributor_member())
		{
			$fieldset->add_field(new FormFieldCheckbox('personalize_rewrited_name', $this->common_lang['form.rewrited_name.personalize'], $this->get_smallad()->rewrited_name_is_personalized(), array(
			'events' => array('click' => '
			if (HTMLForms.getField("personalize_rewrited_name").getValue()) {
				HTMLForms.getField("rewrited_name").enable();
			} else { 
				HTMLForms.getField("rewrited_name").disable();
			}'
			))));
			
			$fieldset->add_field(new FormFieldTextEditor('rewrited_name', $this->common_lang['form.rewrited_name'], $this->get_smallad()->get_rewrited_name(), array(
				'description' => $this->common_lang['form.rewrited_name.description'], 
				'hidden' => !$this->get_smallad()->rewrited_name_is_personalized()
			), array(new FormFieldConstraintRegex('`^[a-z0-9\-]+$`i'))));
		}
		
		$search_category_children_options = new SearchCategoryChildrensOptions();
		$search_category_children_options->add_authorizations_bits(Category::READ_AUTHORIZATIONS);
		$search_category_children_options->add_authorizations_bits(Category::CONTRIBUTION_AUTHORIZATIONS);
		$fieldset->add_field(SmalladsService::get_categories_manager()->get_select_categories_form_field('id_cat', $this->common_lang['form.category'], $this->get_smallad()->get_id_cat(), $search_category_children_options));
		
		$fieldset->add_field(new FormFieldRichTextEditor('contents', $this->common_lang['form.contents'], $this->get_smallad()->get_contents(), array('rows' => 15, 'required' => true)));
		
		$fieldset->add_field(new FormFieldCheckbox('enable_short_contents', $this->lang['smallads.form.short_contents.enabled'], $this->get_smallad()->get_short_contents_enabled(), 
			array('description' => StringVars::replace_vars($this->lang['smallads.form.short_contents.enabled.description'], array('number' => SmalladsConfig::load()->get_number_character_to_cut())), 'events' => array('click' => '
			if (HTMLForms.getField("enable_short_contents").getValue()) {
				HTMLForms.getField("short_contents").enable();
			} else { 
				HTMLForms.getField("short_contents").disable();
			}'))
		));
		
		$fieldset->add_field(new FormFieldRichTextEditor('short_contents', $this->lang['smallads.form.short_contents'], $this->get_smallad()->get_short_contents(), array(
			'hidden' => !$this->get_smallad()->get_short_contents_enabled(),
			'description' => !SmalladsConfig::load()->get_display_condensed_enabled() ? '<span class="color-alert">' . $this->lang['smallads.form.short_contents.description'] . '</span>' : ''
		)));

		$options_details = new FormFieldsetHTML('options_details', $this->lang['smallads.options.details']);
		$form->add_fieldset($options_details);

		$options_details->add_field(new FormFieldDecimalNumberEditor('price', $this->lang['smallads.form.price'], $this->get_smallad()->get_price(),
			array('min' => 0, 'step' => 0.01)
		));

		$options_details->add_field(new FormFieldUploadFile('picture', $this->lang['smallads.form.picture'], $this->get_smallad()->get_picture()->relative()));

		$options_details->add_field(new SmalladsFormFieldSelectCarousels('carousels', $this->lang['smallads.form.carousels'], $this->get_smallad()->get_carousels()));

		$options_details->add_field(new SmalladsFormFieldSelectColors('colors', $this->lang['smallads.form.colors'], $this->get_smallad()->get_colors()));

		$options_details->add_field(new SmalladsFormFieldSelectDetails('details', $this->lang['smallads.form.details'], $this->get_smallad()->get_details()));

		$options_details->add_field(new FormFieldTextEditor('smallad_city', $this->lang['smallads.form.city'], $this->get_smallad()->get_smallad_city()));

		$options_details->add_field(new FormFieldNumberEditor('smallad_zipcode', $this->lang['smallads.form.zipcode'], $this->get_smallad()->get_smallad_zipcode()));

		$options_details->add_field(SmalladsService::get_keywords_manager()->get_form_field($this->get_smallad()->get_id(), 'keywords', $this->common_lang['form.keywords'], array('description' => $this->common_lang['form.keywords.description'])));
		
		if (!$this->is_contributor_member())
		{
			$publication_fieldset = new FormFieldsetHTML('publication', $this->common_lang['form.approbation']);
			$form->add_fieldset($publication_fieldset);

			$publication_fieldset->add_field(new FormFieldDateTime('creation_date', $this->common_lang['form.date.creation'], $this->get_smallad()->get_creation_date(),
				array('required' => true)
			));
			
			$publication_fieldset->add_field(new FormFieldSimpleSelectChoice('approbation_type', $this->common_lang['form.approbation'], $this->get_smallad()->get_approbation_type(),
				array(
					new FormFieldSelectChoiceOption($this->common_lang['form.approbation.not'], Smallad::NOT_APPROVAL),
					new FormFieldSelectChoiceOption($this->common_lang['form.approbation.now'], Smallad::APPROVAL_NOW),
					new FormFieldSelectChoiceOption($this->common_lang['status.approved.date'], Smallad::APPROVAL_DATE),
				),
				array('events' => array('change' => '
				if (HTMLForms.getField("approbation_type").getValue() == 2) {
					jQuery("#' . __CLASS__ . '_start_date_field").show();
					HTMLForms.getField("end_date_enable").enable();
				} else { 
					jQuery("#' . __CLASS__ . '_start_date_field").hide();
					HTMLForms.getField("end_date_enable").disable();
				}'))
			));
			
			$publication_fieldset->add_field(new FormFieldDateTime('start_date', $this->common_lang['form.date.start'], ($this->get_smallad()->get_start_date() === null ? new Date() : $this->get_smallad()->get_start_date()), array('hidden' => ($this->get_smallad()->get_approbation_type() != Smallad::APPROVAL_DATE))));
			
			$publication_fieldset->add_field(new FormFieldCheckbox('end_date_enable', $this->common_lang['form.date.end.enable'], $this->get_smallad()->end_date_enabled(), array(
			'hidden' => ($this->get_smallad()->get_approbation_type() != Smallad::APPROVAL_DATE),
			'events' => array('click' => '
			if (HTMLForms.getField("end_date_enable").getValue()) {
				HTMLForms.getField("end_date").enable();
			} else { 
				HTMLForms.getField("end_date").disable();
			}'
			))));
			
			$publication_fieldset->add_field(new FormFieldDateTime('end_date', $this->common_lang['form.date.end'], ($this->get_smallad()->get_end_date() === null ? new Date() : $this->get_smallad()->get_end_date()), array('hidden' => !$this->get_smallad()->end_date_enabled())));
			
			$publication_fieldset->add_field(new FormFieldCheckbox('top_list', $this->lang['smallads.form.top.list'], $this->get_smallad()->get_top_list_enabled()));
			
			$publication_fieldset->add_field(new FormFieldCheckbox('sold', $this->lang['smallads.form.sold'], $this->get_smallad()->get_sold_enabled()));
		
		}
		
		$this->build_contribution_fieldset($form);
		
		$fieldset->add_field(new FormFieldHidden('referrer', $request->get_url_referrer()));
		
		$this->submit_button = new FormButtonDefaultSubmit();
		$form->add_button($this->submit_button);
		$form->add_button(new FormButtonReset());
		
		$this->form = $form;
	}
	
	private function build_contribution_fieldset($form)
	{
		if ($this->get_smallad()->get_id() === null && $this->is_contributor_member())
		{
			$fieldset = new FormFieldsetHTML('contribution', LangLoader::get_message('contribution', 'user-common'));
			$fieldset->set_description(MessageHelper::display($this->lang['smallads.form.contribution.explain'] . ' ' . LangLoader::get_message('contribution.explain', 'user-common'), MessageHelper::WARNING)->render());
			$form->add_fieldset($fieldset);
			
			$fieldset->add_field(new FormFieldRichTextEditor('contribution_description', LangLoader::get_message('contribution.description', 'user-common'), '', array('description' => LangLoader::get_message('contribution.description.explain', 'user-common'))));
		}
	}
	
	private function is_contributor_member()
	{
		return (!SmalladsAuthorizationsService::check_authorizations()->write() && SmalladsAuthorizationsService::check_authorizations()->contribution());
	}
	
	private function get_smallad()
	{
		if ($this->smallad === null)
		{
			$id = AppContext::get_request()->get_getint('id', 0);
			if (!empty($id))
			{
				try {
					$this->smallad = SmalladsService::get_smallad('WHERE id=:id', array('id' => $id));
				} catch (RowNotFoundException $e) {
					$error_controller = PHPBoostErrors::unexisting_page();
					DispatchManager::redirect($error_controller);
				}
			}
			else
			{
				$this->is_new_smallad = true;
				$this->smallad = new Smallad();
				$this->smallad->init_default_properties(AppContext::get_request()->get_getint('id_category', Category::ROOT_CATEGORY));
			}
		}
		return $this->smallad;
	}
	
	private function check_authorizations()
	{
		$smallad = $this->get_smallad();
		
		if ($smallad->get_id() === null)
		{
			if (!$smallad->is_authorized_to_add())
			{
				$error_controller = PHPBoostErrors::user_not_authorized();
				DispatchManager::redirect($error_controller);
			}
		}
		else
		{
			if (!$smallad->is_authorized_to_edit())
			{
				$error_controller = PHPBoostErrors::user_not_authorized();
				DispatchManager::redirect($error_controller);
			}
		}
		if (AppContext::get_current_user()->is_readonly())
		{
			$controller = PHPBoostErrors::user_in_read_only();
			DispatchManager::redirect($controller);
		}
	}
	
	private function save()
	{
		$smallad = $this->get_smallad();
		
		$smallad->set_smallad_type($this->form->get_value('smallad_type')->get_raw_value());
		$smallad->set_name($this->form->get_value('name'));
		$smallad->set_id_cat($this->form->get_value('id_cat')->get_raw_value());
		$smallad->set_contents($this->form->get_value('contents'));
		$smallad->set_short_contents(($this->form->get_value('enable_short_contents') ? $this->form->get_value('short_contents') : ''));
		$smallad->set_picture(new Url($this->form->get_value('picture')));
				
		$smallad->set_price($this->form->get_value('price'));
		$smallad->set_carousels($this->form->get_value('carousels'));
		$smallad->set_colors($this->form->get_value('colors'));
		$smallad->set_details($this->form->get_value('details'));
		$smallad->set_smallad_city((string)$this->form->get_value('smallad_city'));
		$smallad->set_smallad_zipcode($this->form->get_value('smallad_zipcode'));
		
		if ($this->is_contributor_member())
		{
			if ($smallad->get_id() === null)
				$smallad->set_creation_date(new Date());
			
			$smallad->set_rewrited_name(Url::encode_rewrite($smallad->get_name()));
			$smallad->set_approbation_type(Smallad::NOT_APPROVAL);
			$smallad->clean_start_and_end_date();
		}
		else
		{
			$smallad->set_creation_date($this->form->get_value('creation_date'));
			$rewrited_name = $this->form->get_value('rewrited_name', '');
			$rewrited_name = $this->form->get_value('personalize_rewrited_name') && !empty($rewrited_name) ? $rewrited_name : Url::encode_rewrite($smallad->get_name());
			$smallad->set_rewrited_name($rewrited_name);
			$smallad->set_top_list_enabled($this->form->get_value('top_list'));
			$smallad->set_sold_enabled($this->form->get_value('sold'));
			$smallad->set_approbation_type($this->form->get_value('approbation_type')->get_raw_value());
			if ($smallad->get_approbation_type() == Smallad::APPROVAL_DATE)
			{
				$config = SmalladsConfig::load();
				$deferred_operations = $config->get_deferred_operations();
				
				$old_start_date = $smallad->get_start_date();
				$start_date = $this->form->get_value('start_date');
				$smallad->set_start_date($start_date);
				
				if ($old_start_date !== null && $old_start_date->get_timestamp() != $start_date->get_timestamp() && in_array($old_start_date->get_timestamp(), $deferred_operations))
				{
					$key = array_search($old_start_date->get_timestamp(), $deferred_operations);
					unset($deferred_operations[$key]);
				}
				
				if (!in_array($start_date->get_timestamp(), $deferred_operations))
					$deferred_operations[] = $start_date->get_timestamp();
				
				if ($this->form->get_value('end_date_enable'))
				{
					$old_end_date = $smallad->get_end_date();
					$end_date = $this->form->get_value('end_date');
					$smallad->set_end_date($end_date);
					
					if ($old_end_date !== null && $old_end_date->get_timestamp() != $end_date->get_timestamp() && in_array($old_end_date->get_timestamp(), $deferred_operations))
					{
						$key = array_search($old_end_date->get_timestamp(), $deferred_operations);
						unset($deferred_operations[$key]);
					}
					
					if (!in_array($end_date->get_timestamp(), $deferred_operations))
						$deferred_operations[] = $end_date->get_timestamp();
				}
				else
				{
					$smallad->clean_end_date();
				}
				
				$config->set_deferred_operations($deferred_operations);
				SmalladsConfig::save();
			}
			else
			{
				$smallad->clean_start_and_end_date();
			}
		}
		
		if ($smallad->get_id() === null)
		{
			$smallad->set_author_user(AppContext::get_current_user());
			$id_smallad = SmalladsService::add($smallad);
		}
		else
		{
			$id_smallad = $smallad->get_id();
			SmalladsService::update($smallad);
		}
		
		$this->contribution_actions($smallad, $id_smallad);
		
		SmalladsService::get_keywords_manager()->put_relations($id_smallad, $this->form->get_value('keywords'));
		
		Feed::clear_cache('smallads');
	}
	
	private function contribution_actions(Smallad $smallad, $id_smallad)
	{
		if ($smallad->get_id() === null)
		{
			if ($this->is_contributor_member())
			{
				$contribution = new Contribution();
				$contribution->set_id_in_module($id_smallad);
				$contribution->set_description(stripslashes($this->form->get_value('contribution_description')));
				$contribution->set_entitled($smallad->get_name());
				$contribution->set_fixing_url(SmalladsUrlBuilder::edit_smallad($id_smallad)->relative());
				$contribution->set_poster_id(AppContext::get_current_user()->get_id());
				$contribution->set_module('smallads');
				$contribution->set_auth(
					Authorizations::capture_and_shift_bit_auth(
						SmalladsService::get_categories_manager()->get_heritated_authorizations($smallad->get_id_cat(), Category::MODERATION_AUTHORIZATIONS, Authorizations::AUTH_CHILD_PRIORITY),
						Category::MODERATION_AUTHORIZATIONS, Contribution::CONTRIBUTION_AUTH_BIT
					)
				);
				ContributionService::save_contribution($contribution);
			}
		}
		else
		{
			$corresponding_contributions = ContributionService::find_by_criteria('smallads', $id_smallad);
			if (count($corresponding_contributions) > 0)
			{
				$smallads_contribution = $corresponding_contributions[0];
				$smallads_contribution->set_status(Event::EVENT_STATUS_PROCESSED);

				ContributionService::save_contribution($smallads_contribution);
			}
		}
		$smallad->set_id($id_smallad);
	}
	
	private function redirect()
	{
		$smallad = $this->get_smallad();
		$category = $smallad->get_category();

		if ($this->is_new_smallads && $this->is_contributor_member() && !$smallad->is_visible())
		{
			DispatchManager::redirect(new UserContributionSuccessController());
		}
		elseif ($smallad->is_visible())
		{
			if ($this->is_new_smallads)
				AppContext::get_response()->redirect(SmalladsUrlBuilder::display_smallads($category->get_id(), $category->get_rewrited_name(), $smallad->get_id(), $smallad->get_rewrited_name()), StringVars::replace_vars($this->lang['smallads.message.success.add'], array('name' => $smallad->get_name())));
			else
				AppContext::get_response()->redirect(($this->form->get_value('referrer') ? $this->form->get_value('referrer') : SmalladsUrlBuilder::display_smallads($category->get_id(), $category->get_rewrited_name(), $smallad->get_id(), $smallad->get_rewrited_name())), StringVars::replace_vars($this->lang['smallads.message.success.edit'], array('name' => $smallad->get_name())));
		}
		else
		{
			if ($this->is_new_smallad)
				AppContext::get_response()->redirect(SmalladsUrlBuilder::display_pending_smallad(), StringVars::replace_vars($this->lang['smallads.message.success.add'], array('name' => $smallad->get_name())));
			else
				AppContext::get_response()->redirect(($this->form->get_value('referrer') ? $this->form->get_value('referrer') : SmalladsUrlBuilder::display_pending_smallad()), StringVars::replace_vars($this->lang['smallads.message.success.edit'], array('name' => $smallad->get_name())));
		}
	}
	
	private function generate_response(View $tpl)
	{
		$smallad= $this->get_smallad();
		
		$response = new SiteDisplayResponse($tpl);
		$graphical_environment = $response->get_graphical_environment();
		
		$breadcrumb = $graphical_environment->get_breadcrumb();
		$breadcrumb->add($this->lang['smallads'], SmalladsUrlBuilder::home());
		
		if ($this->get_smallad()->get_id() === null)
		{
			$graphical_environment->set_page_title($this->lang['smallads.add'], $this->lang['smallads']);
			$breadcrumb->add($this->lang['smallads.add'], SmalladsUrlBuilder::add_smallad($smallad->get_id_cat()));
			$graphical_environment->get_seo_meta_data()->set_description($this->lang['smallads.add']);
			$graphical_environment->get_seo_meta_data()->set_canonical_url(SmalladsUrlBuilder::add_smallad($smallad->get_id_cat()));
		}
		else
		{
			$graphical_environment->set_page_title($this->lang['smallads.edit'], $this->lang['smallads']);
			$graphical_environment->get_seo_meta_data()->set_description($this->lang['smallads.edit']);
			$graphical_environment->get_seo_meta_data()->set_canonical_url(SmalladsUrlBuilder::edit_smallad($smallad->get_id()));
			
			$categories = array_reverse(SmalladsService::get_categories_manager()->get_parents($smallad->get_id_cat(), true));
			foreach ($categories as $id => $category)
			{
				if ($category->get_id() != Category::ROOT_CATEGORY)
					$breadcrumb->add($category->get_name(), SmalladsUrlBuilder::display_category($category->get_id(), $category->get_rewrited_name()));
			}
			$category = $smallad->get_category();
			$breadcrumb->add($smallad->get_name(), SmalladsUrlBuilder::display_smallad($category->get_id(), $category->get_rewrited_name(), $smallad->get_id(), $smallad->get_rewrited_name()));
			$breadcrumb->add($this->lang['smallads.edit'], SmalladsUrlBuilder::edit_smallad($smallad->get_id()));
		}
		
		return $response;
	}
}
?>