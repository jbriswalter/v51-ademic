<?php
/*##################################################
 *		               SmalladsDisplaySmalladsController.class.php
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

class SmalladsDisplaySmalladsController extends ModuleController
{	
	private $lang;
	private $tpl;
	
	private $smallad;
	private $submit_button;
	private $config;
	
	private function init()
	{
		$this->lang = LangLoader::get('common', 'smallads');
		$this->tpl = new FileTemplate('smallads/SmalladsDisplaySmalladsController.tpl');
		$this->tpl->add_lang($this->lang);
		$this->config = SmalladsConfig::load();
	}
	
	public function execute(HTTPRequestCustom $request)
	{
		$this->check_authorizations();
		
		$this->init();
		
		$this->build_view();
		
		$this->build_form();
		
		$this->count_number_view();
		
		if ($this->submit_button->has_been_submited() && $this->form->validate())
		{
			$result = $this->send_mail();
			$this->tpl->put_all(array(
				'C_MAIL_SENT' => true,
				'C_SUCCESS' => empty($result),
				'ERROR' => $result
			));
		}
		
		return $this->generate_response();
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
				$this->smallad = new Smallad();
		}
		return $this->smallad;
	}
	
	private function count_number_view()
	{
		$this->smallad->set_number_view($this->smallad->get_number_view($this->smallad) + 1);
		SmalladsService::update_number_view($this->smallad);
	}
	
	private function build_view()
	{
		$smallad = $this->get_smallad();
		$smallads_config = SmalladsConfig::load();
		$category = $smallad->get_category();
		
		$this->tpl->put_all(array_merge($smallad->get_array_tpl_vars(), array(
			'NOT_VISIBLE_MESSAGE' => MessageHelper::display(LangLoader::get_message('element.not_visible', 'status-messages-common'), MessageHelper::WARNING)
		)));
		
		$this->build_category_menu_view();
		$this->build_carousels_view($smallad);
		$this->build_colors_view($smallad);
		$this->build_details_view($smallad);
		$this->build_keywords_view($smallad);
		$this->build_suggested_smallads($smallad);
		$this->build_navigation_links($smallad);		
		
		
		//Calcul du delai avant suppression si checkbox "vendu" cochée + suppression de l'annonce
		if($smallad->get_sold_enabled() == true && !$smallad->is_authorized_to_delete()) // conditions de suppression (cb cochée + autorisation de suppression)
		{
			$now = new Date(); //initialisation de la date quand on coche la cb
			$start_delay = $now->get_timestamp(); //definition du début de delai
			$end_delay = $start_delay + 20; //definition de fin de delai (debut + 24h)
			$delay = $end_delay - $start_delay; //calcul de la difference entre début et fin
			
			if($delay == 0) //si difference = 0
			{
				SmalladsService::delete('WHERE id=:id', array('id' => $smallad->get_id())); //on supprime l'annonce en front
				SmalladsService::get_keywords_manager()->delete_relations($smallad->get_id()); //on supprime la relation mot clé/annonce		
				PersistenceContext::get_querier()->delete(DB_TABLE_EVENTS, 'WHERE module=:module AND id_in_module=:id', array('module' => 'smallads', 'id' => $smallad->get_id())); //on supprime l'annonce dans la base de données
				Feed::clear_cache('smallads'); //on actualise le feed
			}
			
		}
	}
	
	private function build_form()
	{		
		$smallad = $this->get_smallad();
		$title = $smallad->get_name();
		
		$form = new HTMLForm(__CLASS__, '', false);
		$form->set_css_class('answer-email');
		
		$fieldset = new FormFieldsetHTML('answer_email', $this->lang['answer.email']);
		$form->add_fieldset($fieldset);
		
		$fieldset->set_description($this->lang['answer.form.cookies']);

		$recipient_mail = new FormFieldMailEditor('answer_recipient_mail', $this->lang['answer.form.recipient.mail'], '', array('hidden' => true));
		$fieldset->add_field($recipient_mail);
		
		$fieldset->add_field(new FormFieldTextEditor('answer_form_title', $this->lang['answer.form.title'], $title, array('hidden' => true)));

		$sender_mail = new FormFieldMailEditor('answer_form_email', $this->lang['answer.form.email'], '', array('required' => true));
		$fieldset->add_field($sender_mail);
		
		$fieldset->add_field(new FormFieldTextEditor('answer_form_lastname', $this->lang['answer.form.lastname'], '', array('required' => true), array(new FormFieldConstraintNotEmpty())));
		
		$fieldset->add_field(new FormFieldTextEditor('answer_form_firstname', $this->lang['answer.form.firstname'], ''));
		
		$fieldset->add_field(new FormFieldTelEditor('answer_form_phone', $this->lang['answer.form.phone'], ''));
		
		$fieldset->add_field(new FormFieldMultiLineTextEditor('answer_message', $this->lang['answer.form.message'], '', array('required' => true), array(new FormFieldConstraintNotEmpty())
		));
		
		$fieldset->add_field(new FormFieldCaptcha('answer_form_captcha'));
		
		$this->submit_button = new FormButtonDefaultSubmit();
		$form->add_button($this->submit_button);
		$form->add_button(new FormButtonReset());
		$form->add_constraint(new FormConstraintFieldsInequality($recipient_mail, $sender_mail));
		
		
		$this->form = $form;
		$this->tpl->put('ANSWER_EMAIL', $this->form->display());
	}
	
	private function send_mail()
	{
		$smallad_mail = $this->get_smallad();
		$title = $smallad_mail->get_name();
		$url_path = GeneralConfig::load()->get_site_url();
		$site_path = GeneralConfig::load()->get_site_path();
		$path_id = $smallad_mail->get_id();
		$path_name = $smallad_mail->get_rewrited_name();
		$cat_id = $smallad_mail->get_category()->get_id();
		$cat_name = $smallad_mail->get_category()->get_rewrited_name();
		$link = $url_path . $site_path . '/smallads/' . $cat_id . '-' . $cat_name . '/' . $path_id . '-' . $path_name;
		
		$answer_mail = $this->form->get_value('answer_form_email');
		$interest = $this->lang['is.interested.in'];
		
		$message = FormatingHelper::second_parse($this->form->get_value('answer_message'));
		
		$content = array(
			$this->form->get_value('answer_form_firstname'), // 0
			$this->form->get_value('answer_form_lastname'), // 1
			$this->lang['is.interested.in'], // 2
			$title, //3
			$link, // 4
			
			$this->lang['answer.form.phone'], // 5
			$this->form->get_value('answer_form_phone'), // 6
			
			$this->lang['answer.form.email'], // 7
			$this->form->get_value('answer_form_email'), // 8
			
			$message, // 9
		);
		
		$content_merged = $content[0] . " " . $content[1] . " " . $content[2] . " " . $content[3] . "\r\n" . $content[4] . "\r\n\r\n" . $content[5] . " " . $content[6] . "\r\n" . $content[7] . " " . $content[8] . "\r\n\r\n" . $content[9];
		
		$mailer = new DefaultMailService();
		$author_email = $smallad_mail->get_author_user()->get_email();

		$mail = new Mail();
		if ($this->config->get_send_author_email() == true)
		{
			$mail->add_recipient($author_email);
		}else {
			$mail->add_recipient(MailServiceConfig::load()->get_default_mail_sender(), Mail::SENDER_ADMIN);
		}
		
		$mail->set_sender($answer_mail);
        $mail->set_reply_to($answer_mail);
		$mail->set_subject($title);
		$mail->set_content($content_merged);		

		return $mailer->send($mail);
	}
	
	private function build_category_menu_view()
	{
		$result = PersistenceContext::get_querier()->select('SELECT id, name, rewrited_name
		FROM '. SmalladsSetup::$smallads_cats_table .'
		');
		
		while ($row = $result->fetch())
		{
			$this->tpl->assign_block_vars('category_menu', array(
				'ID' => $row['id'],
				'PATH' => SmalladsUrlBuilder::display_category($row['id'], $row['rewrited_name'])->absolute(),
				'NAME' => $row['name'],
			));
		}
		$result->dispose();
	}
	
	private function build_carousels_view(Smallad $smallad)
	{
		$carousels = $smallad->get_carousels();
		$nbr_carousels = count($carousels);
		$this->tpl->put('C_CAROUSELS', $nbr_carousels > 0);
		
		$i = 1;
		foreach ($carousels as $name => $value)
		{
			$this->tpl->assign_block_vars('carousels', array(
				'NAME' => $name,
				'URL' => $value,
			));
			$i++;
		}
	}
	
	private function build_colors_view(Smallad $smallad)
	{
		$colors = $smallad->get_colors();
		$nbr_colors = count($colors);
		$this->tpl->put('C_COLORS', $nbr_colors > 0);
		
		$i = 1;
		foreach ($colors as $name => $value)
		{
			$this->tpl->assign_block_vars('colors', array(
				'NAME' => $name,
				'HEXA' => $value,
			));
			$i++;
		}
	}
	
	private function build_details_view(Smallad $smallad)
	{
		$details = $smallad->get_details();
		$nbr_details = count($details);
		$this->tpl->put('C_DETAILS', $nbr_details > 0);
		
		$i = 1;
		foreach ($details as $name => $value)
		{
			$this->tpl->assign_block_vars('details', array(
				'NAME' => $name,
				'TYPE' => $value,
			));
			$i++;
		}
	}
	
	private function build_keywords_view(Smallad $smallad)
	{
		$keywords = $smallad->get_keywords();
		$nbr_keywords = count($keywords);
		$this->tpl->put('C_KEYWORDS', $nbr_keywords > 0);

		$i = 1;
		foreach ($keywords as $keyword)
		{	
			$this->tpl->assign_block_vars('keywords', array(
				'C_SEPARATOR' => $i < $nbr_keywords,
				'NAME' => $keyword->get_name(),
				'URL' => SmalladsUrlBuilder::display_tag($keyword->get_rewrited_name())->rel(),
			));
			$i++;
		}
	}	
	
	private function build_suggested_smallads(Smallad $smallad)
	{
		$now = new Date();
		
		$result = PersistenceContext::get_querier()->select('
		SELECT id, name, id_category, rewrited_name, 
		(2 * FT_SEARCH_RELEVANCE(name, :search_content) + FT_SEARCH_RELEVANCE(contents, :search_content) / 3) AS relevance
		FROM ' . SmalladsSetup::$smallads_table . '
		WHERE (FT_SEARCH(name, :search_content) OR FT_SEARCH(contents, :search_content)) AND id <> :excluded_id
		AND (approbation_type = 1 OR (approbation_type = 2 AND start_date < :timestamp_now AND (end_date > :timestamp_now OR end_date = 0)))
		ORDER BY relevance DESC LIMIT 0, 10', array(
			'excluded_id' => $smallad->get_id(),
			'search_content' => $smallad->get_name() .','. $smallad->get_contents(),
			'timestamp_now' => $now->get_timestamp()
		));
		
		$this->tpl->put('C_SUGGESTED_SMALLADS', ($result->get_rows_count() > 0 && SmalladsConfig::load()->get_smallads_suggestions_enabled()));
		
		while ($row = $result->fetch())
		{
			$this->tpl->assign_block_vars('suggested', array(
				'NAME' => $row['name'],
				'URL' => SmalladsUrlBuilder::display_smallads($row['id_category'], SmalladsService::get_categories_manager()->get_categories_cache()->get_category($row['id_category'])->get_rewrited_name(), $row['id'], $row['rewrited_name'])->rel()
			));
		}
		$result->dispose();
	}
	
	private function build_navigation_links(Smallad $smallad)
	{
		$now = new Date();
		$timestamp_smallad = $smallad->get_creation_date()->get_timestamp();

		$result = PersistenceContext::get_querier()->select('
		(SELECT id, name, id_category, rewrited_name, \'PREVIOUS\' as type
		FROM '. SmalladsSetup::$smallads_table .'
		WHERE (approbation_type = 1 OR (approbation_type = 2 AND start_date < :timestamp_now AND (end_date > :timestamp_now OR end_date = 0))) AND creation_date < :timestamp_smallad AND id_category IN :authorized_categories ORDER BY creation_date DESC LIMIT 1 OFFSET 0)
		UNION
		(SELECT id, name, id_category, rewrited_name, \'NEXT\' as type
		FROM '. SmalladsSetup::$smallads_table .'
		WHERE (approbation_type = 1 OR (approbation_type = 2 AND start_date < :timestamp_now AND (end_date > :timestamp_now OR end_date = 0))) AND creation_date > :timestamp_smallad AND id_category IN :authorized_categories ORDER BY creation_date ASC LIMIT 1 OFFSET 0)
		', array(
			'timestamp_now' => $now->get_timestamp(),
			'timestamp_smallad' => $timestamp_smallad,
			'authorized_categories' => array($smallad->get_id_cat())
		));
		
		while ($row = $result->fetch())
		{
			$this->tpl->put_all(array(
				'C_SMALLADS_NAVIGATION_LINKS' => true,
				'C_'. $row['type'] .'_SMALLADS' => true,
				$row['type'] . '_SMALLADS' => $row['name'],
				'U_'. $row['type'] .'_SMALLADS' => SmalladsUrlBuilder::display_smallad($row['id_category'], SmalladsService::get_categories_manager()->get_categories_cache()->get_category($row['id_category'])->get_rewrited_name(), $row['id'], $row['rewrited_name'])->rel(),
			));
		}
		$result->dispose();
	}
	
	private function check_authorizations()
	{
		$smallad = $this->get_smallad();
		
		$not_authorized = !SmalladsAuthorizationsService::check_authorizations($smallad->get_id_cat())->moderation() && (!SmalladsAuthorizationsService::check_authorizations($smallad->get_id_cat())->write() && $smallad->get_author_user()->get_id() != AppContext::get_current_user()->get_id());
		
		switch ($smallad->get_approbation_type()) {
			case Smallad::APPROVAL_NOW:
				if (!SmalladsAuthorizationsService::check_authorizations($smallad->get_id_cat())->read() && $not_authorized)
				{
					$error_controller = PHPBoostErrors::user_not_authorized();
					DispatchManager::redirect($error_controller);
				}
			break;
			case Smallad::NOT_APPROVAL:
				if ($not_authorized)
				{
					$error_controller = PHPBoostErrors::user_not_authorized();
					DispatchManager::redirect($error_controller);
				}
			break;
			case Smallad::APPROVAL_DATE:
				if (!$smallad->is_visible() && $not_authorized)
				{
					$error_controller = PHPBoostErrors::user_not_authorized();
					DispatchManager::redirect($error_controller);
				}
			break;
			default:
				$error_controller = PHPBoostErrors::unexisting_page();
				DispatchManager::redirect($error_controller);
			break;
		}
	}
	
	private function generate_response()
	{
		$category = $this->get_smallad()->get_category();
		$response = new SiteDisplayResponse($this->tpl);
		
		$graphical_environment = $response->get_graphical_environment();
		$graphical_environment->set_page_title($this->get_smallad()->get_name(), $this->lang['smallads']);
		$graphical_environment->get_seo_meta_data()->set_description($this->get_smallad()->get_short_contents());
		$graphical_environment->get_seo_meta_data()->set_canonical_url(SmalladsUrlBuilder::display_smallad($category->get_id(), $category->get_rewrited_name(), $this->get_smallad()->get_id(), $this->get_smallad()->get_rewrited_name()));
		
		$breadcrumb = $graphical_environment->get_breadcrumb();
		$breadcrumb->add($this->lang['smallads'], SmalladsUrlBuilder::home());
		
		$categories = array_reverse(SmalladsService::get_categories_manager()->get_parents($this->get_smallad()->get_id_cat(), true));
		foreach ($categories as $id => $category)
		{
			if ($category->get_id() != Category::ROOT_CATEGORY)
				$breadcrumb->add($category->get_name(), SmalladsUrlBuilder::display_category($category->get_id(), $category->get_rewrited_name()));
		}
		$breadcrumb->add($this->get_smallad()->get_name(), SmalladsUrlBuilder::display_smallad($category->get_id(), $category->get_rewrited_name(), $this->get_smallad()->get_id(), $this->get_smallad()->get_rewrited_name()));
		
		return $response;
	}
}
?>
