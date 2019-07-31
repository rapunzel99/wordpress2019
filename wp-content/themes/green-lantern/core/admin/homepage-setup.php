<?php if (!function_exists('green_lantern_home_page')) {
	function green_lantern_home_page() {
	$page2=add_theme_page(__('Welcome to Green-Lantern', 'green-lantern'), __('How To Set Homepage', 'green-lantern'), 'edit_theme_options', 'green-lanternhome', 'green_lantern_display_theme_home_page');
	
	add_action('admin_print_styles-'.$page2, 'weblizar_admin_infohome');
	}	
}
add_action('admin_menu', 'green_lantern_home_page');

function weblizar_admin_infohome(){
	// CSS
	wp_enqueue_style('bootstrap',  get_template_directory_uri() .'/core/admin/bootstrap/css/bootstrap.css');
	wp_enqueue_style('admin',  get_template_directory_uri() .'/core/admin/admin-themes.css');
	wp_enqueue_style('font-awesome',get_template_directory_uri() . '/css/font-awesome-4.7.0/css/font-awesome.min.css');

	//JS
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/core/admin/bootstrap/js/bootstrap.js');
	
} 
if (!function_exists('green_lantern_display_theme_home_page')) {
	function green_lantern_display_theme_home_page() {
		$theme_data = wp_get_theme(); ?>		
<div class="wrapper">
<!-- Header -->
<header>
<div id="snow"></div>
<div class="container-fluid p_header1">
	<div class="">
		<div class="row p_head">
		<h2> Green-Lantern Documentation </h2>
			<div class="col-md-8">
			<p>Green Lantern is a fully responsive multipurpose WordPress theme. This theme is responsive and compatible with the latest version of WordPress. This theme is a perfect choice for a travel agency website, hotels and travel agencies review blog, traveling worldwide and tourism blog, travel agents site, tour operator or tourism company website, etc. Green Lantern has custom menus support to choose the menu in Primary Location that is in Header of the site. In the footer section ,theme offers Social Media Links to add your Social Profile Links to gain more visibility.</p> 
			<p>Green Lantern focuses on business template, awesome Touch slider, Powerful but simple Theme Options for full CMS control option to match your logo & website, boxed layout, light & green color skin, translation ready and many more. It is perfect for creating your travel, tour, news, blog website and no need to coding as it is very customizable. </p>
			<a target="_blank"class="view-demo" href="https://wp-themes.com/green-lantern/"> <i class="fa fa-eye"></i> View Demo </a>
			</div>
			<div class="col-md-4"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/Green lantern.jpg" class="img-responsive" alt=""/></div>	
		</div>
	</div>
</div>
<div class="container-fluid home-page">
<h3> Lets Proceed.... </h3>
	<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class="fa fa-chevron-down"></i> How to setup Homepage?</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><h4></h4>
			<h4>1. Go to Customizer -> Homepage Settings -> see the given image - <img class="imgheathcare" src="<?php echo esc_url(get_template_directory_uri()) ?>/images/image1.jpg" class="img-responsive" alt=""/></h4>
			<h4>3. Now go to Theme Options -> Theme General Options -> Select Show Front Page option</h4>
			<h4>4. Save & Publish. </h4>
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><i class="fa fa-chevron-down"></i> How to setup a Slider on theme?</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><h4>1. Go to Appearance -> Customizer. <img class="imgheathcare" src="<?php echo esc_url(get_template_directory_uri()) ?>/images/image2.jpg" class="img-responsive" alt=""/></h4>
			<h4>2. Now go to Theme Options -> Theme Slider Options -> see the given image - </h4>
			<h4>3. Save & Publish.</h4></div>
      </div>
    </div>
	 <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><i class="fa fa-chevron-down"></i> How to setup Footer text and link?</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body"><h4>1. Go to Appearance -> Customizer.</h4>
			<h4>2. Now go to Theme Options -> Footer Options -> you can add text and link. </h4>
			<h4>3. Save & Publish.</h4></div>
      </div>
    </div>
	 <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><i class="fa fa-chevron-down"></i> How to add Social icons?</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body"><h4>1. Go to Appearance -> Customizer.</h4>
			<h4>2. Now go to Theme Options -> Social Options -> here you can add social icons.</h4>
			<h4>3. Save & Publish.</h4></div>
      </div>
    </div>
	 <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><i class="fa fa-chevron-down"></i> How to change layout of homepage?</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body"><h4>1. Go to Appearance -> Customizer.</h4>
			<h4>2. Now go to Theme Options -> Home Page Layout Options </h4>
			<h4>3. Save & Publish.</h4></div>
      </div>
     </div>
  </div> 
</div>
<!-- Header -->
</div>
<?php
	}
}
?>