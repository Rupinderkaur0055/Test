<?php /* Template Name:Your Next Steps */ ?>
<div class="next-step">
    <div class="container"><?php $the_query = new WP_Query('page_id=394'); ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <h2><?php the_title(); ?></h2>
            <div class="inner-step">
                <div class="top-step">
                    <div class="special-offer">
                        <h4><?php the_field('n_title_s'); ?></h4>
                        <?php the_field('n_description_s'); ?>
                    </div>
                    <div class="countdown"> <img src="<?php the_field('n_image_s'); ?>" alt="" title=""> </div>
                </div>
                <h5><?php the_field('n_tag_line_b'); ?></h5>
                <div class="first-come clearfix">
                    <div class="first-come-left">
                        <h4><?php the_field('n_first_come_first_serve_b'); ?></h4>
                        <p><?php the_field('n_description_first_come_first_serve_b') ?></p>
                    </div>
                    <div class="gift-wrap"><img src="<?php the_field('n_image_first_come_first_serve_b') ?>" alt="" title=""></div>
                </div>
                <div class="start-new"> <a href="<?php the_field('n_button_link_b'); ?>"><strong><?php the_field('n_title_b'); ?></strong><span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
                    <h6><?php the_field('n_title_receive_an_answer_b'); ?></h6>
                </div>
            </div>
        </div>
    </div>
<?php
endwhile;
wp_reset_postdata();
wp_reset_query();
?>