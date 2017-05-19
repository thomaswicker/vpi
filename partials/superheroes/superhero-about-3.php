<section class="superhero superhero-about">
	<img class="logo" src="<?php bloginfo( 'template_directory' ); ?>/svg/vpi-logo.svg" alt="VPI Logo">

	<?php get_template_part('partials/site-nav/site-nav-about'); ?>

	<section class="superhero--left">
		<h1>About: <span>Business</span></h1>
		<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
	</section>

	<section class="superhero--right">
		<img class="sidebar-photo" src="<?php bloginfo( 'template_directory' ); ?>/img/savings-photo.jpg" alt="Savings Photo">
		<ul class="sidebar-nav">
			<li>
				<a href="/about">About Me</a>
			</li>

			<li>
				<a href="/about-family">My Family Life</a>
			</li>

			<li class="active">
				<a href="/about-business">My Business Philosophy</a>
			</li>
		</ul>
	</section>

	<?php get_template_part('partials/sm-nav'); ?>

	<!-- <a href="/contact.php" class="btn btn-primary">Schedule an Appointment</a> -->
</section>
