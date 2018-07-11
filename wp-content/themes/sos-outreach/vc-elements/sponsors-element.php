<?php
/*
Element Description: VC Sponsors Element
*/

class vcSponsorsElement extends WPBakeryShortCode {
	
    function __construct() {
        add_action( 'init', array( $this, 'vc_sponsorselement_mapping' ) );
        add_shortcode('vc_sponsorselement', array( $this, 'vc_sponsorselement_html' ) );
    }
    
    public function vc_sponsorselement_mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        
        vc_map( 
            array(
                'name' => __('Sponsors', 'text-domain'),
                'base' => 'vc_sponsorselement',
                'category' => __('Others', 'text-domain'),   
                'icon' => get_template_directory_uri().'/img/favicon.ico',            
                'params' => array(
                		array(
                				'type' => 'attach_images',
                				'holder' => 'div',
                				'class' => 'text-class',
                				'heading' => __( 'Images', 'text-domain' ),
                				'param_name' => 'images',
                				'value' => '',
                				'admin_label' => false,
                		)
                ),
            )
        );                                
        
    }
    
    public function vc_sponsorselement_html($atts) {
    	extract(shortcode_atts(array('images' => ''), $atts));
    	$image_ids = explode(',',$images);
        $html = '
				<div class="row">
					<div class="col-xs-12">
						<div class="owl-carousel sponsorCarousel" id="sponsorCarousel">';
        foreach($image_ids as $image_id){
        	$imageFull = wp_get_attachment_image_src($image_id, 'full' );
        	
        	$html .= '
					<div class="item">
                        <img src="'.$imageFull[0].'" alt="" class="img-responsive">
                    </div>';
        }
        $html .= '</div></div></div>'; 
        return $html;
    }
}
new vcSponsorsElement(); 
?>