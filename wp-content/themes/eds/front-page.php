<?php get_header()?>
<?php while (have_posts()) : the_post();?>

<div class="row">
    <div class="col-12">
        <div class="intro">
             <h2>savoir,c'est pouvoir!</h2>
                <p>L’asbl Promotion & Culture, le Monde des Possibles et le CEPAG vous invitent à leur nouveau cycle de formation mis en place par l’École des Solidarités. Cette formation est ouverte à toute personne touchée par les discriminations, l’exclusion, l’injustice sociale et les inégalités grandissantes.
                 À travers la prise de parole, le partage de récits, l’échange d’expériences et l’intervention de référent(e)s, les participant(e)s mettront en commun leurs savoirs afin de rompre l’isolement dans lesquelles ils ou elles se trouvent et devenir acteur(trice)s de leur vie. Et ce, dans une perspective des combats à mener collectivement pour un monde respectueux de chacun(e)s.
                </p>
        </div>
    </div>
</div>


<div class="container">
           <?php
                            include("dba/GetEventList.php");
                            $events=getEventList(10);
                            foreach($events as $event): 
                               // var_dump($event); 
                                $post_id = $event["post_id"];
                                $thumb_url = get_the_post_thumbnail_url($post_id);
                                //var_dump($thumb_url);
                            
                            ?>
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-sm-6 event">
                                        <h2 class="tittle"><a href="<?php echo get_the_permalink($post_id) ?>"><?php echo $event["event_name"]; ?></a></h2>
                                        <p> <img src="/eds/wp-content/themes/eds/images/Group-49.png" alt=""/><?php echo get_the_date('d/m/Y h:i', $post_id);?></p>
                                        <p> 
                                            <img src="/eds/wp-content/themes/eds/images/Group-48.png" alt=""/>

                                            <a href="https://www.google.co.in/maps/place/FGTB+Li%C3%A8ge/@50.639303,5.5684423,565m/data=!3m1!1e3!4m5!3m4!1s0x47c0fa0551ac6143:0x8d46c5306aab7990!8m2!3d50.639303!4d5.570631"  target="_blank">FGTB - Place Saint Paul, 4000 Liège
                                            </a>
                                        </p>
                                        <p>
                                        <?php echo $event["post_content"]; ?>
                                        </p>
                                        <p>
                                            <a class="inscription-button" href="<?php echo get_the_permalink($post_id) ?>">Détails</a>
                                        </p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 ">

                                        
                                            <div class="description-image">
                                            <?php if($thumb_url):?>
                                                <img src="<?php echo $thumb_url;?>" alt="image"/>
                                                <?php endif;?>
                                            </div>
                                        

                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                       
           
</div>
<?php endwhile;?>
<?php get_footer()?>