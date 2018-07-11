<?php
/*
Element Description: VC Section Title Element
*/

class vcSectionTitleElement extends WPBakeryShortCode {
	
    function __construct() {
        add_action( 'init', array( $this, 'vc_sectiontitleelement_mapping' ) );
        add_shortcode('vc_sectiontitleelement', array( $this, 'vc_sectiontitleelement_html' ) );
    }
    
    public function vc_sectiontitleelement_mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        
        vc_map( 
            array(
                'name' => __('Section Title', 'text-domain'),
                'base' => 'vc_sectiontitleelement',
                'category' => __('Others', 'text-domain'),   
                'icon' => get_template_directory_uri().'/img/favicon.ico',            
                'params' => array(
                		array(
                				'type' => 'textarea_html',
                				'holder' => 'div',
                				'class' => 'title-class',
                				'heading' => __( 'Text', 'text-domain' ),
                				'param_name' => 'content',
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
                ),
            )
        );
    }
    
    public function vc_sectiontitleelement_html($atts, $content) {
        extract(shortcode_atts(array('title' => ''), $atts));
        
        $html = '<div class="col-xs-12 text-center">
                            <h1 class="section-title">'.$title.'</h1>';
        if ($content != '') $html .='
                            <p>'.$content.'</p>'; 
        $html .= '</div>';
        return $html;
    }
}
new vcSectionTitleElement(); 
?>