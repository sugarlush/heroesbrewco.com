<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>

	<footer id="colophon" class="site-footer background-hex <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container-fluid pt-5 pb-5 layer">
			<div class="row justify-content-center m-0">
				<?php if ( is_active_sidebar( 'footer-1' )) : ?>
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                    <div class="justify-content-center"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                    <div class="col-12 col-md-4"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                <?php endif; ?>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

</body>
</html>