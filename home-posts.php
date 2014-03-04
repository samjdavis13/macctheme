<div id='articlewrapper'>

	<?php 
		$args = array(
			'post_type' => 'home-post'
		);
		$the_query = new WP_Query( $args );
	?>

	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class='fullspan article'>
			<article class='container_12'>
				<a href="#"><?php the_title(); ?></a>
				<?php the_field( 'content' ); ?>
			</article>
		</div>
	<?php endwhile; else:?>
		<p>There are no posts or pages here</p>
	<?php endif; ?>
w
</div>

<?php get_footer(); ?>