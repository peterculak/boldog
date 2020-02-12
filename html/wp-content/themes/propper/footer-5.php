<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package propper
 */

$footer_logo_dark = propper_return_theme_option( 'footer_logo_dark', 'url');
$footer_logo_light = propper_return_theme_option( 'footer_logo_light', 'url');
$footer_description = propper_return_theme_option( 'footer_description');
$footer_copyright = propper_return_theme_option( 'footer_copyright');
$footer_phone = propper_return_theme_option( 'footer_phone');
$footer_email = propper_return_theme_option( 'footer_email');
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
$footer_social_icon_html = propper_return_theme_option( 'footer_social_icon_html');


?>
			
	 <footer id="page-footer" class="block background-is-dark">
        <div class="container">
           <a href="<?php echo esc_url(home_url('/'));?>" class="brand"><img src="<?php echo esc_url($footer_logo_light);?>" alt=""></a>
            <div class="contact map" id="contact">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h3><?php echo esc_html__('Map','propper');?></h3>
                        <div class="map" id="map">
                          <a href="https://www.google.com/maps/place/925+26+Boldog/@48.1993361,17.2904371,11.86z/data=!4m5!3m4!1s0x476c9c5626b9cc11:0x95cbbf29ca449431!8m2!3d48.2376422!4d17.4292646"
                             target="_blank">
                            <img src="https://jazeroboldog.sk/wp-content/uploads/2020/03/map.jpg" alt="Dom Jazero Boldog">
                          </a>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <?php echo $footer_address;?>
                                
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <?php echo $footer_social_icon_html;?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3><?php echo esc_html__('Contact form','propper');?></h3>
                        <form id="form-contact" method="post" class="clearfix inputs-underline">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="<?php echo esc_html__('Your Name','propper');?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="<?php echo esc_html__('Your Email','propper');?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="form-contact-message" rows="8" name="message" placeholder="<?php echo esc_html__('Your Message','propper');?>" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <button type="submit" class="btn pull-right btn-primary btn-rounded" id="form-contact-submit"><?php echo esc_html__('Send a Message','propper');?></button>
                            </div>
                            <div id="form-contact-status"></div>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            <div class="note"><?php echo $footer_copyright;?></div>
            <div class="to-top">
                <a href="#home" class="arrow-up framed scroll">
                    <i class="arrow_up"></i>
                </a>
            </div>
        </div>
        <div class="background-wrapper">
            <div class="bg-transfer opacity-30">
                <img src="<?php echo esc_url($footer_bg_image);?>" alt="">
            </div>
            <div class="background-color background-color-black"></div>
        </div>
    </footer>
</div>

<?php 								
	$args = array(
		'type'   => 'apartment',
		'taxonomy'     => 'building',
	); 
	$buildings = get_categories( $args );
	foreach($buildings as $building) { 									
								
		$args = array (
			'post_type' => 'apartment',
			'post_status' => 'publish',
			'tax_query' => array(
				array(
				  'taxonomy' => 'building',
				  'field' => 'slug',
				  'terms' => $building->slug
				)
			  )
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ){ 	
				$the_query->the_post();
				$apartment_id = get_the_ID();							
				echo propper_floor_modal($apartment_id);
			}
		}										
	}
?>
<?php 

wp_footer();

?>

</body>

</html>
