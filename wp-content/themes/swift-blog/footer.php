<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Swift_Blog
 */

?>
</div> <!-- content-wrapper -->
	</div><!-- #content -->
	<!-- footer widget section -->
	<?php 
	$swift_blog_footer_widgets_number = swift_blog_get_option('number_of_footer_widget');
	if ($swift_blog_footer_widgets_number != 0) {?>
	    <?php
	    if (1 == $swift_blog_footer_widgets_number) {
	        $col = 'col-md-12 twp-col-gap';
	    } elseif (2 == $swift_blog_footer_widgets_number) {
	        $col = 'col-md-6 twp-col-gap';
	    } elseif (3 == $swift_blog_footer_widgets_number) {
	        $col = 'twp-col-4';
	    } elseif (4 == $swift_blog_footer_widgets_number) {
	        $col = 'twp-col-4';
	    } else {
	        $col = 'twp-col-4';
	    }
	    if (is_active_sidebar('footer-col-one') || is_active_sidebar('footer-col-two') || is_active_sidebar('footer-col-three') || is_active_sidebar('footer-col-four')) { ?>
	        <div class="twp-footer-widget">
	            <div class="container-fluid">
	                <div class="twp-row">
	                    <?php if (is_active_sidebar('footer-col-one') && $swift_blog_footer_widgets_number > 0) : ?>
	                        <div class="<?php echo esc_attr($col); ?>">
	                            <?php dynamic_sidebar('footer-col-one'); ?>
	                        </div>
	                    <?php endif; ?>
	                    <?php if (is_active_sidebar('footer-col-two') && $swift_blog_footer_widgets_number > 1) : ?>
	                        <div class="<?php echo esc_attr($col); ?>">
	                            <?php dynamic_sidebar('footer-col-two'); ?>
	                        </div>
	                    <?php endif; ?>
	                    <?php if (is_active_sidebar('footer-col-three') && $swift_blog_footer_widgets_number > 2) : ?>
	                        <div class="<?php echo esc_attr($col); ?>">
	                            <?php dynamic_sidebar('footer-col-three'); ?>
	                        </div>
	                    <?php endif; ?>
	                    <?php if (is_active_sidebar('footer-col-four') && $swift_blog_footer_widgets_number > 3) : ?>
	                        <div class="<?php echo esc_attr($col); ?>">
	                            <?php dynamic_sidebar('footer-col-four'); ?>
	                        </div>
	                    <?php endif; ?>
	                </div>
	            </div>
	        </div>
	    <?php } ?>
	<?php } ?>
		
	<footer id="colophon" class="site-footer">
		<div class="container-fluid">
			<div class="twp-row">
				<?php if (swift_blog_get_option('enable_mailchimp_suscription') == 1) { ?>
					<div class="twp-col-6 twp-newsletter-subscriber">
						<!-- mailchimp section -->
							<div class="twp-description">
								<div class="twp-wrapper">
									<h2 class="twp-title">
										<?php echo esc_html(swift_blog_get_option('mailchimp_suscription_title')); ?>
									</h2>
									<?php
									$blog_mailchimp_code = wp_kses_post(swift_blog_get_option('mailchimp_suscription_shortcode'));
									if (!empty($blog_mailchimp_code)) {
										echo do_shortcode($blog_mailchimp_code);
									} ?>

								</div>
							</div>		
					</div>
				<?php } ?>
				<?php 
				$enabled_mailchimps = '';
				if (swift_blog_get_option('enable_mailchimp_suscription') == 1) {
					$enabled_mailchimps = "twp-col-6";
				} else {
					$enabled_mailchimps = "twp-col-12";
				}?>
				<div class="<?php echo esc_attr( $enabled_mailchimps ); ?>">
					<div class="twp-site-copyright-section">
						<?php if (1 == swift_blog_get_option('enable_site_logo_on_footer')) { ?>
							<div class="footer-container-logo">
								<div class="twp-site-logo">
									<div class="twp-wrapper">
										<?php the_custom_logo(); ?>
									</div>
								</div>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php $twp_blog_description = get_bloginfo( 'description', 'display' );
								if ( $twp_blog_description || is_customize_preview() ) :
									?>
									<p class="site-description"><span class="twp-tag-line twp-tag-line-primary"><?php echo $twp_blog_description; /* WPCS: xss ok. */ ?></span></p>
								<?php endif; ?>
							</div>
						<?php } ?>
						<?php if (has_nav_menu( 'footer-nav' )) {
								wp_nav_menu(array(
									'theme_location' => 'footer-nav',
									'menu_id' => 'footer-nav-menu',
									'container' => 'div',
									'container_class' => 'twp-footer-menu',
									'depth' => 1,
								));
						} ?>
						<div class="site-info">
							<?php
							$swift_blog_copyright_text = swift_blog_get_option('copyright_text');
							if (!empty ($swift_blog_copyright_text)) {
							    echo wp_kses_post($swift_blog_copyright_text);
							}
							?>
							<span class="sep"> | </span>
								<?php
								/* translators: 1: Theme name, 2: Theme author. */
								printf( esc_html__( 'Theme: %1$s by %2$s.', 'swift-blog' ), 'Swift Blog', '<a href="https://www.themeinwp.com/">ThemeInWP</a>' );
								?>
					</div>
				</div>
			</div>
			

		</div>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<div class="twp-scroll-top" id="scroll-top">
		<span><i class="fa fa-chevron-up"></i></span>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
