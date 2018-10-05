<div class="col-lg-4 col-sm-12">
    <div>
        <!--Début ul-->
        <div class="Title">
            <h1>Catégories de questionnaires</h1>
        </div>
        
        <!--
            'theme_location'    => 'faq_menu',
            'container'         => 'nav',
            'menu_class'        => 'main_menu',
            'container_class'   => 'main-navigation'   ,
        -->

        <?php 
            $my_faqs = get_pages( array(
            'post_type' => 'page',
            'meta_key' => '_wp_page_template',
            'hierarchical' => 0,
            'meta_value' => 'template-faq.php'
        ));

        echo "<ul>";
        foreach($my_faqs as $faq){
            $title= get_the_title($faq);
            $link= get_the_permalink($faq);
            // echo "<li class='menu-item'>"."<a href='".$link."'>".$title."</a></li>";
            echo "<li class='menu-item'><a href='$link'>$title</a></li>";
        }
        echo "</ul>";
        ?>
    </div>
    <!--Fin div ul-->

</div>