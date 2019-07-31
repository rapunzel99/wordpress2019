<?php
/*	*Theme Name	: Green-Lantern
	*Theme Core Functions and Codes
*/	
	/**Includes reqired resources here**/
	define('GL_TEMPLATE_DIR_URI', get_template_directory_uri());
	define('GL_TEMPLATE_DIR', get_template_directory());
	define('GL_TEMPLATE_DIR_CORE' , GL_TEMPLATE_DIR . '/core');
	require( get_template_directory() . '/class-tgm-plugin-activation.php' );
	require( GL_TEMPLATE_DIR_CORE . '/menu/default_menu_walker.php' ); // for Default Menus
	require( GL_TEMPLATE_DIR_CORE . '/menu/weblizar_nav_walker.php' ); // for Custom Menus	
	require( GL_TEMPLATE_DIR_CORE . '/comment-box/comment-function.php' ); //for comments
	require get_template_directory() . '/core/custom-header.php';
	require(dirname(__FILE__).'/customizer.php');
	
	
	function add_post_formats() {
    add_theme_support( 'post-formats', array( 'gallery', 'quote', 'video', 'aside', 'image', 'link' ) );
}
 
add_action( 'after_setup_theme', 'add_post_formats', 20 );

	add_action( 'after_setup_theme', 'wl_setup' ); 	
	function wl_setup()
	{	
		global $content_width;
		//content width
		if ( ! isset( $content_width ) ) $content_width = 720; //px
	
		// Load text domain for translation-ready
		load_theme_textdomain( 'green-lantern', GL_TEMPLATE_DIR_CORE . '/lang' );	
		
		add_theme_support( 'post-thumbnails' ); //supports featured image
		// This theme uses wp_nav_menu() in one location.
		register_nav_menu( 'primary', __( 'Primary Menu', 'green-lantern' ) );
		// theme support 	
		$args = array('default-color' => 'ffffff',
		'default-image' => get_template_directory_uri() . '/images/p5.png',
		);
		add_editor_style();
		add_theme_support( 'custom-background', $args); 
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links'); 
		add_theme_support( 'customize-selective-refresh-widgets' );
		
		// Logo
		add_theme_support( 'custom-logo', array(
			'width'       => 250,
			'height'      => 250,
			'flex-width'  => true,
			'flex-height'  => true,
		));
		
		require_once('theme-option-data.php');	
	}


	function weblizar_scripts()
	{	
		wp_enqueue_style('green-lantern-style-sheet', get_stylesheet_uri());
		wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome-5.8.1/css/all.min.css');
				wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome-5.8.1/css/fontawesome.min.css');
				wp_enqueue_style('font-awesome-470', get_template_directory_uri() . '/css/font-awesome-4.7.0/css/font-awesome.min.css');

		wp_enqueue_style('bootstrap', GL_TEMPLATE_DIR_URI . '/css/bootstrap.css');
		wp_enqueue_style('responsive', GL_TEMPLATE_DIR_URI . '/css/responsive.css');
		wp_enqueue_style('green', GL_TEMPLATE_DIR_URI . '/css/skins/green.css');	
		wp_enqueue_style('theme-menu', GL_TEMPLATE_DIR_URI . '/css/theme-menu.css');
		wp_enqueue_style('carousel', GL_TEMPLATE_DIR_URI . '/css/carousel.css');
		wp_enqueue_style('greenlantern-swiper', get_template_directory_uri() .'/css/swiper.min.css'); 
		// Js
		wp_enqueue_script('jquery');
		wp_enqueue_script('menu', GL_TEMPLATE_DIR_URI .'/js/menu/menu.js', array('jquery'));
		wp_enqueue_script('bootstrap-js', GL_TEMPLATE_DIR_URI .'/js/menu/bootstrap.js');
		wp_enqueue_script('holder-js', GL_TEMPLATE_DIR_URI .'/js/holder.js');
		
		if(is_front_page()) {
		wp_enqueue_script('jquery.themepunch.plugins', GL_TEMPLATE_DIR_URI .'/js/jquery.themepunch.plugins.js');
		wp_enqueue_script('jquery.themepunch.revolution', GL_TEMPLATE_DIR_URI .'/js/jquery.themepunch.revolution.js');
		wp_enqueue_script('jquery.carouFredSel-6.2.1-packed', GL_TEMPLATE_DIR_URI .'/js/jquery.carouFredSel-6.2.1-packed.js');
		wp_enqueue_script('green-laltern', GL_TEMPLATE_DIR_URI .'/js/green-lantern.js');
		wp_enqueue_script('jquery.prettyPhoto', GL_TEMPLATE_DIR_URI .'/js/jquery.prettyPhoto.js');		
		wp_enqueue_style('revolution_settings', GL_TEMPLATE_DIR_URI . '/css/revolution_settings.css');
		wp_enqueue_style('animate', GL_TEMPLATE_DIR_URI . '/css/animate.css');
		wp_enqueue_style('prettyPhoto', GL_TEMPLATE_DIR_URI . '/css/prettyPhoto.css');
		wp_enqueue_script('greenlantern-swiper', get_template_directory_uri() .'/js/swiper.js');
		}	
	}
	add_action('wp_enqueue_scripts', 'weblizar_scripts'); 
	if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 

	// Read more tag to formatting in blog page 
	function weblizar_content_more($more)
	{  global $post;							
	   return '<div class="blog-post-details-item blog-read-more"><a href="'.get_permalink().'">Read More...</a></div>';
	}  

/*  Font Family */	
 add_action('wp_enqueue_scripts', 'green_lantrn_font_family');
 function green_lantrn_font_family()
   {
	 wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Rock+Salt|Neucha|Sans+Serif|Indie+Flower|Shadows+Into+Light|Dancing+Script|Kaushan+Script|Tangerine|Pinyon+Script|Great+Vibes|Bad+Script|Calligraffitti|Homemade+Apple|Allura|Megrim|Nothing+You+Could+Do|Fredericka+the+Great|Rochester|Arizonia|Astloch|Bilbo|Cedarville+Cursive|Clicker+Script|Dawning+of+a+New+Day|Ewert|Felipa|Give+You+Glory|Italianno|Jim+Nightshade|Kristi|La+Belle+Aurore|Meddon|Montez|Mr+Bedfort|Over+the+Rainbow|Princess+Sofia|Reenie+Beanie|Ruthie|Sacramento|Seaweed+Script|Stalemate|Trade+Winds|UnifrakturMaguntia|Waiting+for+the+Sunrise|Yesteryear|Zeyada|Warnes|Abril+Fatface|Advent+Pro|Aldrich|Alex+Brush|Amatic+SC|Antic+Slab|Candal');
     
	 wp_enqueue_style ('googleFonts');
    }
	
	add_filter( 'the_content_more_link', 'weblizar_content_more' );
	
	/*
	* Weblizar widget area
	*/
	add_action( 'widgets_init', 'weblizar_widgets_init');
	function weblizar_widgets_init() {
		/*sidebar*/
		register_sidebar( array(
			'name' => __( 'Sidebar', 'green-lantern' ),
			'id' => 'sidebar-primary',
			'description' => __( 'The primary widget area', 'green-lantern' ),
			'before_widget' => '<div class="sidebar-block">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="h3-sidebar-title sidebar-title">',
			'after_title' => '</h3>'
		) );

		register_sidebar( array(
			'name' => __( 'Footer Widget Area', 'green-lantern' ),
			'id' => 'footer-widget-area',
			'description' => __( 'footer widget area', 'green-lantern' ),
			'before_widget' => '<div class="col-md-3 col-sm-3 footer-col">',
			'after_widget' => '</div>',
			'before_title' => '<div class="footer-title">',
			'after_title' => '</div>',
		) );             
	}
		$args = array(
	'flex-width'    => true,
	'width'         => 2000,
	'flex-height'    => true,
	'height'        => 100,
	'default-image' => '',
);
add_theme_support( 'custom-header', $args );
	
	/*
	* Image resize and crop
	*/
	 if ( ( 'add_image_size' ) ) 
	 { add_image_size('wl_media_sidebar_img',54,54,true);
		add_image_size('wl_media_blog_img',800,400,true);
		add_image_size('wl_blog_img',350,150,true);
		/*** blog ***/
		add_image_size('home_blog',360,165,true);
	}
	


//Plugin Recommend
add_action('tgmpa_register','green_laltern_plugin_recommend');
function green_laltern_plugin_recommend(){
	$plugins = array(
	array(
            'name'      => 'Responsive Coming Soon',
            'slug'      => 'responsive-coming-soon-page',
            'required'  => false,
        ),
	array(
            'name'      => 'Admin Custom Login',
            'slug'      => 'admin-custom-login',
            'required'  => false,
        )
		
	);
    tgmpa( $plugins );
}

if (is_admin()) {
	require('core/admin/admin-themes.php');
}

if ( is_admin() && isset($_GET['activated'])  && $pagenow == "themes.php" ) {
	add_action( 'admin_notices', 'greenlantern_activation_notice' );
}
add_action( 'admin_notices', 'greenlantern_activation_notice' );
function greenlantern_activation_notice(){
	wp_enqueue_style('admin',  get_template_directory_uri() .'/core/admin/admin-themes.css');
    ?>
	<div class="notice notice-success is-dismissible"> 
		<p class="notice-text"><?php 
		$theme_info = wp_get_theme();
			printf( esc_html__('Thank you for installing %1$s ¬ Version %2$s, ', 'greenlantern'), esc_html( $theme_info->Name ), esc_html( $theme_info->Version ) );		
		  echo esc_html__( 'For More info  about Premium Products & offers, Do visit our welcome page.', 'greenlantern' ); ?></p>
		<p class="notic-gif"><a target="_self" href="<?php echo admin_url('/themes.php?page=greenlantern') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/wlcm.gif"></a></p>
	</div>
    <?php
}
?>