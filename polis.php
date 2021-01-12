<?php
/*
Template Name: Polis
*/
get_header();
?>
<?php get_router('polis') ?>

  <header class="polis-header">
    <div class="polis-header__bg" style="background-image: url('<?php echo get_field('фоновая_картинка_на_первом_экране'); ?>')"></div>
    <div class="container polis-header__container a-center">
      <h1 data-i class="h1 polis-header__h1"><?php echo get_field('заголовок_на_первом_экране'); ?></h1>
      <p data-i class="polis-header__desc"><?php echo get_field('описание_на_первом_экране'); ?></p>
      <div data-i class="polis-header__btns">
        <a data-href="#get-polis" href="#" class="btn btn--white polis-header__btn">
          <?php echo get_field('текст_кнопки_на_первом_экране'); ?>
        </a>
        <a data-href="#how-work" href="#" class="btn btn--white btn--oultine polis-header__btn">
          <?php echo get_field('текст_второй_кнопки_на_первом_экране'); ?>
        </a>
      </div>
    </div>
  </header>
  <main>
    <section id="how-work" class='section how-work'>
      <div class='container section__container a-center'>
        <h2 class="h2"><?php echo get_field('заголовок_на_экране_этапов_работы'); ?></h2>
        <span class="section__line"></span>
        <ul class="how-work__items">
        <?php 
          $steps = get_field('этапы_работы');
          $steps_numbers = array('первый', 'второй', 'третий', 'четвёртый');

        if( $steps ): 
          for ($i=0; $i < 5; $i++) {  
            
          if($steps[$steps_numbers[$i].'_этап_заголовок']) {
            ?>
          <li class="how-work__item">
            <div class="how-work__icon">
            <img src="<?php echo $steps[$steps_numbers[$i].'_этап_иконка'];?>" alt="icon"></div>
            <span class="how-work__num">0<?php echo $i+1; ?></span>
            <h3 class="how-work__h"><?php echo $steps[$steps_numbers[$i].'_этап_заголовок'] ?></h3>
            <p class="how-work__text"><?php echo $steps[$steps_numbers[$i].'_этап_текст'] ?></p>
          </li>
          <?php 
          }
        }
        endif;
          ?>
        </ul>
      </div>
    </section>
    <section class='section section--dark plans'>
      <div class='container section__container a-center last'>
        <h2 class="h2"><?php echo get_field('тарифные_планы_заголовок'); ?></h2>
        <span class="section__line"></span>
        <div class="plans__table-wrapper">
          <table class="plans__table">
            <thead>
              <tr class="tr-head">
                <th scope="col"></th>
                <th scope="col">STANDART</th>
                <th scope="col">SILVER</th>
                <th scope="col">VIP +</th>
              </tr>
            </thead>
            <tbody>
            <?php   
              $args = array(
                'post_type' => 'polis_table',
                'posts_per_page' => 30,
                'order' => 'ASC'
              );    
              $my_query = new WP_Query( $args ); 
                if ( $my_query->have_posts() ) {
                  while ( $my_query->have_posts() ) {
                    $my_query->the_post();
              ?>
              <tr>
                <th class="th-left" scope="row"><?php the_title(); ?></th>
                <td><?php echo get_field('поле_standart'); ?></td>
                <td><?php echo get_field('поле_silver'); ?></td>
                <td><?php echo get_field('поле_vip'); ?></td>
              </tr>
              <?php             
                  }            
                }       
                wp_reset_postdata();             
              ?> 
            </tbody>
          </table>
        </div>

      </div>
    </section>
    <section class='section advantages'>
      <?php include get_theme_file_path( './partials/components/advantages.php' ); ?>     
    </section>
    <section class='section section--dark services-instruction'>
      <div class='container section__container a-center last'>
        <?php include get_theme_file_path( './partials/polis-slider.php' ); ?>
      </div>
    </section>
    <section id="get-polis" class='section get-polis'>
      <div class='container section__container a-center'>
        <h2 class="h2"><?php echo get_field('получить_адвокатский_полис_заголовок'); ?></h2>
        <span class="section__line"></span>
        <p class="section-text"><?php echo get_field('получить_адвокатский_полис_текст'); ?></p>
        <ul class="get-polis__items">
        <?php 
          $cards = get_field('виды_адвокатских_полисов');
          
        if( $cards ): 
          for ($i=0; $i < 4; $i++) {  
          if($cards['заголовок_'.$i]) {
            ?>
            <li class="get-polis__item">
              <div class="get-polis__item-left">
                <div class="polis-card">
                  <div class="polis-card__content">
                    <img 
                    class="polis-card__img polis-card__img--main" 
                    src="<?php echo $cards['изображение_на_передней_части_карты_'.$i] ?>" 
                    alt="card"
                    >
                    <img 
                    class="polis-card__img polis-card__img--alternate" 
                    src="<?php echo $cards['изображение_на_задней_части_карты_'.$i] ?>" 
                    alt="card"
                    >
                  </div>
                </div>
              </div>
              <div class="get-polis__item-right">
                <h4 class="get-polis__item-h"><?php echo $cards['заголовок_'.$i] ?></h4>
                <p class="get-polis__item-text"><?php echo $cards['описание_'.$i] ?></p>
                <div class="get-polis__item-order">
                  <a data-href="#footer" href="#" class="btn btn--black get-polis__btn">
                  <?php echo translateRuUaEn(
                    'Оформить заявку', 
                    'Оформити заявку', 
                    'Make a request'
                    ); 
                ?>
                  </a>
                  <span class="get-polis__price"><?php echo $cards['стоимость_'.$i] ?></span>
                </div>
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
    <?php include get_theme_file_path( './partials/clients.php' ); ?>

  </main>
<?php include get_theme_file_path( './partials/footer.php' ); ?>
<?php
get_footer();
?>