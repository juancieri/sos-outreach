<?php /* Template Name: Involved Template */ get_header(); ?>

<main class="bg-after-white">
	<?php
	if (have_posts()):
	  while (have_posts()) : the_post();
	    the_content();
	  endwhile;
	endif;
	?>
</main>
<?php get_footer(); ?>