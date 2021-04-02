<?php include get_theme_file_path( 'partials/router.php' ); ?>

<!DOCTYPE html>
<html lang="<?php echo translateRuUaEn('ru', 'uk', 'en');?>" class="custom">
<head>
  <meta charset="utf-8">
  <title>
  <?php 
  if (get_field('title')) {
    echo get_field('title');
  } else {
    echo '404';
  }
   ?>
  </title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#393D5D">
  <?php wp_site_icon(); ?>
  <meta name="description" content="<?php echo get_field('description'); ?>">
  <meta property="og:title" content="<?php echo get_field('title'); ?>">
  <meta property="og:description" content="<?php echo get_field('description'); ?>">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Montserrat-Bold.woff2" type="font/woff" as="font" crossorigin="anonymous">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Montserrat-Regular.woff2" type="font/woff" as="font" crossorigin="anonymous">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Montserrat-Medium.woff2" type="font/woff" as="font" crossorigin="anonymous">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/sylfaen.woff2" type="font/woff" as="font" crossorigin="anonymous">
  <link rel="alternate" href="https://g-m.partners/" hreflang="ru" />
  <link rel="alternate" href="https://g-m.partners/en/home/" hreflang="en" />
  <link rel="alternate" href="https://g-m.partners/uk/holovna/" hreflang="uk" />
  <!-- BEGIN styles -->
  <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/app.e1617349326407.css">
  <!-- END styles -->
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M89G3H3');</script>
  <!-- End Google Tag Manager -->
  <?php 
    echo translateRuUaEn(
      get_option('jivo_ru'), 
      get_option('jivo_uk'), 
      get_option('jivo_en')
    )
  ?>
</head>

<body class="loading">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M89G3H3"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <noscript>
    <div class="js-enable">Please enable JavaScript to view this website.</div>
  </noscript>
  <!-- BEGIN content -->
  <?php include get_theme_file_path( './partials/loader.php' ); ?>
  <?php include get_theme_file_path( './partials/navbar.php' ); ?>