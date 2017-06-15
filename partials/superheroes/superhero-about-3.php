<section class="superhero superhero-about">
	<img class="logo" src="<?php bloginfo( 'template_directory' ); ?>/svg/vpi-logo.svg" alt="VPI Logo">

	<?php get_template_part('partials/site-nav/site-nav-about'); ?>

	<section class="superhero--left">
		<h1>About: <span>Business</span></h1>
		<h2>“A good list of questions to ask your advisor will include the following: Where will my money be held? Right answer: Somewhere else! Are you a broker? Right answer: No! Do you or any affiliate have proprietary investments of any kind? Right answer: No! How are you compensated? Right answer: Total disclosure in writing and never make commissions on any investment product.”<strong>-Peter Mallouk</strong></h2>
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
