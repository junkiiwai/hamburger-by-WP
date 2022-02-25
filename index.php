<?php get_header(); ?>

<main class="p-main--front">
    
    <section class="p-frontTop">
        <!-- 外観＞ヘッダーからヘッダー画像の設定が可能（function.phpでヘッダー画像設定できるようにコーディング済） -->
        <img class="p-frontTop__img" src="<?php echo get_template_directory_uri(); ?>/img/top.svg">
        <h1 class="c-color--white p-frontTop__title">ダミーサイト</h1>
    </section>
    <section class="c-bgcolor--white p-frontCenter">
        <div class="p-frontContent">
            <a class="c-linkDecoNone" href="
            <?php 
                //タグ名を第２引数に入れて、当該タグ（Take Out）の投稿を一覧表示
                $tag_1 = get_term_by('name','Take Out', 'post_tag');
                echo get_tag_link($tag_1);
            ?>">
                <img class="p-frontContent__img" src="<?php echo get_template_directory_uri(); ?>/img/takeout.svg">
                <h2 class="c-color--white c-font--fam--robot p-frontContent__title">Take Out</h2>
                <span class="c-underbar--w40px p-frontContent__underbar"></span>

                <!-- カテゴリーで”フロントページ”と区分けした投稿のみを白カードで無限に出力 -->
                <?php
                $arg = array(
                    'category_name' => 'takeout', //category_nameはcategoryのslug名
                    'order' => 'DESC' //表示順を新しい方から（'ASC'が古い方から）
                );
                $posts = get_posts($arg);
                if ($posts) : ?>
                    <div class="p-frontContent__titleText">
                        <?php foreach ($posts as $post) : setup_postdata($post); ?>
                            <div class="c-titleText--fc c-bgcolor--tpWhite p-frontContent__titleText__text">
                                <h3 class="c-titleText--fc__title c-color--darkbrown p-frontContent__titleText__title"><?php the_title(); ?></h3>
                                <article class="c-titleText--fc__text c-color--darkbrown p-frontContent__titleText__text">
                                    <?php the_content(); ?></article>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif;
                wp_reset_postdata(); ?>
                <!-- 白カード出力ここまで -->
            </a>
        </div>
        <div class="p-frontContent">
            <a class="c-linkDecoNone" href="<?php 
            //タグ名を第２引数に入れて、当該タグ（Take Out）の投稿を一覧表示
            $tag_2 = get_term_by('name','Eat In', 'post_tag');
            echo get_tag_link($tag_2);
            ?>">
                <img class="p-frontContent__img" src="<?php echo get_template_directory_uri(); ?>/img/eatin.svg">
                <h2 class="c-color--white c-font--fam--robot p-frontContent__title">Eat In</h2>
                <span class="c-underbar--w40px p-frontContent__underbar"></span>

                <!-- カテゴリーで”フロントページ”と区分けした投稿のみを白カードで無限に出力 -->
                <?php
                $arg = array(
                    'category_name' => 'eatin', //category_nameはcategoryのslug名
                    'order' => 'DESC' //表示順を新しい方から（'ASC'が古い方から）
                );
                $posts = get_posts($arg);
                if ($posts) : ?>
                    <div class="p-frontContent__titleText">
                        <?php foreach ($posts as $post) : setup_postdata($post); ?>
                            <div class="c-titleText--fc c-bgcolor--tpWhite p-frontContent__titleText__text">
                                <h3 class="c-titleText--fc__title c-color--darkbrown p-frontContent__titleText__title"><?php the_title(); ?></h3>
                                <article class="c-titleText--fc__text c-color--darkbrown p-frontContent__titleText__text">
                                    <?php the_content(); ?></article>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif;
                wp_reset_postdata(); ?>
                <!-- 白カード出力ここまで -->

            </a>
        </div>
    </section>
    
    <!-- 地図の部分 -->
    <section class="p-frontBottom">
        <img class="p-frontBottom__map" src="<?php echo get_template_directory_uri(); ?>/img/map.svg">
        <?php
        $arg = array(
            'category_name' => 'map', //category_nameはcategoryのslug名
        );
        $posts = get_posts($arg);
        if ($posts) : ?>
        <?php foreach ($posts as $post) : setup_postdata($post); ?>
        <div class="c-titleText--fb c-bgcolor--tpBlack p-frontBottom__titleText">
            <h3 class="c-color--white p-frontBottom__title"><?php the_title(); ?></h3>
            <span class="c-underbar--w100px p-frontBottom__underbar"></span>
            <article class="c-color--white p-frontBottom__text">
            <?php the_content(); ?>
            </article>
        </div>
        <?php endforeach; ?>
        <?php endif;
        wp_reset_postdata(); ?>
    </section>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>