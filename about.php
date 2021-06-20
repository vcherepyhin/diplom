<?php /*
  Template Name: Обо мне
  Template Post Type: page
*/ ?>

<?php get_header(); ?>

<div class="about">
  <section class="top">
    <h1>
      <?php echo get_userdata(1)->first_name; ?>
      <?php echo get_userdata(1)->last_name; ?>
    </h1>
  </section>
  <section class="content">
    <div class="photo"></div>
    <div class="description">
      <p class="biography"><?php echo get_userdata(1)->description; ?></p>
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
