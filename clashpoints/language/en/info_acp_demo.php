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
	'ACP_POINTS_TITLE'			=> 'Clash points',
	'POINTS_PERTOPIC'			=> 'Points earned per topic',
	'POINTS_PERTOPIC_EXPLAIN'			=> 'This is the number of points a user will earn for submitting a topic',
	'POINTS_PERREPLY'			=> 'Points earned per reply',
	'POINTS_PERREPLY_EXPLAIN'			=> 'This is the number of points a user will earn for submitting a reply to a topic',
	'POINTS_ON_REG_EXPLAIN'			=> 'This is the number of points given to newly registered users',
	'POINTS_ON_REG'			=> 'Points for registered users',
	'POINTS_NAME'			=> 'points',
'ACP_DEMO_TITLE'			=> 'Clash points',
));
