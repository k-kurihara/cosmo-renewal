<?php

// 外観のメニューを表示
add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

// ページャー
function pagenation($pages = '', $range = 2){
    $showitems = ($range * 1)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == ''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages){
            $pages = 1;
        }
    }
    if(1 != $pages){
        // 画像を使う時用に、テーマのパスを取得
        $img_pass = get_template_directory_uri();
        echo "<div class=\"p-topics__pager\">";
        // 「1/2」表示 現在のページ数 / 総ページ数
        // echo "<div class=\"m-pagenation__result\">". $paged."/". $pages."</div>";
        // 「前へ」を表示
        if($paged > 1) echo "<a href='".get_pagenum_link($paged - 1)."' class=\"p-topics__pager__before\"></a>";
        // ページ番号を出力
        // echo "<ol class=\"m-pagenation__body\">\n";
        // for ($i=1; $i <= $pages; $i++){
        //     if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
        //         echo ($paged == $i)? "<li class=\"-current\">".$i."</li>": // 現在のページの数字はリンク無し
        //             "<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
        //     }
        // }
        echo "<div class=\"p-topics__pager__pageNum\">";
        echo "<div class=\"p-topics__pager__current\">";
        echo "<input type=\"text\" value=\"$paged\"/>";
        echo "</div>\n";
        echo "<div class=\"p-topics__pager__max\">$pages</div>";
        echo "</div>\n";
        // [...] 表示
        // if(($paged + 4 ) < $pages){
        //     echo "<li class=\"notNumbering\">...</li>";
        //     echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
        // }
        // echo "</ol>\n";
        // 「次へ」を表示
        if($paged < $pages) echo "<a href='".get_pagenum_link($paged + 1)."' class=\"p-topics__pager__next\"></a>";
        echo "</div>\n";
    }
}

function my_jquery($hook) {
	global $post;
	if($hook == 'edit.php'){
	}
	if ( $hook == 'post-new.php' || $hook == 'post.php' ) {
		if ( 'topics' === $post->post_type ) {
			wp_enqueue_script('custom_admin_script', get_bloginfo('template_url').'/shared/js/my_jquery.js', array('jquery'));
		}elseif ( 'lp' === $post->post_type ) {
            wp_enqueue_script('custom_admin_script', get_bloginfo('template_url').'/shared/js/my_jquery-lp.js', array('jquery'));
        }
	}
}
add_action('admin_enqueue_scripts', 'my_jquery');

// function original_editor(){
//     $content = ''; //あらかじめ表示させておきたい内容
//     $editor_id = 'original'; //エディターを区別するために、IDを指定する
   
//     echo '<h2>何でも書いてね</h2>';
//     wp_editor( $content, $editor_id );
// }

// add_action( 'edit_form_after_editor', 'original_editor' );

function get_preview_id( $post_id ) {
    global $post;
    $preview_id = 0;
    if ( $post->ID == $post_id && is_preview() && $preview = wp_get_post_autosave( $post->ID ) ) {
        $preview_id = $preview->ID;
    }
    return $preview_id;
}


function get_preview_postmeta( $return, $post_id, $meta_key, $single ) {
    if ( $preview_id = get_preview_id( $post_id ) ) {
        if ( $post_id != $preview_id ) {
            $return = get_post_meta( $preview_id, $meta_key, $single );
        }
    }
    return $return;
}
add_filter( 'get_post_metadata', 'get_preview_postmeta', 10, 4 );


function save_preview_postmeta( $post_ID ) {
    global $wpdb;

    if ( wp_is_post_revision( $post_ID ) ) {
        $wpdb->query( "DELETE FROM $wpdb->postmeta WHERE post_id = $post_ID" );
        $post_metas = apply_filters( 'preview_post_meta_keys', array( 'meta' ) );
        foreach ( $post_metas as $post_meta ) {
            foreach ( $_POST[$post_meta] as $meta_id => $meta_arr ) {
                add_metadata( 'post', $post_ID, $meta_arr['key'], $meta_arr['value'] );
            }
        }
        do_action( 'save_preview_postmeta', $post_ID );
    }
}
add_action( 'wp_insert_post', 'save_preview_postmeta' );