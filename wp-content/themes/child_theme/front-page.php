<?php get_header(); ?>
<div class="offers clearfix" data-id="fade-out-load">
    <div class="top-offer-text">
        <div class="container">
            <h2><?php the_field('h_tag_line_a'); ?></h2>
        </div>
    </div>
    <div class="offers-box-outer">
        <div class="offer-left-arrow">
            <?php the_field('h_offer_left_description_a'); ?>
        </div>
        <div class="offer-div-box-area clearfix">
            <div class="offers-first">
                <?php the_field('package_b'); ?>
            </div>
            <div class="offer-div-right-outer">
                <?php
                // check if the repeater field has rows of data
                if (have_rows('h_right_offer_box_a')):
                    ?>
                    <?php while (have_rows('h_right_offer_box_a')) : the_row();
                        ?> 
                        <div class="left-offers">
                            <div class="offers-box">
                                <div class="offer-box-img"> <img src="<?php the_sub_field('h_image_o_a'); ?>" alt="" title=""> </div>
                                <?php the_sub_field('h_description_o_a'); ?>
                                <span><?php the_sub_field('h_number_o_a'); ?></span> 
                            </div>
                        </div>

                        <?php
                    endwhile;
                endif;
                ?>
            </div> 
        </div>
    </div>
</div>
<!-- Layer Slider Add ---->
<?php echo do_shortcode('[rlslider id=566]');?>

<!---End Here--->
<div class="get-there">
    <h2><?php the_field('title_m'); ?></h2>

    <div class="process-new">
        <div class="process-outer">
            <div class="process-new-bg-img"><img src="<?php the_field('arrow_image'); ?>" alt="" title=""> </div>
            <div class="process-new-text">
                <div class="process-boxes">
                    <div class="new-process-img"> <img src="<?php the_field('images_1'); ?>" alt="" title=""> </div>
                    <div class="new-process-text">
                        <h4><?php the_field('titles_1'); ?></h4>
                        <?php the_field('content_1'); ?>
                        <span><?php the_field('number_1'); ?></span>
                    </div>
                </div>
                <div class="process-boxes">
                    <div class="new-process-text"> <span><?php the_field('number_2'); ?></span>
                        <?php the_field('content_2'); ?>
                        <h4><?php the_field('title_2'); ?></h4>
                    </div>
                    <div class="new-process-img"> <img src="<?php the_field('images_2'); ?>" alt="" title=""> </div>
                </div>
                <div class="process-boxes">
                    <div class="new-process-img"> <img src="<?php the_field('images_3'); ?>" alt="" title=""> </div>
                    <div class="new-process-text">
                        <h4><?php the_field('title_3'); ?></h4>
                        <?php the_field('content_3'); ?>
                        <span><?php the_field('number_3'); ?></span>
                    </div>
                </div>
                <div class="process-boxes">
                    <div class="new-process-text"> <span><?php the_field('number_4'); ?></span>
                        <?php the_field('content_4'); ?>
                        <h4><?php the_field('title_4'); ?></h4>
                    </div>
                    <div class="new-process-img"> <img src="<?php the_field('images_4'); ?>" alt="" title=""> </div>
                </div>
                <div class="process-boxes">
                    <div class="new-process-text">
                        <div class="new-process-img"> <img src="<?php the_field('images_5'); ?>" alt="" title=""> </div>
                        <h4><?php the_field('title_5'); ?></h4>
                        <?php the_field('content_5'); ?>
                        <span><?php the_field('number_5'); ?></span>
                    </div>
                </div>
                <div class="process-boxes">
                    <div class="new-process-text"> <span><?php the_field('number_8'); ?></span>
                        <?php the_field('content_8'); ?>
                        <h4><?php the_field('title_8'); ?></h4>
                        <div class="new-process-img"> <img src="<?php the_field('images_8'); ?>" alt="" title=""> </div>
                    </div>
                </div>
                <div class="process-boxes">
                    <div class="new-process-img"> <img src="<?php the_field('images_7'); ?>" alt="" title=""> </div>
                    <div class="new-process-text">
                        <h4><?php the_field('title_7'); ?></h4>
                        <?php the_field('content_7'); ?>
                        <span><?php the_field('number_7'); ?></span>
                    </div>
                </div>
                <div class="process-boxes">
                    <div class="new-process-text"> <span><?php the_field('number_6'); ?></span>
                        <?php the_field('content_6'); ?>
                        <h4><?php the_field('title_6'); ?></h4>
                    </div>
                    <div class="new-process-img"> <img src="<?php the_field('images_6'); ?>" alt="" title=""> </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hear-about">
    <div class="container">
        <div class="left-video-hear">
            <a href="<?php the_field('h_video_link_a'); ?>" data-media="<?php the_field('h_video_link_a'); ?>"><img src="<?php the_field('h_image_a'); ?>" alt="" title="">
                <div class="popup" id="media-popup">
                    <iframe width="638" height="469" frameborder="0" allowfullscreen="" src="<?php the_field('h_video_link_a'); ?>"></iframe>
                </div>
            </a>
        </div>
        <div class="right-text-hear">
            <h2><?php the_field('h_title_a'); ?></h2>
            <?php the_field('h_content_a'); ?>
        </div>
    </div>
</div>

<div class="contracts clearfix">
    <div class="container">
        <div class="contract-left">
            <?php the_field('h_tag_line_y'); ?> 
            <?php the_field('h_description_y'); ?>
        </div>
        <div class="contract-right">
            <div class="contact-box">
                <div class="contarct-box-icon"> <img src="  <?php the_field('h_image_1_y'); ?>" alt="" title=""> </div>
                <?php the_field('h_content_1_y'); ?>
            </div>
            <div class="contact-box">
                <div class="contract-box-icon"> <img src="  <?php the_field('h_image_2_y'); ?>" alt="" title=""> </div>
                <?php the_field('h_content_2_y'); ?>
            </div>
            <div class="contact-box">
                <div class="contract-box-icon"> <img src="  <?php the_field('h_image_3_y'); ?>" alt="" title=""> </div>
                <?php the_field('h_content_3_y'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('template-pages/future'); ?>

<?php get_template_part('template-parts/station/station-title'); ?>
<?php get_template_part('template-parts/station/station-main'); ?>

<?php get_template_part('template-pages/languagescholarship'); ?>

<?php get_template_part('template-pages/template-requirement'); ?>

<div class="success-story">
    <div class="container">
        <h2><?php the_field('h_title_s'); ?></h2>
    </div>
</div>

<?php get_template_part('template-pages/nextstep'); ?>

<div class="faq">
    <div class="container">
        <h2>
            <?php the_field('title_f'); ?></h2><?php
        $args = array('post_type' => 'FAQ', 'order' => 'asc');
        $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post();
            ?>
            <div class="ziehharmonika"> 
                <h3><?php the_title(); ?><div class="arrowDown"></div><div class="collapseIcon">+</div></h3>
                <div>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
        wp_reset_query();
        ?>
    </div>
</div>
<div class="about-section clearfix">
    
        <div class="about-right">
            </div>
           
        </div>
        
</div>
 
          
<div class="fb-comments">
    <div class="container">
        <h2><?php the_field('h_title_f'); ?></h2>
        <div class="comment-section">
            <div class="coemment-boc">
                <div class="comment-img"> </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
