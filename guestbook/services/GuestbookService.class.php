<?php
/*##################################################
 *                        GuestbookService.class.php
 *                            -------------------
 *   begin                : November 30, 2012
 *   copyright            : (C) 2012 Julien BRISWALTER
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

 /**
 * @author Julien BRISWALTER <j1.seth@phpboost.com>
 */
class GuestbookService
{
	private static $db_querier;
	
	public static function __static()
	{
		self::$db_querier = PersistenceContext::get_querier();
	}
	
	public static function count($condition = '')
	{
		return self::$db_querier->count(GuestbookSetup::$guestbook_table, $condition);
	}
	
	public static function add(GuestbookMessage $message)
	{
		$result = self::$db_querier->insert(GuestbookSetup::$guestbook_table, $message->get_properties());
		
		return $result->get_last_inserted_id();
	}
	
	public static function update(GuestbookMessage $message)
	{
		self::$db_querier->update(GuestbookSetup::$guestbook_table, $message->get_properties(), 'WHERE id=:id', array('id' => $message->get_id()));
	}
	
	public static function delete($condition, array $parameters)
	{
		self::$db_querier->delete(GuestbookSetup::$guestbook_table, $condition, $parameters);
	}
	
	public static function get_message($condition, array $parameters)
	{
		$row = self::$db_querier->select_single_row_query('SELECT member.*, guestbook.*, guestbook.login as glogin
		FROM ' . GuestbookSetup::$guestbook_table . ' guestbook 
		LEFT JOIN ' . DB_TABLE_MEMBER . ' member ON member.user_id = guestbook.user_id
		' . $condition, $parameters);
		
		$message = new GuestbookMessage();
		$message->set_properties($row);
		return $message;
	}
	
	public static function get_last_message_timestamp_from_user($user_id)
	{
		return self::$db_querier->get_column_value(GuestbookSetup::$guestbook_table, 'MAX(timestamp) as timestamp', 'WHERE user_id=:user_id', array(
			'user_id' => $user_id
		));
	}
}
?>