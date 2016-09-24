<?php
/*##################################################
 *                             AbstractRichCategoriesFormController.class.php
 *                            -------------------
 *   begin                : February 07, 2013
 *   copyright            : (C) 2013 K�vin MASSY
 *   email                : kevin.massy@phpboost.com
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
 * @package {@package}
 * @author K�vin MASSY
 * @desc
 */
abstract class AbstractRichCategoriesFormController extends AbstractCategoriesFormController
{	
	protected function get_options_fields(FormFieldset $fieldset)
	{
		$fieldset->add_field(new FormFieldRichTextEditor('description', $this->common_lang['form.description'], $this->get_category()->get_description()));
		
		$fieldset->add_field(new FormFieldUploadPictureFile('image', $this->common_lang['form.picture'], $this->get_category()->get_image()->relative()));
	}
	
	protected function set_properties()
	{
		parent::set_properties();
		$this->get_category()->set_description($this->form->get_value('description'));
		$this->get_category()->set_image(new Url($this->form->get_value('image')));
	}
}
?>