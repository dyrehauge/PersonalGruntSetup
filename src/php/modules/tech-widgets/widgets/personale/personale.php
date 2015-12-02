<?php

/*
Widget Name: Morning Train Display Personale
Description: Morning Train Display Personale
Author: Morning Train Technologies ApS
Author URI: http://morningtrain.dk
*/

class MTT_Personale_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'mtt-personale-widget',
			__('Morning Train Display Personale'),
			array(
				'description' => __('Display Personale and how many')
				),
			array(
				),
			array(
				'Numberofpersonale' => array(
					'type' => 'text',
					'label' => __('How many Personale do you want to show'),
					)
				),
			plugin_dir_path(__FILE__)
			);
	}

	public function get_template_name($instance) {
		return 'personale-template';
	}

	public function get_style_name($instance) {
		return '';
	}
}

siteorigin_widget_register('mtt-personale-widget', __FILE__, 'MTT_Personale_Widget');