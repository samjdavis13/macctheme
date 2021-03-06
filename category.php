<?php get_header(); ?>
	<?php $counter = 0; ?>
	<div id='articlewrapper'>
		<?php if ( have_posts() ) : while ( have_posts() && $counter <= 0 ) : the_post(); ?>
			<?php $counter++; ?>

			<div class='fullspan article'>
				<article class='container_12'>
					<a href='<?php the_permalink(); ?>'><h1 id='post-title'><?php the_title(); ?></h1></a>
					<!--<span>Posted by <?php the_author(); ?><br><?php the_time(); echo(' '); the_date(); ?></span><br><br>-->
					<?php the_content(); ?>
				</article>
			</div>
		<?php endwhile; else:?>
			<div class='fullspan article'>
				<article class='container_12'>
					<p>There are no posts or pages here</p>
				</article>
			</div>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>