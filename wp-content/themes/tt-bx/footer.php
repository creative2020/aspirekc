<footer id="footer">

<?php
    dynamic_sidebar('tt-sidebar-footer-c');

    dynamic_sidebar('tt-sidebar-footer-b');

    get_template_part('section', 'footer-contact');
?>

<div id="footer-bloginfo" class="row"><div class="col-xs-12">
        <span id="footer-bloginfo-name">
            &copy;<?php echo date('Y'); ?>
            <?php echo bloginfo('name'); ?>
        </span>
        <?php echo bloginfo('description'); ?>
</div></div>

</footer>

</div><!-- /.container -->

<?php wp_footer(); ?>

</body>
</html>
