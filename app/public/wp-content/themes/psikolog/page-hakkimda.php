<?php get_header();


while (have_posts()) {
    the_post(); ?>

    <section id="hakkimda_sayfasi_kapsayici">
        <?php the_content(); ?>
    </section>



<?php    }
get_footer();
?>