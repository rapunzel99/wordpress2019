 <?php $wl_theme_options = weblizar_get_options(); ?>   
        <div class="swiper-container swiper-container-slider2">
          <div class="swiper-wrapper">
             <?php if($wl_theme_options['slide_image']!='') {  ?>
            <div class="swiper-slide">
            <img src="<?php echo esc_url($wl_theme_options['slide_image']); ?>"/>
            <div class="container">
                <div class="carousel-caption">
                  <?php if($wl_theme_options['slide_title']!='') {  ?>
                  <div class="carousel-text">
                      <h1 class="animation animated-item-2 head_1 title"><?php echo esc_attr($wl_theme_options['slide_title']); ?></h1>   
                    <?php if($wl_theme_options['slide_desc']!='') {  ?>
                    <ul class="list-unstyled carousel-list">
                      <li class="animation animated-item-3 desc_1 desc"><?php echo get_theme_mod('slide_desc' , $wl_theme_options['slide_desc']); ?></li>
                    </ul>
                    <?php } if($wl_theme_options['slide_btn_link']!='') { ?>
                      <a class="enigma_blog_read_btn  animation animated-item-3 rdm_1 btn" href="<?php if($wl_theme_options['slide_btn_link']!='') { echo esc_url($wl_theme_options['slide_btn_link']); } ?>" role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text']); ?></a>
                    <?php } ?>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
             <?php } if($wl_theme_options['slide_image_1']!='') {  ?>
             <div class="swiper-slide">
            <img src="<?php echo esc_url($wl_theme_options['slide_image_1']); ?>"/>
            <div class="container">
                <div class="carousel-caption">
                  <?php if($wl_theme_options['slide_title_1']!='') {  ?>
                  <div class="carousel-text">
                      <h1 class="animation animated-item-2 head_2 title"><?php echo esc_attr($wl_theme_options['slide_title_1']); ?></h1>   
                    <?php if($wl_theme_options['slide_desc_1']!='') {  ?>
                    <ul class="list-unstyled carousel-list">
                      <li class="animation animated-item-3 desc_2 desc"><?php echo get_theme_mod('slide_desc_1' , $wl_theme_options['slide_desc_1']); ?></li>
                    </ul>
                    <?php } if($wl_theme_options['slide_btn_link_1']!='') { ?>
                      <a class="enigma_blog_read_btn  animation animated-item-3 rdm_2 btn" href="<?php if($wl_theme_options['slide_btn_link_1']!='') { echo esc_url($wl_theme_options['slide_btn_link_1']); } ?>" role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_1']); ?></a>
                    <?php } ?>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
             <?php } if($wl_theme_options['slide_image_2']!='') {  ?>
             <div class="swiper-slide">
            <img src="<?php echo esc_url($wl_theme_options['slide_image_2']); ?>"/>
            <div class="container">
                <div class="carousel-caption">
                  <?php if($wl_theme_options['slide_title_2']!='') {  ?>
                  <div class="carousel-text">
                      <h1 class="animation animated-item-2 head_3 title"><?php echo esc_attr($wl_theme_options['slide_title_2']); ?></h1> 
                    <?php if($wl_theme_options['slide_desc_2']!='') {  ?>
                    <ul class="list-unstyled carousel-list">
                      <li class="animation animated-item-3 desc_3 desc"><?php echo get_theme_mod('slide_desc_2' , $wl_theme_options['slide_desc_2']); ?></li>
                    </ul>
                   <?php } if($wl_theme_options['slide_btn_link_2']!='') { ?>
                      <a class="enigma_blog_read_btn  animation animated-item-3 rdm_3 btn" href="<?php if($wl_theme_options['slide_btn_link_2']!='') { echo esc_url($wl_theme_options['slide_btn_link_2']); } ?>" role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_2']); ?></a>
                    <?php } ?>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
             <?php } ?>
          </div>
          <!-- Add Pagination -->
            <div class="swiper-pagination swiper'"></div>
            <div class="swiper-button-next swiper' swiper-button-next-cont swiper-button-white"></div>
            <div class="swiper-button-prev swiper' swiper-button-prev-cont swiper-button-white"></div>
        </div>
<script type="text/javascript">
var mySwiper = new Swiper ('.swiper-container', {
  pagination: '.swiper-pagination',
  paginationClickable: true,

  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',

  // AutoPlay
  <?php if($wl_theme_options['side_interval']!='') { ?>
  autoplay: <?php echo esc_attr($wl_theme_options['side_interval']); ?>,
  <?php } else { ?>
  autoplay: 2500,
  <?php } ?>
  // Loop
  loop: true,
  loopAdditionalSlides: 2,
  loopedSlides: 2,

  // Position
  slidesPerView: 'auto', //If "auto" or slidesPerView > 1, enable watchSlidesVisibility for lazy load

  // Keyboard and Mousewheel
  keyboardControl: true,
  mousewheelControl: true,
  mousewheelForceToAxis: true, // just use the horizontal axis to 

  // Lazy Loading 
  watchSlidesVisibility: true,
  preloadImages: false,
  lazyLoading: true,
})
<?php if(get_theme_mod('side_pause','1')=='1'){  ?>
  jQuery('.swiper-container').on('mouseenter', function(e){
    console.log('stop autoplay');
    mySwiper.stopAutoplay();
  })
  jQuery('.swiper-container').on('mouseleave', function(e){
    console.log('start autoplay');
    mySwiper.startAutoplay();
  })
<?php } ?>
</script>
