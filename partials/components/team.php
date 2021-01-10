<?php   
  $args2 = array(
    'post_type' => 'team_block',
    'posts_per_page' => 1
  );    
  $my_query2 = new WP_Query( $args2 ); 
    if ( $my_query2->have_posts() ) {
      while ( $my_query2->have_posts() ) {
        $my_query2->the_post();
  ?>
<div class='container section__container a-center last'>
  <h2 class="h2"><?php echo get_field('заголовок_блока_с_командой'); ?></h2>
  <span class="section__line"></span>
  <p class="section__text"><?php echo get_field('описание_блока_с_командой'); ?></p>
  <div class="team">
    <ul class="team__items">
    <?php   
            $args = array(
              'post_type' => 'team',
              'posts_per_page' => 20,
              'order' => 'ASC'
            );    
            $my_query = new WP_Query( $args ); 
            if ( $my_query->have_posts() ) {
              while ( $my_query->have_posts() ) {
                $my_query->the_post();
          ?>
            <li class="team__item">
              <div class="team__item-photo"><img src="<?php echo get_field('аватарка_участника_команды'); ?>"
                  alt="portrait"></div>
              <h4 class="h4 team__item-h"><?php the_title(); ?></h4>
              <span class="team__item-pos"><?php echo get_field('должность_участника_команды'); ?></span>
            </li>
          <?php             
              }            
            }       
            wp_reset_postdata();             
          ?> 
    </ul>
  </div>
</div>
<?php             
  }            
}       
wp_reset_postdata();             
?> 