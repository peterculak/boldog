<?php
/**
 * Copyright (c) 30/10/2016.
 * Theme Name: wpbucket-shortcodes
 * Author: wpbucket
 * Website: http://wordpressbucket.com/
 */

if (!function_exists('wpbucket_accordion')) {
    function wpbucket_accordion($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'accordion_style' => '1',
            'parent_id' => '',
            
        ), $atts));

       
        ob_start();

        if($accordion_style == '1'){
            $tab_class = 'gardener-working-tab';
        }else{
            $tab_class = 'gardener-working-tab3';
        }
        ?>
        <div class="<?php echo $tab_class; ?>">
            <div class="panel-group" id="<?php echo $atts['parent_id'];?>">
                <?php echo do_shortcode($content); ?>
            </div>
        </div>

        <?php

            $output = ob_get_clean(); 
            
            return $output;

    }
}