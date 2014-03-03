<?php get_header(); ?>

<div id='articlewrapper'>

	<?php 
		$args = array(
			'post_type' => 'home-post'
		);
		$the_query = new WP_Query( $args );
	?>

	<div class='fullspan article'>
		<article class='container_12'>
			<h1><?php the_title(); ?></h1>
			<?php the_field( 'content' ); ?>
		</article>
	</div>

</div>

<?php get_footer(); ?>