<!DOCTYPE html>
<htmL>
	<head>
		<title>
			<?php 
			if (is_category() ){
				// Remove archive from title. ie ( About Archive - Site Name -> About - Site Name )
				$pagetitle = wp_title('',FALSE);
				$pagetitle = substr($pagetitle, 0, -41);
				echo $pagetitle;
				echo " - ";
				echo bloginfo(title);
			}	
			else {
				wp_title('');
			}
		?>
		</title>
		<?php $options = get_option('theme_options'); ?>
		<?php wp_head(); ?>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon.png" />

		<meta name=viewport content="width=device-width, initial-scale=1">

	</head>
	<body>
		<div class="fullspan" id="mobile-logo">
			<div class="container_12" id="mobile-logo-inner">
				<a href='<?php bloginfo('url'); ?>'><img src="<?php bloginfo('template_directory'); ?>/img/logo-reverse.png"></a>
			</div>
		</div>
		<div class='fullspan nav fixedTop'>
			<nav class="container_12">
				<div id='navlogo' class="appear">
					<h1 class='hide'><?php bloginfo('name'); ?></h1> <!-- FOR SEO PURPOSES | GETS HIDDEN -->
					<a href='<?php bloginfo('url'); ?>'><img src="<?php bloginfo('template_directory'); ?>/img/logo-reverse.png"></a>
				</div>
				<ul class="right-align">
					<li id='home-link' class="hide"><a href='<?php bloginfo(url); ?>'>Home</a></li>
					<?php 	
						$args = array (
							menu => 'main-menu',
							container => '',
							items_wrap => '%3$s'
						);
						wp_nav_menu( $args );
					?>
				</ul>
			</nav>
		</div>

		<?php 
		$args = array(
			'post_type' => 'slider-images'
		);
		$the_query = new WP_Query( $args );
	?>

	<div class='fullspan subnav'>
		<nav class="container_12">
			<ul id='subnav'>
				<?php 	
					// If the page/post has a category, display all posts in category, else display appropriate subnav
					$category = get_category( get_query_var( 'cat' ) );
				    $cat_id = wp_get_post_categories( get_the_id() );
				    
					//echo('category is: ' . $cat_id[0] );

					if ( in_category($cat_id[0]) ) { 
						echo do_shortcode("[catlist id=" . $cat_id[0] . "]");
					}else {

						$menuname = wp_title('', false) . '-sub-menu';
						$args = array (
							menu => $menuname,
						);

						if ( wp_get_nav_menu_object($menuname) ) { // Display appropriate sub-menu if not on home-page
							wp_nav_menu( $args );
						};
					}
					
				?>

			</ul>
		</nav>
	</div>

	<div class='fullspan feature'>
		<div class='container_12 hero-img'>
		<?php
		/* Use hero-image if exists, else default to slider */
		$heroUrl = get_field('hero-image');
		if (strlen($heroUrl) > 0): ?>
			<img src="<?php the_field('hero-image') ?>" width="100%" class='hero-img'>
		<?php else: ?>
			<div class="slider">
				<ul>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<li class="slider-item"><a href='<?php the_field('featured-link'); ?>#'><img src="<?php the_field('image'); ?>"></a></li>
		<?php endwhile ?>
				</ul>
			</div> 
		<?php endif ?>
		</div>
	</div>

