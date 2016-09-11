<?php
/*
Template Name: TestNew
*/
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
*!------
*<div id="carusel">
*<?php echo do_shortcode("[all_in_one_carousel settings_id='1']"); ?>
*</div>
 * @package WordPress
 * @subpackage La_Boutique
 * @since La Boutique 1.1
 */
if (DEBUG_INFO) {
	echo "\n<!-- FILE: /page-home.php ================================================================= -->\n";
}
get_header('new'); ?>
<section class="home">




<?php if (theme_option('home_promos')){?>

<!-- Promos -->
<section class="promos">
    <div class="container">
        <div class="row">
            <?php foreach(array('first','second','third') as $k=>$v){?>
                <div class="span4">
                    <div class="<?php echo $v; ?>">
                        <div class="box border-top">
                            <?php if (theme_option('home_promos_'.$v.'_icon')){?>
                            <i class="icon <?php echo esc_attr(theme_option('home_promos_'.$v.'_icon')); ?>"></i>
                            <?php } else if (theme_option('home_promos_'.$v.'_image')){?>
                            <?php $image=theme_option('home_promos_'.$v.'_image');?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="" />
                            <?php } ?>
                            <div class="hgroup title">
                                <?php if (theme_option('home_promos_'.$v.'_title')){?>
                                <h3><?php echo theme_option('home_promos_'.$v.'_title'); ?></h3>
                                <?php } ?>
                                <?php if (theme_option('home_promos_'.$v.'_subtitle')){?>
                                <h5><?php echo theme_option('home_promos_'.$v.'_subtitle'); ?></h5>
                                <?php } ?>
                            </div>
                            <?php if (theme_option('home_promos_'.$v.'_text')){?>
                            <p><?php echo theme_option('home_promos_'.$v.'_text'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>



        </div>
    </div>
</section>
<!-- End class="promos" -->
<?php } ?>
<div class="container">
    <div class="row">
        <?php if (theme_option('shop_home_sidebar')=='left'){?>
        <div class="span3">
            <?php dynamic_sidebar('sidebar-4'); ?>
        </div>
        <?php } ?>
        <div class="span9">
            <?php
                $args = array( 'post_type' => 'product',/* 'stock' => 1,*/ 'posts_per_page' => 12, 'orderby' =>'date','order' => 'DESC' );
                $wp_query = new WP_Query( $args );

            ?>


            <?php if ( have_posts() ) : ?>


                <ul class="product-list" id="isotope_content">
                    <?php
                            /**
                             * woocommerce_before_shop_loop hook
                             *
                             * @hooked woocommerce_result_count - 20
                             * @hooked woocommerce_catalog_ordering - 30
                             */
                            //do_action( 'woocommerce_before_shop_loop' );
                    ?>
                    <?php /* The loop */ ?>
                    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                        <li class="standard item<?php if (get_post_meta( get_the_ID(), 'featured_product', true )=='yes'){?> featured<?php } ?>">
                            <?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
                            <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                        </li>
                    <?php endwhile; ?>

                    <?php
                    /**
                     * woocommerce_after_shop_loop hook
                     *
                     * @hooked woocommerce_pagination - 10
                     */
                    //do_action( 'woocommerce_after_shop_loop' );
                    ?>
                </ul>


            <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

                    <?php woocommerce_get_template( 'loop/no-products-found.php' ); ?>

            <?php endif; ?>
        </div>
        <?php if (!theme_option('shop_home_sidebar')||theme_option('shop_home_sidebar')=='right'){?>
        <div class="span3">
            <?php dynamic_sidebar('sidebar-4'); ?>
        </div>
        <?php } ?>
    </div>
</div>
    </section>
<?php get_footer('new'); ?>
