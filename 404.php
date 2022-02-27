<?php get_header(); ?>

<main class="p-main--front">
    <div class="p-notFound">
        <h2 class="p-notFound__title">404 NOT FOUND<span>ERROR</span></h2>
        <div class="p-notFound__text">
            <p>お探しのページが見つかりませんでした。</p>
            <p>申し訳ございませんが、<a href="<?php echo home_url('/'); ?>">こちらのリンク</a>からトップページにお戻りください。</p>
        </div>
    </div>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>