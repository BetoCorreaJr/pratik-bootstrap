<?php get_header(); ?>
<div class="bg-body">
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1 class="blog-name-page">&nbsp;</h1>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="wrap-card">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><em><?php the_time('l, F jS, Y'); ?></em></p>
        <p><?php the_content(); ?></p>
      </div>
      
      <?php endwhile; ?>

      <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
      
      <?php else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
      <?php endif; ?>
      
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>