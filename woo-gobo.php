/**
 * @snippet       Buy 1 Get 1 - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    Woo 3.8
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
 
add_action( 'template_redirect', 'bbloomer_add_gift_if_id_in_cart' );
 
function bbloomer_add_gift_if_id_in_cart() {
 
   if ( is_admin() ) return;
   if ( WC()->cart->is_empty() ) return;
 
   $product_bought_id = 32;
   $product_gifted_id = 57;
 
   // see if product id in cart
   $product_bought_cart_id = WC()->cart->generate_cart_id( $product_bought_id );
   $product_bought_in_cart = WC()->cart->find_product_in_cart( $product_bought_cart_id );
 
   // see if gift id in cart
   $product_gifted_cart_id = WC()->cart->generate_cart_id( $product_gifted_id );
   $product_gifted_in_cart = WC()->cart->find_product_in_cart( $product_gifted_cart_id );
 
   // if not in cart remove gift, else add gift
   if ( ! $product_bought_in_cart ) {
      if ( $product_gifted_in_cart ) WC()->cart->remove_cart_item( $product_gifted_in_cart );
   } else {
      if ( ! $product_gifted_in_cart ) WC()->cart->add_to_cart( $product_gifted_id );
   }
}
