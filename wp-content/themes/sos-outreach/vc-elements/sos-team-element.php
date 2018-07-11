<?php
/*
Element Description: VC SOS Team Element
*/

class vcSosTeamElement extends WPBakeryShortCode {
	
    function __construct() {
        add_action( 'init', array( $this, 'vc_sosteamelement_mapping' ) );
        add_shortcode('vc_sosteamelement', array( $this, 'vc_sosteamelement_html' ) );
    }
    
    public function vc_sosteamelement_mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        
        vc_map( 
            array(
                'name' => __('SOS Team', 'text-domain'),
                'base' => 'vc_sosteamelement',
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
    
    public function vc_sosteamelement_html($atts) {
    	extract(shortcode_atts(array('max' => '-1'), $atts));
    	$query = new WP_Query( array('post_type' => 'sos_team', 'posts_per_page' => $max, 'meta_key' => 'order', 'orderby' => 'meta_value', 'order' => 'ASC'));
    	$html = '<div class="row">';
    	if ($query->have_posts()){
    		$i = 0;
    		while ($query->have_posts()){
    			$query->the_post();
    			$url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
    			$cte = get_the_content();
    			$title = get_the_title();
    			
    			$html .= '
						<div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="post-item text-center">
                                <figure>
                                    <a href="'.get_field('link').'">
                                        <img src="'.$url.'" alt="" class="img-responsive">
                                    </a>
                                </figure>
                                <figcaption>
									<h4 class="post-item-title"><a href="'.get_field('link').'">'.get_field('name').'<br>'.get_field('last_name').'</a></h4>
                                    <p>'.$cte.'</p>
                                </figcaption>
                                <a href="'.get_field('link').'" class="post-item-btn">'.get_field('link_text').'+</a>
                            </div>
                        </div>';
    			if ($i % 4 == 3) $html .= '</div><div class="row">';
    			$i++;
    		}
    	}
    	wp_reset_postdata();
    	$html .= '</div>';
    	return $html;
    }
}
new vcSosTeamElement(); 
?>