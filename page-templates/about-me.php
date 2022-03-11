<?php
/**
* Template Name: About me
*
* @package mikaeleriksson
*/

get_header();

$page_headline          = get_field( 'page_headline' );
$page_content           = get_field( 'page_content' );
$contact_form_shortcode = get_field( 'contact_form_shortcode' );
$author_image_id        = get_field( 'author_image_id' );
$above_form_content     = get_field( 'above_contact_form_text' );

?>

<main class="main">
	<div class="container">
		<div class="row justify-content-end mb-3 mb-sm-5">
			<div class="col-12 col-md-11 col-lg-9">
				<section class="section section-about-me">
					<?php if ( $page_headline ) : ?>
						<h1><?php echo esc_html( $page_headline ); ?></h1>
					<?php endif; ?>
					<?php if ( $page_content ) : ?>
						<div class="about-me-page-content">
							<?php echo wp_kses_post( $page_content ); ?>
						</div>
					<?php endif; ?>
					<?php if ( $author_image_id ) : ?>
						<div class="about-me-page-image">
							<?php echo wp_get_attachment_image( $author_image_id, 'large' ); ?>
						</div>
					<?php endif; ?>
				</section>
				<?php if ( $contact_form_shortcode ) : ?>
					<section class="section section-about-me">
						<?php if ( $above_form_content ) : ?>
							<div class="about-me-page-form-content">
								<?php echo wp_kses_post( $above_form_content ); ?>
							</div>
						<?php endif; ?>
						<?php echo do_shortcode( $contact_form_shortcode ); ?>
					</section>
				<?php endif; ?>
			</div>
		</div>
	</div>
</main>
<?php

get_footer();
