<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Recartframe
 */
if (is_cart() || is_checkout()) {
    $cartclass = 'custom-cart container';
} else {
    $cartclass = "";
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header <?php echo $cartclass;?>">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php recartframe_post_thumbnail(); ?>

	<div class="entry-content <?php echo $cartclass;?>">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'recartframe' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
<script>
    $(function() {
        $('select').selectric();
    });
</script>