<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> -->
    <?php wp_head(); ?>
</head>
<body class="p-body">
    <?php wp_body_open(); ?>
    <header class="c-bgcolor--offwhite p-header">
        <button class="c-color--gray c-bgcolor--offwhite c-font--fam--robot p-menutab--open">Menu</button>
        <h1 class="p-siteName"><a class="c-linkDecoNone c-color--gray c-font--fam--robot" href="<?php echo home_url(); ?>">Hamburger</a></h1>
        <?php get_search_form(); ?>
    </header>