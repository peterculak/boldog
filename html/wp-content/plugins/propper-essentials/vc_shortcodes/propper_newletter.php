<?php

if (class_exists ( 'WPBakeryShortCode' )) {
    class WPBakeryShortCode_propper_newletter extends WPBakeryShortCode {
        
        protected function content($atts, $content = null) {

                extract ( shortcode_atts ( array (
                    'note' => '',
                    
            ), $atts ) );
            
            ob_start();
            
            ?>
            
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <?php echo do_shortcode($content); ?>
                        <p class="note">*<?php echo $info; ?></p>
                       
                    </div>
                </div>
               
            <?php                               
            $output = ob_get_clean(); 
            return $output;
        }               
    }
}
?>