<?php get_header()?>
<?php while (have_posts()) : the_post();?>

<div class="container">
            <?php 
                while(have_rows("blog")): the_row();
            ?>
            <div class="row event-container">
                <div class="col-lg-7 col-md-7 col-sm-6 event">
                <h1 class="<?php echo get_the_title();?>"></h1>
                    <h2 class="tittle"><?php the_sub_field('title'); ?></h2>
                         
                            <img src="/eds/wp-content/themes/eds/images/Group-48.png" alt=""/>

                            <a href="https://www.google.co.in/maps/place/FGTB+Li%C3%A8ge/@50.639303,5.5684423,565m/data=!3m1!1e3!4m5!3m4!1s0x47c0fa0551ac6143:0x8d46c5306aab7990!8m2!3d50.639303!4d5.570631"  target="_blank">
                                    FGTB - Place Saint Paul, 4000 Liège
                            </a>
                        </p>
                        <p>
                            <?php the_sub_field('publication'); ?>
                        </p>
                        <p>
                            <!--<a class="inscription-button" target="_blank" href="<?php the_sub_field('link') ?>">Détails</a>-->
                        </p>
                                                
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 ">
                    <div class="description-image">
                    <?php 
                        $thumb_url = get_sub_field("image")["url"];
                        if($thumb_url):?>
                            <div class="eventImage">
                                <img src="<?php echo $thumb_url;?>" alt="image"/>
                            </div>
                            
                        <?php endif;?>
                        
                    </div>
                </div>
            </div><!--end row-->
                    <?php
                            endwhile;
                    ?>
                    
        </div><!--end container-->
    <?php endwhile;?>
<?php get_footer()?>