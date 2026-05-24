<?php
/**
 * 404 template.
 *
 * @package Awesome_Test
 */

get_header();
?>

<main id="main" class="site-main" role="main">
	<article class="no-results">
		<h1><?php esc_html_e( 'Page not found', 'awesome-test' ); ?></h1>
		<p><?php esc_html_e( 'The page you are looking for does not exist.', 'awesome-test' ); ?></p>
		<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go to homepage', 'awesome-test' ); ?></a></p>
	</article>
</main>

<?php
get_footer();
