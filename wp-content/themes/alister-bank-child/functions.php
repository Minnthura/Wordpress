<?php
/**
 * @package 	WordPress
 * @subpackage 	Alister Bank Child
 * @version		1.0.0
 * 
 * Child Theme Functions File
 * Created by CMSMasters
 * 
 */


function alister_bank_child_enqueue_styles() {
    wp_enqueue_style('alister-bank-child-style', get_stylesheet_uri(), array(), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'alister_bank_child_enqueue_styles', 11);
?>