<?php
/*
	Template Name: Tours
 */
 get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="clear">

			<h1><span><?php the_title(); ?></span></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php $args = array(
				'post_type' => 'tours',
				'posts_per_page' => 4,
				'order' => 'ASC',
				'orderby' => 'title'

			); ?>

			<?php $tours = new WP_Query($args); ?>
			<?php while($tours->have_posts() ): $tours->the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_post_thumbnail('toursDestacado'); ?>

				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/masinfo.png">
				</a>
							
				<h2>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?></h2>
				</a>

				<?php 
					$formato = 'd F, Y';
					$fecha = strtotime(get_field('fecha_de_salida'));
					$fecha_salida= date_i18n($formato, $fecha);
					$fecha_retorno = strtotime(get_field('fecha_de_retorno'));
					$fecha_retorno= date_i18n($formato, $fecha);
				?>

				<p class="fecha"><?php echo $fecha_salida; ?> - <?php echo $fecha_retorno; ?> </p>
				<p class="precio"><?php the_field('precio'); ?> </p>
				<p><?php the_field('descripcion_corta')  ?></p>

				</article>
				<!-- /article -->

			<?php endwhile; wp_reset_postdata(); ?>
		
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