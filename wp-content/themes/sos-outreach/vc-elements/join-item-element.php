<?php
/*
Element Description: VC Join Item Element
*/

class vcJoinItemElement extends WPBakeryShortCode {
	
    function __construct() {
        add_action( 'init', array( $this, 'vc_joinitemelement_mapping' ) );
        add_shortcode('vc_joinitemelement', array( $this, 'vc_joinitemelement_html' ) );
    }
    
    public function vc_joinitemelement_mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        
        vc_map( 
            array(
                'name' => __('Join Item', 'text-domain'),
                'base' => 'vc_joinitemelement',
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
                				'type' => 'attach_image',
                				'holder' => 'div',
                				'class' => 'text-class',
                				'heading' => __( 'Image', 'text-domain' ),
                				'param_name' => 'image',
                				'value' => '',
                				'admin_label' => false,
                		),
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
                				'type' => 'dropdown',
                				'holder' => 'h3',
                				'class' => 'title-class',
                				'heading' => __( 'Position', 'text-domain' ),
                				'param_name' => 'position',
                				'value' => array (
                						__( 'Normal',  "my-text-domain"  ) => 'normal',
                						__( 'Left',  "my-text-domain"  ) => 'left',
                				),
                				'admin_label' => false,
                		)
                		
                ),
            )
        );
    }
    
    public function vc_joinitemelement_html($atts, $content) {
    	extract(shortcode_atts(array('title' => '', 'btn_txt' => '', 'btn_link' => '', 'image' => '', 'position' => ''), $atts));
    	$images = wp_get_attachment_image_src($image, 'full');
    	$class = $position != 'left' ? '' : 'col-sm-offset-1';
    	
        $html = '
			<div class="col-xs-12 col-sm-2 '.$class.' text-center">
                <div class="block-item">
                    <img src="'.$images[0].'" alt="'.$title.'" class="img-responsive img-block">
                    <h4 class="icon-title">'.$title.'</h4>
                    <p>'.$content.'</p>
                    <a href="'.$btn_link.'" class="post-item-btn">'.$btn_txt.'+</a>
                </div>
            </div>';
        return $html;
    }
}
new vcJoinItemElement(); 
?>