<?php get_header(); ?>

<div class="albums">

  <section class="top">
    <h1>Альбомы</h1>
  </section>

  <div class="container">
    <section class="grid">
      <?php if (have_posts()) {
        while (have_posts()) {
          the_post(); ?>

          <a class="album-short-link" href="<?php the_permalink(); ?>">
            <article class="album-short">
              <img class="rect" src="<?php echo get_template_directory_uri().'/img/rect.svg'; ?>">
              <div class="thumb"><?php the_post_thumbnail( 'post_thumbnail' ); ?></div>
              <div class="info">
                <h2><?php the_title(); ?></h2>
                <span class="date"><?php the_time('j F Y'); ?></span>
                <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
                <img class="arrow" src="<?php echo get_template_directory_uri().'/img/arrow.svg'; ?>">
              </div>
            </article>
          </a>

      <?php
          }
        }
      ?>
    </section>
  </div>

</div>

<?php get_footer(); ?>
