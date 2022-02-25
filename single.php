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
        <h1 class="p-siteName"><a class="c-linkDecoNone c-color--gray" href="index.html">Hamburger</a></h1>
        <section class="p-search">
            <p class="p-search__scope"><input type="text" class="c-scope"></p>
            <p class="p-search__btn"><a class="c-linkDecoNone c-color--gray" href="archive-search.html"><input
                        type="submit" class="c-color--gray c-btn--search" value="検索"></a></p>
        </section>
    </header> -->
<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <main class="p-main--single">
            <section class="p-singleTop">
                <?php the_post_thumbnail(); ?>
                <h1 class="c-color--white p-singleTop__title"><?php the_title(); ?></h1>
            </section>
            
            <section class="c-color--darkbrown c-bgcolor--white p-singleCenter">
            <?php the_content(); ?>
                <!-- <h2 class="p-singleCenter__title1">見出しh2</h2>
                <p class="p-singleCenter__text">
                    Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                </p>
                <h3 class="p-singleCenter__title2">見出しh3</h3>
                <h4 class="p-singleCenter__title3">見出しh4</h4>
                <h4 class="p-singleCenter__title3">見出しh5</h4>
                <h4 class="p-singleCenter__title3">見出しh6</h4>
                <section class="c-bgcolor--lightgray p-singleCenter__quote">
                    <blockquote class="c-color--darkbrown p-singleCenter__quote__text">blockquote
                        引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                    </blockquote>
                    <blockquote class="c-color--darkbrown p-singleCenter__quote__source">出典元：<a href="#">◯◯◯◯◯◯◯◯◯◯◯◯</a>
                    </blockquote>
                </section>
                <figure class="p-singleCenter__bigImg">
                    <img class="p-singleCenter__bigImg__img" src="img/singleBurger.svg">
                </figure>
                <figure class="p-singleCenter__article">
                    <img class="p-singleCenter__article__img" src="img/singleBurger.svg">
                    <figcaption class="p-singleCenter__article__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </figcaption>
                </figure>
                <figure class="p-singleCenter__article">
                    <figcaption class="p-singleCenter__article__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </figcaption>
                    <img class="p-singleCenter__article__img" src="img/singleBurger.svg">
                </figure>
                <figure class="p-singleCenter__smImg">
                    <img class="p-singleCenter__smImg__img" src="img/singleBurger.svg">
                </figure>
                <figure class="p-singleCenter__imgBox">
                    <img class="p-singleCenter__imgBox__img" src="img/singleBurger.svg">
                    <img class="p-singleCenter__imgBox__img" src="img/singleBurger.svg">
                    <img class="p-singleCenter__imgBox__img" src="img/singleBurger.svg">
                    <img class="p-singleCenter__imgBox__img" src="img/singleBurger.svg">
                    <img class="p-singleCenter__imgBox__img" src="img/singleBurger.svg">
                    <img class="p-singleCenter__imgBox__img" src="img/singleBurger.svg">
                    <img class="p-singleCenter__imgBox__img" src="img/singleBurger.svg">
                    <img class="p-singleCenter__imgBox__img" src="img/singleBurger.svg">
                    <img class="p-singleCenter__imgBox__img" src="img/singleBurger.svg">
                </figure>
                <div class="p-singleCenter__list">
                    <ol class="c-color--darkbrown p-singleCenter__list__list">
                        <li class="c-listDotNone p-singleCenter__list__list__listNme">1.リストリストリスト</li>
                        <li class="c-listDotNone p-singleCenter__list__list__listNme">2.リストリストリスト</li>
                    </ol>
                    <ol class="c-color--darkbrown p-singleCenter__list__list">
                        <li class="c-listDotNone p-singleCenter__list__list__listNme">1.リスト2リスト2リスト2</li>
                        <li class="c-listDotNone p-singleCenter__list__list__listNme">2.リスト2リスト2リスト2</li>
                    </ol>
                    <ol class="c-color--darkbrown p-singleCenter__list__list">
                        <li class="c-listDotNone p-singleCenter__list__list__listNme">1.リストリストリスト</li>
                        <li class="c-listDotNone p-singleCenter__list__list__listNme">2.リストリストリスト</li>
                    </ol>
                    <ol class="c-color--darkbrown p-singleCenter__list__list">
                        <li class="c-listDotNone p-singleCenter__list__list__listNme">リストリストリスト</li>
                        <li class="c-listDotNone p-singleCenter__list__list__listNme">リストリストリスト</li>
                    </ol>
                    <ol class="c-color--darkbrown p-singleCenter__list__list">
                        <li class="c-listDotNone p-singleCenter__list__list__listNme">リスト2リスト2リスト2</li>
                        <li class="c-listDotNone p-singleCenter__list__list__listNme">リスト2リスト2リスト2</li>
                    </ol>
                    <ol class="c-color--darkbrown p-singleCenter__list__list">
                        <li class="c-listDotNone p-singleCenter__list__list__listNme">リストリストリスト</li>
                        <li class="c-listDotNone p-singleCenter__list__list__listNme">リストリストリスト</li>
                    </ol>
                </div>
                <div class="c-bgcolor--lightgray c-color--darkbrown p-code">
                    <code class="p-code__list">&lt;html&gt;<br></code>
                    <code class="p-code__list">&lt;head&gt;<br></code>
                    <code class="p-code__list">&lt;/head&gt;<br></code>
                    <code class="p-code__list">&lt;body&gt;<br></code>
                    <code class="p-code__list">&lt;/body&gt;<br></code>
                    <code class="p-code__list">&lt;/html&gt;<br></code>
                </div>
                <table class="p-table">
                    <tr>
                        <td>テーブル</td>
                        <td>テーブル</td>
                    </tr>
                    <tr>
                        <td>テーブル</td>
                        <td>テーブル</td>
                    </tr>
                    <tr>
                        <td>テーブル</td>
                        <td>テーブル</td>
                    </tr>
                    <tr>
                        <td>テーブル</td>
                        <td>テーブル</td>
                    </tr>
                </table>
                <p class="p-singleCenter__btn"><a class="c-linkDecoNone c-color--gray p-singleCenter__btn__btn" href="#"><input type="submit" class="c-font--weight--bold c-color--darkbrown c-btn--search p-singleCenter__btn__btn__btn" value="ボタン"></a></p>
                <p class="c-font--weight--bold p-singleCenter__bold">boldboldboldboldboldboldbold</p> -->
            </section>

        </main>
    <?php endwhile; ?>
<?php endif; ?>

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