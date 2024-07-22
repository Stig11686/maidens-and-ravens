<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maidens_and_ravens
 */

include(get_template_directory(  ) . '/template-parts/global/header.php');
include(get_template_directory(  ) . '/template-parts/home/hero.php');
?>

	<main id="primary" class="site-main text-white">

		<?php if ( have_posts() ) : ?>

            <div class="w-full max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /*
                    * Include the Post-Type-specific template for the content.
                    * If you want to override this in a child theme, then include a file
                    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                    */
                    get_template_part( 'template-parts/content', get_post_type() );

                endwhile;

                the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                endif;
        ?>
            </div>
	</main><!-- #main -->

<?php
include(get_template_directory(  ) . '/template-parts/global/footer.php');
