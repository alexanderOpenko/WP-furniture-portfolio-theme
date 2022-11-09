<div class="columnSection">
    <h1 class="columnSection_heading align-center">
        <?php the_field('title'); ?>
    </h1>

    <div class="columnSection_wrapper">
        <?php

        for ($i = 1; $i <= 6; $i++) : ?>
            <div class="columnSection_block align-center">
                <?php while (have_rows('service_item' . $i)) : the_row(); ?>
                    <?php
                    $title = get_sub_field('title');
                    $image = get_sub_field('benefit_image');
                    $desc = get_sub_field('description');
                    ?>
                    <div class="columnSection_img">
                        <img src='<?php echo $image ?>' />
                    </div>

                    <?php if ($title) : ?>
                        <h3 class="columnSection_title">
                            <?php echo $title ?>
                        </h3>
                    <?php endif ?>

                    <div class="columnSection_description captured">
                        <?php echo $desc ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endfor; ?>
    </div>
</div>