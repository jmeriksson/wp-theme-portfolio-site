<?php
/**
 * List work experiences
 *
 * @package mikaeleriksson
 */

$query_args = [
	'post_type' => 'work-experience',
	'meta_key'  => 'start_date',
	'orderby'   => 'meta_value',
	'order'     => 'DESC',
];

$work_experience_query = new WP_Query( $query_args );

if ( $work_experience_query->have_posts() ) :
	?>

	<section class="section section-work-experiences" id="work-experience">
		<h2>Work Experience</h2>
		<?php
		while ( $work_experience_query->have_posts() ) :
			$work_experience_query->the_post();

			$work_title         = get_field( 'work_title' ) ?? '';
			$employer           = get_field( 'employer' ) ?? '';
			$start_date         = get_field( 'start_date' ) ?? '';
			$end_date           = get_field( 'end_date' ) ?? '';
			$description        = get_field( 'description' ) ?? '';
			$current_employment = get_field( 'current_employment' );
			?>
			<div class="work-experience">
				<div class="work-experience__meta">
					<p class="bold"><?php echo esc_html( $work_title ); ?></p>
					<p><?php echo esc_html( $employer ); ?></p>
					<?php if ( $current_employment ) : ?>
						<p><?php echo esc_html( format_date_to_year_month( $start_date ) . ' - ' ) . esc_html__( 'current', 'mikaeleriksson' ); ?></p>
					<?php else : ?>
						<p><?php echo esc_html( format_date_to_year_month( $start_date ) . ' - ' . format_date_to_year_month( $end_date ) ); ?></p>
					<?php endif; ?>
				</div>
				<div class="work-experience__description">
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
