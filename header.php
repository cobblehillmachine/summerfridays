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
<?php wp_head(); ?>
<!-- GOOGLE ANALYTICS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77677146-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- END GOOGLE ANALYTICS -->
<!-- TYPEKIT -->
<script src="//use.typekit.net/ser6tes.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!-- END TYPEKIT -->

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/general.js"></script>


</head>
<body <?php body_class(); ?>>
	
	<header>
		
		<div class="container">
			<a href="/" class="colored logo-wrapper"><img  class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-multilight.png" alt=""></a>
			<a href="/" class="white logo-wrapper"><img  class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.png" alt=""></a>
			<img  class="hamburger white" src="<?php echo get_template_directory_uri(); ?>/assets/images/whitehamburgerwave.png" alt="">
			<img  class="hamburger colored" src="<?php echo get_template_directory_uri(); ?>/assets/images/orangehamburgerwave.png" alt="">
			
		</div>
		
	</header>
	<div class="menu-wrapper">
			<div class="menu">
				<?php $previews = new WP_query(array('post_type' => 'post', 'cat' => '-2', 'posts_per_page' => 10)) ?>
				<?php while ( $previews->have_posts() ) : $previews->the_post(); ?>
					<?php get_template_part('content', 'preview'); ?>
				<?php endwhile; ?>
				<p class="preview about">At <a href="http://cobblehilldigital.com" target=_blank>Cobble Hill</a>, our Summer Fridays extend far beyond the typical perimeters, beginning with the first spring beach day and creeping far into autumn. That’s because we value a proper work/life balance. As creatives, we garner inspiration and motivation from our lives outside of the office. With a refreshed sense of freedom, we are then able to pour our passion back into our work. And we celebrate others who feel the same. Here are their stories.</p>
			</div>
		</div>
	<div class="body-wrapper">	