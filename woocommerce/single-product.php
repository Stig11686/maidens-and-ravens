<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
include(get_template_directory() . '/template-parts/global/header.php');

include(get_template_directory(  ) . '/template-parts/home/hero.php');

?>

<div class="max-w-7xl mx-auto py-16">

<?php
		do_action( 'woocommerce_before_main_content' );

		while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'template-parts/content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );

?>

</div>

<?php
	include(get_template_directory(  ) . '/template-parts/global/footer.php');

