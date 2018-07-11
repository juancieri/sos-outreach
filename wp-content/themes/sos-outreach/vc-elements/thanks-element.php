<?php
/*
Element Description: VC THanks Element
*/

class vcThanksElement extends WPBakeryShortCode {
	
    function __construct() {
        add_action( 'init', array( $this, 'vc_thankselement_mapping' ) );
        add_shortcode('vc_thankselement', array( $this, 'vc_thankselement_html' ) );
    }
    
    public function vc_thankselement_mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        
        vc_map( 
            array(
                'name' => __('Thanks Element', 'text-domain'),
                'base' => 'vc_thankselement',
                'category' => __('Thanks Element', 'text-domain'),   
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
                		),
                		array(
                				'type' => 'textfield',
                				'holder' => 'h3',
                				'class' => 'title-class',
                				'heading' => __( 'Title', 'text-domain' ),
                				'param_name' => 'title',
                				'value' => '',
                				'admin_label' => false,
                		), 
	                	array(
		                        'type' => 'textarea',
		                        'holder' => 'div',
		                        'class' => 'text-class',
		                        'heading' => __( 'Text', 'text-domain' ),
		                        'param_name' => 'text',
	                			'value' => '',
		                        'admin_label' => false,
	                    ),
                		array(
                				'type' => 'textfield',
                				'holder' => 'h3',
                				'class' => 'title-class',
                				'heading' => __( 'Button Text', 'text-domain' ),
                				'param_name' => 'btn_text',
                				'value' => '',
                				'admin_label' => false,
                		),
                		array(
                				'type' => 'textfield',
                				'holder' => 'h3',
                				'class' => 'title-class',
                				'heading' => __( 'Button Link', 'text-domain' ),
                				'param_name' => 'btn_link',
                				'value' => '',
                				'admin_label' => false,
                		),
                ),
            )
        );                                
        
    }
    
    public function vc_thankselement_html($atts) {
        extract(shortcode_atts(array('title' => '','text' =>'','btn_text' =>'', 'btn_link' => '', 'image' => ''), $atts));
        $images = wp_get_attachment_image_src($image, 'full');
        
        $html = '
        			<div class="col-xs-12 text-center">
                        <img src="'.$images[0].'" alt="" class="thankyou-icon img-responsive">
                        <h1 class="featured-title">'.$title.'</h1>
                        <p>'.$text.'</p>
                        <a href="'.$btn_link.'" class="primary-link">'.$btn_text.'</a>
                    </div>'; 
        return $html;
    }
}
new vcThanksElement(); 
?>