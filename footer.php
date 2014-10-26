<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package jimphoto
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'jimphoto' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'jimphoto' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Using theme %1$s by %2$s.', 'jimphoto' ), 'jimphoto', '<a href="http://tridnguyen.com" rel="designer">Tri Nguyen</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
