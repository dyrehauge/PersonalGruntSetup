<?php

/*
Widget Name: Morning Train Display Goldmembers
Description: Morning Train Display Goldmembers
Author: Morning Train Technologies ApS
Author URI: http://morningtrain.dk
*/

class MTT_Goldmembers_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'mtt-goldmembers-widget',
			__('Morning Train Display Goldmembers'),
			array(
				'description' => __('Display Goldmembers and how many')
				),
			array(
				),
			array(
				'Numberofgoldmembers' => array(
					'type' => 'text',
					'label' => __('How many Goldmembers do you want to show'),
					)
				),
			plugin_dir_path(__FILE__)
			);
	}

	public function get_template_name($instance) {
		return 'goldmembers-template';
	}

	public function get_style_name($instance) {
		return '';
	}
}

siteorigin_widget_register('mtt-goldmembers-widget', __FILE__, 'MTT_Goldmembers_Widget');