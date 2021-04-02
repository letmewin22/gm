<?php
get_header();

$h1 = translateRuUaEn(
  '404 <br> Страница, которую вы ищете, не&nbsp;найдена', 
  '404 <br> Сторінка, котру ви шукаєте, не&nbsp;знайдена', 
  '404 <br> The page you are looking for was not found'
);
$desc = translateRuUaEn(
  'Рекомендуем вернуться на главную', 
  'Рекомендуємо повернутися на головну', 
  'We recommend to return to the home page'
);
$button = translateRuUaEn(
  'Вернуться на главную', 
  'Повернутися на головну', 
  'Back to the home'
);
?>


<?php get_router('errorPage') ?>

<header class="home-header">
  <div class="home-header__bg" style="background-image: url('<?php echo get_template_directory_uri();?>/img/home/bg.jpg')"></div>
  <div class="container home-header__container a-center">
    <h1 class="h1 home-header__h1"><?php echo $h1; ?></h1>
    <p class="error__desc"><?php echo $desc; ?></p>
    <a href="<?php
        echo get_site_url().translateRuUaEn(
          '/', 
          '/uk/holovna/', 
          '/en/home/'
    ); ?>" class="btn btn--white home-header__btn"><?php echo $button; ?></span>
    </a>
  </div>
</header>

<?php
  get_footer();
  ?>