<?php
/**
 * Main navbar
 *
 * @package mikaeleriksson
 */

$site_name    = get_field( 'site_name', 'options' ) ?? get_bloginfo( 'title' );
$site_tagline = get_field( 'site_tagline', 'options' ) ?? get_bloginfo( 'description' );
$socials      = get_field( 'socials', 'options' ) ?? false;

?>

<nav class="navbar navbar-light fixed-top">
	<div class="container">
		<a class="navbar-brand" href="<?php echo esc_url( get_home_url() ); ?>"><span class="name"><?php echo esc_html( $site_name ); ?></span><span class="description"><?php echo esc_html( $site_tagline ); ?></span></a>
		<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
			<div class="offcanvas-header">
				<div class="offcanvas-title" id="offcanvasNavbarLabel">
					<h2 class="name"><?php echo esc_html( $site_name ); ?></h2>
					<p class="description"><?php echo esc_html( $site_tagline ); ?></p>
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
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<?php
				$offcanvas_menu_args = [
					'menu'             => 'primary',
					'menu_class'       => 'navbar-nav justify-content-end flex-grow-1 pe-3',
					'container'        => '',
					'echo'             => true,
					'add_li_class'     => 'nav-item',
					'add_anchor_class' => 'nav-link',
				];
				wp_nav_menu( $offcanvas_menu_args );
				?>
			</div>
		</div>
	</div>
</nav>
