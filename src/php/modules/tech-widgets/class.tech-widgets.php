<?php

class Scanview_Widgets {
	
	public function __construct() {
		$this->define_hooks();
	}
	
	public function define_hooks() {
		add_filter('siteorigin_widgets_widget_folders', array($this, 'add_widget_folder'));
	}
	
	public function add_widget_folder($folders){
		$folders[] = dirname(__FILE__) . '/widgets/';
		return $folders;
	}
		
}