<?php

$i = get_theme_mod( 'header-img' );
if ( ! empty( $i ) ) {
    ?><img class="center-block" src="<?php echo $i; ?>"><?php
}
