<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php // bootstrap wants the following two meta elements ?>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container-fluid"><!--closed in footer file-->

<header>

<div class="row">
	<div class="col-xs-12">
		<?php get_template_part('section', 'header-logo'); ?>
	</div>
</div>

<?php get_template_part('section', 'navbar'); ?>

</header>
