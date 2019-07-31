<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twp_Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <?php
    $swift_blog_header_overlay = '';
    $swift_blog_enable_header_overlay = swift_blog_get_option('enable_header_overlay');
    if (1 == $swift_blog_enable_header_overlay ){
    	$swift_blog_header_overlay = 'twp-overlay';
    } else {
    	$swift_blog_header_overlay = 'no-overlay';
    } ?>
	
	<header id="masthead" class="site-header <?php echo esc_attr($swift_blog_header_overlay); ?>">
			<div class="wp-custom-header">
				<?php
				if (is_single()) {
					$post_options = get_post_meta( $post->ID, 'swift-blog-meta-image-checkbox', true );
					if (empty( $post_options ) ) {
					swift_blog_post_thumbnail('full');
					} 
				} else {
					the_custom_header_markup();
				} ?>
			</div>
			<nav id="site-navigation" class="twp-nav-main-navigation">
				<div class="container-fluid clearfix">
					<div class="twp-nav-left-content twp-float-left twp-d-flex">
						<div class="twp-menu-icon-section">
							<div class="twp-menu-icon twp-white-menu-icon" id="twp-menu-icon">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
						<div class="twp-menu-section twp-nav-menu">
							<?php
								wp_nav_menu(array(
									'theme_location' => 'primary-nav',
									'menu_id' => 'primary-nav-menu',
									'container' => 'div',
									'container_class' => 'menu',
									'depth' => 4,
								));
							?>
						</div><!--/twp-menu-section-->
					</div>
					<div class="twp-nav-right-content twp-float-right twp-d-flex">
						<?php if (1 == swift_blog_get_option('enable_social_menu_section')) { ?>
							<!-- social menu -->
							<?php if (has_nav_menu('social-nav')) { ?>
								<div class="navigation-social-icon">
									<div class="twp-social-icons-wrapper">
										<?php
										wp_nav_menu(
											array('theme_location' => 'social-nav',
												'link_before' => '<span>',
												'link_after' => '</span>',
												'menu_id' => 'social-menu',
												'fallback_cb' => false,
												'menu_class' => 'twp-social-icons twp-social-icons-white'
											)); ?>
									</div>
								</div>
							<?php } ?>
						<?php } ?>
						<?php if (1 == swift_blog_get_option('enable_dark_light_section')) { ?>
							<div class="theme-mode header-theme-mode">
							</div>
						<?php } ?>
						<?php if (1 == swift_blog_get_option('enable_search_section')) { ?>
							<!-- search icon -->
							<div class="twp-search-section" id="search">
								<i class="fa  fa-search"></i>
							</div><!--/twp-search-section-->
						<?php } ?>
					</div>
				</div>
				<div id="progressbar">
				</div>
			</nav><!-- #site-navigation -->
		<div class="site-branding twp-site-branding">
			<div class="container-fluid">
				<div class="twp-site-logo">
					<div class="twp-wrapper">
						<?php the_custom_logo(); ?>
					</div>
				</div>
				<?php
				
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$twp_blog_description = get_bloginfo( 'description', 'display' );
				if ( $twp_blog_description || is_customize_preview() ) :
					?>
					<p class="site-description"><span class="twp-tag-line twp-tag-line-primary"><?php echo $twp_blog_description; /* WPCS: xss ok. */ ?></span></p>
				<?php endif; ?>
			</div>
		</div><!-- .site-branding -->
	
		<!-- dark/night mode -->
      
	</header><!-- #masthead -->
	<div id="sticky-nav-height" style="height:1px;"></div>

		<?php 
		if (is_front_page() || is_home()) {
			do_action( 'swift_blog_action_slider_post' );
		} ?>
		
		
	<div class="twp-mobile-menu-section">
		<div class="twp-mobile-close-icon">
			<span class="twp-close-icon" id="twp-mobile-close">
				<span></span>
				<span></span>
			</span>
		</div>
	
		<div class="twp-d-flex">
			<div class="twp-col-6 twp-mobile-menu">
			</div>
			<div class="twp-col-6">
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) {
					dynamic_sidebar( 'menu-sidebar' );
				} ?>
			</div>
			
		</div>
	</div>

	<div class="twp-search-field-section" id="search-field">
		<div class="twp-search-close-icon">
			<span class="twp-close-icon twp-close-icon-white twp-close-icon-lg" id="twp-search-close">
				<span></span>
				<span></span>
			</span>
		</div>
		<div class="twp-wrapper">
			<?php get_search_form(); ?>
		</div>
		
	</div>
	<?php if (1 == swift_blog_get_option('enable_preloader')) { ?>
		<div class="twp-preloader" id="preloader">
			<div class="status" id="status">
				<div class="twp-circle twp-circle-1"></div>
				<div class="twp-circle twp-circle-2"></div>
				<div class="twp-circle twp-circle-3"></div>
				<div class="twp-circle twp-circle-4"></div>
			</div>
			
		</div>
	<?php } ?>
	
	
	<div id="content" class="site-content clearfix">
		<?php do_action( 'swift_blog_action_get_breadcrumb' ); ?>
		<div class="body-content-wrapper">
		
