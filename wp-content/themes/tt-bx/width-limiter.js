var window_width = jQuery(window).width();
var content_width = 1200;
var padding = (window_width >= content_width) ? (window_width - content_width) / 2 : 0;
jQuery('head').append('<style> .container-fluid > * > .row, .container-fluid > .row { padding-left: ' + padding + 'px; padding-right: ' + padding + 'px; } </style>');

function tt_r() {
    var window_width = jQuery(window).width();
    var padding = (window_width >= content_width) ? (window_width - content_width) / 2 : 0;
    var rows = jQuery(".container-fluid > * > .row, .container-fluid > .row")
    rows.css({
        "padding-left": padding + "px",
        "padding-right": padding + "px"
    });
}

jQuery(tt_r);
jQuery(window).resize(tt_r);
