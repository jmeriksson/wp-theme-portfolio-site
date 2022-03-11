<?php
/**
 * Holds all classes.
 *
 * @package mikaeleriksson
 */

require get_template_directory() . '/includes/classes/class-loader.php';
require get_template_directory() . '/includes/classes/class-theme-setup.php';
require get_template_directory() . '/includes/classes/class-post-type-work-experience.php';
require get_template_directory() . '/includes/classes/class-post-type-education.php';
require get_template_directory() . '/includes/classes/class-post-type-quote.php';

( new Theme_Setup() )->init();
( new Post_Type_Work_Experience() )->init();
( new Post_Type_Education() )->init();
( new Post_Type_Quote() )->init();
