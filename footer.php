<?php
/**
 * Footer template.
 *
 * @package Awesome_Test
 */
?>

<footer class="site-footer" role="contentinfo">
	<p>
		&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
	</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
