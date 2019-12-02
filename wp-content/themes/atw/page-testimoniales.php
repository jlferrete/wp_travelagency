<?php
/*
	Template Name: Testimoniales
 */
 get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="clear">

			<h1><span><?php the_title(); ?></span></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-3'); ?>>



			<?php the_content(); ?>
	



					<?php $args = array(
						'post_type' => 'testimoniales',
						'posts_per_page' => -1,
						'order' => 'DESC',
						'orderby' => 'date',
					); ?>
					<?php $testimoniales = new WP_Query($args); ?>
					<?php while ($testimoniales->have_posts() ): $testimoniales->the_post(); ?>

					<article class="testimonial">
						<h2><?php the_title(); ?></h2>
						<blockquote><p><?php echo get_the_content(); ?></p></blockquote>
						<p class="testimonial"><?php the_field('nombre'); ?></p>
						<p class="testimonial"><?php the_field('ciudad'); ?></p>
					</article>


					<?php endwhile; wp_reset_postdata(); ?>

			</article>
			<!-- /article -->

				<br class="clear">



	

		<?php edit_post_link(); ?>


		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
