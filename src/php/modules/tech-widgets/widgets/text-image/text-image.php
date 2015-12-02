<?php

/*
Widget Name: Morning Train Text Image
Description: Morning Train Text Image
Author: Morning Train Technologies ApS
Author URI: http://morningtrain.dk
*/

class MTT_Text_Image_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'mtt-text-image-widget',
			__('Morning Train Text Image'),
			array(
				'description' => __('Display a text with an image to the left or right.')
			),
			array(
			),
			array(
				'title' => array(
					'type' => 'text',
					'label' => __('Banner Title'),
				),
				'sub_title' => array(
					'type' => 'text',
					'label' => __('Banner Sub Title'),
				),
				'text' => array(
					'type' => 'tinymce',
					'label' => __('Banner Text'),
					'rows' => 10
				),
				'image_position' => array(
					'type' => 'radio',
					'label' => __('Position of the image'),
					'default' => 'right',
					'options' => array(
						'left' => __('Left'),
						'right' => __('Right'),
					)
				),

				'colorbox' => array(
					'type' => 'select',
					'label' => __('Color of the box'),
					'default' => 'white',
					'options' => array(
						'white' => __('White'),
						'black' => __('Black'),
						'blue' => __('Blue'),
						'red' => __('Red'),
						'yellow' => __('Yellow'),
					)
				),
				'image' => array(
					'type' => 'media',
					'label' => __('Choose an image'),
					'choose' => __('Choose image'),
					'update' => __('Set image'),
					'library' => 'image',
					'fallback' => true
				),
				'button' => array(
					'type' => 'section',
					'label' => __('Button'),
					'hide' => false,
					'fields' => array(
						'button_text' => array(
							'type' => 'text',
							'label' => __('Button Text'),
						),
						'button_url' => array(
							'type' => 'link',
							'label' => __('Button Link')
						)
					)
				),
				'cover' => array(
					'type' => 'checkbox',
					'label' => __('Udfyld baggrund'),
					'default' => true
				)
			),
			plugin_dir_path(__FILE__)
		);
	}
		
    public function get_template_name($instance) {
        return 'text-image-template';
    }

    public function get_style_name($instance) {
        return '';
    }
}

siteorigin_widget_register('mtt-text-image-widget', __FILE__, 'MTT_Text_Image_Widget');