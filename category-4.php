<?php


get_header();
?>

<!-- box-5 -->
<section id="box-5-w" data-speed="-3" data-type="background" class="box-5-2">
    <div id="box-5" class="ani-2">
        <h2>Новинки и акции</h2>
        <p><a href="<?= home_url(); ?>">Главная</a> > Новинки и акции</p>
        <div class="clear"></div>
    </div>
</section>
<!-- box-10 -->
<div id="box-10-w">
    <div id="box-10">
        <h4 class="ani-3">Здесь Вы можете ознакомиться с последними новостями из мира <span>pladis</span> и быть в курсе всех событий, которые происходят в нашем производстве.</h4>
        <!-- news-list -->
        <ul class="news-list ani-3">
            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <div class="news-item">
                                <h3 class="news-heading"><?php the_title(); ?></h3>
                                <div class="news-list__img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="news-list__exceprt"><?php the_excerpt(); ?></div>
                                <div class="news-list__data">
                                    <p class="news-date"><?php the_time('d.m.Y'); ?></p>
                                    <button>Подробнее</button>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php endwhile;

            else : ?>
                <p>No news found.</p>
            <?php endif; ?>
        </ul>
        <!-- news-list -->
    </div>
</div>



<?php
get_footer();
