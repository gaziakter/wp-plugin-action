<?php
/**
 * Plugin Name:       WP Plugin Action
 * Plugin URI:        https://likablesolutions.com/plugin/wp-column/
 * Description:       WordPress admin notice management
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Gazi Akter
 * Author URI:        https://gaziakter.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://classysystem.com/
 * Text Domain:       plugin-action
 * Domain Path:       /languages
 */


// Create Menu
 function wpc_activation_function(){
    add_menu_page( 
        __("Action Menu","plugin-action"),
        __("Action Menu","plugin-action"),
        "manage_options",
        "action_url",
        "page_actiovation_function" //callback function
    );
 }
 add_action('admin_menu','wpc_activation_function');


//callback function
 function page_actiovation_function() {
    ?>
    <h2>Active Menu</h2>
    <?php
 }

 // Plugin activation url link
 function activate_link_function($plugin){
    if(plugin_basename( __FILE__ )==$plugin){
        wp_redirect( admin_url( "admin.php?page=action_url" ) );
        die();
    }
 }

 add_action("activated_plugin", "activate_link_function");
