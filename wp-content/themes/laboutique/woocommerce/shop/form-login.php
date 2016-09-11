<?php
/**
 * Login form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

if (is_user_logged_in()) return;


?>

    <form method="post" class="login" <?php if ( $hidden ) echo 'style="display:none;"'; ?>>
        <div class="box">
    <div class="box-header">
        <h3><?php _e( 'Login', 'woocommerce' ); ?></h3>        
    </div>

    <div class="box-content">
        
            <?php if ( $message ) echo wpautop( wptexturize( $message ) ); ?>

        <div class="row-fluid">
            <div class="span6">
                    <div class="control-group">
                        <label for="username"><?php _e( 'Username or email', 'woocommerce' ); ?> <span class="required">*</span></label>
                        <input type="text" class="input-text span12" name="username" id="username" />
                    </div>
            </div>
            <div class="span6">
                    <div class="control-group">
                        <label for="password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
                        <input class="input-text span12" type="password" name="password" id="password" />
                    </div>
            </div>
            
        </div>
    </div>
    <div class="box-footer">
        <div class="pull-left">
            <?php wp_nonce_field( 'woocommerce-login' ) ?>
            <input type="submit" class="button btn btn-primary" name="login" value="<?php _e( 'Login', 'woocommerce' ); ?>" />
            <input type="hidden" name="redirect" value="<?php echo esc_url( $redirect ) ?>" />
        </div>
        <div class="pull-right">
            <a class="lost_password btn" href="<?php echo esc_url( wp_lostpassword_url( home_url() ) ); ?>"><?php _e( 'Lost Password?', 'woocommerce' ); ?></a>
        </div>
    </div>
            </div>
    </form>
