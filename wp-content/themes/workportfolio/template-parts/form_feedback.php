<?php $query = new WP_Query('p=344');

while ($query->have_posts()) : ?>
    <?php $query->the_post(); ?>
    <div class='feedbackForm' id='feedback_form'>
        <div class="blure_background blure_background-green">
        </div>

        <div class='feedbackForm-wrapper'>
            <h4 class='feedbackForm_title'>
                <?php the_field('title'); ?>
            </h4>

            <div class='feedbackForm_body'>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
<?php endwhile ?>