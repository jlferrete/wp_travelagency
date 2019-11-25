<?php 
/*
    Template Name: Nosotros
*/

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><span><?php the_title(); ?></span></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php
					$imagen = get_field('imagen_1');
					$size = 'mediano';

					if ($imagen) {
						echo wp_get_attachment_image($imagen, $size);
					}
				?>

				<?php
					$imagen = get_field('imagen_2');
					$size = 'mediano';

					if ($imagen) {
						echo wp_get_attachment_image($imagen, $size);
					}
				?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

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

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
