<div class="frontPage_posts">
    <h1 class="frontPage_posts-title">
        Меблі для вашого дому
    </h1>

    <?php
    $row_styles = array('row', 'row-reverse');
    $custom_posts_loop_index = 0;
    $the_query = new WP_Query(array('post__in' => array(0 => 76, 1 => 115, 2 => 112), 'orderby' => 'post__in'));

    while ($the_query->have_posts()) {
        $the_query->the_post();
        // if ( $post->ID == $do_not_duplicate ) continue;

        get_template_part('template-parts/simple_post_home_preview', null, array('class' => $row_styles[$custom_posts_loop_index % 2]));
        $custom_posts_loop_index++;
    }

    wp_reset_postdata();
    ?>
</div>