	<?php get_header(); ?>
      <div class="row">

        <div class="col-sm-8 blog-main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

         		<div id="post-<?php the_ID(); ?>" <?php post_class('post blog-post'); ?>>
            			<h1 class="blog-post-title"><?php the_title(); ?></h1>
           			 <p class="blog-post-meta"><?php the_time( 'F j, Y' ); ?> by <?php the_author_posts_link(); ?> in <?php the_category(', ');?></p>

			<?php if ( has_post_thumbnail()) : ?>
				<div class="post-thumb">
					  <?php the_post_thumbnail('big-thumb'); ?>
				</div>
			 <?php endif; ?>

				<div class="entry clearfix"><?php the_content(); ?></div>

				<?php wp_link_pages(); ?>

				<p class="p-tags"><?php the_tags(); ?></p>
			
				<ul class="pager clearfix">
					<li class="pull-left"><?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'wpboot' ) . ' %title' ); ?></li>
					<li class="pull-right"><?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'wpboot' ) . '' ); ?></li>
				</ul>
				
		  		<?php comments_template(); ?>
			</div>
	
	  <?php endwhile; endif; ?>


        </div><!-- /.blog-main -->

	<?php get_sidebar(); ?>
</div>
	<?php get_footer(); ?>