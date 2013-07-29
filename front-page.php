<?php get_header(); ?>

<div id="front-page" class="row">

	<section class="articles large-9 columns">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="large-6 columns">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</section>

	<?php get_sidebar(); ?>

</div>

<?php get_colophon(); ?>
				
<?php get_footer(); ?>