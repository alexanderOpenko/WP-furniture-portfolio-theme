<?php
// Template Name: simple post
// Template Post Type: post, page
get_header();
?>

<div class="customPost">
    <div class="customPost_content">
        <?php the_content(); ?>
    </div>

    <div class="customPost_text margin-left">
        <h1 class="customPost_title">
            <?php the_field('title'); ?>
        </h1>

        <div class="categories_inline">
            <?php the_category(' ') ?>
        </div>

        <?php if (get_field('meta')) : ?>
            <div class="customPost-meta">
                <h3 class="customPost_meta">
                    Завдання
                </h3>

                <?php the_field('meta'); ?>
            </div>
        <?php endif ?>

        <?php if (get_field('features')) : ?>
            <h3 class="features_title">
                Ключові особливості:
            </h3> 

            <ul class="features_list">
                <?php get_features_list() ?>
            </ul>
        <?php endif ?>

        <button type="button" class="secondaryButton">
            Замовити послугу
        </button>
    </div>
</div>

<?php comments_template(); ?>

<?php
function get_features_list()
{
    $features_arr = explode('; ', get_field('features'));

    foreach ($features_arr as $value) {
        echo "<li> <span class='dash'></span>$value</li>";
    }
}
?>