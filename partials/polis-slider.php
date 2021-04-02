<div class="services-instruction__slider-wrapper">
  <div data-img="-1" class="services-instruction__slider">
    <div data-img="1" class="services-instruction__slides">
    <?php   
        $args = array(
          'post_type' => 'polis_slider',
          'posts_per_page' => 10
        );    
        $my_query = new WP_Query( $args ); 
          if ( $my_query->have_posts() ) {
            while ( $my_query->have_posts() ) {
              $my_query->the_post();
    ?>
        <div data-slide class="services-instruction__slide">
          <div class="services-instruction__slide-content">
            <div class="services-instruction__slide-content-left">
              <h3 class="h3"><?php the_title(); ?></h3>
              <span class="section__line"></span>
              <p class="services-instruction__text"><?php echo get_field('описание_в_слайде'); ?></p>
            </div>
            <div class="services-instruction__slide-content-right">
              <picture>
              <source
                srcset="<?php echo preg_replace('/\.+jpg|\.png/m', '.webp',  get_field('изображение')); ?>"
                type="image/webp">
                <img src="<?php echo get_field('изображение'); ?>" alt="" class="services-instruction__img">
            </picture>
            </div>
          </div>
        </div>
        <?php             
              }            
            }       
            wp_reset_postdata();             
          ?>
    </div>
  </div>
  <nav data-i class="services-instruction__slider-nav">
    <div data-nav="prev" class="circle-link services-instruction__slider-nav-item services-instruction__slider-nav-item--prev">
      <span class="circle-link__circle"></span>
      <svg class="services-instruction__slider-icon" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.293 0.292786C8.48053 0.105315 8.73484 0 9 0C9.26516 0 9.51947 0.105315 9.707 0.292786L15.707 6.29279C15.8945 6.48031 15.9998 6.73462 15.9998 6.99979C15.9998 7.26495 15.8945 7.51926 15.707 7.70679L9.707 13.7068C9.5184 13.8889 9.2658 13.9897 9.0036 13.9875C8.7414 13.9852 8.49059 13.88 8.30518 13.6946C8.11977 13.5092 8.0146 13.2584 8.01233 12.9962C8.01005 12.734 8.11084 12.4814 8.293 12.2928L12.586 7.99979H1C0.734784 7.99979 0.48043 7.89443 0.292893 7.70689C0.105357 7.51936 0 7.265 0 6.99979C0 6.73457 0.105357 6.48022 0.292893 6.29268C0.48043 6.10514 0.734784 5.99979 1 5.99979H12.586L8.293 1.70679C8.10553 1.51926 8.00021 1.26495 8.00021 0.999786C8.00021 0.734622 8.10553 0.480314 8.293 0.292786Z" fill="#130F10"/>
      </svg>
    </div>
    <div data-nav="next" class=" circle-link services-instruction__slider-nav-item services-instruction__slider-nav-item--next">
      <span class="circle-link__circle"></span>
      <svg class="services-instruction__slider-icon" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.293 0.292786C8.48053 0.105315 8.73484 0 9 0C9.26516 0 9.51947 0.105315 9.707 0.292786L15.707 6.29279C15.8945 6.48031 15.9998 6.73462 15.9998 6.99979C15.9998 7.26495 15.8945 7.51926 15.707 7.70679L9.707 13.7068C9.5184 13.8889 9.2658 13.9897 9.0036 13.9875C8.7414 13.9852 8.49059 13.88 8.30518 13.6946C8.11977 13.5092 8.0146 13.2584 8.01233 12.9962C8.01005 12.734 8.11084 12.4814 8.293 12.2928L12.586 7.99979H1C0.734784 7.99979 0.48043 7.89443 0.292893 7.70689C0.105357 7.51936 0 7.265 0 6.99979C0 6.73457 0.105357 6.48022 0.292893 6.29268C0.48043 6.10514 0.734784 5.99979 1 5.99979H12.586L8.293 1.70679C8.10553 1.51926 8.00021 1.26495 8.00021 0.999786C8.00021 0.734622 8.10553 0.480314 8.293 0.292786Z" fill="#130F10"/>
      </svg>
    </div>
  </nav>
</div>