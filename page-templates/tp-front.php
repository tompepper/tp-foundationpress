<?php
/*
Template Name: Custom Front
*/
get_header(); ?>

<header class="front-hero" role="banner">
	<div class="marketing">
		<div class="tagline">
				<h1>Tom Pepper</h1>
				<h3>Web & Graphic Design.</h3>
		</div>
		<div class="columns small-12 medium-6 large-6 front-hero-copy">
				<p>Born and raised in <a class="anim-underline" target="_BLANK" href="https://www.google.ca/maps/place/Hamilton,+ON/@43.2609746,-80.0735756,11z/data=!3m1!4b1!4m5!3m4!1s0x882c986c27de778f:0x2b6aee56d8df0e21!8m2!3d43.2557206!4d-79.8711024">Hamilton, Ontario</a>, a web & graphic designer with a focus on responsive designs that work across all devices.</p>
				<p>For the past 6 years I've worked in a range of roles from UX/UI design, to graphic design, to quality assurance at a startup called <a class="anim-underline" target="_BLANK" href="http://weeverapps.com">Weever Apps</a> creating web applications.</p>
				<p>As a web designer, I specialize in <a class="anim-underline" target="_BLANK" href="https://wordpress.org/">Wordpress</a> creating accessible user experiences and interfaces. Take a look at some of my previous work including <a class="anim-underline" href="http://localhost/tompepper-site/previous-work-websites/">websites</a> and <a class="anim-underline" href="http://localhost/tompepper-site/previous-work-webapps/">responsive web applications</a>.</p>
				<p>Want to work together or maybe just feel like going for a bike ride? <a class="anim-underline" href="/contact/">Send me an e-mail</a> to get in touch!</p>
		</div>

	</div>

</header>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>



<?php get_footer();
