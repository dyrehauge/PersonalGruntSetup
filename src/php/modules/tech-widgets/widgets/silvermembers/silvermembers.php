<?php

/*
Widget Name: Morning Train Display Silvermembers
Description: Morning Train Display Silvermembers
Author: Morning Train Technologies ApS
Author URI: http://morningtrain.dk
*/

class MTT_Silvermembers_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'mtt-silvermembers-widget',
			__('Morning Train Display Silvermembers'),
			array(
				'description' => __('Display Silvermembers and how many')
				),
			array(
				),
			array(
				'Numberofsilvermembers' => array(
					'type' => 'text',
					'label' => __('How many Silvermembers do you want to show'),
					)
				),
			plugin_dir_path(__FILE__)
			);
	}

	public function get_template_name($instance) {
		return 'silvermembers-template';
	}

	public function get_style_name($instance) {
		return '';
	}
}

siteorigin_widget_register('mtt-silvermembers-widget', __FILE__, 'MTT_Silvermembers_Widget');