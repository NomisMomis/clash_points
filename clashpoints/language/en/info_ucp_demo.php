<?php
/**
 *
 * Clash points. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Simon boelsch, https://github.com/NomisMomis
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'UCP_DEMO'				=> 'Settings',
	'UCP_DEMO_TITLE'		=> 'Demo Module',
	'UCP_DEMO_USER'			=> 'Acme user',
	'UCP_DEMO_USER_EXPLAIN'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
	'UCP_DEMO_SAVED'		=> 'Settings have been saved successfully!',

	'NOTIFICATION_TYPE_DEMO'	=> 'Use Acme demo notifications',
));
