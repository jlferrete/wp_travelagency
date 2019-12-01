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
			'order' => 'DESC',
			'orderby' => 'date',

		); ?>

		<?php $tours = new WP_Query($args); ?>
		<?php while($tours->have_posts() ): $tours->the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-4'); ?>>

				<div class="imagen-destacada">
					<?php the_post_thumbnail('toursDestacado'); ?>
					<a class="mas-info"  href="<?php the_permalink(); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/masinfo.png">
					</a>
				</div> <!--.imagen-destacada-->
				
				<a href="<?php the_permalink(); ?>">
					<h2><?php the_title(); ?></h2>
				</a>

				<?php 
					$formato = 'd F, Y';
					$fecha = strtotime(get_field('fecha_de_salida'));
					$fechasalida = date_i18n($formato, $fecha);

					$fechaRetorno = strtotime(get_field('fecha_de_retorno'));
					$fechaRetorno = date_i18n($formato, $fechaRetorno);

				?>

				<div class="fecha-precio clear">
					<p class="fecha"><?php echo $fechasalida; ?> - <?php echo $fechaRetorno; ?></p>
					<p class="precio"><?php the_field('precio'); ?></p>

				</div>
				<div class="clear"></div>

				<p><?php the_field('descripcion_corta'); ?></p>

	
			</article>
			<!-- /article -->
			

			<?php endwhile;
 html5wp_pagination(); 
			 wp_reset_postdata(); ?>



			</div>

	
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
