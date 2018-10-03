<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
    </head>
    <div class="banner-area clearfix" data-id="fade-in-load" style="background:url(<?php the_field('h_background_image_n'); ?>);">
        <div class="container">
            <div class="header-area clearfix">
                <div class="logo"> <a href="<?php the_field('h_logo_link_h'); ?>"><img src="<?php echo get_theme_mod('m2_logo') ?>"></a> <a href="#"><img src="<?php echo get_theme_mod('m1_logo') ?>"></a></div>
                <div class="apply"> <a href="<?php the_field('h_button_link_h'); ?>"><?php the_field('h_button_title_h'); ?></a> </div>
            </div>
			<div class="gallery">
				<?php echo do_shortcode('[gkit id=1]'); ?>
				</div>
			</div>
            <div class="banner-content clearfix">
                <div class="left-banner-text">
				
                    <?php the_field('h_title_n'); ?><?php echo get_theme_mod('contact'); ?>
                    <?php the_field('h_tag_line_n'); ?>
                    <div class="banner-services clearfix">
                        <div class="banner-serv-box">
                            <div class="service-icon"> <img src="<?php the_field('h_image_1_n'); ?>" alt="service-icon-1" title="service-icon-1"> </div>
                            <p><?php the_field('h_description_1_n'); ?></p>
                        </div>
                        <div class="banner-serv-box">
                            <div class="service-icon"> <img src="<?php the_field('h_image_2_n'); ?>" alt="service-icon-2" title="service-icon-2"> </div>
                            <?php the_field('h_description_2_n'); ?>
                        </div>
                        <div class="banner-serv-box">
                            <div class="service-icon"> <img src="<?php the_field('h_image_3_n'); ?>" alt="service-icon-3" title="service-icon-3"> </div>
                            <p><?php the_field('h_description_3_n'); ?></p>
                        </div>
                    </div>
                    <a href="<?php the_field('h_button_link_n'); ?>"><strong><?php the_field('h_button_title_n'); ?></strong><span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a> </div>
                <div class="banner-right-video">
                    <div>
                        <iframe width="638" height="469" frameborder="0" allowfullscreen="" src="<?php the_field('h_video_link_n'); ?>"></iframe>
                    </div>
                </div>
            </div>
        </div>
    
	<div class="slider-home">
    
         <?php echo do_shortcode('[rev_slider alias="slider"]'); ?>  

</div>
	


<?php wp_head(); ?>
