<footer class="bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <?php echo do_shortcode('[contact-form-7 id="53" title="Newsletter" html_id="newsletter-form" html_class="form"]') ?>
            </div>
            <div class="col-xs-12 col-sm-4 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/footer-stats.png" alt="" class="img-responsive">
            </div>
            <div class="col-xs-12 col-sm-4 text-right">
                <ul class="social">
                    <?php 
	                $query = new WP_Query( array('post_type' => 'social_links', 'posts_per_page' => -1, 'meta_key' => 'order', 'orderby' => 'meta_value', 'order' => 'ASC'));
	                while ($query->have_posts()){
	                	$query->the_post();
	                ?>
	                <li>
                        <a href="<?php echo get_field('link')?>" target="_blank" data-toggle="tooltip" data-placement="top" data-title="<?php echo get_the_title() ?>">
                            <span class="fa-stack fa-lg">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa <?php echo get_field('icon')?> fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
	                <?php } ?>
                </ul>
                © 2017 SOS Outreach. All rights reserved.
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
	</body>
</html>
<script>
new WOW().init();
$("#newsletter-form").attr("data-toggle", "validator");
</script>

