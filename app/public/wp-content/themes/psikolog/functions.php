<?php

function tema_files()
{
    wp_enqueue_script('tema_js', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
    wp_enqueue_style('tema_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'tema_files');/*  */


// customize excerpt word count length
function custom_excerpt_length()
{
    return 30;
}
add_filter('excerpt_length', 'custom_excerpt_length');


//Theme Setup
function wordpressSetup()
{

    //Navigation Menu Support
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'hamburger' => __('Hamburger Menu'),
    ));

    //tag support
    add_theme_support('title-tag');
    
    //background-image support
    add_theme_support( 'custom-background' );

    //Custom Logo
    add_theme_support( 'custom-logo', [
        'height'               => 70,
        'flex-height'          => true,
        'flex-width'           => true,
    ]);

    //Featured Image Support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 300, 300, true);
    add_image_size('banner-image', 1280, 720, true);

    // Add post format support
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'wordpressSetup');



//Customize Appearance Options
function psikolog_customize_register( $wp_customize ){
    $wp_customize->add_setting('psikolog_link_color', array(
        'default' => '#1da1f2',
        'transport' => 'refresh',
    ));

    $wp_customize->add_section('psikolog_standard_colors', array(
        'title' => __('Tema Renkleri', 'Psikolog'),
        'priority' => 30,
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'psikolog_color_control', array(
        'label' => __('Link Rengi', 'Psikolog'),
        'section' => 'psikolog_standard_colors',
        'settings' => 'psikolog_link_color'
    ) ) );
}
add_action('customize_register', 'psikolog_customize_register');


//Output Customize CSS
function psikolog_customize_css(){ ?>
    <style type="text/css">

    button,
    .blog_postlari > h2 {
        background-color: <?php echo get_theme_mod('psikolog_link_color'); ?>;
    }
    
    </style>
<?php }
add_action('wp_head', 'psikolog_customize_css');

//Sectionlarin bacground resimlerini degistirebilme
add_action( 'customize_register' , 'my_theme_options' );
function my_theme_options( $wp_customize ) {
    $wp_customize->add_section('mytheme_section_bg_img', array(
            'title'       => __( 'Anasayfa Resmi', 'psikolog' ),
            'priority'    => 100,
            'capability'  => 'edit_theme_options',
            'description' => __('Select a background image', 'psikolog'), 
        ) 
    );  

    $wp_customize->add_setting('section_bg_img');

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section_bg_img', array(
            'label'    => __( 'Background image', 'psikolog' ), 
            'section'  => 'mytheme_section_bg_img',
            'settings' => 'section_bg_img',
            'priority' => 10,
        ) 
    ));
}

//Anasayfa icindeki hakkimda b??l??m?? editable
function psikolog_anasayfa_hakkimdasi($wp_customize){
    $wp_customize->add_section('anasayfaicihakkimdasection', array(
        'title' => 'Anasayfa Hakk??mda B??l??m??'
    ));

    $wp_customize->add_setting('anasayfaicihakkimda-goster', array(
        'default' => 'Evet'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'anasayfaicihakkimda-goster-control', array(
        'label' => 'Bu b??l??m?? g??ster?',
        'section' => 'anasayfaicihakkimdasection',
        'settings' => 'anasayfaicihakkimda-goster',
        'type' => 'select',
        'choices' => array('Hay??r' => 'Hay??r', 'Evet' => 'Evet')
    )));

    $wp_customize->add_setting('anasayfaicihakkimda-headline', array(
        'default' => 'Psikolog Ad?? Girin'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'anasayfaicihakkimda-headline-control', array(
        'label' => 'Headline',
        'section' => 'anasayfaicihakkimdasection',
        'settings' => 'anasayfaicihakkimda-headline'
    )));

    $wp_customize->add_setting('anasayfaicihakkimda-yazi', array(
        'default' => '??rnek yazi girin'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'anasayfaicihakkimda-yazi-control', array(
        'label' => 'Metin',
        'section' => 'anasayfaicihakkimdasection',
        'settings' => 'anasayfaicihakkimda-yazi',
        'type' => 'textarea'
    )));

    $wp_customize->add_setting('anasayfaicihakkimda-image');
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'anasayfaicihakkimda-image-control', array(
        'label' => 'Resim',
        'section' => 'anasayfaicihakkimdasection',
        'settings' => 'anasayfaicihakkimda-image',
        'width' => '400px',
        'height' => '400px'
    )));
}
add_action( 'customize_register', 'psikolog_anasayfa_hakkimdasi');


//Anasayfa icindeki Size Nas??l Yard??mc?? Olabilirim b??l??m?? editable
function psikolog_anasayfa_yardim($wp_customize){
    $wp_customize->add_section('anasayfayardim', array(
        'title' => 'Anasayfa Yard??m B??l??m??'
    ));

    $wp_customize->add_setting('anasayfayardim-goster', array(
        'default' => 'Evet'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'anasayfayardim-goster-control', array(
        'label' => 'Bu b??l??m?? g??ster?',
        'section' => 'anasayfayardim',
        'settings' => 'anasayfayardim-goster',
        'type' => 'select',
        'choices' => array('Hay??r' => 'Hay??r', 'Evet' => 'Evet')
    )));
    //AnaBa??l??k ve Yaz??s??
    $wp_customize->add_setting('anasayfayardim-anabaslik', array(
        'default' => 'Ana Ba??l??k'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'anasayfayardim-anabaslik-control', array(
        'label' => 'Ana Ba??l??k',
        'section' => 'anasayfayardim',
        'settings' => 'anasayfayardim-anabaslik'
    )));

    $wp_customize->add_setting('anasayfayardim-anayazi', array(
        'default' => '??rnek yazi girin Anayaz??'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'anasayfayardim-anayazi-control', array(
        'label' => 'Ana Metin',
        'section' => 'anasayfayardim',
        'settings' => 'anasayfayardim-anayazi',
        'type' => 'textarea'
    )));
    //AltBaslik 1 ve Yazisi----------------------------------------------
    $wp_customize->add_setting('anasayfayardim-altbaslik1', array(
        'default' => 'Bireysel Dan????manl??k'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'anasayfayardim-altbaslik1-control', array(
        'label' => 'Alt Ba??l??k 1',
        'section' => 'anasayfayardim',
        'settings' => 'anasayfayardim-altbaslik1'
    )));

    $wp_customize->add_setting('anasayfayardim-altbaslik1_yazi', array(
        'default' => '??rnek yazi girin Alt ba??l??k 1'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'anasayfayardim-altbaslik1_yazi-control', array(
        'label' => 'Alt Metin 1',
        'section' => 'anasayfayardim',
        'settings' => 'anasayfayardim-altbaslik1_yazi',
        'type' => 'textarea'
    )));
    $wp_customize->add_setting('anasayfayardim-altbaslik1_image');
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'anasayfayardim-altbaslik1_image-control', array(
        'label' => 'Resim 1',
        'section' => 'anasayfayardim',
        'settings' => 'anasayfayardim-altbaslik1_image',
        'width' => '70px',
        'height' => '70px'
    )));

    //AltBaslik 2 ve Yazisi----------------------------------------------
    $wp_customize->add_setting('anasayfayardim-altbaslik2', array(
        'default' => 'Online Terapi'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'anasayfayardim-altbaslik2-control', array(
        'label' => 'Alt Ba??l??k 2',
        'section' => 'anasayfayardim',
        'settings' => 'anasayfayardim-altbaslik2'
    )));

    $wp_customize->add_setting('anasayfayardim-altbaslik2_yazi', array(
        'default' => '??rnek yazi girin Alt Ba??l??k 2'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'anasayfayardim-altbaslik2_yazi-control', array(
        'label' => 'Alt Metin 2',
        'section' => 'anasayfayardim',
        'settings' => 'anasayfayardim-altbaslik2_yazi',
        'type' => 'textarea'
    )));
    $wp_customize->add_setting('anasayfayardim-altbaslik2_image');
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'anasayfayardim-altbaslik2_image-control', array(
        'label' => 'Resim 2',
        'section' => 'anasayfayardim',
        'settings' => 'anasayfayardim-altbaslik2_image',
        'width' => '70px',
        'height' => '70px'
    )));

    //AltBaslik 3 ve Yazisi----------------------------------------------
    $wp_customize->add_setting('anasayfayardim-altbaslik3', array(
        'default' => '??ocuk Terapisi'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'anasayfayardim-altbaslik3-control', array(
        'label' => 'Alt Ba??l??k 3',
        'section' => 'anasayfayardim',
        'settings' => 'anasayfayardim-altbaslik3'
    )));

    $wp_customize->add_setting('anasayfayardim-altbaslik3_yazi', array(
        'default' => '??rnek yazi girin Alt Ba??l??k 3'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'anasayfayardim-altbaslik3_yazi-control', array(
        'label' => 'Alt Metin 3',
        'section' => 'anasayfayardim',
        'settings' => 'anasayfayardim-altbaslik3_yazi',
        'type' => 'textarea'
    )));


    $wp_customize->add_setting('anasayfayardim-altbaslik3_image');
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'anasayfayardim-altbaslik3_image-control', array(
        'label' => 'Resim 3',
        'section' => 'anasayfayardim',
        'settings' => 'anasayfayardim-altbaslik3_image',
        'width' => '70px',
        'height' => '70px'
    )));
}
add_action( 'customize_register', 'psikolog_anasayfa_yardim');