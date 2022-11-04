<?php
get_header();
?>
<?php $the_query = new WP_Query('p=240');

while ($the_query->have_posts()) {
    $the_query->the_post();
    // $do_not_duplicate = $post->ID; 
    get_template_part('template-parts/hero_homepage');
}
?>


<div class="frontPage_posts">
    <h1 class="frontPage_posts-title">
        Меблі для вашого дому
    </h1>

    <?php $custom_posts_loop_index = 0;
    $row_styles = array('row', 'row-reverse');

    $the_query = new WP_Query(array('post__in' => array(0 => 76, 1 => 115, 2 => 112), 'orderby' => 'post__in'));

    while ($the_query->have_posts()) {
        $the_query->the_post();
        // if ( $post->ID == $do_not_duplicate ) continue;

        get_template_part('template-parts/simple_post_home_preview', null, array('class' => $row_styles[$custom_posts_loop_index % 2]));
        $custom_posts_loop_index++;
    } ?>
</div>

<?php
$the_query = new WP_Query('p=170');

while ($the_query->have_posts()) {
    $the_query->the_post();
    // $do_not_duplicate = $post->ID; 
    get_template_part('template-parts/accordion_homepage');
}

$the_query = new WP_Query('p=61');

while ($the_query->have_posts()) {
    $the_query->the_post(); 
    // $do_not_duplicate = $post->ID; 
    get_template_part('template-parts/column_section');
}
?>