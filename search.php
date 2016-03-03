	<?php get_header(); ?>
      <div class="row">

        <div class="col-sm-8 blog-main">

		<h1 class="archive-title"><?php _e( 'Search Results', 'wpboot' ); ?></h1>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

         		<div id="post-<?php the_ID(); ?>" <?php post_class('post blog-post'); ?>>
            			<h2 class="blog-post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
           			 <p class="blog-post-meta"><?php the_time( 'F j, Y' ); ?> by <?php the_author_posts_link(); ?> in <?php the_category(', ');?></p>

				<?php the_excerpt(); ?>
			</div>
	  <?php endwhile; else: ?>
		
	  <p><?php _e( 'Sorry, no posts matched your criteria. Please try another keyword.', 'wpboot' ); ?></p>

	  <?php endif; ?>

	<ul class="pager clearfix">
		<li class="pull-left"><?php next_posts_link( __( '&larr; Older Posts', 'wpboot' ) ); ?></li>
		<li class="pull-right"><?php previous_posts_link( __( 'Newer Posts &rarr;', 'wpboot' ) ); ?></li>
	</ul>

        </div><!-- /.blog-main -->

	<?php get_sidebar(); ?>
</div>
	<?php get_footer(); ?>