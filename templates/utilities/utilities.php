<?php 
/**
 * List of wordpress utility functions
 */
?>

<?php 
/** 
 * HTML layout elements
*/
?>
<?php get_header() ?>
<?php get_footer() ?>

<?php 
/**
 * Paths
 */
?>
<?php get_template_directory() ?>
<?php get_template_directory_uri() ?>

<?php 
/**
 * Add menus to front end
 */
$args = array(

);

wp_nav_menu($args);
?>
