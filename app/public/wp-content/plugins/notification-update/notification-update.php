<?php
/*
Plugin Name: Notification-update
Description: A plugin for myCred
Version: 1.0.0 
Author: Soufiane Kabdani
 */

add_filter( 'mycred_setup_hooks', 'register_my_custom_hook' );
function register_my_custom_hook( $installed ) {
    $installed['hook_id'] = array(
        'title'       => __( 'Hook Custom', 'textdomain' ),
        'description' => __( 'Hook Description', 'textdomain' ),
        'callback'    => array( 'Hook_Class' )
    );
    return $installed;
}
function connexion() {
    $host = "localhost";
    $dbname = "local";
    $login = "root";
    $mdp = "root";
    try{
        $db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=UTF8',$login,$mdp);
        return $db;
    } 
    catch(Exception $error) {
        die ("Error : ". $error->getMessage());
    }
}

function notice(){
    if(!function_exists('mycred_add_new_notice')){
        echo 'myCred is not installed!';
    }else{

        wp_enqueue_style("style",plugin_dir_url(__FILE__)."/assets/css/styleNotif.css");
        $message = "
            <div class='notif'>
            </div>"
            ;

        mycred_add_new_notice(array('user_id' => wp_get_current_user()->ID, 'message' => $message));
    }

}

add_action('buddyboss_theme_begin_content', 'notice',1);

?>

