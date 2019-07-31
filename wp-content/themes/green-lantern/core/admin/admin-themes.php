<?php if (!function_exists('greenlantern_info_page')) {
	function greenlantern_info_page() {
	$page1=add_theme_page(__('Welcome to Greenlantern', 'greenlantern'), __('About Greenlantern', 'greenlantern'), 'edit_theme_options', 'greenlantern', 'greenlantern_display_theme_info_page');
	
	add_action('admin_print_styles-'.$page1, 'greenlantern_admin_info');
	}	
}
add_action('admin_menu', 'greenlantern_info_page');

function greenlantern_admin_info(){
	// CSS
	wp_enqueue_style('bootstrap',  get_template_directory_uri() .'/core/admin/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('admin',  get_template_directory_uri() .'/core/admin/admin-themes.css');
	wp_enqueue_style('font-awesome',  get_template_directory_uri() .'/css/font-awesome-4.7.0/css/font-awesome.css');
	//JS
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js',get_template_directory_uri() .'/core/admin/bootstrap/js/bootstrap.js');
} 
if (!function_exists('greenlantern_display_theme_info_page')) {
	function greenlantern_display_theme_info_page() {
		$theme_data = wp_get_theme(); ?>
	<div class="wrap elw-page-welcome about-wrap seting-page">
		<div class="col-md-12 settings">
			<div class=" col-md-9">
				<div class="col-md-12" style="padding:0">
					<?php $wl_th_info = wp_get_theme(); ?>
					<h2><span class="elw_shortcode_heading">Welcome to Green-Lantern - Version <?php echo esc_html( $wl_th_info->get('Version') ); ?> </span></h2>
					<p style="font-size:19px;color: #555d66;">Green Lantern is a fully responsive multipurpose WordPress theme. This theme is responsive and compatible with the latest version of WordPress. This theme is a perfect choice for a travel agency website, hotels and travel agencies review blog, traveling worldwide and tourism blog, travel agents site, tour operator or tourism company website, etc. Green Lantern has custom menus support to choose the menu in Primary Location that is in Header of the site. In the footer section ,theme offers Social Media Links to add your Social Profile Links to gain more visibility. </p>
				</div>
			</div>
			<div class=" col-md-3">
				<div class="update_pro">
					<h3> Upgrade Pro </h3>
					<a class="demo" href="https://weblizar.com/themes/green-lantern-premium-theme/">Get Pro In $29</a>
				</div>
			</div>
		</div>

            <!-- Themes & Plugin -->
            <div class="col-md-12  product-main-cont">
                <ul class="nav nav-tabs product-tbs">
				    <li class="active"><a data-toggle="tab" href="#start"> Getting Started </a></li>
                    <li><a data-toggle="tab" href="#themesd"> Green-Lantern Premium </a></li>
					<li><a data-toggle="tab" href="#freepro">Free Vs Pro</a></li>
                </ul>

                <div class="tab-content">
				
				
				<div id="start" class="tab-pane fade in active">
                        <div class="space  theme active">

                            <div class=" p_head theme">
                                <!--<h1 class="section-title">WordPress Themes</h1>-->
                            </div>							

                            <div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-7 col-md-7 p_plugin_pic">
                                    <h4>Step 1: Create a Homepage</h4>
									<ol>
									<li> Create a new page </li>
									<li> Go to Appearance -> Customize > Homepage Settings -> select "Your latest posts" </li>
									<li> Save changes </li>
									</ol>
									<a class="add_page" target="_blank" href="<?php echo admin_url('/post-new.php?post_type=page') ?>">Add New Page</a>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                    <div class="row p-box">
                                         <div class="img-thumbnail">
										<img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" class="img-responsive" alt="img"/>
                                    </div>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-12 p_plugin_pic">
                                    <h4>Step 2: Customizer Options Panel </h4>
									<ol>
									<li> Go to Appearance -> Customize > Theme Options </li>
									<li> General Options - It is use for Show/Hide Front Page, Snow effect on/off, logo height-width, enable/disable blog on homepage, add Home Blog Title, add Home Blog Description, select Blog Category. </li>
									<li> Slider Options - It is use for select slider, set Slide Show Interval, pause or play on mouse hover, add slider image, slider title, slider button text and slider button link. </li>
									<li> Theme Service Options - It is use to enable/disable service on homepage, add service title and add service icon. </li>
									<li> Theme Search Options - It is use to enable/disable search form on header. </li>
									<li> Social Options - Enable/disable social icons for footer. </li>
									<li> Footer Options- Use to add Customization text, developed by text and developed by link. </li>
									<li> Typography Settings - Select Logo Font Style, select Header Menu Font Style, select Theme Title Font Style and select  Theme Description Font. </li>
									<li> Excerpt Options -  It is use to select Excerpt length for blog section. </li>
									<li> Home Page Layout Options - use for Front Page Layout Option. </li>
									</ol>
									<a class="add_page" target="_blank" href="<?php echo esc_url(admin_url('customize.php')); ?>">Go to Customizer</a>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery visit_pro">
                                <p>Visit Our Latest Pro Themes & See Demos</p>
								<p style="font-size: 17px !important;">We have put in a lot of effort in all our themes, free and premium both. Each of our Premium themes has a corresponding free version so that you can try out the theme before you decide to purchase it.</p>
								<a href="https://weblizar.com/themes/">Visit Themes</a>
                            </div>	
                        </div>
                    </div>
				
				<!-- end 1st tab -->
				
				
                    <div id="themesd" class="tab-pane fade">
                        <div class="space theme">

                            <div class=" p_head theme">
                                <!--<h1 class="section-title">WordPress Themes</h1>-->
                            </div>							

                            <div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                    <div class="img-thumbnail">
										<img src="<?php echo get_template_directory_uri(); ?>/images/Green-lantern1.png" class="img-responsive" alt="img"/>
                                    </div>
									
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                    <div class="row p-box">
                                        <div>
                                            <p><strong>Description: </strong> Green-Lantern, a premium WordPress theme. With its light and clean design it’s a smart choice for big companies, smaller businesses and freelancers. Green-Lantern  has everything you need to take your company to the next level, but most of all it’s extremely easy to set up and use: your new website we’ll be ready in no time.</p>
                                        </div>
										<p><strong>Tags: </strong>two-columns, three-columns, four-columns, custom-menu, right-sidebar, custom-background, featured-image-header, sticky-post, theme-options, threaded-comments, featured-images, flexible-header, translation-ready ,  custom-logo , news</p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                    <div class="price1">
                                        <span class="currency">USD</span>
                                        <span class="price-number">$<span>29</span></span>
                                    </div>
                                    <div class="btn-group-vertical">
                                        <a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/green-lantern-premium-theme/">Detail</a>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-4 p_plugin_pic">
                                    <div class="img-thumbnail pro_theme">
										<img src="<?php echo get_template_directory_uri(); ?>/images/fashion-png03.png" class="img-responsive" alt="img"/>
										<div class="btn-vertical">
										<h4 class="pro_thm">
                                        <a href="https://weblizar.com/themes/construction-premium-wordpress-theme/">Construction Premium</a></h4>
										</div>
                                    </div>
									
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 p_plugin_pic">
                                    <div class="img-thumbnail pro_theme">
										<img src="<?php echo get_template_directory_uri(); ?>/images/Responsive-Beauty.png" class="img-responsive" alt="img"/>
										<div class="btn-vertical">
										<h4 class="pro_thm">
                                        <a href="https://weblizar.com/themes/beautyspa-premium/">Beautyspa Premium</a></h4>
										</div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 p_plugin_pic">
                                    <div class="img-thumbnail pro_theme">
										<img src="<?php echo get_template_directory_uri(); ?>/images/healthcare1.png" class="img-responsive" alt="img"/>
										<div class="btn-vertical">
										<h4 class="pro_thm">
                                        <a href="https://weblizar.com/themes/healthcare/">Healthcare Premium</a></h4>
										</div>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery visit_pro">
                                <p>Visit Our Latest Pro Themes & See Demos</p>
								<p style="font-size: 17px !important;">We have put in a lot of effort in all our themes, free and premium both. Each of our Premium themes has a corresponding free version so that you can try out the theme before you decide to purchase it.</p>
								<a href="https://weblizar.com/themes/">Visit Themes</a>
                            </div>	
                        </div>
                    </div>
					
					<div id="freepro" class="tab-pane fade">
							<div class=" p_head theme">
                                <!--<h1 class="section-title">Weblizar Offers</h1>-->
                            </div>
						<div class="row p_plugin blog_gallery">		
						<div class="columns">
						  <ul class="price">
							<li class="header" style="background:#26ae91">Green-Lantern</li>
							<li class="grey">Features</li>
							<li>Multiple Templates</li>
							<li>Box Layout</li>
							<li>Unlimited Color Skins</li>
							<li>Customs Widgets</li>
							<li>Home Template Designs</li>
							<li>Portfolio Template Designs</li>
							<li>About Us Template Designs</li>
							<li>Blog Template Designs</li>
							<li>Conatct Template Designs</li>
							<li>Multilingual</li>
						  </ul>
						</div>
						
						 <div class="columns">
						  <ul class="price">
							<li class="header">Free</li>
							<li class="grey">$ 00</li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-check"></i></li>
						  </ul>
						</div>

						<div class="columns">
						  <ul class="price">
							<li class="header" style="background-color:#26ae91">Green-Lantern Pro</li>
							<li class="grey">$ 29</li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li class="grey"><a href="http://demo.weblizar.com/green-lantern-premium/" class="pro_btn">Visit Demo</a></li>
						  </ul>
						</div>
						</div>
					</div>
                </div>
            </div>            
<?php
	}
}
?>