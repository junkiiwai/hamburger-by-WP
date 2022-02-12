<?php
/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');

// タイトルタグの区切り文字をーから｜に変更
add_filter('document_title_separator','my_document_title_separator');
function my_document_title_separator($separator){
    $separator = '|';
    return $separator;
}

/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');


//archiveページを作成する
// function post_has_archive($args,$post_type) {
//     　　　if ('post' == $post_type){
//     　　　　　$args['rewrite'] = true; // リライトを有効にする
//     　　　　　$args['has_archive'] = 'archive'; //スラッグ名
//     　　　　　}
//     　　　　　return $args;
//     }
// add_filter('register_post_type_args','post_has_archive',10,2);