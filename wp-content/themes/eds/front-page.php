<?php get_header()?>
<?php while (have_posts()) : the_post();?>




<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
                    <h1><?php the_title();?></h1>	
						
						<div class="row">
							<div class="col-md-6">
                            <?php 
                            include("dba/GetEventList.php");
                            $events=getEventList(10);
                            foreach($events as $event){
                                //code html
                            }
                            ?>
                        </div>
                    </div>
                </div>
</main>









    
    <?php endwhile;?>
<?php get_footer()?>