<?php
$templateName = basename(get_page_template());
switch ($templateName){
	case "home-template.php": $bodyId = 'home-page'; break;
	case "involved-template.php": $bodyId = "getInvolved-page"; break;
	case "impact-template.php": $bodyId = "impact-page"; break;
	case "contact-template.php": $bodyId = "contactUs-page"; break;
	case "about-template.php": $bodyId = "aboutUs-page"; break;
	case "resources-template.php": $bodyId = "resources-page"; break;
	default: $bodyId = "post-page"; break;
}
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<!-- Metas SEO-->
        <meta name="description" content="<?php bloginfo('description'); ?>"/>
        <meta name="robots" content="index,follow"/>
        <meta name="GOOGLEBOT" content="index,follow"/>
        <meta name="category" content="moda"/>
        <meta name="author" content="Autor del Site"/>
		
		<?php wp_head(); ?>
		
		<!-- Favicon-->
        <link rel="shortcut icon" type="image/ico" href="img/favicon.ico"/>
        <link rel="apple-touch-icon" href="img/apple-touch-icon-57x57.png"/>
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png"/>
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png"/>
        
        <!-- Facebook Open Graph -->
        <meta property="og:title" content="SOS Outreach - <?php wp_title(''); ?>" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <meta property="og:description" content="" />
		
	</head>
	<body <?php body_class(); ?> id="<?php echo $bodyId ?>">
		<menu class="side-menu">
		    <button type="button" class="toggle-menu">
		        <i class="fa fa-close"></i>
		    </button>
		    <div>
		        <nav class="side-nav">
		            <ul class="side-ul">
		                <?php wp_nav_menu(array('theme_location' => 'header-links', 'items_wrap' => '%3$s')); ?>
		            </ul>
		        </nav>
		        <div class="side-social">
		            <ul class="side-social-ul clearfix">
		                <?php 
		                $query = new WP_Query( array('post_type' => 'social_links', 'posts_per_page' => -1, 'meta_key' => 'order', 'orderby' => 'meta_value', 'order' => 'ASC'));
		                while ($query->have_posts()){
		                	$query->the_post();
		                ?>
		                <li>
		                    <a href="<?php echo get_field('link')?>" target="_blank" data-toggle="tooltip" data-placement="top" data-title="<?php echo get_the_title() ?>">
		                        <span class="fa-stack fa-lg">
		                          <i class="fa fa-circle fa-stack-2x"></i>
		                          <i class="fa <?php echo get_field('icon')?> fa-stack-1x fa-inverse"></i>
		                        </span>
		                    </a>
		                </li>
		                <?php } ?>
		            </ul>
		        </div>
		    </div>
		</menu>
		<div class="overlay-menu"></div>
		<header>
		    <div class="container">
		        <div class="row">
		            <div class="col-xs-12 clearfix">
		                <div class="pull-left">
		                    <a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/img/sos-outreach-logo.png" class="img-responsive logo" alt="SOS Outreach Logo"></a>
		                </div>
		                <div class="pull-right">
		                    <nav class="header-nav" role="nav">
		                        <ul>
		                            <?php wp_nav_menu(array('theme_location' => 'header-main', 'items_wrap' => '%3$s')); ?>
		                        </ul>
		                    </nav>
		                </div>
		            </div>
		        </div>
		    </div>
		</header>