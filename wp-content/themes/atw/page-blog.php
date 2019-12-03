<?php
/*
	Template Name: Blog
 */
 get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="clear">

			<h1><span><?php the_title(); ?></span></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <?php $args = array(
                'post_type' => 'post',
                'post_per_page' => 1,
                'orderby' => 'date',
                'order' => 'DESC',           
            ); ?>

            <?php $ultima = new WP_Query($args); ?>
            <?php while($ultima->have_posts() ): $ultima->the_post(); ?>

            <article class="entrada">
                <div class="foto">
                    <?php the_post_thumbnail(); ?>
                </div>
            </article>

            <?php endwhile; wp_reset_postdata(); ?>


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
