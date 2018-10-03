<div class="stations">
    <div class="container">
        <?php $the_query = new WP_Query('page_id=222'); ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <h2> <?php the_title(); ?></h2>


        <?php endwhile; ?>

            </div>
</div>