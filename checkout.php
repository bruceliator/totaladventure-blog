<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 * Template Name: Checkout 
 */

get_header(); ?>



		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <noscript><h2>We detected that your browser does not have Javascript enabled. Please enable Javascript to be able to view the College Applications.</h2></noscript>
        
        <h2><span>C</span>heckout</h2>
        <div id="checkout">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				
				<div id="checkout_buttons">
				
        <?php
        if ($_GET){
        $pack = $_GET["pack"];
        $newpack = $_GET["newpack"];        
        }
        
        ?>

        <?php if ($pack=="brown") {?>
        
<!-- User buys Brown package, and it is the first purchase -->
        
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
 <input type="hidden" name="business" value="info@wegotin.net" />
 <input type="hidden" name="cmd" value="_xclick" />
 <!-- Instant Payment Notification & Return Page Details -->
 <input type="hidden" name="notify_url" value="http://www.wegotin.net/?s2member_paypal_notify=1" />
 <input type="hidden" name="cancel_return" value="http://www.wegotin.net" />
 <input type="hidden" name="return" value="http://www.wegotin.net/?s2member_paypal_return=1" />
 <input type="hidden" name="rm" value="2" />
 <!-- Configures All Of The Checkout Fields -->
 <input type="hidden" name="no_shipping" value="1" />
 <input type="hidden" name="no_note" value="1" />
 <input type="hidden" name="custom" value="www.wegotin.net" />
 <input type="hidden" name="currency_code" value="USD" />
 <input type="hidden" name="page_style" value="paypal" />
 <input type="hidden" name="item_name" value="Brown Applications Package" />
 <input type="hidden" name="item_number" value="1:brown:6 M" />
 <!-- Identifies/Updates An Existing Member After Checkout -->
 <input type="hidden" name="on0" value="<?php echo S2MEMBER_CURRENT_USER_VALUE_FOR_PP_ON0; ?>" />
 <input type="hidden" name="os0" value="<?php echo S2MEMBER_CURRENT_USER_VALUE_FOR_PP_OS0; ?>" />
 <input type="hidden" name="modify" value="0" />
 <!-- Customizes Prices, Payments & Billing Cycle -->
 <input type="hidden" name="amount" value="19.99" />
 <!--<input type="hidden" name="src" value="BN" />-->
 <!--<input type="hidden" name="sra" value="1" />-->
 <!--<input type="hidden" name="a1" value="0.00" />-->
 <!--<input type="hidden" name="p1" value="0" />-->
 <!--<input type="hidden" name="t1" value="D" />-->
 <!--<input type="hidden" name="a3" value="19.99" />-->
 <!--<input type="hidden" name="p3" value="6" />-->
 <!--<input type="hidden" name="t3" value="M" />-->
 <!-- Displays The PayPal® Image Button -->
 <input type="image" alt="PayPal®" style="border:0;" src="http://www.wegotin.net/wp-content/uploads/2010/08/but_checkout.jpg" />
</form>


        <?php } elseif ($pack=="columbia") {?>

<!-- User buys Columbia package, and it is the first purchase -->        
        
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
 <input type="hidden" name="business" value="info@wegotin.net" />
 <input type="hidden" name="cmd" value="_xclick" />
 <!-- Instant Payment Notification & Return Page Details -->
 <input type="hidden" name="notify_url" value="http://www.wegotin.net/?s2member_paypal_notify=1" />
 <input type="hidden" name="cancel_return" value="http://www.wegotin.net" />
 <input type="hidden" name="return" value="http://www.wegotin.net/?s2member_paypal_return=1" />
 <input type="hidden" name="rm" value="2" />
 <!-- Configures All Of The Checkout Fields -->
 <input type="hidden" name="no_shipping" value="1" />
 <input type="hidden" name="no_note" value="1" />
 <input type="hidden" name="custom" value="www.wegotin.net" />
 <input type="hidden" name="currency_code" value="USD" />
 <input type="hidden" name="page_style" value="paypal" />
 <input type="hidden" name="item_name" value="Columbia Applications Package" />
 <input type="hidden" name="item_number" value="1:columbia:6 M" />
 <!-- Identifies/Updates An Existing Member After Checkout -->
 <input type="hidden" name="on0" value="<?php echo S2MEMBER_CURRENT_USER_VALUE_FOR_PP_ON0; ?>" />
 <input type="hidden" name="os0" value="<?php echo S2MEMBER_CURRENT_USER_VALUE_FOR_PP_OS0; ?>" />
 <input type="hidden" name="modify" value="0" />
 <!-- Customizes Prices, Payments & Billing Cycle -->
 <input type="hidden" name="amount" value="19.99" />
 <!--<input type="hidden" name="src" value="BN" />-->
 <!--<input type="hidden" name="sra" value="1" />-->
 <!--<input type="hidden" name="a1" value="0.00" />-->
 <!--<input type="hidden" name="p1" value="0" />-->
 <!--<input type="hidden" name="t1" value="D" />-->
 <!--<input type="hidden" name="a3" value="19.99" />-->
 <!--<input type="hidden" name="p3" value="6" />-->
 <!--<input type="hidden" name="t3" value="M" />-->
 <!-- Displays The PayPal® Image Button -->
 <input type="image" alt="PayPal®" style="border:0;" src="http://www.wegotin.net/wp-content/uploads/2010/08/but_checkout.jpg" />
</form>       

        <?php } elseif ($pack=="both") {?>

<!-- User buys both packs at the same time -->

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
 <input type="hidden" name="business" value="info@wegotin.net" />
 <input type="hidden" name="cmd" value="_xclick" />
 <!-- Instant Payment Notification & Return Page Details -->
 <input type="hidden" name="notify_url" value="http://www.wegotin.net/?s2member_paypal_notify=1" />
 <input type="hidden" name="cancel_return" value="http://www.wegotin.net" />
 <input type="hidden" name="return" value="http://www.wegotin.net/?s2member_paypal_return=1" />
 <input type="hidden" name="rm" value="2" />
 <!-- Configures All Of The Checkout Fields -->
 <input type="hidden" name="no_shipping" value="1" />
 <input type="hidden" name="no_note" value="1" />
 <input type="hidden" name="custom" value="www.wegotin.net" />
 <input type="hidden" name="currency_code" value="USD" />
 <input type="hidden" name="page_style" value="paypal" />
 <input type="hidden" name="item_name" value="Both Schools Package" />
 <input type="hidden" name="item_number" value="1:brown,columbia:6 M" />
 <!-- Identifies/Updates An Existing Member After Checkout -->
 <input type="hidden" name="on0" value="<?php echo S2MEMBER_CURRENT_USER_VALUE_FOR_PP_ON0; ?>" />
 <input type="hidden" name="os0" value="<?php echo S2MEMBER_CURRENT_USER_VALUE_FOR_PP_OS0; ?>" />
 <input type="hidden" name="modify" value="0" />
 <!-- Customizes Prices, Payments & Billing Cycle -->
 <input type="hidden" name="amount" value="34.99" />
 <!--<input type="hidden" name="src" value="BN" />-->
 <!--<input type="hidden" name="sra" value="1" />-->
 <!--<input type="hidden" name="a1" value="0.00" />-->
 <!--<input type="hidden" name="p1" value="0" />-->
 <!--<input type="hidden" name="t1" value="D" />-->
 <!--<input type="hidden" name="a3" value="34.99" />-->
 <!--<input type="hidden" name="p3" value="6" />-->
 <!--<input type="hidden" name="t3" value="M" />-->
 <!-- Displays The PayPal® Image Button -->
 <input type="image" alt="PayPal®" style="border:0;" src="http://www.wegotin.net/wp-content/uploads/2010/08/but_checkout.jpg" />
</form> 

        <?php } elseif ($pack=="upgrade") {?>

<!-- Upgrade to add another pack to the plan -->

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
 <input type="hidden" name="business" value="info@wegotin.net" />
 <input type="hidden" name="cmd" value="_xclick" />
 <!-- Instant Payment Notification & Return Page Details -->
 <input type="hidden" name="notify_url" value="http://www.wegotin.net/?s2member_paypal_notify=1" />
 <input type="hidden" name="cancel_return" value="http://www.wegotin.net" />
 <input type="hidden" name="return" value="http://www.wegotin.net/?s2member_paypal_return=1" />
 <input type="hidden" name="rm" value="2" />
 <!-- Configures All Of The Checkout Fields -->
 <input type="hidden" name="no_shipping" value="1" />
 <input type="hidden" name="no_note" value="1" />
 <input type="hidden" name="custom" value="www.wegotin.net" />
 <input type="hidden" name="currency_code" value="USD" />
 <input type="hidden" name="page_style" value="paypal" />
 <?php if ($newpack=="brown"){?>
 <input type="hidden" name="item_name" value="Add Brown School to your current Applications Pack" />
 <?} else { ?>
 <input type="hidden" name="item_name" value="Add Columbia School to your current Applications Pack" />
 <?} ?>
 
 <input type="hidden" name="item_number" value="2:brown,columbia:6 M" />
 <!-- Identifies/Updates An Existing Member After Checkout -->
 <input type="hidden" name="on0" value="<?php echo S2MEMBER_CURRENT_USER_VALUE_FOR_PP_ON0; ?>" />
 <input type="hidden" name="os0" value="<?php echo S2MEMBER_CURRENT_USER_VALUE_FOR_PP_OS0; ?>" />
 <input type="hidden" name="modify" value="1" />
 <!-- Customizes Prices, Payments & Billing Cycle -->
 <input type="hidden" name="amount" value="19.99" />
 <!--<input type="hidden" name="src" value="BN" />-->
 <!--<input type="hidden" name="sra" value="1" />-->
 <!--<input type="hidden" name="a1" value="0.00" />-->
 <!--<input type="hidden" name="p1" value="0" />-->
 <!--<input type="hidden" name="t1" value="D" />-->
 <!--<input type="hidden" name="a3" value="19.99" />-->
 <!--<input type="hidden" name="p3" value="6" />-->
 <!--<input type="hidden" name="t3" value="M" />-->
 <!-- Displays The PayPal® Image Button -->
 <input type="image" alt="PayPal®" style="border:0;" src="http://www.wegotin.net/wp-content/uploads/2010/08/but_checkout.jpg" />
</form>

        
        <?php }?>                        
        </div>

				
        </div>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	
	
	


<?php get_footer(); ?>
