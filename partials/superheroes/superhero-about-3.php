<section class="superhero superhero-about">
	<img class="logo" src="<?php bloginfo( 'template_directory' ); ?>/svg/vpi-logo.svg" alt="VPI Logo">

	<?php get_template_part('partials/site-nav/site-nav-about'); ?>

	<section class="superhero--left">
		<h1>About: <span>Business</span></h1>
		<h2>“Investing is not near as difficult as it looks. Successful investing involves doing a few things right and avoiding serious mistakes.”<strong>- John C. Bogle</strong></h2>
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
