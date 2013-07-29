
		<?php get_sidebar(); ?>
		
	</section><!--/content-->
</div><!--.row-->

<div class="row">
	<footer class="large-12 columns">
		<p>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?> 
			&bull; <?php echo get_credits(); ?></p>
	</footer>
</div><!--.row-->

<!-- Prompt IE 7 users to install Chrome Frame. Remove this if you want to support IE 7.
     chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 8]>
	<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<?php wp_footer(); ?>

<script>
  $(document).foundation();
</script>

</body>
</html>