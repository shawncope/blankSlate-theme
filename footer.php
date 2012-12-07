<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */
?>
	</div><!-- #main .wrapper -->
	<footer>
		<p>
			Proudly powered by
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		<p>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>