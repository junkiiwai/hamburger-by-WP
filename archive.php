<!-- <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>humberger</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>

<body class="p-body">
    <header class="c-bgcolor--offwhite p-header">
        <button class="c-color--gray c-bgcolor--offwhite p-menutab--open">Menu</button>
        <h1 class="p-siteName"><a class="c-linkDecoNone c-color--gray"
            href="index.html">Hamburger</a></h1>
        <section class="p-search">
            <p class="p-search__scope"><input type="text" class="c-scope"></p>
            <p class="p-search__btn"><a class="c-linkDecoNone c-color--gray"
                href="archive-search.html"><input type="submit" class="c-color--gray c-btn--search" value="検索"></a></p>
        </section>
    </header> -->
<?php get_header(); ?>

<main class="p-main--arc">
    <section class="p-arcTop">
        <img class="p-arcTop__img" src="<?php echo get_template_directory_uri(); ?>/img/arcTop.svg">
        <div class="p-arcTop__title">
            <h2 class="c-color--white p-arcTop__title__main">Menu：</h2>
            <h3 class="c-color--white p-arcTop__title__sub">チーズバーガー</h3>
        </div>
    </section>

    <section class="c-bgcolor--white p-arcCenter">
        <div class="p-arcCenter__titleText">
            <h2 class="p-arcCenter__titleText__title">小見出しが入ります</h2>
            <article class="p-arcCenter__titleText__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </article>
        </div>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="p-arcContent">
                    <div class="p-arcContent__img">
                        <!-- <img src="img/arcBurger.svg" class="p-arcContent__img__img"> -->
                        <?php the_post_thumbnail('thumbnail',['class'=>'p-arcContent__img__img']); ?>
                    </div>
                    <div class="c-bgcolor--darkbrown p-card">
                        <h2 class="c-font--weight--bold c-color--white p-card__title "><?php the_title(); ?></h2>
                        <!-- <h3 class="c-font--weight--bold c-color--white p-card__subtitle ">小見出しが入ります</h3> -->
                        <?php $classes_arcContent = array('p-card__text', 'c-color--white'); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class($classes_arcContent); ?>>
                            <?php the_excerpt(); ?>
                        </article>
                        <div class="p-card__btn">
                            <a class="c-linkDecoNone" href="<?php the_permalink(); ?>"><button class="c-btn--oval c-color--darkbrown c-bgcolor--white c-color--brown p-card__btn__size">詳しく見る</button></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- <div class="p-arcContent">
            <div class="p-arcContent__img">
                <img src="img/arcBurger.svg" class="p-arcContent__img__img">
            </div>
            <div class="c-bgcolor--darkbrown p-card">
                <h2 class="c-font--weight--bold c-color--white p-card__title ">ダブルチーズバーガー</h2>
                <h3 class="c-font--weight--bold c-color--white p-card__subtitle ">小見出しが入ります</h3>
                <article class="p-card__text c-color--white">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </article>
                <div class="p-card__btn">
                    <a class="c-linkDecoNone" href="single.html"><button class="c-btn--oval c-color--darkbrown c-bgcolor--white c-color--brown p-card__btn__size">詳しく見る</button></a>
                </div>
            </div>
        </div>
        <div class="p-arcContent">
            <div class="p-arcContent__img">
                <img src="img/arcBurger.svg" class="p-arcContent__img__img">
            </div>
            <div class="c-bgcolor--darkbrown p-card">
                <h2 class="c-font--weight--bold c-color--white p-card__title ">スペシャルチーズバーガー</h2>
                <h3 class="c-font--weight--bold c-color--white p-card__subtitle ">小見出しが入ります</h3>
                <article class="p-card__text c-color--white">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </article>
                <div class="p-card__btn">
                    <a class="c-linkDecoNone" href="single.html"><button class="c-btn--oval c-color--darkbrown c-bgcolor--white c-color--brown p-card__btn__size">詳しく見る</button></a>
                </div>
            </div>
        </div> -->

    </section>
    <ol class="p-pagenation">
        <p class="c-color--darkbrown p-pagenation__page">page 1/10</p>
        <li class="c-listDotNone c-color--gray p-pagenation__list--lt"><a class="c-linkDecoNone c-color--gray" href="#">&lt;&lt;
            </a></li>
        <li class="c-bgcolor--darkbrown c-listDotNone p-pagenation__list--num"><a class="c-linkDecoNone c-color--white" href="#">1</a></li>
        <li class="c-bgcolor--white c-listDotNone p-pagenation__list--num"><a class="c-linkDecoNone c-color--darkbrown" href="#">2</a></li>
        <li class="c-bgcolor--white c-listDotNone p-pagenation__list--num"><a class="c-linkDecoNone c-color--darkbrown" href="#">3</a></li>
        <li class="c-bgcolor--white c-listDotNone p-pagenation__list--num"><a class="c-linkDecoNone c-color--darkbrown" href="#">4</a></li>
        <li class="c-bgcolor--white c-listDotNone p-pagenation__list--num"><a class="c-linkDecoNone c-color--darkbrown" href="#">5</a></li>
        <li class="c-bgcolor--white c-listDotNone p-pagenation__list--num"><a class="c-linkDecoNone c-color--darkbrown" href="#">6</a></li>
        <li class="c-bgcolor--white c-listDotNone p-pagenation__list--num"><a class="c-linkDecoNone c-color--darkbrown" href="#">7</a></li>
        <li class="c-bgcolor--white c-listDotNone p-pagenation__list--num"><a class="c-linkDecoNone c-color--darkbrown" href="#">8</a></li>
        <li class="c-bgcolor--white c-listDotNone p-pagenation__list--num"><a class="c-linkDecoNone c-color--darkbrown" href="#">9</a></li>
        <li class="c-bgcolor--white c-listDotNone p-pagenation__list--num"><a class="c-linkDecoNone c-color--darkbrown" href="#">10</a></li>
        <li class="c-listDotNone c-color--gray p-pagenation__list--gt"><a class="c-linkDecoNone c-color--gray" href="#">
                &gt;&gt;
            </a></li>
    </ol>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<!-- <footer class="c-bgcolor--brown c-color--white p-footer">
        <div class="p-footer__title">
            <div class="p-footer__title__part"><a class="c-linkDecoNone c-color--white" href="page.html">ショップ情報</a></div>
            <span class="c-underbar--vertical"></span>
            <div class="p-footer__title__part"><a class="c-linkDecoNone c-color--white" href="#">ヒストリー</a></div>
        </div>
        <div class="p-footer__copyright">
            Copyright: RaiseTech
        </div>
    </footer>

    <section class="c-color--gray c-bgcolor--gray p-sidebar">
        <span class="c-xCross p-menutab--close"></span>
        <nav class="p-menu">
            <h2 class="c-color--lightgray c-font--weight--bold p-menu__title">Menu</h2>
            <ul class="p-menu__group"><a class="c-linkDecoNone c-color--gray c-font--weight--bold p-menu__genre"
                    href="archive.html">バーガー</a>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">ハンバーガー</a></li>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">チーズバーガー</a></li>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">テリヤキバーガー</a></li>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">アボカドバーガー</a></li>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">フィッシュバーガー</a></li>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">ベーコンバーガー</a></li>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">チキンバーガー</a></li>
            </ul>
            <ul class="p-menu__group"><a class="c-linkDecoNone c-color--gray c-font--weight--bold p-menu__genre"
                    href="archive.html">サイド</a>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">ポテト</a></li>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">サラダ</a></li>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">ナゲット</a></li>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">コーン</a></li>
            </ul>
            <ul class="p-menu__group"><a class="c-linkDecoNone c-color--gray c-font--weight--bold p-menu__genre"
                    href="archive.html">ドリンク</a>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">コーラ</a></li>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">ファンタ</a></li>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">オレンジ</a></li>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">アップル</a></li>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">紅茶（Ice/Hot）</a></li>
                    <li class="c-font--weight--normal c-listDotNone p-menu__list"><a
                            class="c-linkDecoNone c-color--gray" href="single.html">コーヒー（Ice/Hot）</a></li>
            </ul>
        </nav>
    </section>
    <div class="c-bgcolor--tpBlack p-menutab--bg"></div>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html> -->