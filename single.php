<?php get_header(); ?>

	<div id='articlewrapper'>
		<div class='fullspan article'>
			<article class='container_12'>
				<h1><?php the_title(); ?></h1>
				<?php the_field( 'content' ); ?>
			</article>
		</div>
	</div>

<?php get_footer(); ?>