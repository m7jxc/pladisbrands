<?php


get_header();
?>

 <!-- box-5 -->
            <section id="box-5-w" data-speed="-3" data-type="background" class="box-5-2">
                <div id="box-5" class="ani-2">
                    <h2>Новинки и акции</h2>
                    <p><a href="<?=home_url();?>">Главная</a> > Новинки и акции</p>
                    <div class="clear"></div>
                </div>
            </section>
        <!-- box-10 -->
            <div id="box-10-w">
                <div id="box-10">
                    <h4 class="ani-3">Здесь Вы можете ознакомиться с последними новостями из мира <span>pladis</span> и быть в курсе всех событий, которые происходят в нашем производстве.</h4>
                    <!--  -->
						<?php query_posts('category__in=4&showposts=100'); ?>
<?php while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink() ?>" class="box-10 ani-3">
                        <img src="<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
echo $thumb_url[0];
?>" alt="">
                        <h3><?php the_title();?></h3>
                        <p>
				<?php
				$string = get_the_content();
				$string = strip_tags($string);
$string = substr($string, 0, 200);
				$string = rtrim($string, "!,.-");
$string = substr($string, 0, strrpos($string, ' '));
echo $string."… ";
				
?>				
						
						
						</p>
                        <h6><?php echo get_the_date('j-n-Y'); ?></h6>
                        <div class="button">Подробнее</div>
                        <div class="clear"></div>
                    </a>


<?php endwhile; ?>

                    
                    
                    <!--  -->
                    <div class="clear"></div>
                </div>
            </div>



<?php
get_footer();
