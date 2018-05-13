<?php
/**
 *
 * blank. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Simon boelsch, https://github.com/NomisMomis
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace nomismomis\stuff\mcp;

/**
 * blank MCP module info.
 */
class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\nomismomis\clashpoints\mcp\main_module',
			'title'		=> 'MCP_DEMO_TITLE',
			'modes'		=> array(
				'front'	=> array(
					'title'	=> 'MCP_DEMO',
					'auth'	=> 'ext_nomismomis/clashpoints',
					'cat'	=> array('MCP_DEMO_TITLE')
				),
			),
		);
	}
}
