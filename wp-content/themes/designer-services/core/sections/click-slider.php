<?php if ( get_theme_mod('designer_services_slider_box_enable', true) == true ) : ?>
<div id="slider">
  <div class="slider">
    <?php
    $slider_image = get_theme_mod('designer_services_slider_counter','');
    for ( $i = 1; $i <= $slider_image; $i++ ){ ?>
      <div class="slider-image-box" data-dot-img="<?php echo esc_url(get_theme_mod('designer_services_slider_image'.$i)); ?>">
        <img src="<?php echo esc_url(get_theme_mod('designer_services_slider_image'.$i)); ?>" class="slide-image"/>
        <div class=" slider-content text-left align-self-center">
          <h2 class=""><?php echo esc_html(get_theme_mod('designer_services_slider_sub_heading'.$i));?></h2>
          <h1 class="mt-md-3"><?php echo esc_html(get_theme_mod('designer_services_slider_main_heading'.$i));?></h1>
          <div class="mt-lg-4">
            <?php if ( get_theme_mod('designer_services_slider_button_url'.$i, true) == true || get_theme_mod('designer_services_slider_button_text'.$i, true) == true ) : ?>
              <a href="<?php echo esc_url(get_theme_mod('designer_services_slider_button_url'.$i));?>" class="button animate__animated animate__pulse">
              <?php echo esc_html(get_theme_mod('designer_services_slider_button_text'.$i));?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php }?>
  </div>
</div>
<?php endif; ?>