<?php

include(get_template_directory(  ) . '/template-parts/global/header.php');
include(get_template_directory(  ) . '/template-parts/global/internal-hero.php');
?>

	<main id="primary" class="site-main">


		<?php if ( have_posts() ) : ?>
            <div class="mx-auto my-16 max-w-7xl px-4 sm:mt-24 sm:px-6 lg:px-8 flex flex-col gap-8">
                <h2 class="text-3xl lg:text-5xl">Testimonials</h2>
                <p class="text-lg">If you've had a great experience with us, we'd love to share it here - get in touch via email if you're happy to share your story!</p>
                <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
                    <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">

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
            </div>
	</main><!-- #main -->

<?php
include(get_template_directory(  ) . '/template-parts/global/footer.php');
