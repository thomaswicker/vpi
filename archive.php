<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-blog'); ?>

<section class="blog-page-body">
  <div class="bpb--left archive-page">

	<?php if (have_posts()) : ?>

 		<?php if (is_category()) { ?>

		<h2 class="archive-title"><?php _e('Archive for the', 'blank-theme'); ?> &#8216;<strong class="category-title-archives"><?php single_cat_title(); ?></strong>&#8217; <?php _e('Category', 'blank-theme'); ?></h2>

			<?php } elseif(is_tag()) { ?>

			<h2><?php _e('Posts Tagged', 'blank-theme'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php } elseif (is_day()) { ?>

			<h2><?php _e('Archive for', 'blank-theme'); ?> <?php the_time('F jS, Y'); ?></h2>

			<?php } elseif (is_month()) { ?>

			<h2><?php _e('Archive for', 'blank-theme'); ?> <?php the_time('F, Y'); ?></h2>

			<?php } elseif (is_year()) { ?>

			<h2><?php _e('Archive for', 'blank-theme'); ?> <?php the_time('Y'); ?></h2>

			<?php } elseif (is_author()) { ?>

			<h2><?php _e('Author Archive for', 'blank-theme'); ?> <?php the_post(); echo get_the_author(); rewind_posts(); ?></h2>

			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

			<h2><?php _e('Blog Archives', 'blank-theme'); ?></h2>

			<?php } ?>

			<?php get_template_part('inc/nav'); ?>

			<?php while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class() ?>>

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<?php get_template_part('inc/meta'); ?>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</div>

			<?php endwhile; ?>

			<?php get_template_part('inc/nav'); ?>

		<?php else : ?>

			<?php get_template_part('inc/gone'); ?>

		<?php endif; ?>
	</div>

	<div class="bpb--right archive-page">
		<ul class="blog-post-categories">
			<?php if (('dynamic_sidebar') && dynamic_sidebar('post-page-sidebar')) : else : ?>

			<div class="pre-widget">
					<p><strong>Widgetized Area</strong></p>
					<p>Something went wrong... widgets are not loading.</p>
			</div>

			<?php endif; ?>
		</ul>
	</div>

</section>

<?php get_footer(); ?>
