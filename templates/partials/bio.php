<?php
/**
 * Template for displaying the user bio.
 *
 * @package mikaeleriksson
 */

$bio_content = get_field( 'bio', 'options' ) ?? false;
$cta         = get_field( 'cta', 'options' ) ?? false;

?>

<section class="section section-bio">
	<div class="bio">
		<?php echo wp_kses_post( $bio_content ); ?>
	</div>
	<?php if ( $cta ) : ?>
		<div class="cta">
			<a href="<?php echo esc_url( $cta['button_link'] ); ?>"><?php echo esc_html( $cta['button_text'] ); ?></a>
		</div>
	<?php endif; ?>
</section>
