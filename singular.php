<?php
get_header();
?>
<?php get_router('service') ?>

<header class="service-header">
  <div class="service-header__bg"
    style="background-image: url('<?php echo get_template_directory_uri();?>/img/home/bg.jpg')"></div>
  <div class="container service-header__container a-center">
    <h1 data-i class="h1 service-header__h1">Защита в уголовных процессах</h1>
    <p data-i class="service-header__desc">Наши адвокаты обеспечат надежную и эффективную правовую помощь как на стадии
      следствия, так и в судебном производстве, анализируя каждую деталь и используя максимум возможностей для
      определения наилучшей стратегии защиты</p>
    <a data-i href="#" class="btn btn--white service-header__btn">Получить консультацию
      <span class="arrow"><?php include get_theme_file_path( './partials/svg/arrow.php' ); ?></span>
    </a>
  </div>
</header>
<main>
  <section class='section services-types'>
    <div class='container section__container'>
      <ul class="services-types__cards">
        <?php 
        $services_types = get_field('преимущества_услуги');

        if( $services_types ): 
          for ($i=0; $i < 7; $i++) {  
            
          if($services_types['преимущество_'.$i.'_заголовок']) {
            ?>

        <li class="services-types__card">
          <div class="services-types__card-icon">
            <img src="<?php echo $services_types['преимущество_'.$i.'_иконка'] ?>" alt="icon">
          </div>
          <div class="services-types__content">
            <h3 class="h3 services-types__h3"><?php echo $services_types['преимущество_'.$i.'_заголовок'] ?></h3>
            <p class="services-types__text"><?php echo $services_types['преимущество_'.$i.'_текст'] ?></p>
          </div>
        </li>
        <?php 
        }
      }
      endif;
        ?>
      </ul>
    </div>
  </section>
  <section class='section section--dark advantages'>
    <?php include get_theme_file_path( './partials/components/advantages.php' ); ?>
  </section>
  <section class='section specialists'>
    <div class='container section__container a-center'>
      <h2 class="h2">Профильный специалист</h2>
      <span class="section__line"></span>
      <ul class="specialists__items">
        <?php
          $terms = get_terms(['taxonomy' => 'services_team_tax', 'name' => get_the_title() , 'pad_counts' => 1, 'parent' => 0, 'hide_empty' => false, 'post_per_page' => 3 ]);
              foreach ($terms as $term):
                $args = ['post_type' => 'team', 'posts_per_page' => 3, 'orderby' => 'id', 'order' => 'ASC', 'tax_query' => [['taxonomy' => 'services_team_tax', 'field' => 'term_id', 'terms' => $term->term_id, 'include_children' => false, ], ], ];
                $posts_with_term = new WP_Query($args);
                while ($posts_with_term->have_posts()):
                  $posts_with_term->the_post(); ?>
                  <li class="specialists__item">
                    <div class="specialists__item-photo">
                      <img src="<?php echo get_field('фото_участника_команды'); ?>" alt="">
                    </div>
                    <div class="specialists__item-content">
                      <h3 class="specialists__item-h"><?php the_title(); ?></h3>
                      <div class="specialists__item-occupation">
                      <?php echo get_field('должность_участника_команды'); ?>
                      </div>
                      <div class="specialists__item-text">
                        <?php echo get_field('биографический_текст'); ?>
                      </div>
                    </div>
                  </li>
        <?php
            endwhile;
            wp_reset_postdata();
            endforeach;
        ?>
      </ul>
    </div>
  </section>
  <?php include get_theme_file_path( './partials/clients.php' ); ?>
</main>
<?php include get_theme_file_path( './partials/footer.php' ); ?>
<?php
get_footer();
?>