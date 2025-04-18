<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maidens_and_ravens
 */

include(get_template_directory(  ) . '/template-parts/global/header.php');
include(get_template_directory(  ) . '/template-parts/global/internal-hero.php');
?>

	<main id="primary" class="site-main max-w-7xl mx-auto flex flex-col gap-8 px-4 pt-16">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
include(get_template_directory(  ) . '/template-parts/global/footer.php');
