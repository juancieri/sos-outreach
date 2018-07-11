<?php /* Template Name: Contact Template */ get_header(); ?>

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
        <!-- GOOGLE MAP-->
        <script>
        initEditorResponsive();
        function initEditorResponsive() {
            $('.map-container iframe').removeAttr('style').removeAttr('width').removeAttr('height').addClass('embed-responsive-item').wrap("<div class='embed-responsive embed-responsive-16by9'></div>");
        }
        </script>