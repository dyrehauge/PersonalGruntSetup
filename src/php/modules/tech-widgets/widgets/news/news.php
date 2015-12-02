<?php

/*
Widget Name: Morning Train Display News
Description: Morning Train Display News
Author: Morning Train Technologies ApS
Author URI: http://morningtrain.dk
*/

class MTT_News_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'mtt-news-widget',
			__('Morning Train Display News'),
			array(
				'description' => __('Display News and how many')
				),
			array(
				),
			array(
				'Numberofnews' => array(
					'type' => 'text',
					'label' => __('How many News do you want to show'),
					)
				),
			plugin_dir_path(__FILE__)
			);
	}

	public function get_template_name($instance) {
		return 'news-template';
	}

	public function get_style_name($instance) {
		return '';
	}
}

siteorigin_widget_register('mtt-news-widget', __FILE__, 'MTT_News_Widget');