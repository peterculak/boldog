<?php
/**
 * Copyright (c) 30/10/2016.
 * Theme Name: wpbucket-shortcodes
 * Author: wpbucket
 * Website: http://wordpressbucket.com/
 */
if (!function_exists('wpbucket_accordion_item')) {
    function wpbucket_accordion_item($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'parent_id' => '',
            'item_id' => '',
            'item_active' => 'no',
            'title' => '',
            'icon' => '',
        ), $atts));

        if($item_active == 'yes'){
            $panel_active = 'panel-active';
            $collapse = 'collapse in';
            $icon = 'fa fa-minus';
        }else{ 
            $panel_active = '';
            $collapse = 'collapse';
            $icon = 'fa fa-plus';
        }
           

        ob_start();
        ?>
           <div class="panel panel-default">
                <div class="panel-heading <?php echo $panel_active; ?>">
                    <a data-toggle="collapse" data-parent="#<?php echo $atts['parent_id'];?>" href="#<?php echo $atts['item_id'];?>">
                        <h4 class="panel-title">
                            <span> <i class="<?php echo $icon;?>"></i> </span>
                            <?php echo balanceTags($atts['title']);?>
                        </h4>
                    </a>
                </div>
                <div id="<?php echo $atts['item_id'];?>" class="panel-collapse <?php echo esc_attr($collapse); ?>">
                    <div class="panel-body">
                        <P><?php echo balanceTags($content);?></P>
                    </div>
                    
                </div>
            </div>

        <?php

            $output = ob_get_clean(); 
            
            return $output;

    }
}