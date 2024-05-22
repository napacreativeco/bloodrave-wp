<div class="breadcrumb-holder">

	<?php woocommerce_breadcrumb(); ?>

	<div class="cart-link">
		<a href="/cart" title="Cart">Cart: <?php echo WC()->cart->get_cart_contents_count(); ?></a>
	</div>
	
</div>