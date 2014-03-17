<?php 
function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function getPostsByCategory($atts, $content = null) {
    extract(shortcode_atts(array(
        "nb" => '5',
        "orderby" => 'post_date',
        "order" => 'DESC',
        "category_name" => ''
    ), $atts));
    global $post;
    $tmp_post = $post;
    $myposts = get_posts('showposts='.$nb.'&orderby='.$orderby.'&category_name='.$category_name);
    $out = '<ul class="listNews">';
    foreach($myposts as $post){
        setup_postdata( $post );
        $out .= '<li>';
        $out .= '<h3>'.the_title("","",false).'</h3>';
        $out .= '<a href="'.get_permalink().'">[...] En savoir +</a>';
        $out .= '</li>';
    }
    $out .= '</ul>';
    wp_reset_postdata();
    $post = $tmp_post;
    return $out;
}
add_shortcode("posts-by-category", "getPostsByCategory");
?>