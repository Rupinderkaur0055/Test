<?php /* Template Name:Future Workplace */ ?>
<div class="future-workplace clearfix">
    <div class="future-top clearfix">
        <?php $the_query = new WP_Query('page_id=353'); ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <div class="future-left-video"> <a href="#" data-media="<?php the_field('link_h'); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" title=""></a>

                <div class="popup" id="media-popup-1">
                    <iframe width="638" height="469" frameborder="0" allowfullscreen="" src="<?php the_field('link_h'); ?>"></iframe>
                </div></div>
            <div class="future-right-text">
                <div class="future-text">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>   
                </div>
            </div>
        </div>
        <div class="future-bottom clearfix">
            <div class="future-bottom-left">
                <div class="future-left-inner">
                    <h2><?php the_field('title_k'); ?></h2>
                    <?php
// check if the repeater field has rows of data
                    if (have_rows('krankenhaus_agatharied')):
                        ?>
                        <ul><?php while (have_rows('krankenhaus_agatharied')) : the_row();
                            ?>
                                <li><span><?php the_sub_field('title_f_k'); ?></span>
                                    <p><?php the_sub_field('content_f_k'); ?> </p>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif;
                    ?>


                </div>
            </div>
            <div class="future-bottom-right"> <img src="<?php the_field('image_k'); ?>" alt="" title=""> </div>
        </div>
        <div class="future-videos clearfix">
            <div class="container">
                <div class="future-vidoes-left-text">
                    <h3><?php the_field('f_tag_line_f'); ?></h3>
                </div>
                <?php if (have_rows('f_future_video_f')): ?>
                    <div class="future-below-right">
                        <?php while (have_rows('f_future_video_f')) : the_row(); ?>
                            <div class="future-small-video"> <a href="<?php the_sub_field('f_video_link_f'); ?>"><img src="<?php the_sub_field('f_video_image_f'); ?>" alt="" title=""></a> </div>
                                <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php
endwhile;
wp_reset_postdata();
wp_reset_query();
?>