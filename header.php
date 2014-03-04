<!DOCTYPE html>
<htmL>
	<head>
		<title>
			
			<?php
				wp_title( '-', true, 'right' );
				bloginfo('name');
			?>

		</title>
		<?php wp_head(); ?>

		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon.png" />

	</head>
	<body>
		<div class='fullspan nav fixedTop'>
			<nav class="container_12">
				<div id='navlogo'>
					<h1 class='hide'><?php bloginfo('name'); ?></h1> <!-- FOR SEO PURPOSES | GETS HIDDEN -->
					<a href='<?php bloginfo('url'); ?>'><img src="<?php bloginfo('template_directory'); ?>/img/logo-reverse.png"></a>
				</div>
				<ul>
					<?php 	
						$args = array (
							menu => 'main-menu'
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
			<ul>
				<?php 	

					$menuname = wp_title('', false) . '-sub-menu';
					$args = array (
						menu => $menuname,
					);

					if ( wp_get_nav_menu_object($menuname) ) { // Display appropriate sub-menu if not on home-page
						wp_nav_menu( $args );
					};
					
				?>

			</ul>
		</nav>
	</div>

	<div class='fullspan feature'>
		<div class='container_12 slider'>
			<ul>

				<?php if ( $the_query->have_posts() & is_page('home') ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<li><img src="<?php the_field('image'); ?>"></li>
				<?php endwhile; else: ?>
					<li><img src="<?php bloginfo('template_directory'); ?>/img/logohr.png"></li>
				<?php endif; ?>

		    </ul>
		</div>
	</div>

