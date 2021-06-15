<?php get_header();


    while(have_posts()) {
        the_post(); ?>
    <h1 id="hizmetlerim_h1_baslik">Hizmetler</h1>
    <section id="hizmetler_sayfasi_kapsayici">
        <div class="card">
            <div class="card-image" style="background-image: url('<?php echo get_theme_file_uri('/img/card_image.jpg')?>');"></div>
            <div class="card-text">
                <h2>Psikolojik Danışmanlık</h2>
                <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod
                    deserunt eligendi dolor</p>
            </div>
            <div class="card-stats">
                <a href="<?php echo get_page_link(get_page_by_title('Randevu Al')->ID); ?>">Randevu Al</a>
            </div>
        </div>
        <div class="card">
            <div class="card-image" style="background-image: url('<?php echo get_theme_file_uri('/img/card_image.jpg')?>');"></div>
            <div class="card-text">
                <h2>Online Terapi</h2>
                <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod
                    deserunt eligendi dolor</p>
            </div>
            <div class="card-stats">
                <a href="<?php echo get_page_link(get_page_by_title('Randevu Al')->ID); ?>">Randevu Al</a>
            </div>
        </div>
        <div class="card">
            <div class="card-image" style="background-image: url('<?php echo get_theme_file_uri('/img/card_image.jpg')?>');"></div>
            <div class="card-text">
                <h2>Çocuk Terapisi</h2>
                <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod
                    deserunt eligendi dolor</p>
            </div>
            <div class="card-stats">
                <a href="<?php echo get_page_link(get_page_by_title('Randevu Al')->ID); ?>">Randevu Al</a>
            </div>
        </div>
        <div class="card">
            <div class="card-image" style="background-image: url('<?php echo get_theme_file_uri('/img/card_image.jpg')?>');"></div>
            <div class="card-text">
                <h2>Psikolojik Danışmanlık</h2>
                <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod
                    deserunt eligendi dolor</p>
            </div>
            <div class="card-stats">
                <a href="<?php echo get_page_link(get_page_by_title('Randevu Al')->ID); ?>">Randevu Al</a>
            </div>
        </div>
        <div class="card">
            <div class="card-image" style="background-image: url('<?php echo get_theme_file_uri('/img/card_image.jpg')?>');"></div>
            <div class="card-text">
                <h2>Psikolojik Danışmanlık</h2>
                <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod
                    deserunt eligendi dolor</p>
            </div>
            <div class="card-stats">
                <a href="<?php echo get_page_link(get_page_by_title('Randevu Al')->ID); ?>">Randevu Al</a>
            </div>
        </div>
        <div class="card">
            <div class="card-image" style="background-image: url('<?php echo get_theme_file_uri('/img/card_image.jpg')?>');"></div>
            <div class="card-text">
                <h2>Psikolojik Danışmanlık</h2>
                <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod
                    deserunt eligendi dolor</p>
            </div>
            <div class="card-stats">
                <a href="<?php echo get_page_link(get_page_by_title('Randevu Al')->ID); ?>">Randevu Al</a>
            </div>
        </div>

    </section>



<?php    }
get_footer();
?>