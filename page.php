<?php
/**
 * Page template.
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
		</header>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</article>

	<?php comments_template(); ?>

<?php endwhile; ?>

</main>

<?php
get_footer();
