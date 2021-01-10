<?php include get_theme_file_path( 'partials/router.php' ); ?>

<!DOCTYPE html>
<html lang="<?php echo translateRuUaEn('ru', 'uk', 'en');?>" class="custom">
<head>
  <meta charset="utf-8">
  <title><?php echo get_field('title'); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#393D5D">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon.ico" type="image/x-icon">
  <meta name="description" content="<?php echo get_field('description'); ?>">
  <meta property="og:title" content="<?php echo get_field('title'); ?>">
  <meta property="og:description" content="<?php echo get_field('description'); ?>">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Montserrat-Bold.woff2" type="font/woff" as="font" crossorigin="anonymous">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Montserrat-Regular.woff2" type="font/woff" as="font" crossorigin="anonymous">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Montserrat-Medium.woff2" type="font/woff" as="font" crossorigin="anonymous">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/sylfaen.woff2" type="font/woff" as="font" crossorigin="anonymous">
  <!-- BEGIN styles -->
  <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/app.e1610276801746.css">
  <!-- END styles -->
</head>

<body class="loading">
  <noscript>
    <div class="js-enable">Please enable JavaScript to view this website.</div>
  </noscript>
  <!-- BEGIN content -->
  <?php include get_theme_file_path( './partials/loader.php' ); ?>
  <?php include get_theme_file_path( './partials/navbar.php' ); ?>