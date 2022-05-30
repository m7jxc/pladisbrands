 <?php


get_header();
?><!-- box-5 -->
            <section id="box-5-w" data-speed="-3" data-type="background" class="box-5-1">
                <div id="box-5" class="ani-2">
                    <h2>Наша продукция</h2>
                    <p><a href="<?=home_url();?>">Главная</a> > <a href="<?=home_url();?>/products">Продукция</a> > Ülker</p>
                    <div class="clear"></div>
                </div>
            </section>
        <!-- box-7 -->
            <div id="box-7-w">
                <div id="box-7">
				<?php query_posts('category__in=2&showposts=100'); ?>
<?php while (have_posts()) : the_post(); ?>
 <a href="<?php the_permalink() ?>" class="box-7 ani-3">
                        <img src="<?php the_field('kartinka_brenda'); ?>" alt="">
                        <div class="clear"></div>
                    </a>

<?php endwhile; ?>

                   
                    <!-- -->
                    <div class="clear"></div>
                </div>
            </div>
			<?php
get_footer();
