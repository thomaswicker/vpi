<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-blog'); ?>

<section class="blog-page-body">
  <div class="bpb--left post-page">
    <?php

  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

  $custom_args = array(
      'post_type' => 'post',
      'posts_per_page' => 3,
      'paged' => $paged
    );

  $custom_query = new WP_Query( $custom_args ); ?>

  <?php if ( $custom_query->have_posts() ) : ?>
    <!-- pagination here -->
    <?php
      if (function_exists(custom_pagination)) {
        custom_pagination($custom_query->max_num_pages,"",$paged);
      }
    ?>
    <!-- the loop -->
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
      <article class="blog-entry">
        <a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title();?>">
          <?php the_title(); ?>
        </a>
        <div class="post-content">
          <?php the_excerpt(); ?>
        </div>
        <a href="<?php echo get_permalink(); ?>" class="btn btn-secondary btn-read-more"> Read More...</a>
      </article>
    <?php endwhile; ?>
    <!-- end of the loop -->

  <?php wp_reset_postdata(); ?>

  <?php else:  ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

    <!-- <article class="blog-post-full">
      <h3>Blog Post Title 1</h3>
      <p>How did we get to the place where you are reading this, and I wrote it? I am no author. At least not yet. But you can bet if I ever write a book and then some one asks me what I do for a living I’ll make sure to raise one eyebrow higher than my other one and say in my deepest possible voice “I am an AUTHOR. I also help people plan, invest, and live.” Perhaps that story will one day be written, but for now I’ll stick to the original question.</p>
      <a href="#" class="btn btn-primary btn-read-more">Read More</a>
    </article> -->

  </div>

  <div class="bpb--right">
    <ul class="blog-post-categories">
      <ul class="blog-post-categories">
  			<?php if (('dynamic_sidebar') && dynamic_sidebar('post-page-sidebar')) : else : ?>

  			<div class="pre-widget">
  					<p><strong>Widgetized Area</strong></p>
  					<p>Something went wrong... widgets are not loading.</p>
  			</div>

  			<?php endif; ?>
  		</ul>
    </ul>
  </div>

</section>

<?php get_footer(); ?>
