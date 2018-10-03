<div class="region" style="background:url(<?php the_field('s_background_image'); ?>)">
    <div class="left-region-text">
        <h2><span><?php the_field('title_r'); ?></h2>
        <?php $the_query = new WP_Query('page_id=222'); ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


            <?php the_content(); ?>                  </div>
        <div class="right-region-video"> <a href="#" data-media="<?php the_field('featured_image_link'); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" title=""></a>
            <?php
        endwhile;
        wp_reset_postdata();
        wp_reset_query();
        ?>
        <div class="popup" id="media-popup-2">
            <iframe width="638" height="469" frameborder="0" allowfullscreen="" src="<?php the_field('featured_image_link'); ?>"></iframe>
        </div>
        <div class="over-video-div">
            <div class="over-video-box">
                <div class="video-icon"> <img src=" <?php the_field('image_1_r'); ?>" alt="" title=""> </div>
                <?php the_field('content_1_r'); ?>
            </div>
            <div class="over-video-box">
                <div class="video-icon"> <img src=" <?php the_field('image_2_r'); ?>" alt="" title=""> </div>
                <?php the_field('content_2_r'); ?>
            </div>
            <div class="over-video-box">
                <div class="video-icon"> <img src=" <?php the_field('image_3_r'); ?>" alt="" title=""> </div>
                <?php the_field('content_3_r'); ?>
            </div>
            <div class="over-video-box">
                <div class="video-icon"> <img src=" <?php the_field('image_4_r'); ?>" alt="" title=""> </div>
                <?php the_field('content_4_r'); ?>
            </div>
            <div class="over-video-box">
                <div class="video-icon"> <img src=" <?php the_field('image_5_r'); ?>" alt="" title=""> </div>
                <?php the_field('content_5_r'); ?>
            </div>
            <div class="over-video-box">
                <div class="video-icon"> <img src=" <?php the_field('image_6_r'); ?>" alt="" title=""> </div>
                    <?php the_field('content_6_r'); ?>
            </div>
        </div>
    </div>  </div>
