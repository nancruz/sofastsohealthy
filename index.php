<?php get_header(); ?>
<div class="row">
	<div class="col-sm-8 blog-main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 			<div id="post-<?php the_ID(); ?>" <?php post_class('post blog-post'); ?>>
				<h2 class="blog-post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			 	<p class="blog-post-meta"><?php the_time( 'F j, Y' ); ?> in <?php the_category(', ');?></p>
				<?php if ( has_post_thumbnail()) : ?>
					<div class="post-thumb">
						   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							   <?php the_post_thumbnail('big-thumb'); ?>
						   </a>
					</div>
				 <?php endif; ?>
				 <?php the_excerpt(); ?>
			</div>
		<?php endwhile; endif; ?>
		<ul class="pager clearfix">
			<li class="pull-left"><?php next_posts_link( __( '&larr; Older Posts', 'wpboot' ) ); ?></li>
			<li class="pull-right"><?php previous_posts_link( __( 'Newer Posts &rarr;', 'wpboot' ) ); ?></li>
		</ul>
	</div>
</div>
<?php get_footer(); ?>
