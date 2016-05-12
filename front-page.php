<?php get_header(); ?>

 	<?php query_posts(array('post_per_page' => 1, 'cat' => '-2')); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('content', 'main'); ?>
	<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>