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
 * Clash points ACP module.
 */
class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$user->add_lang_ext('nomismomis/clashpoints', 'common');
		$this->tpl_name = 'acp_demo_body';
		$this->page_title = $user->lang('ACP_POINTS_TITLE');
		add_form_key('clashkey');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('clashkey'))
			{
				trigger_error('FORM_INVALID', E_USER_WARNING);
			}

			$config->set('acme_demo_goodbye', $request->variable('acme_demo_goodbye', 0));

			trigger_error($user->lang('ACP_DEMO_SETTING_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,

		));
	}
}
