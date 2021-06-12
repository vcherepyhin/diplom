<?php get_header(); ?>

<div class="home">

  <section class="top">

    <div class="container">
      <div class="info">
        <h1><?php bloginfo( 'name' );  ?></h1>
        <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>" class="cta">Заказать фотосессию</a>
        <section class="social">
          <a href="https://www.instagram.com/ph.j.che/">
            <img src="<?php echo get_template_directory_uri().'/img/insta.svg' ?>" alt="instagtam">
          </a>
          <a href="https://vk.com/joan_che">
            <img src="<?php echo get_template_directory_uri().'/img/vk.svg' ?>" alt="vk">
          </a>
          <!-- <a href="https://web.telegram.org/">
            <img src="<?php echo get_template_directory_uri().'/img/telega.svg' ?>" alt="telegtam">
          </a> -->
        </section>
      </div>
    </div>

  </section>

  <section id="slider-1">
    <?php 
      $gallery1PostId = 61; // id поста с галереей
      foreach( get_post_gallery_images( $gallery1PostId ) as $url ) {
        echo '<img class="fullscreen" src="'.$url.'">';
      }
    ?>
  </section>
  <section id="slider-2">
    <?php 
      $gallery2PostId = 68; // id поста с галереей
      foreach( get_post_gallery_images( $gallery2PostId ) as $url ) {
        echo '<img class="fullscreen" src="'.$url.'">';
      }
    ?>
  </section>

  <section class="container">
    <div class="grid">

      <?php
        global $post;
        $myposts = get_posts(
          array( 'posts_per_page' => 5, 'offset'=> 0, 'category' => 5 )
        );
        foreach( $myposts as $post ) {
          setup_postdata($post);
        ?>
          <a class="album-short-link" href="<?php the_permalink(); ?>">
            <article class="album-short">
              <img class="rect" src="<?php echo get_template_directory_uri().'/img/rect.svg'; ?>">
              <div class="thumb"><?php the_post_thumbnail( 'post_thumbnail' ); ?></div>
              <div class="info">
                <h2><?php the_title(); ?></h2>
                <span><?php the_time('j F Y'); ?></span>
                <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
                <img class="arrow" src="<?php echo get_template_directory_uri().'/img/arrow.svg'; ?>" alt="arrow">
              </div>
            </article>
          </a>

        <?php }
          wp_reset_postdata();
          ?>

      <a class="album-short-link all-albums" href="<?php echo get_category_link( get_cat_ID( 'Альбомы' ) ); ?>">
        <article class="album-short">
          <img class="rect" src="<?php echo get_template_directory_uri().'/img/rect.svg'; ?>">
          <div class="info">
            <h2>Все альбомы</h2>
            <img class="arrow" src="<?php echo get_template_directory_uri().'/img/arrow.svg'; ?>" alt="arrow">
          </div>
        </article>
      </a>
      <a href="<?php echo get_category_link( get_cat_ID( 'Альбомы' ) ); ?>" class="cta all-albums-cta">
        Все альбомы
      </a>
    </div>

  </section>

</div>

<?php get_footer(); ?>