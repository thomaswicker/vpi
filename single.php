


<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-blog'); ?>

<section class="blog-page-body">
  <div class="bpb--left post-page">

		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
				<?php get_template_part('inc/meta'); ?>
				<?php if (has_post_thumbnail()) the_post_thumbnail(); ?>

				<div class="entry">
					<?php the_content(); ?>
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				</div>

			</div>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part('inc/gone'); ?>

		<?php endif; ?>

	</div>

	<div class="bpb--right">
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
