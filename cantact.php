<?php
/*
Template Name: Контакты
Template Post Type: page
*/





get_header();
?>




   <!-- box-5 -->
            <section id="box-5-w" data-speed="-3" data-type="background" class="box-5-3">
                <div id="box-5" class="ani-2">
                    <h2><?php the_title();?></h2>
                    <p><a href="/">Главная</a> > <?php the_title();?></p>
                    <div class="clear"></div>
                </div>
            </section>
        <!-- box-12 -->
            <div id="box-12-w">
                <div id="box-12">
                    <!-- -->
                    <div class="box-12-left ani-4">
                        <h2><?php the_field('zagolovok_nad_formoj'); ?></h2>
                        <h4><?php the_field('tekst_nad_formoj'); ?></h4>
                        <div class="formbox">
                            <form action="/send.php" method="POST" name="form" id="form">
                                <input type="text" size="50" name="name" class="name" autocomplete="off" placeholder="Ваше имя">
                                <input type="text" size="50" name="numb" class="phone" autocomplete="off" placeholder="Телефон">
                                <input type="text" size="50" name="subject" class="subject" autocomplete="off" placeholder="Тема обращения">
                                <textarea name="message" cols="50" placeholder="Текст обращения"></textarea>
                                <div class="clear"></div>
                                <div class="submit"><input type="submit" name="submit" value="Отправить сообщение"></div>
                                <div class="clear"></div>
                            </form>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- -->
                    <div class="box-12-right ani-5">
                        <h2><?php the_field('zagolovok_nad_kontaktami'); ?></h2>
                        <p class="p12-1"><span><?php the_field('zagolovok_nash_adres', 'option'); ?></span><br><?php the_field('adres', 'option'); ?></p>
                        <p class="p12-2">
                            <span>Претензии по качеству и пожелания:</span><br>
                            <a href="tel:<?php the_field('telefon_1_ssylka', 'option'); ?>"><?php the_field('telefon_1_tekst', 'option'); ?></a><br><br>
                            <span>Офис:</span><br>
                            <a href="tel:<?php the_field('telefon_ofisa_1_ssylka'); ?>"><?php the_field('telefon_ofisa_1_telefon'); ?></a><br>
                            <a href="tel:<?php the_field('telefon_ofisa_2_ssylka'); ?>"><?php the_field('telefon_ofisa_2_telefon'); ?></a><br>
                            <a href="tel:<?php the_field('telefon_ofisa_3_ssylka'); ?>"><?php the_field('telefon_ofisa_3_telefon'); ?></a>
                        </p>
                        <div class="clear"></div>
                        <p class="p12-3"><span>Электронная почта:</span><br><a href="mailto:<?php the_field('email_1'); ?>"><?php the_field('email_1'); ?></a><br><a href="mailto:<?php the_field('email_2'); ?>"><?php the_field('email_2'); ?></a></p>
                        <a href="<?php the_field('ssylka_na_sertifikaty_i_rekomendaczii', 'option'); ?>" target="_blank" class="p12-4"><span><?php the_field('zagolovok_smotret_sertifikaty', 'option'); ?></span><br><?php the_field('podzagolovok_sertifikaty', 'option'); ?></a>
                        <div class="clear"></div>
                    </div>
                    <!-- -->
                    <div class="clear"></div>
                </div>
                <!-- -->
                <div id="map-w" class="ani-5 d25s">
                    <div id="map"></div>
                </div>
                <!-- -->
            </div>




















<?php
get_footer();
