<?php
    $request_url = $_SERVER['REQUEST_URI'];
?>

<footer>
    <div class="blure_background <?php if ($request_url != '/') { echo 'noBlureFooter'; } ?>">
    </div>

    <div class="footerWrapper">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() . '/assets/nightstand.png'; ?>">
        </div>

        <nav class='footerMenu captured'>
            <?php wp_footer();
            wp_nav_menu(
                array('menu' => '19')
            );
            ?>
        </nav>

        <div class='footerFeedback'>
            <button class="primaryButton">
                <a href="/#feedback_form">
                    Замовити меблі
                </a>
            </button>
        </div>
    </div>
</footer>
</body>

</html>