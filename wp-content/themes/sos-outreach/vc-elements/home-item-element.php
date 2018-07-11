<?php
/*
Element Description: VC Home Item Element
*/

class vcHomeItemElement extends WPBakeryShortCode {
	
    function __construct() {
        add_action( 'init', array( $this, 'vc_homeitemelement_mapping' ) );
        add_shortcode('vc_homeitemelement', array( $this, 'vc_homeitemelement_html' ) );
    }
    
    public function vc_homeitemelement_mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        
        vc_map( 
            array(
                'name' => __('Home Item', 'text-domain'),
                'base' => 'vc_homeitemelement',
                'category' => __('Home', 'text-domain'),   
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
                				'type' => 'textarea_html',
                				'holder' => 'div',
                				'class' => 'title-class',
                				'heading' => __( 'Title', 'text-domain' ),
                				'param_name' => 'content',
                				'value' => '',
                				'admin_label' => false,
                		),
                		array(
                				'type' => 'textfield',
                				'holder' => 'h3',
                				'class' => 'title-class',
                				'heading' => __( 'Link Text ', 'text-domain' ),
                				'param_name' => 'wwwwwww',
                				'value' => '',
                				'admin_label' => false,
                		),
                		array(
                				'type' => 'textfield',
                				'holder' => 'h3',
                				'class' => 'title-class',
                				'heading' => __( 'Link', 'text-domain' ),
                				'param_name' => 'link',
                				'value' => '',
                				'admin_label' => false,
                		),
                		array(
                				'type' => 'attach_image',
                				'holder' => 'div',
                				'class' => 'text-class',
                				'heading' => __( 'Imagen', 'text-domain' ),
                				'param_name' => 'image',
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
                						__( 'Center',  "my-text-domain"  ) => 'center',
                				),
                				'admin_label' => false,
                		)
                ),
            )
        );
    }
    
    public function vc_homeitemelement_html($atts, $content) {
    	extract(shortcode_atts(array('title' => '', 'link' => '', 'image' => '', 'position' => '', 'wwwwwww' => 'Lear more'), $atts));
        $images = wp_get_attachment_image_src($image, 'full');
        $class = $position != 'center' ? '' : 'text-center';
        
        $html = '
						<div class="col-xs-12 col-sm-4 '.$class.'">
                            <div class="post-item text-center">
                                <figure>
                                    <a href="'.$link.'">
                                        <img src="'.$images[0].'" alt="" class="img-responsive">
                                    </a>
                                </figure>
                                <figcaption>
                                    <h4 class="post-item-title"><a href="'.$link.'">'.$title.'</a></h4>
                                    <p>'.$content.'</p>
                                </figcaption>
                                <a href="'.$link.'" class="post-item-btn">'.$wwwwwww.'+</a>
                            </div>
                        </div>'; 
        return $html;
    }
}
new vcHomeItemElement(); 
?>