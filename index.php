<?php


get_header();
?>

        <section id="box-1-w" data-speed="-3" data-type="background">
                <div id="box-1" class="ani-2 d50s">
                    <h2><?php the_field('blok_1_zagolovok'); ?></h2>
                    <?php the_field('blok_1_tekst'); ?>
                    <a href="<?php the_field('blok_1_ssylka_podrobnee'); ?>" target="_blank" class="more">Подробнее о pladis</a>
                    <div class="clear"></div>
                </div>
            </section>
        <!-- box-2 -->
            <div id="box-2-w">
                <div id="box-2">
                    <!-- -->
                    <div class="box-2 ani-3">
                        <img src="<?php the_field('blok_2_ikonka_1'); ?>" alt="">
                        <h3 class="number-1">0</h3>
                        <p><span><?php the_field('blok_2_czyfra1'); ?></span> <?php the_field('blok_2_zagolovok_1'); ?></p>
                        <div class="clear"></div>
                    </div>
                    <!-- -->
                    <div class="box-2 ani-3 d25s">
                        <img src="<?php the_field('blok_2_ikonka_2'); ?>" alt="">
                        <h3 class="number-2">0</h3>
                        <p><span><?php the_field('blok_2_czyfra2'); ?></span> <?php the_field('blok_2_zagolovok_2'); ?></p>
                        <div class="clear"></div>
                    </div>
                    <!-- -->
                    <div class="box-2 ani-3 d50s">
                        <img src="<?php the_field('blok_2_ikonka_3'); ?>" alt="">
                        <h3 class="number-3">0</h3>
                        <p>В <span><?php the_field('blok_2_czyfra3'); ?></span> <?php the_field('blok_2_zagolovok_3'); ?></p>
                        <div class="clear"></div>
                    </div>
                    <!-- -->
                    <div class="box-2 ani-3 d75s">
                        <img src="<?php the_field('blok_2_ikonka_4'); ?>" alt="">
                        <h3 class="number-4">0</h3>
                        <p>Более  <span><?php the_field('blok_2_czyfra4'); ?></span>  <?php the_field('blok_2_zagolovok_4'); ?></p>
                        <div class="clear"></div>
                    </div>
                    <!-- -->
                    <div class="clear"></div>
                </div>
            </div>
        <!-- box-3 -->
            <div id="box-3-w">
                <div id="box-3">
                    <img src="<?php the_field('blok_3_logo'); ?>" alt="" class="ani-4">
                    <p class="ani-4"><?php the_field('blok_3_tekst'); ?></p>
                    <a href="<?php the_field('blok_3_ssylka_podrobnee'); ?>" target="_blank" class="more ani-4">Подробнее об Ülker</a>
                    <div class="clear"></div>
                    <a href="http://localhost/ulker<?php the_field('blok_3_ssylka_k_assaortimentu'); ?>" class="button ani-4">К ассортименту</a>
                    <div class="clear"></div>
                </div>
            </div>
        <!-- box-4 -->
            <div id="box-4-w">
                <div id="box-4">
                    <img src="<?php the_field('blok_4_logo'); ?>" alt="" class="ani-4">
                    <p class="ani-4"><?php the_field('blok_4_tekst'); ?></p>
                    <a href="<?php the_field('blok_4_ssylka_podrobnee'); ?>" target="_blank" class="more ani-4">Подробнее о McVitie’s (Маквитис)</a>
                    <a href="http://localhost/ulker<?php the_field('blok_4_ssylka_na_assortiment'); ?>" class="button ani-4">К ассортименту</a>
                    <div class="clear"></div>
                </div>
            </div>
<?php
get_footer();
