<?php
/**
 * The template used for displaying preview content
 *
 * @package WordPress
 */
?>

<?php if (in_category('coming-soon')) { } else { ?>
<a href="<?php the_permalink() ?>">
<?php } ?>
<div class="preview">
	<div class="cont">
		<?php if (in_category('coming-soon')) { ?>
			<p class="date">Coming in <?php the_field('month'); ?></p>
		<?php } else { ?>
			<div class="date"><?php the_date(); ?></div>
		<?php } ?>
			<div class="heading">
			<h1><?php the_title(); ?></h1>
			<h2><?php the_field('titles'); ?></h2>
		</div>
	</div>
	<img src="<?php the_field('headshot') ?>">

</div>

<?php if (in_category('coming-soon')) { } else { ?>
</a>
<?php } ?>
