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
            <div class="mx-auto my-16 max-w-7xl px-4 sm:mt-24 sm:px-6 lg:px-8 flex flex-col gap-8">
                <h2 class="text-3xl lg:text-5xl text-white">Testimonials</h2>
                <p class="text-lg text-white">If you've had a great experience with us, we'd love to share it here - get in touch via email if you're happy to share your story!</p>

                <div class="mx-auto grid grid-cols-1 grid-rows-1 gap-8 text-sm leading-6 text-gray-900 sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col text-white">

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
            </div>
	</main><!-- #main -->

<?php
include(get_template_directory(  ) . '/template-parts/global/footer.php');
