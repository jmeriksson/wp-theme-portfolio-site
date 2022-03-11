<?php
/**
 * List work experiences
 *
 * @package mikaeleriksson
 */

$query_args = [
	'post_type' => 'education',
	'meta_key'  => 'start_date',
	'orderby'   => 'meta_value',
	'order'     => 'DESC',
];

$education_query = new WP_Query( $query_args );

if ( $education_query->have_posts() ) :
	?>

	<section class="section section-educations" id="education">
		<h2>Education</h2>
		<?php
		while ( $education_query->have_posts() ) :
			$education_query->the_post();

			$education_title   = get_field( 'education_title' ) ?? '';
			$school            = get_field( 'school' ) ?? '';
			$start_date        = get_field( 'start_date' ) ?? '';
			$end_date          = get_field( 'end_date' ) ?? '';
			$description       = get_field( 'description' ) ?? '';
			$current_education = get_field( 'current_education' );
			?>
			<div class="education">
				<div class="education__meta">
					<p class="bold"><?php echo esc_html( $education_title ); ?></p>
					<p><?php echo esc_html( $school ); ?></p>
					<?php if ( $current_education ) : ?>
						<p><?php echo esc_html( format_date_to_year_month( $start_date ) . ' - ' ) . esc_html__( 'current', 'mikaeleriksson' ); ?></p>
					<?php else : ?>
						<p><?php echo esc_html( format_date_to_year_month( $start_date ) . ' - ' . format_date_to_year_month( $end_date ) ); ?></p>
					<?php endif; ?>
				</div>
				<div class="education__description">
					<?php echo wp_kses_post( $description ); ?>
				</div>
			</div>
			<?php
		endwhile;
		?>
	</section>
	<?php
endif;
?>
