<?php
/*
Template Name: About ==>  Page 2
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-about-2'); ?>

<section class="about-page-body">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>

  <img class="travel-map" src="<?php bloginfo( 'template_directory' ); ?>/img/travel-map.png" alt="Map of where I have traveled">

</section>

<section class="about-page-callout">
  <?php get_template_part('partials/about-page-callout'); ?>
</section>

<section class="footer-callout">
  <div class="fc--left">
    <h3>Most Recent Post</h3>
    <ul>
      <?php
        $args = array( 'numberposts' => 1, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
        $postslist = get_posts( $args );
        echo '<ul class="post-list">';
         foreach ($postslist as $post) :  setup_postdata($post); ?>
         <li>
           <a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title();?>">
             <?php the_title(); ?>
           </a>
           <div class="post-content">
             <?php the_excerpt(); ?>
             <?php if ( has_post_thumbnail()) the_post_thumbnail('excerpt-thumb'); ?>
           </div>
           <a href="<?php echo get_permalink(); ?>" class="btn btn-secondary btn-read-more"> Read More...</a>
        </li>
        <?php endforeach; ?>
      </ul>
  </div>

  <div class="fc--right"></div>

</section>

<?php get_footer(); ?>
