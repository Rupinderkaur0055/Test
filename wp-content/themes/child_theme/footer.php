<div class="footer"  style="background:url(<?php the_field('h_background_image_f'); ?>);">
    <div class="our-clients">
        <div class="container">
            <div class="clients-area clearfix">
                <div class="left-client">
                    <?php the_field('h_title_o'); ?>
                    <?php the_field('h_description_o'); ?> 
                </div>
                <?php
                // check if the repeater field has rows of data
                if (have_rows('h_gallery_o')):
                    ?>
                    <div class="right-client">
                        <ul>
                            <?php while (have_rows('h_gallery_o')) : the_row(); ?>
                                <li><a href="<?php the_sub_field('h_image_link_g_o'); ?>"><img src="<?php the_sub_field('h_image_g_o'); ?>" alt="" title=""></a></li>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                            wp_reset_query();
                            ?>  
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="footer-loops">
        <?php $img = get_field('images_g'); ?>
        <div class="container">
            <?php foreach ($img as $images): ?>
                <div class="loop"> <img src="<?php echo $images['url']; ?>" alt="" title=""> </div>
            <?php
            endforeach;
            wp_reset_postdata();
            wp_reset_query();
            ?>
            <div class="loop-head">
                <h2><?php the_field('title_g') ?></h2>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="footer-logo"> <img src="" alt="" title=""><?php dynamic_sidebar('footer_logo'); ?> </div>
            <div class="address"> <img src="" alt="" title="">
                <p><?php dynamic_sidebar('address'); ?></p>
            </div>
            <img class="footer-seprator" src="" alt="" title="">
            <div class="call"> <img src="" alt="" title="">
                <p><?php dynamic_sidebar('phone'); ?></p>
            </div>
        </div>
    </div>
</div>


<?php wp_footer(); ?>





