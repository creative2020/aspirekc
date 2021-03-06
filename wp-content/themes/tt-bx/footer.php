<footer id="footer">
	<div class="row">
		<div class="col-sm-12">
			<h3>From the Blog</h3>
		</div>
	</div>

<?php
    dynamic_sidebar('tt-sidebar-footer-c');

    dynamic_sidebar('tt-sidebar-footer-b');

    get_template_part('section', 'footer-contact');
?>

	<div id="footer-bloginfo" class="row">
		<div class="col-xs-12">
	        <span id="footer-bloginfo-name">
	            &copy;<?php echo date('Y'); ?>
	            <?php echo bloginfo('name'); ?>
	        </span>
		        <?php echo bloginfo('description'); ?>
		</div>
	</div>



</footer>

</div><!-- /.container -->

<?php wp_footer(); ?>

</body>
</html>
