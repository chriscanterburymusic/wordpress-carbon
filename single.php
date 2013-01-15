<?php get_header(); ?>

<article id="">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section id="entry-header" class="side50 top30 lbg">
		<h1><?php the_title() ?></h1>

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=207948159296642";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		<div class="meta">
			<a href="<?php echo get_page_link(7); ?>">Articles</a> 
			/ <?php the_time('F d, Y'); ?>
			/ <a href="#comments"><span><fb:comments-count href="<?php echo wp_get_shortlink(); ?>">0</fb:comments-count> Comments</span></a>
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

		<ul class="social-sharing">
			<li class="facebook">
				<div class="fb-like" data-href="<?php echo wp_get_shortlink(); ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-font="verdana"></div>
			</li>
			<li class="twitter">
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo wp_get_shortlink(); ?>" data-text="<%= the_title(); %>" data-via="kalebheitzman">Tweet</a>
			</li>
		</ul>

		<h3 id="comments">Comments</h3>
		<div class="fb-comments" data-href="<?php echo wp_get_shortlink(); ?>" data-width="470" data-num-posts="2"></div>
	</section><!--/entry-content-->

	<?php endwhile; else: ?>

	<?php endif; ?>
</article>

<footer>
  <p>&copy; <?php echo date('Y') ?> Kaleb Heitzman</p>
</footer>

<?php get_footer(); ?>