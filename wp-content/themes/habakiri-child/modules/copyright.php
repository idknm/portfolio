<?php

/**
 * このページは全て置き換え
 * 参考サイト：https://nelog.jp/copyrights
*/

//最初の投稿の年を取得
function get_first_post_year(){
    $year = null;
    //記事を古い順に1件だけ取得
    query_posts('posts_per_page=1&order=ASC');
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        $year = intval(get_the_time('Y'));//最初の投稿の年を取得
    endwhile; endif;
    wp_reset_query();
    return $year;
}

//Copyright表示
function get_copylight_credit(){
    //サイト名のみ
    $site_tag = get_bloginfo('name');
    //サイト名とリンク
    //$site_tag = ' <a href="'.home_url().'">'.get_bloginfo('name').'</a>';
    return '&copy; '.get_first_post_year().' '.$site_tag;
}

// 以下の記述により、ページに出力される
echo get_copylight_credit();