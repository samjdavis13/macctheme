<?php get_header(); ?>

	<div id='articlewrapper'>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class='fullspan article'>
				<article class='container_12'>
					<h1><?php the_title(); ?></h1>
					<span>Posted by <?php the_author(); ?><br><?php the_time(); echo(' '); the_date(); ?></span><br><br>
					<?php the_content(); ?>
				</article>
			</div>
		<?php endwhile; else:?>
			<p>There are no posts or pages here</p>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>