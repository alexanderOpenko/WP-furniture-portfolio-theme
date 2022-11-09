<div class="simple_post" style = "flex-direction: <?php echo $args['class']?>">
    <div class="simple_post-text">
        <div class="wrapper">
            <h2 class="simple_post-title">
                <?php the_field('title'); ?>
            </h2>

            <div class="simple_post-subtitle body2">
                <?php the_field('subtitle'); ?>
            </div>

            <div class="simple_post-description">
                <?php the_field('description'); ?>
            </div>

            <div class="categories_inline body3">
                <?php the_category(' / ') ?>
            </div>

            <div class="simple_post-button">
                <button type="button" class="secondaryButton">
                    <a href=<?php the_permalink() ?>>
                        Переглянути
                    </a>
                </button>
            </div>
        </div>
    </div>

    <div class="simple_post-view">
        <img src=<?php the_field('image') ?> />
    </div>
</div>
