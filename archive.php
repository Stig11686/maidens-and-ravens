<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maidens_and_ravens
 */

include(get_template_directory(  ) . '/template-parts/global/header.php');
include(get_template_directory(  ) . '/template-parts/global/internal-hero.php');

?>

	<main id="primary" class="site-main max-w-7xl mx-auto flex flex-col gap-8">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<ul id="blog-archive" role="list" class="flex flex-wrap md:flex-row flex-col w-full max-w-full mx-auto lg:max-w-none mb:mb-12 mb-20 <?php echo get_post_type(); ?>">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( '/template-parts/content', 'posts' );

			endwhile;
			?>
			</ul>

			<?php


			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
include(get_template_directory(  ) . '/template-parts/global/footer.php');
