<!DOCTYPE html>
<html>
	<head>
		
		<!--META CHARSET-->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		
		<!--TITLE-->
		<title><?php if( is_front_page() ) : ?><?php bloginfo('name'); ?> | <?php bloginfo('description');?>
		<?php elseif( is_404() ) : ?>Page Not Found | <?php bloginfo('name'); ?>
		<?php elseif( is_search() ) : ?><?php print 'Search Results for ' . wp_specialchars($s); ?> | <?php bloginfo('name'); ?>
		<?php else : ?><?php wp_title($sep = ''); ?> | <?php bloginfo('name');?>
		<?php endif; ?></title>
		
		<!--[if IE]>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css" type="text/css" />
		<script src="<?php bloginfo('template_url'); ?>/js/html5.js" type="text/javascript"></script>
		<![endif]-->
		
		<!--VIEWPORT-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
		<script type="text/javascript">
			document.documentElement.className = 'js';
		</script>
		
	<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
	
		<!--NAVIGATION-->
		<header>
			<?php if ( get_field('colour_picker', 'options' ) ): ?>
			<nav style="background-color: <?php the_field('colour_picker', 'options' ); ?>;" class="theme-switch">
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
				</ul>
			</nav>
			<?php else : ?>
			<nav>
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
				</ul>
			</nav>
			<?php endif; ?>
		</header>
		<!--NAVIGATION-->