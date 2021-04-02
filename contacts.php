<?php
/*
Template Name: Contacts
*/
get_header();
?>


<?php get_router('contacts') ?>


<div class="contacts">
  <div class="container contacts-container">
    <div class="contacts-container__left">
      <h1 class="h1"> 
      <?php echo translateRuUaEn(
                'Контакты', 
                'Контакти', 
                'Contacts'
          ); ?>
      </h1>
      <div class="contacts__items">
        <div class="contacts__item">
          <div class="contacts__item-h">       
          <?php echo translateRuUaEn(
                'Телефон', 
                'Телефон', 
                'Phone number'
          ); ?>
          </div>
          <a href="tel:<?php echo preg_replace('/\D+/', '', get_option('company_tel')); ?>" class="contacts__item-link"><?php echo get_option('company_tel');?></a>
        </div>
        <div class="contacts__item">
          <div class="contacts__item-h">E-mail</div>
          <a href="mailto:<?php echo get_option('company_email');?>" class="contacts__item-link"><?php echo get_option('company_email');?></a>
        </div>
        <div class="contacts__item">
          <div class="contacts__item-h">          
          <?php echo translateRuUaEn(
                'Адрес', 
                'Адреса', 
                'Address'
          ); ?></div>
          <a target='_blank' rel='noopener noreferrer' href="<?php echo get_option('company_adress_maps') ?>" class="contacts__item-link"><?php echo translateRuUaEn(
                  get_option('company_adress_ru'), 
                  get_option('company_adress_uk'), 
                  get_option('company_adress_en')
                ); ?></a>
        </div>
        <div class="contacts__item">
          <div class="contacts__item-h">
          <?php echo translateRuUaEn(
                'Социальные сети', 
                'Соціальні мережі', 
                'Social media'
          ); ?>
          
          </div>
          <p class="contacts__item-p"><?php echo get_field('призыв_к_подписке_на_соц_сети'); ?></p>
          <a target='_blank' rel='noopener noreferrer' href="<?php echo get_option('company_facebook');?>"
            class="contacts__item-link contacts__item-link--medium">facebook</a>
          <a target='_blank' rel='noopener noreferrer' href="<?php echo get_option('company_instagram');?>"
            class="contacts__item-link contacts__item-link--medium">instagram</a>
          <a target='_blank' rel='noopener noreferrer' href="https://t.me/<?php echo get_option('company_telegram');?>"
            class="contacts__item-link contacts__item-link--medium">telegram</a>
        </div>
      </div>
    </div>
    <div class="contacts-container__right">
      <iframe title="google-maps"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.269994366614!2d30.734262915591923!3d46.48296597912623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63151891bf6f5%3A0x5f298cbe094ab98f!2z0JDQtNCy0L7QutCw0YLRgdC60L7QtSDQvtCx0YrQtdC00LjQvdC10L3QuNC1ICJHLk0uIFBhcnRuZXJzIg!5e0!3m2!1sru!2sua!4v1617351041589!5m2!1sru!2sua"
        width="960" height="1080" frameborder="0" style="border:0;width: 100%;height: 100%;" allowfullscreen=""
        aria-hidden="false" tabindex="0" loading="lazy"></iframe>
    </div>

  </div>
  <div class="contacts-bottom">
    <div class="footer footer--dark">
      <div class="container footer__container">
      <div class="container__left">
      <?php
      $args = array(
        'post_type' => 'footer',
        'posts_per_page' => 1
      );    
      $my_query = new WP_Query( $args ); 
        if ( $my_query->have_posts() ) {
          while ( $my_query->have_posts() ) {
            $my_query->the_post();
      ?>
      <h2 class="h2 footer__h2">
      <?php
      if (get_field('заголовок_в_футере')) {
        echo get_field('заголовок_в_футере');  
      } else {
        echo get_field('заголовок_футер');
      }
       ?>
      </h2>
      <div class="section__line"></div>
      <p class="footer__text">
      <?php
      if (get_field('текст_в_футере')) {

        echo get_field('текст_в_футере');  

      } else {
        echo get_field('текст_футер');
      }
       ?>
      </p>
      <?php             
  }            
}  
wp_reset_postdata();             
?> 
    </div>
        <div class="container__right">
          <?php include get_theme_file_path( 'partials/components/form.php' ); ?>
        </div>
      </div>
    </div>
    <div class="container contacts-bottom__container">
      <div class="footer__bottom-info contacts__bottom-info">
        <div class="footer__bottom-info-content contacts__bottom-info-content">
          <p class="footer__bottom-id contacts__bottom-id">
          <?php 
            echo translateRuUaEn(
              'Адвокатское объединение «Г.М. Партнерс»<br>ИКЮЛ: 42308793', 
              'Адвокатське об\'єднання «Г.М. Партнерс»<br>ІКЮО: 42308793', 
              'Bar Association "G.M. Partners"<br>LEIC: 42308793'
            );
          ?></p>
          <a href="#" class="footer__bottom-privacy contacts__bottom-privacy">
          <?php 
            echo translateRuUaEn(
              '«Политика конфиденциальности и адвокатская тайна»', 
              '«Політика конфіденційності та адвокатська таємниця»', 
              '"Privacy Policy and Advocate Secrecy"'
            );
          ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  get_footer();
?>