<?php get_header(); ?>

	<?php $counter = 0; ?>
	<div id='articlewrapper'>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class='fullspan article'>
				<article class='container_12'>

					<?php
						if ( $counter < 1 ) : echo('<h1>Search Results:</h1><hr>');
						endif;
						$counter = $counter + 1;
					?>

					<a href='<?php the_permalink(); ?>'><h1><?php the_title(); ?></h1></a>

					<!--
					<span>Posted by <?php the_author(); ?><br><?php the_time(); echo(' '); the_date(); ?></span><br><br>
					-->

					<!-- Display content for normal or home-post type -->
					<?php the_content(); ?>
					<?php the_field('content'); ?>

				</article>
			</div>
		<?php endwhile; else:?>
			<div class='fullspan article'>
				<article class='container_12'>
					<p>No posts found with that search term.</p>
				</article>
			</div>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>