<?php
/*
Template Name: Home
*/
get_header();
?>
<?php get_router('home') ?>


  <header class="home-header">
    <div class="home-header__bg" style="background-image: url('<?php echo get_field('фоновая_картинка_на_первом_экране')['sizes']['2048x2048']; ?>)"></div>
    <div class="container home-header__container a-center">
      <h1 data-i class="h1 home-header__h1"><?php echo get_field('заголовок_на_первом_экране'); ?></h1>
      <a data-i href="#" class="btn btn--white home-header__btn"><?php echo get_field('текст_кнопки_на_первом_экране'); ?>
        <span class="arrow"><?php include get_theme_file_path( './partials/svg/arrow.php' ); ?></span>
      </a>
    </div>
  </header>
  <main>
    <section class='section services-section'>
      <div class='container section__container a-center'>
        <h2 class="h2"><?php echo get_field('заголовок_на_экране_услуг'); ?></h2>
        <span class="section__line"></span>
        <p class="section__text"><?php echo get_field('текст_на_экране_услуг'); ?></p>
        <div class="cards services-section__cards">       
          <?php   
            $args = array(
              'post_type' => 'services',
              'posts_per_page' => 20
            );    
            $my_query = new WP_Query( $args ); 
            $counter = 0;
            if ( $my_query->have_posts() ) {
              while ( $my_query->have_posts() ) {
                $my_query->the_post();
                $counter++;
          ?>
            <a 
            data-show-items 
            href="<?php the_permalink();?>" 
            class="card services-section__card <?php if ($counter < 3) echo 'visible';?>"
            >
              <div class="card__icon services-section__card-icon">
                <img src="<?php echo get_field('иконка_для_главной_страницы'); ?>" alt="icon">
              </div>
              <h3 class="h3 card__h services-section__card-h"><?php the_title(); ?></h3>
              <p class="card__text services-section__card-text">
                <?php echo get_field('описание_услуги'); ?>
              </p>
            </a>
          <?php             
              }            
            }       
            wp_reset_postdata();             
          ?> 
        </div>
        <button 
        data-show-text="<?php echo translateRuUaEn('Больше услуг', 'Більше послуг', 'View more');?>" data-hide-text="<?php echo translateRuUaEn('Свернуть', 'Згорнути', 'Hide');?>" 
        data-show-more 
        class="btn btn--black services-section__view-more">
        <?php echo translateRuUaEn('Больше услуг', 'Більше послуг', 'View more');?>
        </button>
      </div>
    </section>
    <section class='section section--dark advantages'>
      <?php include get_theme_file_path( './partials/components/advantages.php' ); ?>
    </section>
    <section class='section polis-section'>
      <div class='container section__container polis-section__container last'>
        <div class="polis-section__container-left">
          <h2 class="h2"><?php echo get_field('заголовок_на_экране_полиса'); ?></h2>
          <span class="section__line"></span>
          <p class="section__text"><?php echo get_field('текст_на_экране_полиса'); ?></p>
          <a href="#" class="btn btn--black polis-section__btn">
          <?php echo translateRuUaEn('Подробнее', 'Детальніше', 'Details');?>
          </a>
        </div>
        <div class="polis-section__container-right">
          <div class="polis-card">
            <div class="polis-card__content">
              <img class="polis-card__img polis-card__img--main" src="<?php echo get_field('изображение_на_передней_части_карты'); ?>" alt="card">
              <img class="polis-card__img polis-card__img--alternate" src="<?php echo get_field('изображение_на_задней_части_карты'); ?>" alt="card">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class='section section--dark'>
      <?php include get_theme_file_path( './partials/components/team.php' ); ?>
    </section>
    <?php include get_theme_file_path( './partials/clients.php' ); ?>
  </main>
  <?php include get_theme_file_path( './partials/footer.php' ); ?>
  <?php
  get_footer();
  ?>