<?php
/**
 * Main Template
 */
get_header(); ?>

<main class="container mx-auto px-4 py-8">
    <?php 
    if (have_posts()) : 
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>  <!-- Closing tag HERE -->

<?php get_footer(); ?>