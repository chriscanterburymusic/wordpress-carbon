<?php get_header(); ?>

<article id="">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section id="entry-header" class="side50 top30 lbg">
		<h1><?php the_title() ?></h1>

		<div class="meta">
			<p><?php echo get_post_meta( $post->ID, 'tagline', TRUE ); ?></p>
		</div><!--.meta-->
	</section><!--/entry-header-->

	<?php // post meta
		$vimeo = get_post_meta( $post->ID, 'vimeo', TRUE );
		$header = get_post_meta( $post->ID, 'header', TRUE );
		$keys = get_post_custom_keys();
	?>
	<section id="entry-embeds" class="dbg">

		<?php // featured image
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');
		} ?>

		<?php // vimeo embed
		if ($vimeo != ''): ?>
			<div class="embed-container">
				<iframe class="ninesixteen"
					src="<?php echo $vimeo ?>"
					frameborder="0" 
					webkitAllowFullScreen 
					mozallowfullscreen 
					allowFullScreen>
				</iframe>
			</div>
		<?php endif; ?>

		<?php // header embed
		if ($header != ''): ?>
			<div class="embed-header side50 top30 bottom30">
				<p><?php echo $header ?></p>
			</div>
		<?php endif; ?>
 
	</section><!--/entry-embeds-->

	<section id="entry-content" class="side50 top30 bottom30 lbg">
		<?php the_content() ?>
	</section><!--/entry-content-->

	<?php endwhile; else: ?>

	<?php endif; ?>
</article>

<?php get_footer(); ?>