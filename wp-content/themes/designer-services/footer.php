<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('designer-services-footer-sidebar')) {
        echo '<div class="row sidebar-area footer-area">';
          dynamic_sidebar('designer-services-footer-sidebar');
        echo '</div>';
      }
    ?>
    <div class="row">
      <div class="col-md-12">
        <p class="mb-0 py-3 text-center text-md-left">
          <?php
            if (!get_theme_mod('designer_services_footer_text') ) { ?>
              <?php esc_html_e('Designer WordPress Theme','designer-services'); ?>
            <?php } else {
              echo esc_html(get_theme_mod('designer_services_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('designer_services_copyright_enable', true) == true ) : ?>
            <?php 
            /* translators: %s: Misbah WP */ 
            printf( esc_html__( ' By %s', 'designer-services' ), 'Misbah WP' ); ?>
            <a href="<?php echo esc_url(__('https://wordpress.org', 'designer-services' )); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'designer-services' ), 'WordPress' ); ?></a>
          <?php endif; ?>
        </p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
