<?php get_header(); ?>

	<?php 
		$args = array(
			'post_type' => 'home-post'
		);
		$the_query = new WP_Query( $args );
	?>

	<div id='articleWrapper'>
		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class='fullspan article'>
				<article class='container_12'>
					<h1><?php the_title(); ?></h1>
					<?php the_field( 'content' ); ?>
				</article>
			</div>
		<?php endwhile; else:?>
			<p>There are no posts or pages here</p>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>