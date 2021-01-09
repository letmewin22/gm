<?php
get_header();
?>
<?php get_router('service') ?>

<header class="service-header">
    <div class="service-header__bg" style="background-image: url('<?php echo get_template_directory_uri();?>/img/home/bg.jpg')"></div>
    <div class="container service-header__container a-center">
      <h1 data-i class="h1 service-header__h1">Защита в уголовных процессах</h1>
      <p data-i class="service-header__desc">Наши адвокаты обеспечат надежную и эффективную правовую помощь как на стадии следствия, так и в судебном производстве, анализируя каждую деталь и используя максимум возможностей для определения наилучшей стратегии защиты</p>
      <a data-i href="#" class="btn btn--white service-header__btn">Получить консультацию 
        <span class="arrow"><?php include get_theme_file_path( './partials/svg/arrow.php' ); ?></span>
      </a>
    </div>
  </header>

<?php
get_footer();
?>