<?php
/**
 * Single post template.
 *
 * @package Awesome_Test
 */

get_header();
?>

<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<p class="entry-meta">
				<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
					<?php echo esc_html( get_the_date() ); ?>
				</time>
			</p>
		</header>

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
		<?php endif; ?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</article>

	<?php
	the_post_navigation(
		array(
			'prev_text' => __( '&larr; Previous', 'awesome-test' ),
			'next_text' => __( 'Next &rarr;', 'awesome-test' ),
		)
	);
	?>

	<?php comments_template(); ?>

<?php endwhile; ?>

</main>

<?php
get_footer();
