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