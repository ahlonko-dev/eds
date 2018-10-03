<?php get_header()?>
<?php while (have_posts()) : the_post();?>

<?php the_title();?>	





 <div class="row">
            <div class="col-12">
            <div class="contact-form">
                <h1><?php the_title();?>:</h1>
                
                <?php the_content();?>
            </div>
            </div>
        </div>
        
    
    <?php endwhile;?>
<?php get_footer()?>