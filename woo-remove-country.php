function woo_override_checkout_fields( $fields )    
{
unset($fields['billing']['billing_country']);
return $fields;
}
add_filter('woocommerce_checkout_fields','woo_override_checkout_fields');
