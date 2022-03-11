<?php
/**
 * List work experiences
 *
 * @package mikaeleriksson
 */

$selected_quotes = get_field( 'quotes', 'options' );

if ( ! $selected_quotes ) {
	return;
}
?>

<section class="section section-quotes">
	<div class="swiper">
		<div class="swiper-wrapper">
			<?php
			foreach ( $selected_quotes as $quote ) :

				$quoted_person = get_field( 'quoted_person', $quote->ID ) ?? '';
				$quote         = get_field( 'quote', $quote->ID ) ?? '';
				?>
				<div class="quote swiper-slide">
					<figure>
						<blockquote>
							<?php echo wp_kses_post( $quote ); ?>
						</blockquote>
						<figcaption>
							<?php echo esc_html( $quoted_person ); ?>
						</figcaption>
					</figure>
				</div>
				<?php
			endforeach;
			?>
		</div>
	</div>
</section>
