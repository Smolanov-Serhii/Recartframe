<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Recartframe
 */

if ( ! is_active_sidebar( 'language' ) ) {
	return;
}
?>

	<?php dynamic_sidebar( 'language' ); ?>
