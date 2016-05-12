<?php
/**
 * @package WordPress
 * @subpackage Eclectic
 */
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="IE ie8"> <![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="IE ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!--[if IE 8 ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<title><?php echo site_global_description(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
<?php wp_head(); ?>

<!-- TYPEKIT -->
<script src="//use.typekit.net/ser6tes.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.flexslider.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.columnizer.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.fancybox.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/masonry.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/instafeedly.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/pinimages.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesLoaded.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.elevatezoom.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/general.js"></script>


</head>
<body <?php body_class(); ?>>
	
	<header>
		<div class="utility">
			<?php $ID = $wp_query->post->ID;
				$date = get_the_date( "F j, Y" , $ID) ?>
			<span class="date"><?php echo $date ?></span>
			<span class="volume">Volume 1</span>
		</div>
		<div class="container">
			
			<a href="/"><img  class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-multilight.png" alt=""></a>
			<img  class="hamburger" src="<?php echo get_template_directory_uri(); ?>/assets/images/whitehamburgerwave.png" alt="">
		</div>
		
	</header>
	<div class="menu-wrapper">
			<div class="menu">
				<?php $previews = new WP_query(array('post_type' => 'post', 'cat' => '-2', 'posts_per_page' => 10)) ?>
				<?php while ( $previews->have_posts() ) : $previews->the_post(); ?>
					<?php get_template_part('content', 'preview'); ?>
				<?php endwhile; ?>
			</div>
		</div>
	<div class="body-wrapper">	