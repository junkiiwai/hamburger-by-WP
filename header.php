<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> -->
    <?php wp_enqueue_style('font-google','https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap'); ?>
    <?php wp_head(); ?>
</head>
<body class="p-body">
    <?php wp_body_open(); ?>
    <header class="c-bgcolor--offwhite p-header">
        <button class="c-color--gray c-bgcolor--offwhite p-menutab--open">Menu</button>
        <h1 class="p-siteName"><a class="c-linkDecoNone c-color--gray" href="<?php echo home_url(); ?>">Hamburger</a></h1>
        <section class="p-search">
            <p class="p-search__scope"><input type="text" class="c-scope"></p>
            <p class="p-search__btn"><a class="c-linkDecoNone c-color--gray" href="archive-search.html"><input
                        type="submit" class="c-color--gray c-btn--search" value="検索"></a></p>
        </section>
    </header>Ï