<?php
/*
Element Description: VC Impact Program Item Element
*/

class vcImpactItemElement extends WPBakeryShortCode {
	
    function __construct() {
        add_action( 'init', array( $this, 'vc_impactitemelement_mapping' ) );
        add_shortcode('vc_impactitemelement', array( $this, 'vc_impactitemelement_html' ) );
    }
    
    public function vc_impactitemelement_mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        
        vc_map( 
            array(
                'name' => __('Impact Program Item', 'text-domain'),
                'base' => 'vc_impactitemelement',
                'category' => __('Impact', 'text-domain'),   
                'icon' => get_template_directory_uri().'/img/favicon.ico',            
                'params' => array(
                		array(
                				'type' => 'textfield',
                				'holder' => 'h3',
                				'class' => 'title-class',
                				'heading' => __( 'Percent', 'text-domain' ),
                				'param_name' => 'percent',
                				'value' => '',
                				'admin_label' => false,
                		),
                		array(
                				'type' => 'textarea_html',
                				'holder' => 'div',
                				'class' => 'title-class',
                				'heading' => __( 'Text', 'text-domain' ),
                				'param_name' => 'content',
                				'value' => '',
                				'admin_label' => false,
                		)
                ),
            )
        );
    }
    
    public function vc_impactitemelement_html($atts, $content) {
        extract(shortcode_atts(array('percent' => ''), $atts));
        
        $html = '
						<div class="col-sm-4 text-center">
                            <div class="number-item">
                                <span>'.$percent.'%</span>
                                <h4 class="post-item-title">'.$content.'</h4>
                            </div>
                        </div>';
        return $html;
    }
}
new vcImpactItemElement(); 
?>