<?php
/*
Element Description: VC Home Lettering Element
*/

class vcHomeLettringElement extends WPBakeryShortCode {
	
    function __construct() {
        add_action( 'init', array( $this, 'vc_homeletteringelement_mapping' ) );
        add_shortcode('vc_homeletteringelement', array( $this, 'vc_homeletteringelement_html' ) );
    }
    
    public function vc_homeletteringelement_mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        
        vc_map( 
            array(
                'name' => __('Home Lettering', 'text-domain'),
                'base' => 'vc_homeletteringelement',
                'category' => __('Home', 'text-domain'),   
                'icon' => get_template_directory_uri().'/img/favicon.ico',            
                'params' => array(
                		array(
                				'type' => 'textfield',
                				'holder' => 'h3',
                				'class' => 'title-class',
                				'heading' => __( 'Count', 'text-domain' ),
                				'param_name' => 'count',
                				'value' => '',
                				'admin_label' => false,
                		)
                ),
            )
        );
    }
    
    public function vc_homeletteringelement_html($atts) {
    	extract(shortcode_atts(array('count' => ''), $atts));
    	
    	$html = '<div class="counter lettering" data-count="'.$count.'">'.$count.'</div>'; 
        return $html;
    }
}
new vcHomeLettringElement(); 
?>