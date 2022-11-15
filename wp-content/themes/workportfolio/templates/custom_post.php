<?php
// Template Name: simple post
// Template Post Type: post, page
get_header();
?>

<div data-custom-post>
    <div class='postModalSlider hidden' data-toggle='postSlider'>
        <div class='postModalSlider_contentWrapper'>
            <div class='slidesDashboard'>
                <div class='slidesDashboard_count' post-slider-counter>
                    1/2
                </div>

                <div class='slidesDashboard_close' data-toggle-target='postSlider' data-type='toggleModal'>
                    <?php echo icons('close') ?>
                </div>
            </div>

            <div class='postModalSlider-wrapper'>
                <img class='postSlider' src='' />

                <div class='slideArrow slide_prev' data-slide-prev>
                    <?php echo icons('arrow') ?>
                </div>

                <div class='slideArrow slide_next' data-slide-next>
                    <?php echo icons('arrow') ?>
                </div>
            </div>
        </div>
    </div>

    <div class='customPost_wrapper'>
        <div class='customPost_card'>
            <h1 class="customPost_title">
                <?php the_field('title'); ?>
            </h1>

            <div class="categories_inline">
                <?php the_category(' ') ?>
            </div>

            <button type="button" class="secondaryButton customPostFeedbackBtn">
                <a href="/#feedback_form">
                    Замовити меблі
                </a>
            </button>
        </div>

        <div class="customPost">
            <div class="customPost_content body1">
                <?php the_content(); ?>
            </div>

            <div class="customPost_text margin-left">
                <div class="customPost_text-wrapper">
                    <?php if (get_field('meta')) : ?>
                        <div class="customPost-meta">
                            <h4 class="customPost_meta">
                                Завдання
                            </h4>

                            <p class='body1'>
                                <?php the_field('meta'); ?>
                            </p>
                        </div>
                    <?php endif ?>

                    <?php if (get_field('features')) : ?>
                        <h4 class="features_title">
                            Ключові особливості:
                        </h4>

                        <ul class="features_list">
                            <?php get_features_list() ?>
                        </ul>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>

<?php
function get_features_list()
{
    $features_arr = explode('; ', get_field('features'));

    foreach ($features_arr as $value) {
        echo "<li class='features_list-item'> <span class='dash'></span>$value</li>";
    }
}
?>