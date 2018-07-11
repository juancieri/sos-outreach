<?php
/*
Element Description: VC Involved Column Element
*/

class vcInvolvedColumnElement extends WPBakeryShortCode {
	
    function __construct() {
        add_action( 'init', array( $this, 'vc_involvedcolumnelement_mapping' ) );
        add_shortcode('vc_involvedcolumnelement', array( $this, 'vc_involvedcolumnelement_html' ) );
    }
    
    public function vc_involvedcolumnelement_mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        
        vc_map( 
            array(
                'name' => __('Involved Column', 'text-domain'),
                'base' => 'vc_involvedcolumnelement',
                'category' => __('Involved', 'text-domain'),   
                'icon' => get_template_directory_uri().'/img/favicon.ico',            
                'params' => array(
                		array(
                				'type' => 'textarea',
                				'holder' => 'h3',
                				'class' => 'title-class',
                				'heading' => __( 'Title', 'text-domain' ),
                				'param_name' => 'title',
                				'value' => '',
                				'admin_label' => false,
                		),
                		array(
                				'type' => 'textfield',
                				'holder' => 'h3',
                				'class' => 'title-class',
                				'heading' => __( 'Link Text', 'text-domain' ),
                				'param_name' => 'btn_txt',
                				'value' => '',
                				'admin_label' => false,
                		),
                		array(
                				'type' => 'textfield',
                				'holder' => 'h3',
                				'class' => 'title-class',
                				'heading' => __( 'Link', 'text-domain' ),
                				'param_name' => 'btn_link',
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
                		),
                		array(
                				'type' => 'dropdown',
                				'holder' => 'h3',
                				'class' => 'title-class',
                				'heading' => __( 'Columns', 'text-domain' ),
                				'param_name' => 'cols',
                				'value' => array (
                						__( 'Four',  "my-text-domain"  ) => 'four',
                						__( 'Two',  "my-text-domain"  ) => 'two',
                				),
                				'admin_label' => false,
                		)
                		
                ),
            )
        );
    }
    
    public function vc_involvedcolumnelement_html($atts, $content) {
    	extract(shortcode_atts(array('title' => '', 'btn_txt' => '', 'btn_link' => '', 'cols' => ''), $atts));
    	$class = $cols != 'two' ? 'col-xs-12 col-sm-6 col-md-3 text-center' : 'col-xs-12 col-sm-6 text-center';
    	
        $html = '
						<div class="'.$class.'">
                            <h3 class="post-item-title">'.$title.'</h3>
                            <p>'.$content.'</p>';
        if ($btn_txt != ''){
        	$html .= '<a href="'.$btn_link.'" class="post-item-btn">'.$btn_txt.'+</a>';
        }
        $html .= '</div>';
        return $html;
    }
}
new vcInvolvedColumnElement(); 
?>