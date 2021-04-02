<div class='container section__container a-center last'>
  <h2 class="h2"><?php 
  if (get_field('заголовок_блока_с_преимуществами')) {
    echo get_field('заголовок_блока_с_преимуществами');
  } else {
    echo translateRuUaEn('Наши преимущества', 'Наші переваги', 'Our advantages');
  }
  ?>
  </h2>
  <?php function get_html($title, $icon, $text) {
    ?>
        <div class="card advantages__card">
      <div class="card__icon advantages__card-icon">
        
        <picture>
          <source srcset="<?php echo preg_replace('/\.+jpg|\.png/m', '.webp',  $icon); ?>"
            type="image/webp">
            <img src="<?php echo $icon; ?>" alt="icon">
        </picture>
      </div>
      <h3 class="h3 card__h advantages__card-h"><?php echo $title; ?></h3>
      <p class="card__text advantages__card-text"><?php echo $text ?></p>
    </div>
  <?php 
} ?>
  <span class="section__line"></span>
  <div class="cards advantages__cards">
  <?php print_r(get_field('преимущество_1')); ?>
  <?php if (get_field('преимущество_1')) { 
    for ($i=0; $i < 3; $i++) { 
      $item = get_field('преимущество_'.$i);
    }
      get_html($item['заголовок_преимущества'], $item['иконка_преимущества'], $item['описание_преимущества']);
      return;
  } else {
      ?>
    <?php
    
            $args = array(
              'post_type' => 'advantages',
              'posts_per_page' => 6,
              'order' => 'ASC'
            );    
            $my_query = new WP_Query( $args ); 
            if ( $my_query->have_posts() ) {
              while ( $my_query->have_posts() ) {
                $my_query->the_post();
          get_html(get_the_title(), get_field('иконка_преимущества'), get_field('описание_преимущества'));
    ?>
    <?php             
          }            
        }       
        wp_reset_postdata();
        return;   
    }         
        ?>
  </div>
</div>