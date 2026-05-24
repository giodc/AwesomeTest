<?php
/**
 * Main template. test
 *
 * @package Awesome_Test
 */

get_header();
?>

<main id="main" class="site-main" role="main">

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>
			<header class="entry-header">
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<p class="entry-meta">
					<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
						<?php echo esc_html( get_the_date() ); ?>
					</time>
				</p>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
			<?php endif; ?>

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div>
		</article>
	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>

<?php else : ?>

	<article class="no-results">
		<h2><?php esc_html_e( 'Nothing found', 'awesome-test' ); ?></h2>
		<p><?php esc_html_e( 'It looks like there is nothing here yet.', 'awesome-test' ); ?></p>
	</article>

<?php endif; ?>

</main>

<?php
get_footer();
