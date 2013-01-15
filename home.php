<?php 
/*
 * Posts Listing
 */
get_header(); ?>

<h1><?php the_title(); ?></h1>

<?php $debut = 0; //The first article to be displayed ?>
<?php while(have_posts()) : the_post(); ?>
  <ul>
    <?php $posts = get_posts('numberposts=-1&offset=$debut');
      foreach($posts as $post) : ?>
      <li id="post-<?php echo $post->ID; ?>">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <ul class="entry-meta">
          <li>Posted: <?php the_time('M d, Y'); ?></li>
          <?php if (has_tag()): ?>
            <li><?php the_tags('Tags: ', ', '); ?></li>
          <?php endif; ?>
          <?php if (has_category()): ?>
            <li>Categories: <?php the_category(', '); ?></li>
          <?php endif; ?>
        </ul>
      </li>
    <?php endforeach; ?>
  </ul>
<?php endwhile; ?>
				
<?php get_footer(); ?>