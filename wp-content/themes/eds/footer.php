



<footer>
        <div class="row">
            <div class="col-12">
                <nav>
                    <ul>
                        <?php
                            while(have_rows("partenaire","option")): the_row();
                        ?>
                        
                        <li class="<?php the_sub_field("nom") ?>">
                            <a href="<?php the_sub_field('adress_link')?>" target="_blank">
                                <img src="<?php echo get_sub_field("image")["sizes"]["large"];?>" alt="" />
                            </a>
                        </li>
                        <?php
                            endwhile;
                        ?>
                        
                    </ul>
                </nav>
            </div>
        </div>
	</footer>
	<?php wp_footer(); ?>
</body>

</html>