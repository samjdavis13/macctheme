<?php get_header(); ?>

<p>This is the index.php file</p>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>

<?php endwhile; else:?>

	<p>There are no posts or pages here</p>

<?php endif; ?>

<?php get_footer(); ?>