<?php
/**
 * Template for displaying the user of the site.
 *
 * @package mikaeleriksson
 */

$avatar     = get_field( 'avatar', 'options' ) ?? false;
$first_name = get_field( 'first_name', 'options' ) ?? false;
$surname    = get_field( 'surname', 'options' ) ?? false;
$user_title = get_field( 'title', 'options' ) ?? false;
$socials    = get_field( 'socials', 'options' ) ?? false;

?>

<section class="section section-user">
	<div class="user-card">
		<div class="user-card__image">
			<?php echo wp_get_attachment_image( $avatar, 'medium' ); ?>
		</div>
		<div class="user-card__body">
			<h2 class="name"><?php echo esc_html( $first_name ) . '<br/>' . esc_html( $surname ); ?></h2>
			<p class="title"><?php echo esc_html( $user_title ); ?></p>
			<?php if ( $socials ) : ?>
				<div class="socials">
					<?php foreach ( $socials as $social ) : ?>
						<a href="<?php echo esc_url( $social['url'] ); ?>" title="<?php echo esc_attr( $social['alternative_name'] ); ?>" target="_blank">
							<?php echo wp_get_attachment_image( $social['icon_svg'], 'thumbnail' ); ?>
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
