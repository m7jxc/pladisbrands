

   <!-- bottom -->
            <div id="bottom-w">
                <div id="bottom">
                    <a href="/" class="logo"></a>
                    <p class="pb-1"><span><?php the_field('zagolovok_nash_adres', 'option'); ?></span><br><?php the_field('adres', 'option'); ?></p>
                    <p class="pb-2"><span><?php the_field('zagolovok', 'option'); ?></span><br><a href="tel:<?php the_field('telefon_1_ssylka', 'option'); ?>"><?php the_field('telefon_1_tekst', 'option'); ?></a><br><a href="tel:<?php the_field('telefon_2_ssylka', 'option'); ?>"><?php the_field('telefon_2_tekst', 'option'); ?></a> (Офис)</p>
                    <a href="<?php the_field('ssylka_na_sertifikaty_i_rekomendaczii', 'option'); ?>" target="_blank" class="pb-3"><span><?php the_field('zagolovok_smotret_sertifikaty', 'option'); ?></span><br><?php the_field('podzagolovok_sertifikaty', 'option'); ?></a>
                    <div class="clear"></div>
                </div>
                <!-- footer -->
                <div id="footer-w">
                    <div id="footer">
                        <p><?php the_field('kopirajt', 'option'); ?><span>|</span> <a href="<?php the_field('ssylka_na_politiku_konfedinczialnosti', 'option'); ?>" target="_blank">Политика конфиденциальности</a> <span>|</span> Сайт разработан: <?php the_field('sajt_razrabotan', 'option'); ?></p>
                        <div class="clear"></div>
                    </div>
                </div>
                <!-- end footer -->
            </div>
    <!-- end page -->
        </div>
    <!-- wrapper -->
    <div class="wrapper"></div>
    <!-- thnx -->
    <div class="thnx">
        <div class="close"></div>
        <h2><span>СПАСИБО!</span><br>Ваша заявка принята</h2>
    </div>
    <!-- js -->
    <script src="/wp-content/themes/isak/js/jquery-2.2.4.min.js"></script>
    <script src="/wp-content/themes/isak/js/jquery.validate.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
    <script src="/wp-content/themes/isak/js/icon_customImage.js"></script>
    <script src="/wp-content/themes/isak/js/waypoints.min.js"></script>
    <script src="/wp-content/themes/isak/js/jquery.animateNumber.js"></script>
    <script src="/wp-content/themes/isak/js/jquery.transit.min.js"></script>
    <script src="/wp-content/themes/isak/js/parall.js"></script>
    <script src="/wp-content/themes/isak/js/lightGallery/lightGallery.js"></script>
    <script src="/wp-content/themes/isak/js/jquery.form.js"></script>
    <script src="/wp-content/themes/isak/js/main.js"></script>
    <!-- end -->
	
<?php wp_footer(); ?>
</body>
</html>