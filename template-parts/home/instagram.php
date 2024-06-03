<?php
$feed = do_shortcode( '[instagram-feed feed=1]', false );

?>

<div class="max-w-7xl px-6 lg:px-8 mx-auto sm:text-center py-12">
    <h2 class="mb-2 sm:mb-16 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Highlights from our <span class="text-primary custom-underline">Social Media!</span></h2>
    <?php echo $feed; ?>
</div>