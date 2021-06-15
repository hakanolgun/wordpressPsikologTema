<?php get_header(); ?>

<section id="blog_anasayfa">

    <?php while (have_posts()) {
        the_post(); ?>

        <article class="blog_postlari">

            

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


            <p class="post-info"><?php the_time('Y M d g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
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

            <img class="blog_ana_thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="image">

            <p>
                <?php echo get_the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Okumaya devam edin&raquo</a>
            </p>
            <br><br><hr>
        </article>



    <?php    } ?>
</section>
<?php get_footer(); ?>