<?php
/*
  Template Name:Requirement
 */
?><?php
    $my_query = new WP_Query('page_id=310');
    while ($my_query->have_posts()) : $my_query->the_post();
        $do_not_duplicate = $post->ID;
        ?>
<div class="requirements" style="background:url(<?php the_post_thumbnail_url(); ?>)">
    
        <h2><?php the_title(); ?></h2>
        <?php
    endwhile;
    wp_reset_query();
    ?>
    <?php //echo $our_title; ?>
    <?php $the_query = new WP_Query('page_id=310'); ?>

    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <?php the_content(); ?>
        <div class="requirements-box">
            <div class="require-div-img"> <img src="<?php the_field('r_image_1'); ?>" alt="" title=""> </div>
            <?php the_field('r_content_1'); ?>
        </div>
        <div class="requirements-box">
            <div class="require-div-img"> <img src="<?php the_field('r_image_2'); ?>" alt="" title=""> </div>
            <?php the_field('r_content_2'); ?>
        </div>
        <div class="requirements-box">
            <div class="require-div-img"> <img src="<?php the_field('r_image_3'); ?>" alt="" title=""> </div>
            <?php the_field('r_content_3'); ?>
        </div>
        <div class="requirements-box">
            <div class="require-div-img"> <img src="<?php the_field('r_image_4'); ?>" alt="" title=""> </div>
            <?php the_field('r_content_4'); ?>
        </div>
        <div class="requirements-box">
            <div class="require-div-img"> <img src="<?php the_field('r_image_5'); ?>" alt="" title=""> </div>
            <?php the_field('r_content_5'); ?>
        </div>
        <div class="requirements-box">
            <div class="require-div-img"> <img src="<?php the_field('r_image_6'); ?>" alt="" title=""> </div>
                <?php the_field('r_content_6'); ?>
        </div>
    </div>
    <?php
endwhile;
wp_reset_postdata();
wp_reset_query();
?>
