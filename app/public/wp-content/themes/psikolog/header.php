<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header id="header_kapsayici">
        <div id="header_logo_ve_id_divi">
            <a href="<?php echo home_url(); ?>">
                <?php if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } ?>
            </a>
            <div>
                <p>ABC Psikoloji</p>
                <p>Psk. Ayşe Yılmaz</p>
            </div>
        </div>
        <div class="header_menusu_kapsayici">
            <span class="hamburger" onclick="onClickMenu()"></span>
            <ul id="header_menusu">

                <?php
                $args = array(
                    'theme_location' => 'primary'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </ul>
        </div>
    </header>

    <ul class="navham" id="navham">
        <?php
        $args = array(
            'theme_location' => 'hamburger'
        );
        ?>
        <?php wp_nav_menu($args); ?>
    </ul>