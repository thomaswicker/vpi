<section class="superhero superhero-about">
	<img class="logo" src="<?php bloginfo( 'template_directory' ); ?>/svg/vpi-logo.svg" alt="VPI Logo">

	<?php get_template_part('partials/site-nav/site-nav-about'); ?>

	<section class="superhero--left">
		<h1>About: <span>Family</span></h1>
		<h2>"A man should never neglect his family for business."
			<strong>- Walt Disney</strong></h2>
	</section>

	<section class="superhero--right">
		<img class="sidebar-photo" src="<?php bloginfo( 'template_directory' ); ?>/img/family-photo.jpg" alt="Family Photo">
		<ul class="sidebar-nav">
			<li>
				<a href="/about">About Me</a>
			</li>

			<li class="active">
				<a href="/about-family">My Family Life</a>
			</li>

			<li>
				<a href="/about-business">My Business Philosophy</a>
			</li>
		</ul>
	</section>

	<?php get_template_part('partials/sm-nav'); ?>

	<!-- <a href="/contact.php" class="btn btn-primary">Schedule an Appointment</a> -->
</section>
