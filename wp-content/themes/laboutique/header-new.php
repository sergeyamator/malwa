<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage La_Boutique
 * @since La Boutique 1.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" dir="ltr">
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="La Boutique WP v1.2" />
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <?php if (theme_option('favicon')){?>
        <?php $favicon=theme_option('favicon');?>
        <link rel="shortcut icon" href="<?php echo esc_url($favicon['url']); ?>" type="image/x-icon" />
        <?php } ?>
        <?php wp_head(); ?>
        <?php if (constant('LESS_CSS')){?>
        <?php
            if (theme_option('color_scheme')){
                $color_scheme=theme_option('color_scheme');
            } else {
                $color_scheme=theme_option('turquoise');
            }
        ?>
        <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/less/<?=$color_scheme?>.less" id="color_scheme" >
        <script src="<?php bloginfo('template_directory'); ?>/js/less.js" type="text/javascript"></script>
        <?php } ?>
        <?php
            if (constant('THEME_COLORS')){
                echo "<link rel='stylesheet' id='core-theme-css'  href='' type='text/css' media='all' />";
            }
        ?>


        <style>
            <?php
                if (defined('CUSTOM_CSS')){
                    if (constant('CUSTOM_CSS')){
                        echo CUSTOM_CSS;
                    }
                }
            ?>

            <?php
                //Array ( [font-family] => Finger Paint [google] => true [font-weight] => 400 [font-style] => [subsets] => latin [font-size] => 12px [line-height] => 55px [color] => #1f1daa ) 1
                if (theme_option('style_font') && theme_option('style_font_switch')){
                    $style_font=theme_option('style_font');

                    if ($style_font['font-family']){
                        echo 'h1,h2,h3,h4,h5,h6{font-family: '.$style_font['font-family'].';}';
                    }
                }
            ?>
            <?php
                //Array ( [font-family] => Finger Paint [google] => true [font-weight] => 400 [font-style] => [subsets] => latin [font-size] => 12px [line-height] => 55px [color] => #1f1daa ) 1
                if (theme_option('style_font_body') && theme_option('style_font_body_switch')){
                    $style_font_body=theme_option('style_font_body');

                    if ($style_font_body['font-family']){
                        echo '.order_details #place_order, #order_review #place_order,.wpb_button, .btn,a.button,.widget_shopping_cart .buttons a,.box .form-submit a, .box .box-footer a,.entry-content input[type="submit"],body,html{font-family: '.$style_font_body['font-family'].';}';
                    }
                }
            ?>
            <?php if (theme_option('style_background_color')){?>
            body{background-color: <?=theme_option('style_background_color')?>;}
            <?php } else if ($_COOKIE['core-backgroundcolor'] && constant('THEME_COLORS')){?>
            body{background-color:<?=$_COOKIE['core-backgroundcolor']?>;}
            <?php } ?>
            <?php
                if (theme_option('style_background_image')){
                    $style_background_image=theme_option('style_background_image');

                    if ($style_background_image['url']){
            ?>
            .main{
                background-image:url('<?=$style_background_image['url']?>');
                <?php if (theme_option('style_background_image_repeat')){?>
                background-repeat: <?=theme_option('style_background_image_repeat');?>;
                <?php } ?>
                <?php if (theme_option('style_background_image_position_horizontal') && theme_option('style_background_image_position_vertical')){?>
                background-position: <?=theme_option('style_background_image_position_horizontal');?> <?=theme_option('style_background_image_position_vertical');?>;
                <?php } ?>
                <?php if (theme_option('style_background_image_attachment')){?>
                background-attachment: <?=theme_option('style_background_image_attachment');?>;
                <?php } ?>
            }
            <?php } ?>
            <?php } ?>
            <?php if (theme_option('advanced_css')){?>
                <?php echo theme_option('advanced_css')?>
            <?php } ?>
        </style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75991068-1', 'auto');
  ga('send', 'pageview');
</script>
</head>
<body <?php body_class(); ?>>
<div class="wrapper<?php if (theme_option('style_layout')=='boxed'){?> boxed<?php } ?>">
    <div class="header_wrapper">
        <!-- Header -->
        <div class="header">
            <div class="header-up">
                <div class="container">
                    <div class="row">
                        <div class="upper-line">
                            <ul class="header-up-menu">
                                <li>
                                    <a href="<?php echo get_permalink(984); ?>">Про фірму</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_permalink(117); ?>">
                                    Контакти</a>
                                </li>
                            </ul>
                             <?php if (theme_option('top_right')){?>
                                <?php laboutique_my_account_nav(array(
                                    'class'=>'inline log-in pull-right'
                                )); ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-main">
                <div class="container">
                    <div class="header-main-row">
                        <div class="row">
                            <div class="span3">
                                <div class="logo-header-main">
                                    <!-- <img src="images/logo1.png"> -->
                                </div>
                            </div>
                            <div class="span6 header-span6">
                                <div class="blurb">
                                    <div class="blurb-items"></div>
                                    <div class="blurb-items"></div>
                                    <div class="blurb-items"></div>
                                </div>
                            </div>
                            <div class="span3 span3-right">
                                <div class="header-main-right">
                                    <div class="search">
                                        <div class="qs_s">
                                            <form method="get" action="<?php echo home_url();?>" role="search">
                                                <input type="text" name="s" id="query" placeholder="Search&hellip;" autocomplete="off" value="">
                                                <input type="submit" value="<?=esc_attr(__('Search',DOMAIN))?>" id="searchsubmit">
                                                <input type="hidden" value="product" name="post_type">
                                            </form>
                                            <!-- Autocomplete results -->
                                            <div id="autocomplete-results" >
                                            </div>
                                            <!-- End id="autocomplete-results" -->
                                        </div>
                                    </div>
                                    <div class="basket">
                                     <?php laboutique_mini_cart();?>
                                     </div>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navi">
            <div class="container">
                <div class="row">
                    <div class="mobile-menu">меню</div>
                    <?php wp_nav_menu('menu=new-main-menu'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Content section -->
    <section class="main">