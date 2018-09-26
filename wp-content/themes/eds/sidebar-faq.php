<div class="col-lg-4 col-sm-12">
                <div>
                    <!--Début ul-->
                    <div class="Title">
                        <h1>Catégories de questions</h1>
                    </div>

                    <?php wp_nav_menu(array(
                        'theme_location'    => 'faq_menu',
                        'container'         => 'nav',
                        'menu_class'        => 'main_menu',
                        'container_class'   => 'main-navigation'   ,
                    )
                    );?> 

                   

                </div>
                <!--Fin div ul-->

            </div>