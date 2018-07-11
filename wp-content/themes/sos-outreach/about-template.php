<?php /* Template Name: About Us Template */ get_header(); ?>

<main>
	<?php
	if (have_posts()):
	  while (have_posts()) : the_post();
	    the_content();
	  endwhile;
	endif;
	?>
</main>
<?php get_footer(); ?>
<script>
            $(document).ready(function(){
                initCarousel();
                initLettering();
            });
        </script>