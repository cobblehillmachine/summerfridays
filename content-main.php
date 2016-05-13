<?php
/**
 * The template used for displaying main content
 *
 * @package WordPress
 */
?>
<div class="hero-image" style="background-image: url(<?php the_field('hero_image') ?>)">
	<div class="content table">
		<div class="table-cell left">
			<h1><?php the_title(); ?></h1>
			<h2><?php the_field('titles'); ?></h2>
		</div>
		<div class="table-cell right">
			<div class="ctas">
				<a href="#watch">watch</a>
				<a href="#read">read</a>
			</div>
		</div>
	</div>
</div>
<div class="video-container" id="watch">
	<?php the_field('video_iframe'); ?>
</div>
<div class="post" id="read">

	<div class="post-content">
		<?php the_content(); ?>
	</div>
	<div class="questions">
		<?php if (have_rows('sketch_questions')) {
			while( have_rows('sketch_questions') ): the_row(); 
				$question = get_sub_field('question');
				$answer = get_sub_field('answer');  ?>
				<div class="question">
					<p><strong><?php echo $question ?></strong></p>
					<img src="<?php echo $answer ?>">
				</div>
			<?php endwhile; ?>
		<?php } ?>
	</div>
</div>