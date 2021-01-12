<?php $chevron = '<svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.6561 1L6.65607 6L1.65607 1" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
</svg>' ?>

<div class="navbar">
  <div class="container navbar__container">
    <div class="navbar__left">
      <a href="<?php
        echo get_site_url().translateRuUaEn(
          '/', 
          '/uk/holovna/', 
          '/en/home/'
    );
      ?>" aria-label="logo" class="logo navbar__logo">
        <img class="logo__desc" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo">
        <img class="logo__mob" src="<?php echo get_template_directory_uri(); ?>/img/logo-mob.svg" alt="logo">
      </a>
      <div class="navbar__lang dropdown">
        <div class="dropdown__btn">
          <span class="navbar__lang-current">Ru</span>
          <?php echo $chevron; ?></div>
        <div class="dropdown__content navbar__lang-content">
          <div class="dropdown__links">
            <a data-router-disabled class="dropdown__link navbar__lang-link" href="/">En</a>
            <a data-router-disabled class="dropdown__link navbar__lang-link" href="/">Ua</a>
            <a data-router-disabled class="dropdown__link navbar__lang-link" href="/">Ru</a>
          </div>
        </div>
      </div>
    </div>
    <nav data-move="navbar__mobile-nav,1,960" class="navbar__nav">
      <ul class="navbar__ul">
        <li class="navbar__li dropdown">
          <div class="dropdown__btn">
          <?php echo translateRuUaEn(
                'Услуги', 
                'Послуги', 
                'Services'
          ); 
            ?>
          <?php echo $chevron; ?>
          </div>
          <div class="dropdown__content">
            <div class="dropdown__links">
            <?php   
            $args = array(
              'post_type' => 'services',
              'posts_per_page' => 20,
              'order' => 'ASC'
            );    
            $my_query = new WP_Query( $args ); 
            if ( $my_query->have_posts() ) {
              while ( $my_query->have_posts() ) {
                $my_query->the_post();
          ?>
              <a class="dropdown__link" href="<?php the_permalink();?>"><?php the_title(); ?></a>
              <?php             
              }            
            }       
            wp_reset_postdata();             
          ?> 
            </div>
          </div>
        </li>
        <li class="navbar__li">
          <a href="<?php echo get_site_url()?>/<?php echo translateRuUaEn('polis','polis-ua','polis-en');?>">
          <?php echo translateRuUaEn(
                'Полис', 
                'Поліс', 
                'Polis'
          );
          ?>
          </a>
        </li>
      </ul>
      <div class="navbar__contacts">
        <div class="navbar__contacts-icon">
          <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.6525 22.9484C21.5939 21.271 20.3637 20.0726 18.5607 20.8619L17.4814 21.3421C16.693 21.6892 14.7573 23.8521 11.8817 17.331C9.00512 10.8167 11.9099 10.8405 12.6978 10.4984L13.7821 10.0187C15.5784 9.22432 15.5249 7.50753 14.9991 5.59453L14.6829 4.43652C14.1512 2.52581 13.3591 1.13379 11.5596 1.92514L10.5858 2.35751C9.81745 2.62009 7.6054 3.56198 6.30707 6.25053C4.7477 9.47597 5.16163 13.8506 7.54242 19.2471C9.91798 24.6441 12.8719 27.9001 16.3082 28.9234C19.1639 29.774 21.3557 28.779 22.0653 28.3901L23.0421 27.9577C24.8376 27.1661 24.3463 25.642 23.2877 23.9616L22.6525 22.9484Z" fill="white"/>
          </svg>
        </div>
        <ul class="navbar__contacts-items">
          <li class="navbar__contacts-item">
            <a href="tel:<?php echo preg_replace('/\D+/', '', get_option('company_tel')); ?>">
              <?php echo get_option('company_tel');?>
            </a>
          </li>
          <li class="navbar__contacts-item">
            <a href="mailto:inbox@g-m.partners"><?php echo get_option('company_email');?></a>
          </li>
        </ul>
      </div>
    </nav>
    <button aria-label="navigation" class="navbar__burger">
      <span class="navbar__burger-line navbar__burger-line--1"></span>
      <span class="navbar__burger-line navbar__burger-line--2"></span>
      <span class="navbar__burger-line navbar__burger-line--3"></span>
    </button>
  </div>
  <div class="navbar__mobile-nav"></div>
</div>