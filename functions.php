<?php

function fasttrackit_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Widget Area', 'fasttrackit' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyforteen' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="header">',
        'after_title'   => '</div>',
    ) );
}
add_action( 'widgets_init', 'fasttrackit_widgets_init' );

function my_widget_content_wrap($content){
    $content = '<div class="content">'.$content.'</div>';
    return $content;
}
add_filter('widget_text', 'my_widget_content_wrap');
?>