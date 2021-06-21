<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'description' ); ?></title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Roboto:wght@300;400;700&display=swap"
    rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body>
  <header class="header" style="background-image: url(<?php the_field('top__background') ?>);">
    <div class="header__inner">
      <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/home.png" alt="логотип фирмы Timber House">
      <h1 class="header__name">
        <?php the_field('header__name') ?>
      </h1>
      <a class="phone" href="tel:<?php the_field('phone') ?>"><?php the_field('phone') ?></a>
      <h2 class="header__title">
        <?php the_field('header__title') ?>
      </h2>
      <div class="header__sale">
        <img src="<?php the_field('header__sale') ?>" alt="стикер акция">
      </div>
    </div>
  </header>