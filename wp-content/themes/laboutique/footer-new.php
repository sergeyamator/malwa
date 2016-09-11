<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage La_Boutique
 * @since La Boutique 1.1
 */
if (DEBUG_INFO) {
	echo "\n<!-- FILE: /footer.php ================================================================= -->\n";
}
?>

    </section>

    <?php if (theme_option('twitter_publish')){?>
    <!-- Footer-all -->


    <div class="twitter-bar">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <div class="left-footer">
                        <div class="social-buttons">
        					<ul class="social span3">
        						<li class="social-item fb"><a href="https://www.facebook.com/malwalviv/"></a></li>
        						<li class="social-item vk"><a href="http://vk.com/malwalviv"></a></li>
        						<li class="social-item ins"><a href="https://www.instagram.com/malva_lviv/"></a></li>
        					</ul>
                        </div>
        				<div class="form-button span3">
        					<a href="<?php echo get_permalink(117); ?>">Підписатися</br> на розсилку</a>
        				</div>
                    </div>
                </div>
				<div class="shops span6">
                    <a>Львів, ТВК "Південний" ТЦ Україна №215 </br>096-913-07-00, 063-023-78-77</br>вівторок-неділя 10.00-19.00</br>понеділок вихідний</a>
                    <a>Львів, проспект Свободи 43</br>097-702-14-83, 063-019-29-69</br>понеділок-пятниця 10.00-19.00</br>субота 10.00-15.00</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end Footer-all -->



















    <?php } ?>
    <?php if (theme_option('footer_publish')){?>
    <?php } ?>
    <?php if (theme_option('footer_copy_publish')){?>
    <?php } ?>
    </div>
    <?php if (theme_option('advanced_script')){?>
        <?php echo theme_option('advanced_script')?>
    <?php } ?>
    <? if (constant('THEME_COLORS')){?>
    <? } ?>
    <?php wp_footer(); ?>
</body>
</html>