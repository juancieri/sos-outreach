<?php
/*
Element Description: VC About Posts Element
*/

class vcAboutPostsElement extends WPBakeryShortCode {
	
    function __construct() {
        add_action( 'init', array( $this, 'vc_aboutpostselement_mapping' ) );
        add_shortcode('vc_aboutpostselement', array( $this, 'vc_aboutpostselement_html' ) );
    }
    
    public function vc_aboutpostselement_mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        
        vc_map( 
            array(
                'name' => __('About Posts', 'text-domain'),
                'base' => 'vc_aboutpostselement',
                'category' => __('About', 'text-domain'),   
                'icon' => get_template_directory_uri().'/img/favicon.ico',            
                'params' => array(
                		array(
                				'type' => 'textfield',
                				'holder' => 'h3',
                				'class' => 'title-class',
                				'heading' => __( 'Max', 'text-domain' ),
                				'param_name' => 'max',
                				'value' => '',
                				'admin_label' => false,
                		),
                ),
            )
        );
    }
    
    public function vc_aboutpostselement_html($atts) {
    	extract(shortcode_atts(array('max' => '-1'), $atts));
    	$query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => $max,'post_status' => 'publish'));
    	$html = '';
    	if ($query->have_posts()){
    		$i = 0;
    		while ($query->have_posts()){
    			$query->the_post();
    			$url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'large');
    			$cte = get_the_content();
    			
    			$html .= '
					<div class="blog-post">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1">
                                <a href="post.php" class="blog-post-img">
                                    <img src="'.$url[0].'" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <div class="blog-post-date">'.get_the_date().'</div>
                                <h4 class="post-item-title">'.get_the_title().'</h4>
                                <p>'.get_the_excerpt().'</p>
								<a href="'.get_permalink().'" class="post-item-btn">READ MORE+</a>
                            </div>
                        </div>
                    </div>';
    		}
    	}
    	wp_reset_postdata();
    	return $html;
    }
}
new vcAboutPostsElement(); 
?>