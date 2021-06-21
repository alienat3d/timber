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
  <header class="header" style="background-image: url(images/background.jpg);">
    <div class="header__inner">
      <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/home.png" alt="логотип фирмы Timber House">
      <h1 class="header__name">
        Timber House
      </h1>
      <a class="phone" href="tel:+75852772217">+7 (585) 277-22-17</a>
      <h2 class="header__title">
        Дома из бруса под ключ
      </h2>
      <div class="header__sale">
        <img src="images/sale.png" alt="стикер акция">
      </div>
    </div>
  </header>