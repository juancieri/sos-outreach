<?php
/*
Element Description: VC Involved Volunteer Element
*/

class vcInvolvedVolunteerElement extends WPBakeryShortCode {
	
    function __construct() {
        add_action( 'init', array( $this, 'vc_involvedvolunteerelement_mapping' ) );
        add_shortcode('vc_involvedvolunteerelement', array( $this, 'vc_involvedvolunteerelement_html' ) );
    }
    
    public function vc_involvedvolunteerelement_mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        
        vc_map( 
            array(
                'name' => __('Volunteer', 'text-domain'),
                'base' => 'vc_involvedvolunteerelement',
                'category' => __('Involved', 'text-domain'),   
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
    
    public function vc_involvedvolunteerelement_html($atts) {
        extract(shortcode_atts(array('max' => '-1'), $atts));
        $query = new WP_Query( array('post_type' => 'volunteer', 'posts_per_page' => $max, 'meta_key' => 'order', 'orderby' => 'meta_value', 'order' => 'ASC'));
        $html = '<div class="row">';
        if ($query->have_posts()){
        	$i = 0;
        	while ($query->have_posts()){
        		$query->the_post();
        		$url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
        		$cte = get_the_content();
        		$title = get_the_title();
        		
        		$html .= '
						<div class="col-xs-12 col-sm-4">
                            <div class="post-item text-center">
                                <figure>
                                    <a href="'.get_field('link').'">
                                        <img src="'.$url.'" alt="" class="img-responsive">
                                    </a>
                                </figure>
                                <figcaption>
                                    <h4 class="post-item-title"><a href="'.get_field('link').'">'.$title.'</a></h4>
                                    <p>'.$cte.'</p>
                                </figcaption>
                                <a href="'.get_field('link').'" class="post-item-btn">'.get_field('link_text').'+</a>
                            </div>
                        </div>';
        		if ($i % 3 == 2) $html .= '</div><div class="row">';
        		$i++;
        	}
        }
        wp_reset_postdata();
        $html .= '</div>';
        return $html;
    }
}
new vcInvolvedVolunteerElement(); 
?>