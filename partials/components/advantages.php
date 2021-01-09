<div class='container section__container a-center last'>
  <h2 class="h2"><?php echo translateRuUaEn('Наши преимущества', 'Наші переваги', 'Our advantages');?></h2>
  <span class="section__line"></span>
  <div class="cards advantages__cards">
    <?php   
            $args = array(
              'post_type' => 'advantages',
              'posts_per_page' => 6
            );    
            $my_query = new WP_Query( $args ); 
            if ( $my_query->have_posts() ) {
              while ( $my_query->have_posts() ) {
                $my_query->the_post();
    ?>
    <div class="card advantages__card">
      <div class="card__icon advantages__card-icon">
        <img src="<?php echo get_field('иконка_преимущества'); ?>" alt="icon">
      </div>
      <h3 class="h3 card__h advantages__card-h"><?php the_title(); ?></h3>
      <p class="card__text advantages__card-text"><?php echo get_field('описание_преимущества'); ?></p>
    </div>
    <?php             
              }            
            }       
            wp_reset_postdata();             
          ?>
  </div>
</div>