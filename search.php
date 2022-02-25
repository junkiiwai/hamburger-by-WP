<?php get_header(); ?>

<main class="p-main--arc">
    <section class="p-arcTop">
        <img class="p-arcTop__img" src="<?php echo get_template_directory_uri(); ?>/img/arcTop.svg">
        <div class="p-arcTop__title">
            <h2 class="c-color--white c-font--fam--robot p-arcTop__title__main">Search：</h2>
            <h3 class="c-color--white p-arcTop__title__sub"><?php the_search_query(); ?></h3>
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
            <?php while (have_posts()) : the_post() ?>
                <div class="p-arcContent">
                    <div class="p-arcContent__img">
                        <?php the_post_thumbnail('thumbnail', ['class' => 'p-arcContent__img__img']); ?>
                    </div>
                    <div class="c-bgcolor--darkbrown p-card">
                        <h2 class="c-font--weight--bold c-color--white p-card__title "><?php the_title(); ?></h2>
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
        <?php else : ?>
            <div class="p-arcCenter__noSearch">
                <p>「<?php the_search_query(); ?>」の検索結果はありませんでした</p>
            </div>
        <?php endif; ?>

    </section>
    <?php if(function_exists('wp_pagenavi')){wp_pagenavi();}?>

    <!-- <ol class="p-pagenation">
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
    </ol> -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>