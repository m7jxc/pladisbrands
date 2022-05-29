<?php


get_header();



?>

            <!-- box-5 -->
            <section id="box-5-w" data-speed="-3" data-type="background" class="box-5-2">
                <div id="box-5" class="ani-2">
                    <h2>Новинки и акции</h2>
                    <p><a href="/">Главная</a> > <a href="/category/novosti-i-akczii/">Новинки и акции</a> > Новинка или акция</p>
                    <div class="clear"></div>
                </div>
            </section>
        <!-- box-11 -->
            <div id="box-11-w">
                <div id="box-11" class="ani-3">
                   <?/* <img src="<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
echo $thumb_url[0];
?>" alt=""> */?>
                    <h3><?php the_title();?></h3>
               <p><?php the_content(); ?></p>
				<?php the_date('j-n-Y', '<h6>', '</h6>'); ?>
                    <div class="clear"></div>
                    <div class="clear"></div>
                </div>
            </div>



<?php
get_footer();
