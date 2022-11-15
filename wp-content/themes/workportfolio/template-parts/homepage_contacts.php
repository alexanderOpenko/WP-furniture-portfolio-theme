<div class='contacts_wrapper' id='contacts'>
    <div class="blure_background">
    </div>

    <div class='contacts' id='contacts'>
        <h3 class='contacts_title'>
            <?php the_field('contacts_title'); ?>
        </h3>

        <div class='contacts_items'>
            <div class='contacts_item'>
                <div class='contacts_icon'>
                    <?php echo icons('email'); ?>
                </div>

                <div class='body1'>
                    <?php the_field('contacts_email'); ?>
                </div>
            </div>

            <div class='contacts_item'>
                <div class='contacts_icon'>
                    <?php echo icons('phone'); ?>
                </div>

                <div class='body1'>
                    <?php the_field('contacts_number'); ?>
                </div>
            </div>
        </div>
    </div>
</div>