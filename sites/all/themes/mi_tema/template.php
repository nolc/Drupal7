<?php

	function mi_tema_preprocess_page(&$vars, $hook)
	{
		if (isset($vars['main_menu'])) {
				return $vars['primary_nav'] = theme('links__system_main_menu', array(
				'links' => $vars['main_menu'],
				'attributes' => array(
				'class' => array('links', 'main-menu'),
			),
				'heading' => array(
				'text' => t('Main menu'),
				'level' => 'h2',
				'class' => array('element-invisible'),
			)
			));
		}
		else
			return $vars['primary_nav'] = FALSE;
	}