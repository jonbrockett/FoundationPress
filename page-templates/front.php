<?php
/*
Template Name: Front
*/
get_header(); ?>

<section class="front-hero">
	<article class="marketing">
		<header class="tagline">
			<h1 class="hero-title"><?php bloginfo( 'name' ); ?></h1>
			<h2 class="h4 subheader"><?php bloginfo( 'description' ); ?></h2>
		</header>
	</article>

</section>


<main id="main" class="intro">

	<?php
	/**
	 * Intro
	 */
	?>
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<section class="fp-intro">

		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav" aria-label="Page navigation"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</article>

	</section>
	<?php endwhile; ?>
	<?php do_action( 'foundationpress_after_content' ); ?>

</main>


<?php get_footer();
