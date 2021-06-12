<?php /*
  Template Name: Контактная форма
  Template Post Type: page
*/ ?>

<?php get_header(); ?>

<div class="contacts">
  <section class="top">
    <h1>Заказать фото</h1>
  </section>
  <section class="form-wrapper container">
    <div class="left">
      <h2>Я вам перезвоню:</h2>
      <?php echo do_shortcode( '[contact-form-7 id="92" title="Контактная форма 1"]' ) ?>
    </div>
    <div class="right">
      <h2>Другие способы:</h2>
      <p>E-mail: <?php echo get_option( 'admin_email' ); ?></p>
      <div class="social">
        <a href="https://www.instagram.com/ph.j.che/">
          <img src="<?php echo get_template_directory_uri().'/img/insta.svg' ?>" alt="instagtam">
        </a>
        <a href="https://vk.com/joan_che">
          <img src="<?php echo get_template_directory_uri().'/img/vk.svg' ?>" alt="vk">
        </a>
        <!-- <a href="https://web.telegram.org/">
          <img src="<?php echo get_template_directory_uri().'/img/telega.svg' ?>" alt="telegtam">
        </a> -->
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
