<nav class="top-bar three columns offset-by-one">
	<ul>
		<li class="name"><a href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a></li>
		<li class="toggle-topbar"><a href="#"></a></li>
	</ul>
	<section>
		<?php wp_nav_menu(array('container' => 'section', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>')); ?>
	</section>
</nav>
