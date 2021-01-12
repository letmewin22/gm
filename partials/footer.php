<?php
if (get_field('заголовок_в_футере')) { 
  
  ?>

<footer id="footer" class="footer footer--dark">
  <div class="container footer__container">
    <div class="container__left">
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
    </div>
    <div class="container__right">
      <form id="form" class="form" novalidate>
        <div class="input-container form__input-container">
          <input 
          data-input 
          type="text" class="input form__input" 
          name="Name" 
          id="name"
          >
          <label class="label form__label" for="name">
            <?php echo translateRuUaEn(
                'Ваше имя', 
                'Ваше ім\'я', 
                'Your name'
              ); 
            ?>
          </label>
        </div>
        <div class="input-container form__input-container">
          <input 
          data-input 
          data-validation="minlength(4) phone" 
          type="tel" 
          class="input form__input" 
          name="Phone" 
          id="tel"
          >
          <label class="label form__label" for="tel">
            <?php echo translateRuUaEn(
                'Ваш телефон', 
                'Ваш телефон', 
                'Your phone'
              ); 
            ?>
          </label>
          <div class="input-validate form__input-validate">
            <?php echo translateRuUaEn(
                  'Некорректный номер', 
                  'Некоректний номер', 
                  'Incorrect phone'
                ); 
            ?>
          </div>
        </div>
        <div class="input-container form__input-container">
          <textarea 
          data-input 
          data-validation="maxlength(1000)" 
          class="input form__input" 
          name="Message" 
          id="text"
          ></textarea>
          <label class="label form__label" for="text">
          <?php echo translateRuUaEn(
                'У вас есть вопросы?', 
                'У вас є питання?', 
                'Do you have a question?'
              );
            ?>
          </label>
          <div data-length class="length-counter form__length-counter">1000</div>
          <div class="input-validate form__input-validate">
          <?php echo translateRuUaEn(
                'Превышена максимальная длина', 
                'Перевищена максимальна довжина', 
                'Exceeded maximum length'
              );
            ?>
          </div>
        </div>
        <div data-error class="form__error-message">
          <div class="form__error-message-text">
          <?php echo translateRuUaEn(
                'Произошла ошибка. Попробуйте ещё раз', 
                'Виникла помилка. Спробуйте ще раз', 
                'An error has occurred. Try again'
              );
            ?>
          </div>
        </div>
        <button class="btn btn--black form__btn">
          <span class="form__btn-text">
            <?php 
            $btn_name = translateRuUaEn(
              'Получить консультацию', 
              'Отримати консультацію', 
              'To get a consultation'
            );
            if (get_field('текст_кнопки_в_футере')) {
              $btn_name = get_field('текст_кнопки_в_футере');
            }
            echo $btn_name;
            ?>
          </span>
          <span class="btn__overlay"></span>
          <span class="form__btn-loader">
            <svg class="circular" viewBox="25 25 50 50">
              <circle stroke="green" class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
            </svg>
          </span>
        </button>
        <small class="form__policy">
          <?php echo translateRuUaEn(
                    'Нажимая «'.$btn_name.'», вы соглашаетесь с условиями обработки персональных данных', 
                    'Натискаючи «'.$btn_name.'» ви погоджуєтеся з умовами обробки персональних даних', 
                    'By clicking "'.$btn_name.'" you agree to the terms of processing personal data'
                  );
          ?>
        </small>
      </form>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container footer__bottom-container">
      <div class="footer__bottom-content">
        <div class="footer__bottom-content-left">
          <a href="/" aria-label="logo" class="footer__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.svg" alt="logo">
          </a>
          <ul class="footer__social">
            <li class="footer__social-item">
              <a 
              target='_blank' 
              rel='noopener noreferrer' 
              href="<?php echo get_option('company_instagram');?>"
              >
              instagram
              </a>
            </li>
            <li class="footer__social-item">
              <a 
              target='_blank' 
              rel='noopener noreferrer' 
              href="<?php echo get_option('company_facebook');?>"
              >
              facebook
              </a>
            </li>
            <li class="footer__social-item">
              <a 
              target='_blank' 
              rel='noopener noreferrer' 
              href="https://t.me/<?php echo get_option('company_telegram');?>"
              >
                telegram
              </a>
            </li>
          </ul>
        </div>
        <div class="footer__bottom-content-right">
          <div class="footer__bottom-contacts">
            <div class="footer__bottom-contacts-icon">
              <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.6525 22.9484C21.5939 21.271 20.3637 20.0726 18.5607 20.8619L17.4814 21.3421C16.693 21.6892 14.7573 23.8521 11.8817 17.331C9.00512 10.8167 11.9099 10.8405 12.6978 10.4984L13.7821 10.0187C15.5784 9.22432 15.5249 7.50753 14.9991 5.59453L14.6829 4.43652C14.1512 2.52581 13.3591 1.13379 11.5596 1.92514L10.5858 2.35751C9.81745 2.62009 7.6054 3.56198 6.30707 6.25053C4.7477 9.47597 5.16163 13.8506 7.54242 19.2471C9.91798 24.6441 12.8719 27.9001 16.3082 28.9234C19.1639 29.774 21.3557 28.779 22.0653 28.3901L23.0421 27.9577C24.8376 27.1661 24.3463 25.642 23.2877 23.9616L22.6525 22.9484Z" fill="white"/>
              </svg>
            </div>
            <ul class="footer__bottom-contacts-items">
              <li class="footer__bottom-contacts-item">
                <a href="tel:<?php echo preg_replace('/\D+/', '', get_option('company_tel')); ?>"><?php echo get_option('company_tel');?></a>
              </li>
              <li class="footer__bottom-contacts-item">
                <a href="mailto:inbox@g-m.partners"><?php echo get_option('company_email');?></a>
              </li>
            </ul>
          </div>
          <?php $adress = translateRuUaEn(
                  get_option('company_adress_ru'), 
                  get_option('company_adress_uk'), 
                  get_option('company_adress_en')
                );

                if($adress) {
          ?>
          <div class="footer__bottom-contacts">
            <div class="footer__bottom-contacts-icon">
              <svg width="19" height="27" viewBox="0 0 19 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.2222 4.51097C15.6454 1.78787 12.8449 0.124229 9.73053 0.0606504C9.59758 0.0579082 9.46377 0.0579082 9.33078 0.0606504C6.2165 0.124229 3.41591 1.78787 1.83913 4.51097C0.22744 7.29439 0.183344 10.6378 1.72115 13.4547L8.16359 25.2556C8.16649 25.2608 8.16938 25.2661 8.17237 25.2713C8.45582 25.7643 8.9636 26.0586 9.53076 26.0586C10.0979 26.0586 10.6056 25.7642 10.889 25.2713C10.892 25.2661 10.8949 25.2608 10.8978 25.2556L17.3403 13.4547C18.878 10.6378 18.8339 7.29439 17.2222 4.51097ZM9.53065 11.8399C7.51612 11.8399 5.87718 10.1997 5.87718 8.18362C5.87718 6.16755 7.51612 4.52737 9.53065 4.52737C11.5452 4.52737 13.1841 6.16755 13.1841 8.18362C13.1841 10.1997 11.5452 11.8399 9.53065 11.8399Z" fill="white"/>
              </svg>
            </div>
            <ul class="footer__bottom-contacts-items">
              <li class="footer__bottom-contacts-item">
                <a 
                style="max-width:200px;" 
                target='_blank' 
                rel='noopener noreferrer' 
                href="<?php echo get_option('company_adress_maps') ?>"
                >
                <?php
                  echo $adress;
                ?>
                </a>
              </li>
            </ul>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="footer__bottom-info">
        <div class="footer__bottom-info-content">
          <p class="footer__bottom-id">
          <?php 
            echo translateRuUaEn(
              'Адвокатское объединение «Г.М. Партнерс»<br>ИКЮЛ: 42308793', 
              'Адвокатське об\'єднання «Г.М. Партнерс»<br>ІКЮО: 42308793', 
              'Bar Association "G.M. Partners"<br>LEIC: 42308793'
            );
          ?>
          </p>
          <a href="#" class="footer__botom-privacy">
          <?php 
            echo translateRuUaEn(
              '«Политика конфиденциальности и адвокатская тайна»', 
              '«Політика конфіденційності та адвокатська таємниця»', 
              '"Privacy Policy and Advocate Secrecy"'
            );
          ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php } else { ?>

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
<footer id="footer" class="footer footer--dark">
  <div class="container footer__container">
    <div class="container__left">
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
    </div>
    <div class="container__right">
      <form id="form" class="form" novalidate>
        <div class="input-container form__input-container">
          <input 
          data-input 
          type="text" class="input form__input" 
          name="Name" 
          id="name"
          >
          <label class="label form__label" for="name">
            <?php echo translateRuUaEn(
                'Ваше имя', 
                'Ваше ім\'я', 
                'Your name'
              ); 
            ?>
          </label>
        </div>
        <div class="input-container form__input-container">
          <input 
          data-input 
          data-validation="minlength(4) phone" 
          type="tel" 
          class="input form__input" 
          name="Phone" 
          id="tel"
          >
          <label class="label form__label" for="tel">
            <?php echo translateRuUaEn(
                'Ваш телефон', 
                'Ваш телефон', 
                'Your phone'
              ); 
            ?>
          </label>
          <div class="input-validate form__input-validate">
            <?php echo translateRuUaEn(
                  'Некорректный номер', 
                  'Некоректний номер', 
                  'Incorrect phone'
                ); 
            ?>
          </div>
        </div>
        <div class="input-container form__input-container">
          <textarea 
          data-input 
          data-validation="maxlength(1000)" 
          class="input form__input" 
          name="Message" 
          id="text"
          ></textarea>
          <label class="label form__label" for="text">
          <?php echo translateRuUaEn(
                'У вас есть вопросы?', 
                'У вас є питання?', 
                'Do you have a question?'
              );
            ?>
          </label>
          <div data-length class="length-counter form__length-counter">1000</div>
          <div class="input-validate form__input-validate">
          <?php echo translateRuUaEn(
                'Превышена максимальная длина', 
                'Перевищена максимальна довжина', 
                'Exceeded maximum length'
              );
            ?>
          </div>
        </div>
        <div data-error class="form__error-message">
          <div class="form__error-message-text">
          <?php echo translateRuUaEn(
                'Произошла ошибка. Попробуйте ещё раз', 
                'Виникла помилка. Спробуйте ще раз', 
                'An error has occurred. Try again'
              );
            ?>
          </div>
        </div>
        <button class="btn btn--black form__btn">
          <span class="form__btn-text">
            <?php 
            $btn_name = translateRuUaEn(
              'Получить консультацию', 
              'Отримати консультацію', 
              'To get a consultation'
            );
            if (get_field('текст_кнопки_в_футере')) {
              $btn_name = get_field('текст_кнопки_в_футере');
            }
            echo $btn_name;
            ?>
          </span>
          <span class="btn__overlay"></span>
          <span class="form__btn-loader">
            <svg class="circular" viewBox="25 25 50 50">
              <circle stroke="green" class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
            </svg>
          </span>
        </button>
        <small class="form__policy">
          <?php echo translateRuUaEn(
                    'Нажимая «'.$btn_name.'», вы соглашаетесь с условиями обработки персональных данных', 
                    'Натискаючи «'.$btn_name.'» ви погоджуєтеся з умовами обробки персональних даних', 
                    'By clicking "'.$btn_name.'" you agree to the terms of processing personal data'
                  );
          ?>
        </small>
      </form>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container footer__bottom-container">
      <div class="footer__bottom-content">
        <div class="footer__bottom-content-left">
          <a href="/" aria-label="logo" class="footer__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.svg" alt="logo">
          </a>
          <ul class="footer__social">
            <li class="footer__social-item">
              <a 
              target='_blank' 
              rel='noopener noreferrer' 
              href="<?php echo get_option('company_instagram');?>"
              >
              instagram
              </a>
            </li>
            <li class="footer__social-item">
              <a 
              target='_blank' 
              rel='noopener noreferrer' 
              href="<?php echo get_option('company_facebook');?>"
              >
              facebook
              </a>
            </li>
            <li class="footer__social-item">
              <a 
              target='_blank' 
              rel='noopener noreferrer' 
              href="https://t.me/<?php echo get_option('company_telegram');?>"
              >
                telegram
              </a>
            </li>
          </ul>
        </div>
        <div class="footer__bottom-content-right">
          <div class="footer__bottom-contacts">
            <div class="footer__bottom-contacts-icon">
              <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.6525 22.9484C21.5939 21.271 20.3637 20.0726 18.5607 20.8619L17.4814 21.3421C16.693 21.6892 14.7573 23.8521 11.8817 17.331C9.00512 10.8167 11.9099 10.8405 12.6978 10.4984L13.7821 10.0187C15.5784 9.22432 15.5249 7.50753 14.9991 5.59453L14.6829 4.43652C14.1512 2.52581 13.3591 1.13379 11.5596 1.92514L10.5858 2.35751C9.81745 2.62009 7.6054 3.56198 6.30707 6.25053C4.7477 9.47597 5.16163 13.8506 7.54242 19.2471C9.91798 24.6441 12.8719 27.9001 16.3082 28.9234C19.1639 29.774 21.3557 28.779 22.0653 28.3901L23.0421 27.9577C24.8376 27.1661 24.3463 25.642 23.2877 23.9616L22.6525 22.9484Z" fill="white"/>
              </svg>
            </div>
            <ul class="footer__bottom-contacts-items">
              <li class="footer__bottom-contacts-item">
                <a href="tel:<?php echo preg_replace('/\D+/', '', get_option('company_tel')); ?>"><?php echo get_option('company_tel');?></a>
              </li>
              <li class="footer__bottom-contacts-item">
                <a href="mailto:inbox@g-m.partners"><?php echo get_option('company_email');?></a>
              </li>
            </ul>
          </div>
          <?php $adress = translateRuUaEn(
                  get_option('company_adress_ru'), 
                  get_option('company_adress_uk'), 
                  get_option('company_adress_en')
                );

                if($adress) {
          ?>
          <div class="footer__bottom-contacts">
            <div class="footer__bottom-contacts-icon">
              <svg width="19" height="27" viewBox="0 0 19 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.2222 4.51097C15.6454 1.78787 12.8449 0.124229 9.73053 0.0606504C9.59758 0.0579082 9.46377 0.0579082 9.33078 0.0606504C6.2165 0.124229 3.41591 1.78787 1.83913 4.51097C0.22744 7.29439 0.183344 10.6378 1.72115 13.4547L8.16359 25.2556C8.16649 25.2608 8.16938 25.2661 8.17237 25.2713C8.45582 25.7643 8.9636 26.0586 9.53076 26.0586C10.0979 26.0586 10.6056 25.7642 10.889 25.2713C10.892 25.2661 10.8949 25.2608 10.8978 25.2556L17.3403 13.4547C18.878 10.6378 18.8339 7.29439 17.2222 4.51097ZM9.53065 11.8399C7.51612 11.8399 5.87718 10.1997 5.87718 8.18362C5.87718 6.16755 7.51612 4.52737 9.53065 4.52737C11.5452 4.52737 13.1841 6.16755 13.1841 8.18362C13.1841 10.1997 11.5452 11.8399 9.53065 11.8399Z" fill="white"/>
              </svg>
            </div>
            <ul class="footer__bottom-contacts-items">
              <li class="footer__bottom-contacts-item">
                <a 
                style="max-width:200px;" 
                target='_blank' 
                rel='noopener noreferrer' 
                href="<?php echo get_option('company_adress_maps') ?>"
                >
                <?php
                  echo $adress;
                ?>
                </a>
              </li>
            </ul>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="footer__bottom-info">
        <div class="footer__bottom-info-content">
          <p class="footer__bottom-id">
          <?php 
            echo translateRuUaEn(
              'Адвокатское объединение «Г.М. Партнерс»<br>ИКЮЛ: 42308793', 
              'Адвокатське об\'єднання «Г.М. Партнерс»<br>ІКЮО: 42308793', 
              'Bar Association "G.M. Partners"<br>LEIC: 42308793'
            );
          ?>
          </p>
          <a href="#" class="footer__botom-privacy">
          <?php 
            echo translateRuUaEn(
              '«Политика конфиденциальности и адвокатская тайна»', 
              '«Політика конфіденційності та адвокатська таємниця»', 
              '"Privacy Policy and Advocate Secrecy"'
            );
          ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php             
  }            
}}   
wp_reset_postdata();             
?> 