<?php get_header(); ?>
<br>
<br>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
<br>
<br>
<?php get_footer(); ?>