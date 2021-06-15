<?php get_header(); ?>
<section id="singlephp_kapsayici">
    <h2 id="singlephp_baslik"><?php the_title(); ?></h2>
    <p class="post-info singlephp_post-info"><?php the_time('Y M d g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
        <?php
        $categories = get_the_category();
        $seperator = ", ";
        $output = '';

        if ($categories) {
            foreach ($categories as $category) {
                $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $seperator;
            }
            echo trim($output, $seperator);
        }
        ?>
    </p>

    <div class="singlephp_thumbnail">
    <?php the_post_thumbnail('banner-image'); ?>
    </div>
    
    <article class="singlephp_content">
    <?php the_content(); ?>
    </article>

</section>
<?php
get_footer();
?>