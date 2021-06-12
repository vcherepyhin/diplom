<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body>

<div id="pop-up-container">
  <div class="inner">
    <button class="close">Закрыть</button>
    <img>
  </div>
</div>

<header>
  <a class="logo" href="<?php bloginfo( 'url' ); ?>">
    <img src="<?php echo get_template_directory_uri().'/img/logo.svg' ?>" alt="Jeanne">
  </a>
  <?php wp_nav_menu( [
    'theme_location'  => 'main_nav',
    'container'       => 'nav',
    'container_class' => 'main-menu',
    'menu_class'      => 'menu',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  ] );
  ?>
</header>
