<?php
/*##################################################
 *		                         common.php
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

 ####################################################
 #                     English                      #
 ####################################################

$lang['module_config_title'] = 'Joboffers configuration';

$lang['joboffers'] = 'Job offers';
$lang['joboffers.add'] = 'Add a job offer';
$lang['joboffers.edit'] = 'Edit the job offer';
$lang['joboffers.pending'] = 'Pending job offers';
$lang['joboffers.manage'] = 'Manage job offers';
$lang['joboffers.management'] = 'Job offers management';

$lang['joboffers.seo.description.root'] = 'All website :site job offers.';
$lang['joboffers.seo.description.tag'] = 'All job offers on :subject.';
$lang['joboffers.seo.description.pending'] = 'All pending job offers.';

$lang['joboffers.form.short_contents'] = 'Job offer short content';
$lang['joboffers.form.short_contents.description'] = 'For the short content of the job offer is displayed, please activate the option in the module configuration';
$lang['joboffers.form.short_contents.enabled'] = 'Personalize job offer short content';
$lang['joboffers.form.short_contents.enabled.description'] = 'If unchecked, the job offer is automatically cut to :number characters and formatting of the text deleted.';
$lang['joboffers.form.contribution.explain'] = 'You are not authorized to create a job offer, however you can contribute by submitting one.';

//Administration
$lang['admin.config.number_columns_display_joboffers'] = 'Number columns to display job offers';
$lang['admin.config.display_condensed'] = 'Display the condensed job offer instead of the all job offer';
$lang['admin.config.display_descriptions_to_guests'] = 'Display condensed job offer to guests if they don\'t have read authorization';
$lang['admin.config.number_character_to_cut'] = 'Caracters number to cut the job offer';
$lang['admin.config.joboffers_suggestions_enabled'] = 'Enable suggestions display';

//Feed name
$lang['feed.name'] = 'News of the Job offers';

//Messages
$lang['joboffers.message.success.add'] = 'The job offer <b>:name</b> has been added';
$lang['joboffers.message.success.edit'] = 'The job offer <b>:name</b> has been modified';
$lang['joboffers.message.success.delete'] = 'The job offer <b>:name</b> has been deleted';
?>