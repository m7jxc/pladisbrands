<?php


get_header();



?>

            <div id="box-8-w">
                <div id="box-8">
                    <!-- -->
                    <div class="box-8-left ani-4">
                        <img src="<?php the_field('bolshaya_kartinka'); ?>" alt="">
                        <div class="clear"></div>
                    </div>
                    <!-- -->
                    <div class="box-8-right ani-5">
						<h2>Новости о <br>продукте:<br>
							<a style="top: 10px;
    position: relative;" href="<?php the_field('ssylka_na_instagramm'); ?>"><img src="/wp-content/uploads/2020/04/in.png"></a><a style="margin-left: 10px;
    position: relative;
    top: 8px" href="<?php the_field('ssylka_na_yutub'); ?>"><img src="/wp-content/uploads/2020/04/yu.png"></a>
						</h2>
                        <div class="lightGallery">
						<?php

// check if the repeater field has rows of data
if( have_rows('roliki_yutuba') ):
$s=0;
 	// loop through the rows of data
    while ( have_rows('roliki_yutuba') ) : the_row();
	$s=$s+1;
	if ( $s==1 ){
?>
  <div data-src="<?php the_sub_field('url_rolika_yutuba');?>"><!-- первое видео в слайдере -->
                                <div class="img">
                                    <div class="play"></div>
                                    <img src="<?php the_field('kartinka_pod_rolik'); ?>" alt="">
                                    <div class="clear"></div>
                                </div>
                            </div>
	<?php }
else
{	?>
   <div data-src="<?php the_sub_field('url_rolika_yutuba');?>"></div>
<?php
}
    endwhile;

else :

    // no rows found

endif;

?>
						
						
						
                          
                            
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- -->
                    <div class="clear"></div>
                </div>
            </div>
        <!-- box-9 -->
            <div id="box-9-w">
                <div id="box-9">
                    <!-- -->
					<?php

// check if the repeater field has rows of data
if( have_rows('prod') ):

 	// loop through the rows of data
    while ( have_rows('prod') ) : the_row();
?>  <div class="box-9 ani-3">
                        <div class="hover">
                            <div class="close"></div>
                            <h3>  <?php the_sub_field('zagolovok');?></h3>
                            <p>  <?php the_sub_field('opisanie');?></p>
                            <p><?php the_sub_field('vesupakovka');?></p>
                            <div class="clear"></div>
                        </div>
                        <img src="<?php the_sub_field('kartinka');?>" alt="">
                        <div class="clear"></div>
                    </div>
					
      
<?php
    endwhile;

else :

    // no rows found

endif;

?>
              
                 
              <div class="row"><?php the_field('tekstovka'); ?>
</div>			  
                   
                  
                  
                   
                    
                    <div class="clear"></div>
                </div>
            </div>



<?php
get_footer();
