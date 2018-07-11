<?php
/*
Element Description: VC Section Subtitle Element
*/

class vcSectionSubtitleElement extends WPBakeryShortCode {
	
    function __construct() {
        add_action( 'init', array( $this, 'vc_sectionsubtitleelement_mapping' ) );
        add_shortcode('vc_sectionsubtitleelement', array( $this, 'vc_sectionsubtitleelement_html' ) );
    }
    
    public function vc_sectionsubtitleelement_mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        
        vc_map( 
            array(
                'name' => __('Section Subtitle', 'text-domain'),
                'base' => 'vc_sectionsubtitleelement',
                'category' => __('Others', 'text-domain'),   
                'icon' => get_template_directory_uri().'/img/favicon.ico',            
                'params' => array(
                		array(
                				'type' => 'textfield',
                				'holder' => 'h3',
                				'class' => 'title-class',
                				'heading' => __( 'Title', 'text-domain' ),
                				'param_name' => 'title',
                				'value' => '',
                				'admin_label' => false,
                		),
                ),
            )
        );
    }
    
    public function vc_sectionsubtitleelement_html($atts) {
        extract(shortcode_atts(array('title' => ''), $atts));
        
        $html = '		<div class="col-xs-12 text-center">
                            <h2 class="section-subtitle">'.$title.'</h2>
                        </div>';
        return $html;
    }
}
new vcSectionSubtitleElement(); 
?>