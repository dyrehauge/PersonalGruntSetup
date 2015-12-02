<?php

/*
Widget Name: Morning Train Display words
Description: Morning Train Display words
Author: Morning Train Technologies ApS
Author URI: http://morningtrain.dk
*/

class MTT_wordchange_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'mtt-wordchange-widget',
			__('Morning Train Display words'),
			array(
				'description' => __('Display words and how many')
				),
			array(
				),
			array(
				'wordchange' => array(
					'type' => 'repeater',
					'label' => __('word'),
					'item_name' => __('word'),
					'item_label' => array(
						'selector' => "[id*='counters_title']",
						'update_event' => 'change',
						'counter_method' => 'val'
						),
					'fields' => array(
						'counter_title' => array(
							'type' => 'text',
							'label' => __('Titel (Eks. fantastisk)'),
							)
						)
					)
				),
			plugin_dir_path(__FILE__)
			);
	}

	public function get_template_name($instance) {
		return 'wordchange-template';
	}

	public function get_style_name($instance) {
		return '';
	}
}

siteorigin_widget_register('mtt-wordchange-widget', __FILE__, 'MTT_wordchange_Widget');