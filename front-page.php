<?php
/**
 * General template for pages.
 *
 * @package mikaeleriksson
 */

get_header();

?>

<main class="main">
	<div class="container">
		<div class="row justify-content-end mb-3 mb-sm-5">
			<div class="col-12 col-md-5 col-lg-4">
				<?php get_template_part( 'templates/partials/user' ); ?>
			</div>
			<div class="col-12 col-md-6 col-lg-5">
				<?php get_template_part( 'templates/partials/bio' ); ?>
			</div>
		</div>
		<div class="row justify-content-end mb-3 mb-sm-5">
			<div class="col-12 col-md-11 col-lg-9">
				<?php get_template_part( 'templates/partials/quotes' ); ?>
			</div>
		</div>
		<div class="row justify-content-end mb-3 mb-sm-5">
			<div class="col-12 col-md-11 col-lg-9">
				<?php get_template_part( 'templates/partials/work-experiences' ); ?>
			</div>
		</div>
		<div class="row justify-content-end mb-3 mb-sm-5">
			<div class="col-12 col-md-11 col-lg-9">
				<?php get_template_part( 'templates/partials/educations' ); ?>
			</div>
		</div>
	</div>
</main>



<?php get_footer(); ?>
