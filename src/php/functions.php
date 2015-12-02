<?php
function theme_name_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

function Footer_widgets_init() {
	register_sidebar(array(
		'name' => __( 'Footer About', 'foabout' ),
		'id' => 'sidebar-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		));

	register_sidebar(array(
		'name' => __( 'Footer Contact', 'focon' ),
		'id' => 'sidebar-2',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		));
}
add_action( 'init', 'Footer_widgets_init' );

add_theme_support( 'html5', array( 'search-form' ) );

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'speakers',
		array(
			'labels' => array(
				'name' => __( 'Speakers' ),
				'singular_name' => __( 'Speaker' )
				),
			'public' => true,
			'has_archive' => false,
			'exclude_from_search' => true, 
			'supports' => array('title', 'editor', 'thumbnail')
			)
		);

	register_post_type( 'goldmembers',
		array(
			'labels' => array(
				'name' => __( 'Goldmembers #1' ),
				'singular_name' => __( 'goldmember' )
				),
			'public' => true,
			'has_archive' => false,
			'exclude_from_search' => true, 
			'supports' => array('title', 'editor', 'thumbnail')
			)
		);

	register_post_type( 'silvermembers',
		array(
			'labels' => array(
				'name' => __( 'Silvermembers #2' ),
				'singular_name' => __( 'silvermember' )
				),
			'public' => true,
			'has_archive' => false,
			'exclude_from_search' => true, 
			'supports' => array('title', 'editor', 'thumbnail')
			)
		);

	register_post_type( 'personale',
		array(
			'labels' => array(
				'name' => __( 'personale' ),
				'singular_name' => __( 'personale' )
				),
			'public' => true,
			'has_archive' => false,
			'exclude_from_search' => true, 
			'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
			)
		);
}


function get_news_text(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 140);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	return $excerpt;
}




//remove emojis

function disable_wp_emojicons() {

  // all actions related to emojis
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
	add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

require_once get_template_directory() . '/modules/tech-widgets/class.tech-widgets.php';

new Scanview_Widgets(); 


//add theme

/* ----------------------------------------------------------
Declare vars
------------------------------------------------------------- */
$themename = "Techonology Denmark";
$shortname = "td";
	// This will enqueue the Media Uploader script
wp_enqueue_script( 'jquery' );
/*---------------------------------------------------
add settings page to menu
----------------------------------------------------*/
function add_settings_page() {
	add_menu_page( __( 'Techonology Denmarks' .' Panel' ), __( 'Techonology Denmarks' .' Panel' ), 'manage_options', 'settings', 'theme_settings_page');
	wp_enqueue_style( 'adminstyle', get_template_directory_uri() . '/adminstyle.css' );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );

}

/*---------------------------------------------------
add actions
----------------------------------------------------*/
add_action( 'admin_menu', 'add_settings_page' );

/* ---------------------------------------------------------
Declare options
----------------------------------------------------------- */

$theme_options = array (

	array( "name" => $themename." Options",
		"type" => "title"),

/* ---------------------------------------------------------
General section
----------------------------------------------------------- */
array( "name" => "General",
	"type" => "section"),
array( "type" => "open"),

array( "name" => "Logo",
	"desc" => "Enter the website logo",
	"id" => $shortname."_page_logo",
	"type" => "file",
	"std" => "Techonology Denmark Onepage"),

array( "name" => "Logo Dark",
	"desc" => "Enter the website logo dark version",
	"id" => $shortname."_page_logo_Dark",
	"type" => "file",
	"std" => "Techonology Denmark Onepage"),

array( "name" => "Custom Favicon",
	"desc" => "Upload favicon",
	"id" => $shortname."_favicon",
	"type" => "file",
	"std" => get_bloginfo('url') ."/img/favicon.ico"),

array( "type" => "close"),
);



/*---------------------------------------------------
Theme Panel Output
----------------------------------------------------*/
function theme_settings_page() {
	wp_enqueue_media();
	global $themename,$theme_options;
	$i=0;
	$message=''; 
	if ('save' == $_REQUEST['action']) {

		foreach ($theme_options as $value) {
			update_option($value['id'], $_REQUEST[$value['id']]);
		}

		foreach ($theme_options as $value) {
			if(isset( $_REQUEST[$value['id']])) {
				update_option( $value['id'], $_REQUEST[$value['id']]);
			}
			else {
				delete_option($value['id']);
			}
		}
		$message='saved';
	}
	else if( 'reset' == $_REQUEST['action']) {

		foreach ($theme_options as $value) {
			delete_option( $value['id']);
		}
		$message='reset'; 		 
	}

	?>
	<div class="wrap options_wrap">
		<span class="options"></span>
		<h2><?php _e('Theme Options') //your admin panel title ?></h2>
		<?php
		if ( $message=='saved') echo '<div class="updated settings-error" id="setting-error-settings_updated"> 
			<p>'.$themename.' settings saved.</strong></p></div>';
		if ( $message=='reset') echo '<div class="updated settings-error" id="setting-error-settings_updated"> 
			<p>'.$themename.' settings reset.</strong></p></div>';
		?>
		<ul>
			<li>Theme version 1.0 </li>
		</ul>
		<div class="content_options">
			<form method="post">

				<?php foreach ($theme_options as $value) {

					switch ($value['type']){

						case "open": ?>
						<?php break;

						case "close": ?>
					</div>
				</div><br />
				<?php break;

				case "title": ?>
				<div class="message">
					<p>To easily use the <?php echo $themename;?> theme options, you can use the options below.</p>
				</div>
				<?php break;

				case 'text': ?>
				<div class="option_input option_text">
					<label for="<?php echo $value['id']; ?>">
						<?php echo $value['name']; ?></label>
						<input id="" type="<?php echo $value['type']; ?>" name="<?php echo $value['id']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
						<small><?php echo $value['desc']; ?></small>
						<div class="clearfix"></div>
					</div>
					<?php break;

					case 'textarea': ?>
					<div class="option_input option_textarea">
						<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
						<textarea name="<?php echo $value['id']; ?>" rows="" cols=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
						<small><?php echo $value['desc']; ?></small>
						<div class="clearfix"></div>
					</div>
					<?php break;

					case 'select': ?>
					<div class="option_input option_select">
						<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
						<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
							<?php foreach ($value['options'] as $option) { ?>
							<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option>
							<?php } ?>
						</select>
						<small><?php echo $value['desc']; ?></small>
						<div class="clearfix"></div>
					</div>
					<?php break;

					case "checkbox": ?>
					<div class="option_input option_checkbox">
						<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
						<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
						<input id="<?php echo $value['id']; ?>" type="checkbox" name="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> /> 
						<small><?php echo $value['desc']; ?></small>
						<div class="clearfix"></div>
					</div>
					<?php break;

					case "file": ?>
					<div class="option_input option_file">
						<label for="image_url"><?php echo $value['name']; ?></label>
						<input type="text" value="<?php echo get_settings($value['id']); ?>" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" class="regular-text <?php echo $value['id']; ?>">
						<input class="getfileidhidden" type="hidden" value="<?php echo $value['id']; ?>">
						<input type="button" name="upload-btn" id="upload-btn" class="upload-btn button-secondary" value="<?php echo $value['desc']; ?>">
						<div class="clearfix"></div>
					</div>	
					<?php break;

					case "section": 
					$i++; ?>
					<div class="input_section">
						<div class="input_title">

							<h3><span class="dashicons dashicons-admin-generic"></span><span class="theadmintitle"><?php echo $value['name']; ?></span></h3>
							<span class="submit"><input name="save<?php echo $i; ?>" type="submit" class="button-primary" value="Save changes" /></span>
							<div class="clearfix"></div>
						</div>
						<div class="all_options">
							<?php break;

						}
					}?>
					<input type="hidden" name="action" value="save" />
				</form>
				<form method="post">
					<p class="submit">
						<input name="reset" type="submit" value="Reset" />
						<input type="hidden" name="action" value="reset" />
					</p>
				</form>
			</div>
			<div class="footer-credit">
				<p>This theme was made by <a title="Morningtrain ApS" href="http://morningtrain.dk" target="_blank" >Morningtrain ApS</a>.</p>
			</div>
		</div>


		<?php } ?>
