<?php get_header(); ?>

<div class="album">

  <div class="top">
    <h1><?php the_title(); ?></h2>
  </div>

  <div class="container content">
    <p> <span class="date"><?php the_time('j F Y'); ?></span> </p>
    <?php the_content(); ?>
  </div>

</div>

<?php get_footer(); ?>
