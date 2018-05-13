<?php
/**
 *
 * Clash points. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Simon boelsch, https://github.com/NomisMomis
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace nomismomis\clashpoints\acp;

/**
 * Clash points ACP module info.
 */
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\nomismomis\clashpoints\acp\main_module',
			'title'		=> 'ACP_POINTS_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_DEMO',
					'auth'	=> 'ext_nomismomis/clashpoints && acl_a_board',
					'cat'	=> array('ACP_POINTS_TITLE')
				),
			),
		);
	}
}
