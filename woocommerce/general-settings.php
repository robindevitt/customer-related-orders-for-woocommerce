<?php
/**
 * General Settings for the plugin - these are added to WooCommerce -> Settings -> General
 *
 * @package CustomerRelatedOrders
 */

add_filter( 'woocommerce_general_settings', 'customer_related_orders_woocommerce_settings' );

/**
 * Setup our custom settings.
 *
 * @param array $settings Current site settings as an array.
 * @return array Returns the merged settings.
 */
function customer_related_orders_woocommerce_settings( $settings ) {
	$new_settings = array(
		array(
			'title' => __( 'Customer Related Orders', 'customer-related-orders' ),
			'type'  => 'title',
			'id'    => 'customer_related_orders_settings',
		),

		array(
			'title'    => __( 'Orders per page', 'customer-related-orders' ),
			'id'       => 'cro__pagination',
			'default'  => '10',
			'desc_tip' => true,
			'desc'     => __( 'This sets the number of orders to display in the Customer Related Orders block. Use "-1" to show all orders related to a customer.', 'customer-related-orders' ),
			'type'     => 'number',
		),

		array(
			'type' => 'sectionend',
			'id'   => 'customer_related_orders_settings',
		),

	);

	return array_merge( array_slice( $settings, 0, 50 ), $new_settings, array_slice( $settings, 50 ) );
}
