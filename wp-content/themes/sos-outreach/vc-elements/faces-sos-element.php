<?php
/*
Element Description: VC Faces SOS Element
*/

class vcFacesSosElement extends WPBakeryShortCode {
	
    function __construct() {
        add_action( 'init', array( $this, 'vc_facessoselement_mapping' ) );
        add_shortcode('vc_facessoselement', array( $this, 'vc_facessoselement_html' ) );
    }
    
    public function vc_facessoselement_mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        
        vc_map( 
            array(
                'name' => __('Faces SOS', 'text-domain'),
                'base' => 'vc_facessoselement',
                'category' => __('Others', 'text-domain'),   
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
    
    public function vc_facessoselement_html($atts) {
        extract(shortcode_atts(array('max' => '-1'), $atts));
        $query = new WP_Query( array('post_type' => 'faces_sos', 'posts_per_page' => $max, 'meta_key' => 'order', 'orderby' => 'meta_value', 'order' => 'ASC'));
        $html = '<div id="gallery"><div class="container-fluid"><div class="row">';
        if ($query->have_posts()){
        	$i = 0;
        	while ($query->have_posts()){
        		$query->the_post();
        		$url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
        		$cte = get_the_content();
        		
        		$c1 = $c2 = '';
        		switch ($i % 5){
        			case 0: $c1 = 'col-xs-12 col-sm-5'; break;
        			case 1: $c1 = 'col-xs-12 col-sm-3'; $c2 = 'even'; break;
        			case 2: $c1 = 'col-xs-12 col-sm-4'; break;
        			case 3: $c1 = 'col-xs-12 col-sm-6'; break;
        			case 4: $c1 = 'col-xs-12 col-sm-6'; break;
        		}
        		
        		$html .= '
				<div class="'.$c1.'">
                    <div class="face-item '.$c2.'" style="background-image:url(\''.$url.'\');">
                        <div class="face-item-text text-center">
                            <div>
                                <em>'.$cte.'</em>
                                <span>'.get_field('name').'</span>
                            </div>
                        </div>
                    </div>
                </div>';
        		
        		$i++;
        	}
        }
        wp_reset_postdata();
        $html .= '</div></div></div>';
        return $html;
    }
}
new vcFacesSosElement(); 
?>