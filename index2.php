<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-home'); ?>

<section class="home-page-body">
  <h1>Welcome to Visionary Planning & Investment</h1>
  <p class="body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit elitesse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

  <ul class="three-pane-links">
    <li class="plan">
      <a href="/solutions">
        <img class="planning-icon" src="<?php bloginfo( 'template_directory' ); ?>/img/3-pane-icons-plan.png" alt="Planning Icon">
        </br>
        <span>Plan</span>
      </a>
    </li>

    <li class="invest">
      <a href="/solutions">
        <img class="investing-icon" src="<?php bloginfo( 'template_directory' ); ?>/img/3-pane-icons-invest.png" alt="Investing Icon">
        </br>
        <span>Invest</span>
      </a>
    </li>

    <li class="live">
      <a href="/solutions">
        <img class="live-icon" src="<?php bloginfo( 'template_directory' ); ?>/img/3-pane-icons-live.png" alt="Live Icon">
        </br>
        <span>Live</span>
      </a>
    </li>
  </ul>
</section>

<section class="home-page-blog-posts">
  <div class="hpbp--left">
    <h2>Blog Posts</h2>
    <article class="blog-post-mini">
      <h3>Plan. Invest. Live.</h3>
      <p>How did we get to the place where you are reading this, and I wrote it? I am no author. At least not yet. But you can bet if I ever write a book and then some one asks me what I do for a living I’ll make sure to raise one eyebrow higher than my other one and say in my deepest possible voice “I am an AUTHOR. I also help people plan, invest, and live.” Perhaps that story will one day be written, but for now I’ll stick to the original question.</p>
      <a href="#" class="btn btn-primary btn-read-more">Read More</a>
    </article>

    <article class="blog-post-mini">
      <h3>Plan. Invest. Live. #2</h3>
      <p>I’ll have a contingency plan in place too. If something does happen to me, I don’t want all of my clients scattered like sheep without a Shepard. I know the odds well. 1 out of 1 people dies. Its a fact. I hope that the Lord gives me many days here on earth, and I hope to make an impact with those days.</p>
      <a href="#" class="btn btn-primary btn-read-more">Read More</a>
    </article>
  </div>

  <div class="hpbp--right">
    <img class="logo" src="<?php bloginfo( 'template_directory' ); ?>/img/mac-with-video.png" alt="Image of Macintosh with Video">
  </div>
</section>


<?php get_footer(); ?>
