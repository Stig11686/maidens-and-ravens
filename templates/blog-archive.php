<?php
/**
 * Template Name: blog archive
 *
 * This is a custom template for pages. To use it, simply select it from the
 * "Page Template" dropdown when creating or editing a page.
 */
    include(get_template_directory() . '/template-parts/global/header.php');
    include(get_template_directory() . '/template-parts/global/internal-hero.php');
?>

<main class="mx-auto w-full lg:max-w-7xl px-4 sm:px-6 lg:px-8 py-12 flex flex-col items-start">

<?php
    // The Query
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 9,
    );
    $query = new WP_Query($args);

    // The Loop
    if ($query->have_posts()) :
        echo '<ul id="blog-archive" role="list" class="flex flex-wrap md:flex-row flex-col max-w-full mx-auto lg:max-w-none mb:mb-12 mb-20">';
        while ($query->have_posts()) :
            $query->the_post();
            get_template_part('/template-parts/content-posts');
        endwhile;
        echo '</ul><button id="read-more-posts" class="justify-self-center self-center text-white bg-primary rounded px-4 py-2">Read More</button>';
        
        // Restore original Post Data
        wp_reset_postdata();

        // Display pagination if needed
        the_posts_pagination();
    else :
        get_template_part('template-parts/content', 'none');
    endif;
?>
</main>
<?php
    include(get_template_directory() . '/template-parts/global/footer.php');
?>