<?php
/**
 * propper functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package propper
 */
include( get_template_directory() . '/inc/class-tgm-plugin-activation.php');
include( get_template_directory() . '/inc/themeplugins.php');

add_action( 'tgmpa_register', 'propper_ThemePlugins::propper_register_required_plugins' );
 
if ( ! function_exists( 'propper_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function propper_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on propper, use a find and replace
	 * to change 'propper' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'propper', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	add_theme_support('custom-logo');
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'propper' ),
		'onepage' => esc_html__( 'Onepage Menu', 'propper' ),
		
	) );
	
	

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );
	add_post_type_support( 'project', 'post-formats', array( 
		'video', 
		'image', 
		'audio' 
	) );
	
	add_image_size ( 'blog_grid', 770, 433, true );
	
	add_theme_support( 'custom-background', apply_filters( 'propper_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'propper_setup' );


function propper_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'propper_content_width', 640 );
}
add_action( 'after_setup_theme', 'propper_content_width', 0 );


function propper_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Propper Main Sidebar', 'propper' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="blog-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'propper_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function propper_scripts() {

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jquery-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array(), '20151215', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jquery.magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jquerfitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array(), '20151215', true );
	wp_enqueue_script( 'scrollReveal', get_template_directory_uri() . '/js/scrollReveal.min.js', array(), '20151215', true );
	wp_enqueue_script( 'readmore', get_template_directory_uri() . '/js/readmore.min.js', array(), '20151215', true );
	wp_enqueue_script( 'pace', get_template_directory_uri() . '/js/pace.min.js', array(), '20151215', true );
	

	wp_enqueue_script( 'propper-custom', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );
	
	$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	wp_localize_script( 'propper-custom', 'js_object', $translation_array );
	
	
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
	
	wp_enqueue_style( 'elegant-fonts', get_template_directory_uri() . '/css/elegant-fonts.css');
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css');
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), '3.4.1' );
	wp_enqueue_style( 'propper-styles', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'propper-style', get_stylesheet_uri() );
	
}
add_action( 'wp_enqueue_scripts', 'propper_scripts' );

function propper_search_form_modify( ) {
	do_action( 'pre_get_search_form' );
	ob_start();
	?>
	
	<div id="" class="widget widget_search">
		<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) )?>">
			<div>
				<label class="screen-reader-text" for="s"><?php echo esc_html__('Search for:','propper')?></label>
				<input type="text" value="<?php echo get_search_query()?>" name="s" id="s" placeholder="<?php echo esc_html__('Type and hit enter...','propper')?>">
				
			</div>
		</form></div>
	<?php 	
			
	$output = ob_get_clean();
	return $output;
}
add_filter( 'get_search_form', 'propper_search_form_modify' );


function propper_add_editor_styles() {
    add_editor_style( get_template_directory_uri().'css/main-editor-style.css' );
}
//add_action( 'admin_init', 'propper_add_editor_styles' );



function propper_google_fonts_url() {
    $font_url = '';  
    if ( 'off' !== esc_html_x( 'on', 'Google font: on or off', 'propper' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Montserrat:400,700' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function propper_google_fonts() {
    wp_enqueue_style( 'propper_google_fonts', propper_google_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'propper_google_fonts' );


add_action( 'after_setup_theme', 'propper_return_theme_option' );

function propper_return_theme_option($string, $str = null) {
	global $propper_opt;
	if ($str != null)
		return isset ( $propper_opt ['' . $string . ''] ['' . $str . ''] ) ? $propper_opt ['' . $string . ''] ['' . $str . ''] : null;
	else
		return isset ( $propper_opt ['' . $string . ''] ) ? $propper_opt ['' . $string . ''] : null;
}



/*--------------------------------------------------------------
 *          One-Page Nav Walker
 *-------------------------------------------------------------*/
 
class propper_one_page_walker extends Walker_Nav_menu{
 
  var $value;
	function __construct($value = NULL) {
		return $this->value = $value;
	}
	function start_lvl(&$output, $depth = 0, $args = array()) {
		
		$indent = str_repeat ( "\t", $depth );
		$output .= "\n$indent<ul class=\"dropdown-menu\">\n";
	}
	function start_el(&$output, $object, $depth = 0, $args = array(), $id = 0) {
		global $wp_query;
		$dropdown_value = 0;
		$indent = ($depth) ? str_repeat ( "\t", $depth ) : '';
		
		
		$class_names = $value = '';
		
		$classes = empty ( $object->classes ) ? array () : ( array ) $object->classes;

		$classes = array_slice ( $classes, 1 );
		
		$class_names = join ( ' ', apply_filters ( 'nav_menu_css_class', array_filter ( $classes ), $object ) );

		if ($object->object == 'page' && $object->classes [0] != 'notsingle' && $this->value != 'alter') {
			
			$varpost = get_post ( $object->object_id );
			$separate_page = get_post_meta ( $object->object_id, "lg_separate_page", true );
			$disable_menu = get_post_meta ( $object->object_id, "lg_disable_section_from_menu", true );
			$current_page_id = get_option ( 'page_on_front' );
			
			if (($disable_menu != true) && ($varpost->ID != $current_page_id)) {
				
			
				$output .= $indent . '<li class="' . esc_attr ( $class_names ) .'">';

				$attributes = ' href="' . esc_url( home_url () ) . '/#' . esc_attr( $varpost->post_name ) . '"';
				
				$object_output = $args->before;
				$object_output .= '<a' . $attributes . ' class="scroll">';
				$object_output .= $args->link_before . '' . apply_filters ( 'the_title', $object->title, $object->ID ) . '';
				$object_output .= $args->link_after;
				$object_output .= '</a>';
				$object_output .= $args->after;
				
				$output .= apply_filters ( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );
			}
		}else {
			
			if (strpos ( $class_names, 'menu-item-has-children' ) !== false) {
				$output .= $indent . '<li class="' . esc_attr ( $class_names ) .' dropdown"> ';
				$dropdown_value = 1;
			} else {
				$output .= $indent . '<li class="' . esc_attr ( $class_names ) .'">';
				$dropdown_value = 0;
			}
			$atts = array ();
			$atts ['title'] = ! empty ( $object->attr_title ) ? $object->attr_title : '';
			$atts ['target'] = ! empty ( $object->target ) ? $object->target : '';
			$atts ['rel'] = ! empty ( $object->xfn ) ? $object->xfn : '';
			$atts ['href'] = ! empty ( $object->url ) ? $object->url : '';
			
			$atts = apply_filters ( 'nav_menu_link_attributes', $atts, $object, $args );
			
			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if (! empty ( $value )) {
					$value = ('href' === $attr) ? esc_url ( $value ) : esc_attr ( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}
			
			$object_output = $args->before;
			if ($dropdown_value == 0) {			
				$object_output .= '<a' . $attributes . ' class="scroll">';
				$object_output .= $args->link_before . apply_filters ( 'the_title', $object->title, $object->ID ) . $args->link_after;
				$object_output .= '</a>';
				
			} else {
				$object_output .= '<a' . $attributes . '  class="scroll">';
				$object_output .= '
					<span>
						<i class="ion-chevron-down direction-icon white"></i>
					</span>';
				$object_output .= $args->link_before . apply_filters ( 'the_title', $object->title, $object->ID ) . $args->link_after;
				$object_output .= '</a>';
			}
			$object_output .= $args->after;
			
			$output .= apply_filters ( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );
		
		
		
		
		
		}
	}
   
}
   

function propper_pagination($pages = '', $range=4){  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
     if(1 != $pages)
     {
		 echo '<div class="blog-pagination">
			<ul>
				<li><a href="'.esc_url(get_pagenum_link($paged - 1)).'"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>';
			
		
		for ($i=1; $i <= $pages; $i++){
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){			
				echo ($paged == $i)? '<li class="active"><a href="'.esc_attr("javascript:void()").'">'.$i.'</a></li>':'<li><a href="'.esc_url(get_pagenum_link($i)).'">'.$i.'</a></li>';
			}
		}
		
		
		echo  '<li><a href="'.esc_url(get_pagenum_link($paged + 1)).'"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>';

        echo  '</ul></div>';
     }
	
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


require get_template_directory() . '/inc/comments.php';

// How comments are displayed
