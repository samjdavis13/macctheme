<!DOCTYPE html>
<htmL>
	<head>
		<title>
			
			<?php
				wp_title( '-', true, 'right' );
				bloginfo( 'name' );
			?>

		</title>
		<?php wp_head(); ?>
	</head>
	<body>
		<div class='fullspan nav fixedTop'>
			<nav class="container_12">
			<div id='navlogo'><img src="<?php bloginfo('template_directory'); ?>/img/logo-reverse.png"></div>
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

