<?php
/*
Element Description: VC Join Img Element
*/

class vcJoinImgElement extends WPBakeryShortCode {
	
    function __construct() {
        add_action( 'init', array( $this, 'vc_joinimgelement_mapping' ) );
        add_shortcode('vc_joinimgelement', array( $this, 'vc_joinimgelement_html' ) );
    }
    
    public function vc_joinimgelement_mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        
        vc_map( 
            array(
                'name' => __('Join Image', 'text-domain'),
                'base' => 'vc_joinimgelement',
                'category' => __('Others', 'text-domain'),   
                'icon' => get_template_directory_uri().'/img/favicon.ico',            
                'params' => array(
                		array(
                				'type' => 'attach_image',
                				'holder' => 'div',
                				'class' => 'text-class',
                				'heading' => __( 'Image', 'text-domain' ),
                				'param_name' => 'image',
                				'value' => '',
                				'admin_label' => false,
                		)
                ),
            )
        );
    }
    
    public function vc_joinimgelement_html($atts) {
    	extract(shortcode_atts(array('image' => ''), $atts));
    	$images = wp_get_attachment_image_src($image, 'full');
        $html = '
			 <div class="col-xs-12 col-sm-6">
                <img src="'.$images[0].'" alt="Join The Family of SOS Outreach" class="img-responsive img-block">
            </div>';
        return $html;
    }
}
new vcJoinImgElement(); 
?>