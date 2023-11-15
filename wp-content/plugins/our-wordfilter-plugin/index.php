<?php
/**
 * Plugin Name: Our Word Filter Plugin
 * Description: Replaces a list of words.
 * Version: 1.0
 * Author: Phuong Thao
 * Author URI: https://wordpress.org/documentation/
 */
if(!defined('ABSPATH')) exit;// Exit if accessed directly

class OurWordFilterPlugin{
    function __construct(){
        add_action('admin_menu',array($this,'ourMenu'));
    }
    function ourMenu(){
        $mainPageHook = add_menu_page('Words To Filter','Word Filter','manage_options','ourwordfilter',
        array($this,'wordFilterPage'),'dashicons-smiley',100);
        add_submenu_page('ourwordfilter','Words To Filter ','Word List',
        'manage_options','ourwordfilter',array($this,'wordFilterPage'));
        add_submenu_page('ourwordfilter','Words Filter Options','Options',
        'manage_options','word-filter-options',array($this,'optionsSubPage'));
        add_action("load-{$mainPageHook}",array($this,'mainPageAssets'));
    }
    function mainPageAssets(){
        wp_enqueue_style('filterAdminCss',plugin_dir_url(__FILE__).'styles.css');
    }
    function optionsSubPage(){

    }
    function handleForm(){
        if(wp_verify_nonce($_POST['ourNonce'],'saveFilterWords') AND current_user_can('mange_options')){
            update_option('plugin_words_to_filter',sanitize_text_field($_POST['plugin_words_to_filter'])); ?>
            <div class="updated">
                <p>Your filter words were saved</p>
            </div>
        <?php } else {?>
            <div class="error">
                <p>
                    Sorry, you do not have permission to perform that action.
                </p>
            </div>
        <?php }
    }
        
    function wordFilterPage(){?>
    <div class="wrap">
        <h1>Word Filter</h1>
        <?php if($_POST['justsubmitted'] == "true") $this->handleForm() ?>
        <form action="" method="POST">
            <?php wp_nonce_field('saveFilterWords','ourNonce') ?>
            <input type="hidden" name="justsubmitted" value="true">
            <label for="plugin_words_to_filter"><p>Enter a <strong>comma-separated</strong> 
            list of words to filter from your site's content</p></label>
        <div class="word-filter__flex-container">
            <textarea name="plugin_words_to_filter" id="plugin_words_to_filter" 
            placeholder="bad, mean, awful, horrible"><?php echo esc_textarea(get_option('plugin_words_to_filter')) ?></textarea>
        </div>
        <button type="submit" class="button button-primary" id="submit" name="submit">
            Save Changed</button>
        </form>
    </div>
    <?php }
}
$ourWordFilterPlugin = new OurWordFilterPlugin();