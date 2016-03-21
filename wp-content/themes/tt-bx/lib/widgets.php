<?php
namespace com_2020creative;

class Text_Widget extends \WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'text_widget', // Base ID
			__( '2020 Text', 'text_domain' ), // Name
			array( 'description' => __( 'Text widget with a heading, three content lines, and a linkable footer', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		if ( !empty( $instance['image'] ) ) {
			if ( !empty( $instance['header-ref'] ) ) {
				echo '<a href="' . $instance['header-ref'] . '">';
			}
			echo '<img class="head" src="' . $instance['image'] . '" style="vertical-align: top;">';
			if ( !empty( $instance['header-ref'] ) ) {
				echo '</a>';
			}
		}

		echo '<span class="header">';
		if ( !empty( $instance['header-ref'] ) ) {
			echo '<a href="' . $instance['header-ref'] . '">';
		}
		echo $instance['title'];
		if ( !empty( $instance['header-ref'] ) ) {
			echo '</a>';
		}
		echo '</span><br>';

		if ( !empty( $instance['line1'] ) ) {
			if ( !empty( $instance['line1-ref'] ) ) {
				echo '<a href="' . $instance['line1-ref'] . '">';
			}
			echo $instance['line1'];
			if ( !empty( $instance['line1-ref'] ) ) {
				echo '</a>';
			}
			echo '<br>';
		}
		if ( !empty( $instance['line2'] ) ) {
			if ( !empty( $instance['line2-ref'] ) ) {
				echo '<a href="' . $instance['line2-ref'] . '">';
			}
			echo $instance['line2'];
			if ( !empty( $instance['line2-ref'] ) ) {
				echo '</a>';
			}
			echo '<br>';
		}
		if ( !empty( $instance['line3'] ) ) {
			if ( !empty( $instance['line3-ref'] ) ) {
				echo '<a href="' . $instance['line3-ref'] . '">';
			}
			echo $instance['line3'];
			if ( !empty( $instance['line3-ref'] ) ) {
				echo '</a>';
			}
			echo '<br>';
		}

		echo '<span class="footer">';
        if ( ! empty($instance['footer-ref'] ) ) {
            echo '<a href="' . $instance['footer-ref'] . '">';
        }
		echo $instance['footer'];
        if ( ! empty($instance['footer-ref'] ) ) {
            echo '</a>';
        }
		echo '</span><br>';

		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'Image:' ); ?></label><br>
		<input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>"
            name="<?php echo $this->get_field_name( 'image' ); ?>" type="text"
            value="<?php echo esc_attr( $instance['image'] ); ?>">
		<br>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Heading:' ); ?></label><br>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
            name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
            value="<?php echo esc_attr( $instance['title'] ); ?>">
		<br>
		<label for="<?php echo $this->get_field_id( 'header-ref' ); ?>"><?php _e( 'Header Link:' ); ?></label><br>
		<input class="widefat" id="<?php echo $this->get_field_id( 'header-ref' ); ?>"
            name="<?php echo $this->get_field_name( 'header-ref' ); ?>" type="url"
            value="<?php echo esc_attr( $instance['header-ref'] ); ?>">
		</p>
		<p>
		<label><?php _e( 'Details:' ); ?></label><br>
		<input id="<?php echo $this->get_field_id( 'line1' ); ?>"
            name="<?php echo $this->get_field_name( 'line1' ); ?>" type="text"
            value="<?php echo esc_attr( $instance['line1'] ); ?>"
			placeholder="text">
		<input id="<?php echo $this->get_field_id( 'line1-ref' ); ?>"
            name="<?php echo $this->get_field_name( 'line1-ref' ); ?>" type="url"
            value="<?php echo esc_attr( $instance['line1-ref'] ); ?>"
			placeholder="link">
		<br>
		<input id="<?php echo $this->get_field_id( 'line2' ); ?>"
            name="<?php echo $this->get_field_name( 'line2' ); ?>" type="text"
            value="<?php echo esc_attr( $instance['line2'] ); ?>"
			placeholder="text">
		<input id="<?php echo $this->get_field_id( 'line2-ref' ); ?>"
            name="<?php echo $this->get_field_name( 'line2-ref' ); ?>" type="url"
            value="<?php echo esc_attr( $instance['line2-ref'] ); ?>"
			placeholder="link">
		<br>
		<input id="<?php echo $this->get_field_id( 'line3' ); ?>"
            name="<?php echo $this->get_field_name( 'line3' ); ?>" type="text"
            value="<?php echo esc_attr( $instance['line3'] ); ?>"
			placeholder="text">
		<input id="<?php echo $this->get_field_id( 'line3-ref' ); ?>"
            name="<?php echo $this->get_field_name( 'line3-ref' ); ?>" type="url"
            value="<?php echo esc_attr( $instance['line3-ref'] ); ?>"
			placeholder="link">
		<br>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'footer' ); ?>"><?php _e( 'Footer:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'footer' ); ?>"
            name="<?php echo $this->get_field_name( 'footer' ); ?>" type="text"
            value="<?php echo esc_attr( $instance['footer'] ); ?>">
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'footer-ref' ); ?>"><?php _e( 'Footer Link:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'footer-ref' ); ?>"
            name="<?php echo $this->get_field_name( 'footer-ref' ); ?>" type="text"
            value="<?php echo esc_attr( $instance['footer-ref'] ); ?>">
		</p>
		<?php 
	}

} // class Text_Widget

add_action( 'widgets_init', function() {
	register_widget( 'com_2020creative\Text_Widget' );
});

class NewsBlog_Widget extends \WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'newsblog_widget', // Base ID
			__( '2020 News/Blog', 'text_domain' ), // Name
			array( 'description' => __( 'News and Blog widget', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
        $rowcount = $instance['rowcount'];

        $criteria = [
            'numberposts' => $rowcount * 3,
            'post_type' => 'post',
        ];
        if ( ! empty( $instance['category'] ) )
            $criteria['category_name'] = $instance['category'];
        if ( ! empty( $instance['offset'] ) )
            $criteria['offset'] = $instance['offset'];

        $blogs = get_posts($criteria);

        echo $args['before_widget'];
        ?>
        <div class="row tt-newsblog-widget">
                <div class="col-sm-4">
		<?php
		    $i = 0;
		    foreach ($blogs as $p) {
			if ($i > 0 && $i % $rowcount == 0)
			    echo '</div><!--/.col-sm-4--><div class="col-sm-4">';

                        //<!--<span class="header">Blog</span><br>-->
                            $datestr = date_format(date_create($p->post_date), 'm.d.y');
                            $link = get_permalink($p->ID);
                            ?>
                                <p>
                                <a href="<?php echo $link; ?>">
<!-- 				<span style="font-weight: bold;padding-right:0.5em;"><?php echo $datestr; ?>:</span> -->
				<?php echo $p->post_title; ?>
				</a>
                                </p>
			    <?php
			$i++;
                    }
		?>
                </div><!--/.col-sm-4-->
        </div>
        <?php

            echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'rowcount' ); ?>"><?php _e( 'Number of Rows:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'rowcount' ); ?>"
            name="<?php echo $this->get_field_name( 'rowcount' ); ?>" type="text"
            value="<?php echo esc_attr( $instance['rowcount'] ); ?>">
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e( 'Category:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'category' ); ?>"
            name="<?php echo $this->get_field_name( 'category' ); ?>" type="text"
            value="<?php echo esc_attr( $instance['category'] ); ?>">
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'offset' ); ?>"><?php _e( 'Offset Count:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'offset' ); ?>"
            name="<?php echo $this->get_field_name( 'offset' ); ?>" type="number"
            value="<?php echo esc_attr( $instance['offset'] ); ?>">
		</p>
		<?php 
	}
} // class NavBlog_Widget

add_action( 'widgets_init', function() {
	register_widget( 'com_2020creative\NewsBlog_Widget' );
});

class Testimonial_Widget extends \WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'testimonial_widget', // Base ID
			__( '2020 Testimonial', 'text_domain' ), // Name
			array( 'description' => __( 'Testimonial widget', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
        $testimonials = get_posts([
            'numberposts' => 1,
            'post_type' => $instance['post-type'],
            'orderby' => 'rand',
        ]);
        $p = $testimonials[0];
        $excerpt = tt_get_excerpt($p);
        $testimonial_name = get_post_meta( $p->ID, $key = 'testimonial_name', $single = true );
        $testimonial_company = get_post_meta( $p->ID, $key = 'testimonial_company', $single = true );
        $link = get_permalink($p->ID);
        $fi_url = wp_get_attachment_image_src( get_post_thumbnail_id($p->ID), 'hard512' )[0];
        $display_style = isset($instance['display-style']) ? $instance['display-style'] : 'wide';
		echo $args['before_widget'];
        ?>
        <?php if($display_style=='wide') { ?>
        <div class="row tt-headline-widget" style="background-color: <?php echo $instance['background-color']; ?>">
            <div class="col-xs-1 symbol"><i class="fa fa-quote-left" style="color: <?php echo $instance['quote-color']; ?>;"></i></div>
            <div class="col-xs-9 content">
                <a href="<?php echo $link; ?>">
                    <span class="title"><?php echo $p->post_title; ?></span>
                    <?php echo $excerpt; ?>
                </a>
            </div>
            <div class="col-xs-2 image">
                <a href="<?php echo $link; ?>">
                    <img class="img-responsive img-circle" src="<?php echo $fi_url; ?>" />
                </a>
            </div>
        </div>
        <?php } else { ?>
        <div class="row <?php echo $instance['post-type']; ?> tt-headline-widget-narrow">
            <div class="col-xs-6 col-xs-offset-3 image">
                <a href="<?php echo $link; ?>">
                    <img class="img-responsive img-circle" src="<?php echo $fi_url; ?>" />
                </a>
            </div>
            <div class="col-xs-12 <?php echo $instance['post-type']; ?>-content content">
                <a href="<?php echo $link; ?>">
                    <span class="title <?php echo $instance['post-type']; ?>-title"><?php echo $p->post_title; ?></span>
                    <?php echo $excerpt; ?>
                    <span class="testimonial-name"><?php echo $testimonial_name; ?></span>
                    <span class="testimonial-company"><?php echo $testimonial_company; ?></span>
                </a>
            </div>
        </div>
        <?php } ?>
        <?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'post-type' ); ?>"><?php _e( 'Post Type:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'post-type' ); ?>"
            name="<?php echo $this->get_field_name( 'post-type' ); ?>" type="text"
            value="<?php echo esc_attr( $instance['post-type'] ); ?>">
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'background-color' ); ?>"><?php _e( 'Background Color:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'background-color' ); ?>"
            name="<?php echo $this->get_field_name( 'background-color' ); ?>" type="text"
            value="<?php echo esc_attr( $instance['background-color'] ); ?>">
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'quote-color' ); ?>"><?php _e( 'Quote Mark Color:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'quote-color' ); ?>"
            name="<?php echo $this->get_field_name( 'quote-color' ); ?>" type="text"
            value="<?php echo esc_attr( $instance['quote-color'] ); ?>">
		</p>
        <?php
            $display_style = isset($instance['display-style']) ? $instance['display-style'] : 'wide';
        ?>
		<p>
		<label for="<?php echo $this->get_field_id( 'display-style' ); ?>"><?php _e( 'Display Style:' ); ?></label> 
		<input type="radio" name="<?php echo $this->get_field_name( 'display-style' ); ?>"
            value="wide" <?php if ($display_style=='wide') echo 'checked'; ?>>Wide
		<input type="radio" name="<?php echo $this->get_field_name( 'display-style' ); ?>"
            value="narrow" <?php if ($display_style=='narrow') echo 'checked'; ?>>Narrow
		</p>
		<?php 
	}
} // class Testimonial_Widget

add_action( 'widgets_init', function() {
	register_widget( 'com_2020creative\Testimonial_Widget' );
});

class Headline_Widget extends \WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'headline_widget', // Base ID
			__( '2020 Headline', 'text_domain' ), // Name
			array( 'description' => __( 'Headline widget', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
        $criteria = [ 'numberposts' => 1 ];

        if ( !empty ( $instance['post-type'] ) )
            $criteria['post_type'] = $instance['post-type'];

        if ( !empty ( $instance['orderby'] ) )
            $criteria['orderby'] = $instance['orderby'];

        if ( !empty ( $instance['offset'] ) )
            $criteria['offset'] = $instance['offset'];

        $posts = get_posts($criteria);
        $p = $posts[0];

        $excerpt = tt_get_excerpt($p);
        $link = get_permalink($p->ID);
        $fi_url = wp_get_attachment_image_src( get_post_thumbnail_id($p->ID), 'hard512' )[0];
		echo $args['before_widget'];
        ?>
        <div class="row tt-headline-widget" style="background-color: <?php echo $instance['background-color']; ?>">
	    <?php if ( isset($fi_url) ): ?>
            <div class="col-xs-2 image">
                <a href="<?php echo $link; ?>">
                    <img class="img-responsive img-circle" src="<?php echo $fi_url; ?>" />
                </a>
            </div>
	    <?php endif; ?>
            <div class="col-xs-<?php echo isset($fi_url) ? 10 : 12; ?> content">
                <a href="<?php echo $link; ?>">
                    <span class="<?php echo $instance['post-type'];?> title"><?php echo $p->post_title; ?></span>
                    <?php echo $excerpt; ?>
                </a>
            </div>
        </div>
        <?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'post-type' ); ?>"><?php _e( 'Post Type:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'post-type' ); ?>"
            name="<?php echo $this->get_field_name( 'post-type' ); ?>" type="text"
            value="<?php echo esc_attr( $instance['post-type'] ); ?>">
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'orderby' ); ?>"><?php _e( 'Order By:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'orderby' ); ?>"
            name="<?php echo $this->get_field_name( 'orderby' ); ?>" type="text"
            value="<?php echo esc_attr( $instance['orderby'] ); ?>">
		</p>
		<p>
		<p>
		<label for="<?php echo $this->get_field_id( 'offset' ); ?>"><?php _e( 'Offset Count:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'offset' ); ?>"
            name="<?php echo $this->get_field_name( 'offset' ); ?>" type="number"
            value="<?php echo esc_attr( $instance['offset'] ); ?>">
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'background-color' ); ?>"><?php _e( 'Background Color:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'background-color' ); ?>"
            name="<?php echo $this->get_field_name( 'background-color' ); ?>" type="text"
            value="<?php echo esc_attr( $instance['background-color'] ); ?>">
		</p>
		<?php 
	}
} // class Headline_Widget

add_action( 'widgets_init', function() {
	register_widget( 'com_2020creative\Headline_Widget' );
});

class ThreeBox_Widget extends \WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'threebox_widget', // Base ID
			__( '2020 Three Box', 'text_domain' ), // Name
			array( 'description' => __( 'Three general content boxes', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
        ?>
        <div class="row tt-threebox-widget">
            <div class="col-sm-4">
                <?php echo apply_filters('widget_text', $instance['a-content']); ?>
            </div>
            <div class="col-sm-4 middle">
                <?php echo apply_filters('widget_text', $instance['b-content']); ?>
            </div>
            <div class="col-sm-4">
                <?php echo apply_filters('widget_text', $instance['c-content']); ?>
            </div>
        </div>
        <?php

		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'a-content' ); ?>"><?php _e( 'Box A Content' ); ?></label> 
		<textarea class="widefat" id="<?php echo $this->get_field_id( 'a-content' ); ?>"
            name="<?php echo $this->get_field_name( 'a-content' ); ?>" rows="8"
            ><?php echo esc_attr( $instance['a-content'] ); ?></textarea>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'b-content' ); ?>"><?php _e( 'Box B Content' ); ?></label> 
		<textarea class="widefat" id="<?php echo $this->get_field_id( 'b-content' ); ?>"
            name="<?php echo $this->get_field_name( 'b-content' ); ?>" rows="8"
            ><?php echo esc_attr( $instance['b-content'] ); ?></textarea>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'c-content' ); ?>"><?php _e( 'Box C Content' ); ?></label> 
		<textarea class="widefat" id="<?php echo $this->get_field_id( 'c-content' ); ?>"
            name="<?php echo $this->get_field_name( 'c-content' ); ?>" rows="8"
            ><?php echo esc_attr( $instance['c-content'] ); ?></textarea>
		</p>
		<?php 
	}
} // class ThreeBox_Widget

add_action( 'widgets_init', function() {
	register_widget( 'com_2020creative\ThreeBox_Widget' );
});

