<?php

/*
	WPB Advanced FAQ
	By WPBean
	
*/


if ( !function_exists('wpb_af_shortcode_function') ){
	function wpb_af_shortcode_function ($atts) {

		extract(shortcode_atts(array(
	      'post' 			=> -1,
	      'order' 			=> 'ASC',
	      'orderby' 		=> 'date',
	      'category'		=> '',
	      'tags'			=> '',
	      'theme'			=> 'flat', // ui, 
	      'close_previous'	=> 'yes', // no
	      'first_open'		=> 'no',
		  
	   ), $atts));
	   
		$wp_query = new WP_Query( array( 
			'post_type' 			=> 'wpb_af_faq', 
			'orderby' 				=> $orderby,
			'order' 				=> $order,
			'posts_per_page' 		=> $post,
			'wpb_af_faq_category'	=> $category,
			'wpb_af_faq_tags'		=> $tags,
		));

		$wpb_af_id = rand(10,1000);

		ob_start();
		$i = 0;
		if ($wp_query->have_posts()){ 
		?>
							<div class="panel-group" id="accordion<?php echo $wpb_af_id ?>" role="tablist" aria-multiselectable="true">
                               <?php while ($wp_query->have_posts()) : $wp_query->the_post();?>
                               <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading<?php the_ID(); ?>">
                                     <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion<?php echo $wpb_af_id ?>" href="#collapse<?php the_ID(); ?>" aria-expanded="false" aria-controls="collapse<?php the_ID(); ?>">
                                        <?php the_title(); ?>
                                        </a>
                                     </h4>
                                  </div>
                                  <div id="collapse<?php the_ID(); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php the_ID(); ?>">
                                     <div class="panel-body"><?php the_content(); ?></div>
                                  </div>
                               </div>
                               <?php 
								endwhile; ?>
                            </div>
		<?php
		}else{
			_e( '<h2 class="text-center">'.'No Post Found For FAQ.'.'</h2>', 'margo' );
		}
		wp_reset_postdata();  // Reset
		return ob_get_clean();
	}
	add_shortcode( 'wpb_af_faqs', 'wpb_af_shortcode_function' );
}	