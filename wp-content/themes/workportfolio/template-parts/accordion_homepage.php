<div class="services">
    <div class="accordionServices" data-parent-toggle>
        <div class="accordionServices_body">
            <div class="accordionServices_heading">
                <h1>
                    <?php the_field('accordion_title') ?>
                </h1>

                <span>
                    <a><?php the_field('accordion_subtitle') ?></a>
                </span>
            </div>

            <?php for ($i = 1; $i <= 4; $i++) : ?>
                <div class="accordionServices_item" data-toggle>
                    <?php while (have_rows('accordionitem' . $i)) : the_row(); ?>
                        <?php
                        $title = get_sub_field('accordion_title');
                        $content = get_sub_field('accordion_content');
                        ?>

                        <div class="accordionServices_title" data-toggle-target data-type='accordion'>
                            <h3>
                                <?php echo $title ?>
                            </h3>

                            <div>
                                <span class="accordion_show">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10" fill="none">
                                        <path d="M6.39922 10V6H10.3992V4.4H6.39922V0.399999H4.79922V4.4H0.799219V6H4.79922V10H6.39922Z" fill="currentColor"></path>
                                    </svg>
                                </span>

                                <span class="accordion_hiden hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="3" viewBox="0 0 12 3" fill="none">
                                        <path d="M0.97332 0.54V2.25H11.4233V0.54H0.97332Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="accordionServices_content hidden" data-toggle-item>
                            <?php echo $content ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endfor; ?>
        </div>

        <div class="accordionServices_image margin-left">
            <img src="<?php the_field('accordion_image') ?>" />
        </div>
    </div>
</div>