<?php
/*
Element Description: VC Home Header Element
*/

class vcHomeHeaderElement extends WPBakeryShortCode {
	
    function __construct() {
        add_action( 'init', array( $this, 'vc_homeheaderelement_mapping' ) );
        add_shortcode('vc_homeheaderelement', array( $this, 'vc_homeheaderelement_html' ) );
    }
    
    public function vc_homeheaderelement_mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        
        vc_map( 
            array(
                'name' => __('Home Header', 'text-domain'),
                'base' => 'vc_homeheaderelement',
                'category' => __('Home', 'text-domain'),   
                'icon' => get_template_directory_uri().'/img/favicon.ico',            
                'params' => array(
                		array(
                				'type' => 'textarea_html',
                				'holder' => 'div',
                				'class' => 'title-class',
                				'heading' => __( 'Title', 'text-domain' ),
                				'param_name' => 'content',
                				'value' => '',
                				'admin_label' => false,
                		),
                		array(
                				'type' => 'attach_image',
                				'holder' => 'div',
                				'class' => 'text-class',
                				'heading' => __( 'Background', 'text-domain' ),
                				'param_name' => 'image',
                				'value' => '',
                				'admin_label' => false,
                		),
                		array(
                				'type' => 'attach_image',
                				'holder' => 'div',
                				'class' => 'text-class',
                				'heading' => __( 'Misc', 'text-domain' ),
                				'param_name' => 'misc',
                				'value' => '',
                				'admin_label' => false,
                		),
                ),
            )
        );
    }
    
    public function vc_homeheaderelement_html($atts, $content) {
        extract(shortcode_atts(array('misc' => '', 'image' => ''), $atts));
        $images = wp_get_attachment_image_src($image, 'full');
        $miscs = wp_get_attachment_image_src($misc, 'full');
        
        $html = '
				<section class="fullHeight section" style="background-image: url(\''.$images[0].'\');">
	                <img src="'.$miscs[0].'" alt="" class="header-misc">';
        if ($content != ''){
        	$html .= '
					<div class="wow fadeInUp">
	                    <h1 class="header-title">'.$content.'</span></h1>
	                </div>';
        }       
   		$html .= '</section>'; 
        return $html;
    }
}
new vcHomeHeaderElement(); 
?>