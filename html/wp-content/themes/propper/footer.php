<?php

$footer_logo_dark = propper_return_theme_option( 'footer_logo_dark', 'url');
$footer_logo_light = propper_return_theme_option( 'footer_logo_light', 'url');
$footer_description = propper_return_theme_option( 'footer_description');
$footer_copyright = propper_return_theme_option( 'footer_copyright');
$footer_phone = propper_return_theme_option( 'footer_phone');
$footer_email = propper_return_theme_option( 'footer_email');
$footer_map_lat = propper_return_theme_option( 'footer_map_lat');
$footer_map_lng = propper_return_theme_option( 'footer_map_lng');
$footer_address = propper_return_theme_option( 'footer_address');
$footer_contact_form = propper_return_theme_option( 'footer_contact_form');
$social_icons = propper_return_theme_option( 'social_icons');
$social_links = propper_return_theme_option( 'social_links');


$footer_number_title = propper_return_theme_option( 'footer_number_title');
$footer_number_1 = propper_return_theme_option( 'footer_number_1');
$footer_number_1_label = propper_return_theme_option( 'footer_number_1_label');
$footer_number_2 = propper_return_theme_option( 'footer_number_2');
$footer_number_2_label = propper_return_theme_option( 'footer_number_2_label');
$footer_number_3 = propper_return_theme_option( 'footer_number_3');
$footer_number_3_label = propper_return_theme_option( 'footer_number_3_label');
$footer_number_4 = propper_return_theme_option( 'footer_number_4');
$footer_number_4_label = propper_return_theme_option( 'footer_number_4_label');


$footer_bg_color = propper_return_theme_option( 'footer_bg_color');
$footer_bg_image = propper_return_theme_option( 'footer_bg_image', 'url');


?>
			
	 <footer id="page-footer" class="block background-is-dark">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/'));?>" class="brand"><img src="<?php echo esc_url($footer_logo_light);?>" alt=""></a>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <p><?php echo $footer_description;?></p>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="contact-data text-align-right">
                        <figure><?php echo esc_html($footer_phone);?></figure>
                        <a href="#"><?php echo esc_html($footer_email);?></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="note"><?php echo $footer_copyright;?></div>       
            <div class="to-top">
                <a href="#page-top" class="arrow-up framed scroll">
                    <i class="arrow_up"></i>
                </a>
            </div>
        </div>
        <div class="background-wrapper">
            <div class="background-color background-color-black"></div>
        </div>
    </footer>
</div>

<?php 

wp_footer();

?>

</body>

</html>
