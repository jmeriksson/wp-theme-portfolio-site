<?php
/**
 * Useful helper functions
 *
 * @package mikaeleriksson
 */

if ( ! function_exists( 'format_date_to_year_month' ) ) {
	/**
	 * Formats a date in 'M Y' formate (e.g. 'Jan 2001').
	 *
	 * @param string $date
	 * @return string
	 */
	function format_date_to_year_month( $date ) : string {
		if ( ! is_string( $date ) || 0 === strlen( $date ) ) {
			return $date;
		}
		return gmdate( 'M Y', strtotime( $date ) );
	}
}
