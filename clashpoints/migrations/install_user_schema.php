<?php
/**
 *
 * Clash points. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Simon boelsch, https://github.com/NomisMomis
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace nomismomis\clashpoints\migrations;

class install_user_schema extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return $this->db_tools->sql_column_exists($this->table_prefix . 'users', 'user_acme');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v314');
	}


		public function update_schema()
		{
			return array(
				'add_tables'		=> array(
					$this->table_prefix . 'score_values'	=> array(
						'COLUMNS'		=> array(
							'reg_points'			=> array('INT', 0),
							'forum_reply'			=> array('INT', 0),
							'forum_topic'			=> array('INT', 0),
						),

					),
				),
				'add_columns'	=> array(
					$this->table_prefix . 'users'			=> array(
						'user_score'				=> array('INT', 0),
					),
				),
			);
		}


	public function revert_schema()
	{
		return array(
			'drop_columns'	=> array(
				$this->table_prefix . 'users'			=> array(
					'user_acme',
				),
			),
			'drop_tables'		=> array(
				$this->table_prefix . 'acme_demo',
			),
		);
	}
}
