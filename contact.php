<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-contact'); ?>

<section class="contact-page-body">
  <div class="cpb--left">
    <section class="cpb-photo">
      <img class="sidebar-photo" src="<?php bloginfo( 'template_directory' ); ?>/img/chris-photo-circle.png" alt="My Photo">
    </section>

    <section class="cpb-details">
      <h4>Chris Landry</h4>
      <p class="title">President</p>
      <p class="company-name">Visionary Planning & Investment</p>
      <a href="mailto:chris@visionaryplanningandinvestment.com" class="email"><i class="fa fa-envelope"></i>Email Me</a>
      <a href="tel:720-210-4990" class="phone"><i class="fa fa-phone" class="phone"></i>720.210.4990</a>
    </section>
  </div>

  <div class="cpb--right">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; else: ?>

    <?php endif; ?>
  </div>

</section>

<?php get_footer(); ?>
