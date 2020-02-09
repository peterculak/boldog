<?php
/*
Plugin Name: Propper Essentials
Plugin URI: http://wordpress.org/extend/plugins/propper-essentials/
Description: Visual Composer Shortcodes for propper theme
Author: propper
Author URI: http://wordpress.org/
Version: 1.0
Text Domain: propper-essentials
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

require dirname( __FILE__ ) . '/shortcodes.php';

require dirname( __FILE__ ) . '/cpt/apartments.php';
require dirname( __FILE__ ) . '/meta.php';

require dirname( __FILE__ ) . '/barebones-config.php';


require dirname( __FILE__ ) . '/vc_shortcodes/propper_gallery.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_button.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_feature.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_about_the_project.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_stage.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_details.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_pricing.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_pricing_section.php';

require dirname( __FILE__ ) . '/vc_shortcodes/propper_accordion_section.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_accordion.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_testimonial_section.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_testimonial.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_sponsor_section.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_sponsor.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_newletter.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_blog_post.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_timeline_section.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_timeline.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_team.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_number.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_marketing_banner.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_agent_contact.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_person.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_title.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_slider.php';

require dirname( __FILE__ ) . '/vc_shortcodes/propper_apartment_list.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_contact_us.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_faq.php';
require dirname( __FILE__ ) . '/vc_shortcodes/propper_faq_section.php';

 
if (class_exists ( 'WPBakeryShortCode' )) {
	require dirname( __FILE__ ) . '/Visual_Composer.php';
	add_action ( 'vc_before_init', 'Visual_Composer::add_shortcode_to_VC' );
	add_shortcode_param ( 'propper_custom_taxonomy', 'Visual_Composer::propper_param_settings_field' );
}


function propper_breadcrumb() {
    global $post;
	$separator = "/"; 
	
    echo '<div class="blog-post-path text-right"><p>';
	if (!is_front_page()) {
		echo '<a class="inner-page-navigation dark-grey font3" href="';
		echo esc_url(home_url(), 'propper-essentials');
		echo '">';
		echo esc_html__('Home', 'propper-essentials');
		echo '</a>'.$separator;
		if ( is_category() || is_single() ) {
			the_category(', ');
			if ( is_single() ) {
				echo $separator;
				the_title();
			}
		
	
		} elseif ( is_page() && $post->post_parent) {
			
			
			
			$home = get_page(get_option('page_on_front'));
			for ($i = count($post->ancestors)-1; $i >= 0; $i--) {
				if (($home->ID) != ($post->ancestors[$i])) {
					echo '<a class="inner-page-navigation dark-grey font3" href="';
					echo esc_url(get_permalink($post->ancestors[$i])); 
					echo '">';
					echo get_the_title($post->ancestors[$i]);
					echo "</a>".$separator;
				}
			}
			echo the_title();
		} elseif (is_page()) {
			echo the_title();
		} elseif (is_404()) {
			echo esc_html__('404','propper-essentials');
		}
	} else {
		echo '<a class="inner-page-navigation dark-grey font3" href="';
		echo home_url();
		echo '">';
		echo esc_html__('Home','propper-essentials');
		echo '</a>';
	}
	echo '</p></div>';
}

function propper_randomString($length = 6) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}

function propper_remove_post_type_support() {
    remove_post_type_support( 'apartment', 'editor' );
}
add_action( 'init', 'propper_remove_post_type_support' );

function propper_floor_modal($apartment_id = null){
	
	ob_start();
	
	$propper_a_number = get_post_meta( $apartment_id, 'propper_a_number', true );
	$propper_a_floor = get_post_meta( $apartment_id, 'propper_a_floor', true );
	$propper_a_rooms = get_post_meta( $apartment_id, 'propper_a_rooms', true );
	$propper_a_area = get_post_meta( $apartment_id, 'propper_a_area', true );
	$propper_a_balcony = get_post_meta( $apartment_id, 'propper_a_balcony', true );
	$propper_a_kitchen = get_post_meta( $apartment_id, 'propper_a_kitchen', true );
	$propper_a_master_bedroom = get_post_meta( $apartment_id, 'propper_a_master_bedroom', true );
	$propper_a_toilet = get_post_meta( $apartment_id, 'propper_a_toilet', true );
	$propper_a_living_room = get_post_meta( $apartment_id, 'propper_a_living_room', true );
	$propper_a_passage = get_post_meta( $apartment_id, 'propper_a_passage', true );
	$propper_a_price = get_post_meta( $apartment_id, 'propper_a_price', true );
	$propper_a_status = get_post_meta( $apartment_id, 'propper_a_status', true );
	$propper_a_description = get_post_meta( $apartment_id, 'propper_a_description', true );

	$propper_a_video = get_post_meta( $apartment_id, 'propper_a_video', true );
	$propper_a_pdf = get_post_meta( $apartment_id, 'propper_a_pdf', true );
	$propper_a_brochure = get_post_meta( $apartment_id, 'propper_a_brochure', true );
	
	//$propper_a_gallery = get_post_meta( $apartment_id, 'propper_a_gallery', true );
	$propper_a_img = get_post_meta( $apartment_id, 'propper_a_img', true );
	//var_dump($propper_a_gallery);
	$propper_a_gallery = rwmb_meta( 'propper_a_gallery', $apartment_id );
	//$propper_a_img = rwmb_meta( 'propper_a_img', $apartment_id );
	//var_dump($propper_a_gallery);
	//$propper_a_gallery = explode(",",$propper_a_gallery);
	$gallery_images_src = array();
	foreach($propper_a_gallery as $propper_gallery){
		
		if ($propper_gallery != null) {

			$src = wp_get_attachment_image_src ( $propper_gallery, 'full' );

			$propper_a_gallery_src[] = esc_url ( $src [0] );

		}			
	}
	
		//var_dump(count($propper_a_gallery_src));
	
	if ($propper_a_img != null) {

		$src = wp_get_attachment_image_src ( $propper_a_img, 'full' );

		$propper_a_img_src = esc_url ( $src [0] );

	} else {

		$propper_a_img_src = '';

	}
	
	$building = get_the_terms( $apartment_id, 'building' );			 
	
		?>

	<div class="modal fade apartment-selector" id="floor-modal-<?php echo $apartment_id; ?>" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon_close"></i></button>
			
			 <div class="modal-content">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="modal-apartment-<?php echo $apartment_id; ?>">
                    <div class="modal-header">
                        <div class="title">
                            <h4><?php esc_html_e('Building','propper-essentials');?> <?php echo $building[0]->name; ?></h4>
                            <h3><?php esc_html_e('Floor','propper-essentials');?> <?php echo $propper_a_floor; ?></h3>
                            <h1 class="modal-title"><?php esc_html_e('Apartment','propper-essentials');?> <?php echo $propper_a_number; ?></h1>
                            <h2><?php echo $propper_a_price; ?></h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="left">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#modal-floor-plan-<?php echo $apartment_id; ?>" aria-controls="modal-floor-plan-<?php echo $apartment_id; ?>" role="tab" data-toggle="tab"><?php esc_html_e('Floor plan','propper-essentials');?></a></li>
                                <li role="presentation"><a href="#modal-gallery-<?php echo $apartment_id; ?>" aria-controls="modal-gallery-<?php echo $apartment_id; ?>" role="tab" data-toggle="tab"><?php esc_html_e('Gallery','propper-essentials');?></a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="modal-floor-plan-<?php echo $apartment_id; ?>">
                                    <a href="<?php echo $propper_a_img_src;?>" class="image-popup"><img src="<?php echo $propper_a_img_src;?>" alt=""></a>
                                    <div class="note"><?php esc_html_e('Click to zoom','propper-essentials');?></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="modal-gallery-<?php echo $apartment_id; ?>">
                                    <div class="gallery">
                                        <div class="one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                            <?php foreach($propper_a_gallery as $propper_gallery){ ?>	
												<img src="<?php echo esc_url($propper_gallery["full_url"]);?>" alt="">
											<?php } ?>
                                        </div>
                                    </div>
                                    <a href="<?php echo esc_url($propper_a_video); ?>" class="video-tour video-popup"><i class="play-icon arrow_triangle-right"></i><?php esc_html_e('Click to take a video tour','propper-essentials');?></a>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <h3><?php esc_html_e('Parameters','propper-essentials');?></h3>
                            <dl>
                                <dt><?php esc_html_e('Kitchen','propper-essentials');?></dt>
                                <dd><?php echo $propper_a_kitchen; ?>m<sup>2</sup></dd>
                                <dt><?php esc_html_e('Master bedroom','propper-essentials');?></dt>
                                <dd><?php echo $propper_a_master_bedroom; ?>m<sup>2</sup></dd>
                                <dt><?php esc_html_e('Balcony','propper-essentials');?></dt>
                                <dd><?php echo $propper_a_balcony; ?>m<sup>2</sup></dd>
                                <dt><?php esc_html_e('Toilet','propper-essentials');?></dt>
                                <dd><?php echo $propper_a_toilet; ?>m<sup>2</sup></dd>
                                <dt><?php esc_html_e('Living room','propper-essentials');?></dt>
                                <dd><?php echo $propper_a_living_room; ?>m<sup>2</sup></dd>
                                <dt><?php esc_html_e('Passage','propper-essentials');?></dt>
                                <dd><?php echo $propper_a_passage; ?>m<sup>2</sup></dd>
                            </dl>
                            <h3><?php esc_html_e('Description','propper-essentials');?></h3>
                            <p><?php echo $propper_a_description; ?></p>
                            <hr>
                            <figure><a href="<?php echo esc_url($propper_a_pdf); ?>" class="icon"><i class="fa fa-file-pdf-o"></i><?php esc_html_e('Download PDF','propper-essentials');?></a></figure>
                            <figure><a href="<?php echo esc_url($propper_a_brochure); ?>" class="icon"><i class="fa fa-file-image-o"></i><?php esc_html_e('Download Brochure','propper-essentials');?></a></figure>
                        </div>
                    </div>
                
            </div>
            </div>


        </div>
		</div>
	</div>
	
	
	<?php 	
			
	$output = ob_get_clean();
	return $output;
}