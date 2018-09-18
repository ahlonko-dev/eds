<div class="col-lg-3 col-sm-12">
                <div>
                    <!--Début ul-->
                    <div class="Title">
                        <h1>Catégories de question</h1>
                    </div>

                    <?php wp_nav_menu(array(
                        'theme_location'    => 'faq_menu',
                        'container'         => 'nav',
                        'menu_class'        => 'menu',
                        'container_class'   => 'main-navigation'   ,
                    )
                    );?> 

                   

                </div>
                <!--Fin div ul-->

            </div>