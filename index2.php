<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-home'); ?>

<section class="home-page-body">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; else: ?>
  <?php endif; ?>

  <ul class="three-pane-links">
    <li class="plan">
      <a href="/solutions">
        <img class="planning-icon" src="<?php bloginfo( 'template_directory' ); ?>/img/3-pane-icons-plan.png" alt="Planning Icon">
        </br>
        <span>Plan</span>
      </a>
    </li>

    <li class="invest">
      <a href="/solutions-investing">
        <img class="investing-icon" src="<?php bloginfo( 'template_directory' ); ?>/img/3-pane-icons-invest.png" alt="Investing Icon">
        </br>
        <span>Invest</span>
      </a>
    </li>

    <li class="live">
      <a href="/solutions-living">
        <img class="live-icon" src="<?php bloginfo( 'template_directory' ); ?>/img/3-pane-icons-live.png" alt="Live Icon">
        </br>
        <span>Live</span>
      </a>
    </li>
  </ul>
</section>

<section class="home-page-blog-posts">
  <div class="hpbp--left">
    <header class="post-header-container">
      <h3>Blog Posts</h3>
    </header>

    <ul>
      <?php
        $args = array( 'numberposts' => 2, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
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

  <div class="hpbp--right">
    <img class="logo" src="<?php bloginfo( 'template_directory' ); ?>/img/mac-with-video.png" alt="Image of Macintosh with Video">
  </div>
</section>


<?php get_footer(); ?>
