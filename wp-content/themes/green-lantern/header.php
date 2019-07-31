<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">``
	<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
    <meta charset="<?php bloginfo('charset'); ?>" />		
	<?php $wl_theme_options = weblizar_get_options(); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(''); ?> id="bgpattern-p5" >
<div class="boxed" id="wrapper">
<div id="top_wrapper">	
		<header id="header" >
			<div class="row">
			<?php $wl_theme_options = weblizar_get_options(); ?>
			<?php if($wl_theme_options['search_form']=='on'){ ?>
			<div class="col-md-12">
			<div class="col-md-4 top-search-form">
			<?php echo get_search_form(); ?>	
			</div>	
			</div>	
			<?php } ?>
				<nav class="navbar-default" role="navigation" <?php if ( has_header_image() ) { ?> style='background-image: url("<?php header_image(); ?>")' <?php  } ?>>
					<div class="container-fluid">						
						<div class="col-md-3">
							<div class="navbar-header">	
							  <div class="logo pull-left">
								<?php $wl_theme_options = weblizar_get_options(); ?>
								<a title="Weblizar" href="<?php echo esc_url(home_url( '/' )); ?>">
								<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
								$image = wp_get_attachment_image_src( $custom_logo_id,'full' );
								if(has_custom_logo()) { ?>
								<span class="site-custom_logo"></span>
								<img src="<?php echo esc_attr($image[0]); ?>" style="height:<?php echo esc_attr($wl_theme_options['height']); ?>px; width:<?php echo esc_attr($wl_theme_options['width']); ?>px;" />
								<?php } else { echo '<span class="site-title">'.esc_attr(get_bloginfo('name')).'</span>'; } ?>
								</a>	
								<p class="site-title-desc"><?php bloginfo( 'description' ); ?></p>
							  </div>
				 
							  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							</div>
						</div>
						<div class="col-md-9">
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							  <?php
								wp_nav_menu( array(  
										'theme_location' => 'primary',
										'container'  => 'nav-collapse collapse navbar-inverse-collapse',
										'menu_class' => 'nav navbar-nav navbar-left',
										'fallback_cb' => 'wl_fallback_page_menu',
										'walker' => new weblizar_nav_walker()
										)
									);	
								?>
							</div>
						</div>
					</div>
				</nav>		
			</div>
		</header>	
</div>