<?php
/*
Template Name: FAQ
*/
?>

<?php get_header()?>
<?php while (have_posts()) : the_post();?>

	


<div class="container">
        <!--Contenu FAQ avec liens ul sous forme de barre de menu latéral qui renvoit à chacune des pages respectives-->
        <div class="row">
            <!--Row barre de menu-->
            <div class="col-lg-6 col-sm-12">
                <?php get_sidebar("faq"); ?>
            </div>

            <div class="col-lg-6 col-sm-12">
                <!--Contenu de la page commence ici-->
                <h2><?php the_title();?></h2>
                <div class="contenu-accordeon">
                    <div id="accordion">
                        <?php 
                            while(have_rows("faq")): the_row();
                                ?>
                                <h3><?php the_sub_field("question") ?></h3>
                                <div><?php the_sub_field("reponse") ?></div>
                                <?php
                            endwhile;
                        ?>
                        
                               
                       
                    </div>

                    <button id="toggle">Toggle icons</button>



                </div> <!--Fin contenu Accordeon-->

            </div><!-- FIn Contenu de la page commence ici-->


        </div><!--Fin row numero -->
    </div>
    <!--Fin container Contenu FAQ-->




    
    <?php endwhile;?>
<?php get_footer()?>