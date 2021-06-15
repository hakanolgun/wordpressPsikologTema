<footer id="footer_kapsayici">
    <section id="footer_ustkisim">
        <div id="footer_sosyal_medya_div">
            <p id="footer_sosyal_ici_ilk_p">Sosyal Medya</p>
            <p id="footer_sosyal_ici_2nci_p">Beni sosyal medyada takip edebilirsiniz.<br>Böylece yeniliklerden ve
                fırsatlardan haberdar olabilirsiniz.</p>
            <div id="footer_sosyal_ici_div_ici_div">
                <a href="">
                    <img src="<?php echo get_theme_file_uri('/img/facebook.png') ?>" alt="" onmouseover="this.src='<?php echo get_theme_file_uri('/img/facebook (1).png') ?>'" onmouseout="this.src='<?php echo get_theme_file_uri('/img/facebook.png') ?>'">
                </a>
                <a href="">
                    <img src="<?php echo get_theme_file_uri('/img/instagram.png') ?>" alt="" onmouseover="this.src='<?php echo get_theme_file_uri('/img/instagram (1).png') ?>'" onmouseout="this.src='<?php echo get_theme_file_uri('/img/instagram.png') ?>'">
                </a>
                <a href="">
                    <img src="<?php echo get_theme_file_uri('/img/twitter.png') ?>" alt="" onmouseover="this.src='<?php echo get_theme_file_uri('/img/twitter (1).png') ?>'" onmouseout="this.src='<?php echo get_theme_file_uri('/img/twitter.png') ?>'">
                </a>
                <a href="">
                    <img src="<?php echo get_theme_file_uri('/img/youtube.png') ?>" alt="" onmouseover="this.src='<?php echo get_theme_file_uri('/img/youtube (1).png') ?>'" onmouseout="this.src='<?php echo get_theme_file_uri('/img/youtube.png') ?>'">
                </a>
            </div>
        </div>
        <div id="anasayfa_harita">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d391768.3553967545!2d32.48258322541922!3d39.90356622737544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d347d520732db1%3A0xbdc57b0c0842b8d!2sAnkara!5e0!3m2!1str!2str!4v1619111832725!5m2!1str!2str" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div id="footer_iletisim_form">
            <div class="footer_adres_kapsayici">
                <div class="footer_logo_divi">
                    <a href="<?php echo home_url(); ?>">
                        <?php if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        } ?>
                    </a>
                    <div class="footer_logo_yazi">
                        <p>ABC Psikoloji</p>
                        <p>Psikolog Ayşe Yılmaz</p>
                    </div>
                </div>
                <p>Adres: ABC Mahallesi, ABC Sokak Çankaya - Ankara</p>
                <p><a id="tel_a" href="tel:+901234567890">Tel: 0123 456 78 90</a></p>

            </div>
            <!--
            <form action="webform.php" method="post" id="iletisim_formu">
                <ul>
                    <li>
                        <label for="name">Adınız:</label><br>
                        <input type="text" id="name" name="user_name" required>
                    </li>
                    <li>
                        <label for="mail">E-mail:</label><br>
                        <input type="email" id="mail" name="user_email" required>
                    </li>
                    <li>
                        <label for="msg">Mesajınız:</label><br>
                        <textarea id="msg" name="user_message" maxlength="140"></textarea>
                    </li>
                    <iframe name="hiddenFrame" class="gizli_ogeler"></iframe>
                    <li>
            -->
            <!-- Add a hidden form field with the name "action" and a unique value that you can use to handle the form submission  -->
            <!--
                        <input type="hidden" name="action" value="my_simple_form">
                    </li>
                    <li class="button form_submit_btn">
                        <button type="submit" id="form_btn">Gönder</button>
                    </li>
                </ul>
            </form>
            -->
        </div>
    </section>

    <section id="footer_altkisim">
        <p>Copyright &#169; 2021 ABC Psikoloji</p>
        <p>Her Hakkı Saklıdır</p>
        <p>Developed by <a href="https://hakanolgun.com">hakanolgun</a></p>
    </section>
</footer>


<?php wp_footer(); ?>
</body>

</html>