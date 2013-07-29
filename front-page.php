<?php get_header(); ?>

	<section class="row">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="large-4 columns">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
			</article>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

	</section>
				
<?php get_footer(); ?>