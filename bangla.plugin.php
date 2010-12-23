<?php
/*
  Plugin Name: BanglKB
  Plugin URI: http://ekushey.org/?page/web_input_manager
  Description: Adds Bangla typing system in WordPress Post/Page and Comment section. BanglKB is released from ekushey (http://ekushey.org)
  Author: S. M. Ibrahim Lavlu & The HungryCoder (http://hungrycoder.xenexbd.com)
  Version: 3.2.3
  Author URI: http://www.lavluda.com
 */
add_action('init', 'wp_banglakb_loadjs');

function wp_banglakb_loadjs() {

    wp_enqueue_script('jquery');
    wp_enqueue_script('banglakb-engine', plugin_dir_url(__FILE__) . 'js/engine.js', array('jquery'));
    wp_enqueue_script('banglakb-driver-phonetic', plugin_dir_url(__FILE__) . 'js/driver.phonetic.js', array('jquery', 'banglakb-engine'));
    wp_enqueue_script('banglakb-driver-probhat', plugin_dir_url(__FILE__) . 'js/driver.probhat.js', array('jquery', 'banglakb-engine'));
    wp_enqueue_script('banglakb', plugin_dir_url(__FILE__) . 'js/banglakb.js', array('jquery', 'banglakb-engine'));
}

add_action('admin_footer', 'wp_banglakb');

function wp_banglakb() {
    echo '<script>banglakb_addpostbuttons();</script>';
}


add_filter ( 'comment_form_field_comment', 'wp_banglakb_comments' );


function wp_banglakb_comments($contents){
    $contents .="
    <input type='button' value='phonetic' onclick=\"banglakb_public_comment(phonetic);\"></input>
    <input type='button' value='probhat' onclick=\"banglakb_public_comment(probhat);\"></input>
    <input type='button' value='english' onclick='banglakb_toggle();'></input>
    ";
    return $contents;

}

