<?php

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

?>