<?php
/*
Template Name: Продукты
Template Post Type: page
*/





get_header();
?>



<!-- box-5 -->
            <section id="box-5-w" data-speed="-3" data-type="background" class="box-5-1">
                <div id="box-5" class="ani-2">
                    <h2>Наша продукция</h2>
                    <p><a href="<?=home_url();?>">Главная</a> > Продукция</p>
                    <div class="clear"></div>
                </div>
            </section>
        <!-- box-6 -->
            <div id="box-6-w">
                <div id="box-6">
                    <!-- -->
                    <a href="<?php echo home_url();the_field('rubrika_1_ssylka'); ?>" class="box-6 box-6-left ani-3">
                        <img src="<?php the_field('rubriki1'); ?>" alt="">
                        <div class="clear"></div>
                    </a>
                    <!-- -->
                    <a href="<?php echo home_url();the_field('rubrika_2_ssylka'); ?>" class="box-6 box-6-right ani-3">
                        <img src="<?php the_field('rubriki2'); ?>" alt="">
                        <div class="clear"></div>
                    </a>
                    <!-- -->
                    <div class="clear"></div>
                </div>
            </div>

















<?php
get_footer();
