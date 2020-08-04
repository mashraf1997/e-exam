<?php
/**
 * Template for pay loader
 *
 * @package WPQuiz
 *
 * @var \WPQuiz\Quiz $quiz
 * @var float        $amount
 */

use WPQuiz\Helper;

if ( Helper::get_option( 'stripe_api_key' ) ) {
	?>
	<script src="https://checkout.stripe.com/checkout.js"></script>
	<script>
		window.stripeHandler = StripeCheckout.configure({
			key: '<?php echo esc_js( Helper::get_option( 'stripe_api_key' ) ); ?>',
			image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
			locale: 'auto',
			currency: '<?php echo Helper::get_option( 'currency' ); ?>',
			token: function( token ) {
				// You can access the token ID with `token.id`.
				// Get the token ID to your server-side code for use.
				jQuery( document ).trigger( 'wp_quiz_stripe_token', [ token ] );
			}
		});
	</script>
	<?php
}
?>

<?php
if ( Helper::get_option( 'paypal_client_id' ) ) {
	?>
	<script src="https://www.paypal.com/sdk/js?client-id=<?php echo Helper::get_option( 'paypal_client_id' ); ?>"></script>
	<script>
		window.onload = function() {
			paypal.Buttons({
				style: {
					layout: 'horizontal',
					tagline: false,
					height: 45
				},
				createOrder: function( data, actions ) {
					// Set up the transaction.
					return actions.order.create({
						purchase_units: [
							{
								amount: {
									value: '<?php echo floatval( $amount ); ?>'
								}
							}
						]
					});
				},
				onApprove: function( data, actions ) {
					// Capture the funds from the transaction.
					return actions.order.capture().then( function( details ) {
						jQuery( '.wq-pay-locker' ).remove();
					} );
				}
			}).render( '#wq-pay-locker-paypal-button' );
		};
	</script>
	<?php
}
?>

<style>
	.wq-pay-buttons {
		vertical-align: top;
	}

	.wq-pay-buttons > * {
		display: inline-block;
		vertical-align: top;
	}
</style>

<div class="wq-locker wq-pay-locker">
	<p><?php esc_html_e( 'This is the paid quiz, please complete the payment to play.', 'wp-quiz-pro' ); ?></p>
	<div class="wq-pay-buttons">
		<button type="button" class="wq-js-pay-button wq-pay-locker__button" data-amount="<?php echo floatval( $amount * 100 ); ?>"><?php esc_html_e( 'Pay now via Stripe', 'wp-quiz-pro' ); ?></button>
		<div id="wq-pay-locker-paypal-button"></div>
	</div>
</div><!-- End .wq-pay-locker -->
