<?php

//フォント、css、JSの読み込み
function readScript(){
    wp_enqueue_style('robot', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), '');
    wp_enqueue_style('mplus', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array(), '');

    wp_enqueue_style('css',get_template_directory_uri().'/css/hamburger.css');
   //JS読み込み
    wp_deregister_script('jquery'); //WordPress 本体の jQuery を登録解除
    wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery-3.6.0.min.js',array(),'3.6.0',true);
    wp_enqueue_script('script',get_theme_file_uri('/js/script.js'),array('jquery'),filemtime(get_theme_file_path('/js/script.js')),true);
}
add_action('wp_enqueue_scripts','readScript');


//<title>タグを出力する
add_theme_support('title-tag');

// タイトルタグの区切り文字をーから｜に変更
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator)
{
    $separator = '|';
    return $separator;
}

//アイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');

//カスタムヘッダー画像を使用可能にする
add_theme_support('custom-header');

//カスタム背景画像を使用可能にする
add_theme_support('custom-background');

//カスタム背景画像を使用可能にする
add_theme_support('menus');

//検索結果（search.php）で特定の投稿ページを除外する
function search_pre_get_posts($query)
{
    if ($query->is_search && !is_admin()) {
        // 投稿のカテゴリー名から検索結果を除外する
        $cat_id_1 = get_cat_ID('Eat In情報');
        $cat_id_2 = get_cat_ID('Take Out情報');
        $cat_id_3 = get_cat_ID('map');

        //除外するカテゴリー名をセット
        $query->set('category__not_in', array($cat_id_1, $cat_id_2, $cat_id_3));
    }
    return $query;
}
add_action('pre_get_posts', 'search_pre_get_posts');

//検索結果（search.php）で固定ページを全て除外する
function SearchFilter($query)
{
    if (!is_admin() && $query->is_main_query() && $query->is_search()) {
        $query->set('post_type', 'post');
    }
}
add_action('pre_get_posts', 'SearchFilter');
