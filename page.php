<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <main class="p-main--page">
            <section class="p-pageTop">
                <?php the_post_thumbnail(); ?>
                <h1 class="c-color--white p-pageTop__title"><?php the_title(); ?></h1>
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
            <p class="p-singleCenter__btn"><a class="c-linkDecoNone c-color--gray p-singleCenter__btn__btn" href="#"><input type="submit"
                        class="c-font--weight--bold c-color--darkbrown c-btn--search p-singleCenter__btn__btn__btn" value="ボタン"></a></p>
            <p class="c-font--weight--bold p-singleCenter__bold">boldboldboldboldboldboldbold</p> -->
            </section>

        </main>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>