<?php
/**
 *
 * Clash points. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Simon boelsch, https://github.com/NomisMomis
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace nomismomis\clashpoints\ucp;

/**
 * Clash points UCP module info.
 */
class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\nomismomis\clashpoints\ucp\main_module',
			'title'		=> 'UCP_DEMO_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'UCP_DEMO',
					'auth'	=> 'ext_nomismomis/clashpoints',
					'cat'	=> array('UCP_DEMO_TITLE')
				),
			),
		);
	}
}
