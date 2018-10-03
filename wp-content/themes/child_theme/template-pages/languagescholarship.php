<?php /* Template Name:Language Scholarship */ ?>

<div class="language-scholarship">
    <div class="container">
        <?php
        $the_query = new WP_Query('page_id=501');
        while ($the_query->have_posts()) : $the_query->the_post();
            ?>
            <div class="language-relator">
                <h2><?php the_title(); ?></h2>
                <div class="language-process first-process">
                    <div class="process-img"> <img src="<?php the_field('l_first_process_image'); ?>" alt="" title=""> </div>
                    <h4><?php the_field('l_first_process_title'); ?></h4>
                    <?php the_field('l_first_process_description'); ?>    
                </div>
                <div class="language-process second-process">
                    <div class="process-img"> <img src="<?php the_field('l_second_process_image'); ?>" alt="" title=""> </div>
                    <h4><?php the_field('l_second_process_title'); ?> </h4>
                    <?php the_field('l_second_process_description'); ?>
                </div>
                <div class="language-process third-process">
                    <div class="process-img"> <img src="<?php the_field('l_third_process_image'); ?>" alt="" title=""> </div>
                    <h4><?php the_field('l_third_process_title'); ?></h4>
                    <?php the_field('l_third_process_description'); ?>
                </div>
            </div>
            <div class="language-video-area">
                <div class="container">
                    <h3><?php the_field('l_tag_line_v'); ?></h3>
                    <div class="language-video"> <a href=" <?php the_field('l_video_image_link_v'); ?>" data-media="//www.youtube.com/embed/YoXa2Pl7Hk0"><img src=" <?php the_field('l_video_image_v'); ?>" alt="" title=""> </a>
                        <div class="popup" id="media-popup-3">
                            <iframe width="638" height="469" frameborder="0" allowfullscreen="" src=" <?php the_field('l_video_image_link_v'); ?>"></iframe>
                        </div>
                    </div>
                    <div class="course-info">
                        <?php the_field('l_description_v'); 
						
						?>  
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>