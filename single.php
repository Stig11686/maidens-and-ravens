<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package maidens_and_ravens
 */
include(get_template_directory(  ) . '/template-parts/global/header.php');
include(get_template_directory(  ) . '/template-parts/global/internal-hero.php');
?>
<div class="flex flex-col md:flex-row md:gap-8 py-8 px-4 max-w-7xl mx-auto">

		<main id="primary" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'maidens-and-ravens' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'maidens-and-ravens' ) . '</span> <span class="nav-title">%title</span>',
					)
				);

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->


	<?php
	get_sidebar();
	?>
</div>
<?php
include(get_template_directory(  ) . '/template-parts/global/footer.php');
?>
