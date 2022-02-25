<section class="c-color--gray c-bgcolor--gray p-sidebar">
    <span class="c-xCross p-menutab--close"></span>
    <nav class="p-menu">
        <h2 class="c-color--lightgray c-font--weight--bold c-font--fam--robot p-menu__title">Menu</h2>
        <?php
        $args=array(
            'menu'=>'Menu',  //管理画面で作成したメニュー名
            'menu_class'=>'p-menu__group', //メニューを構成するulタグのclass名
            'container'=>false, //<ul>を囲う<div>タグを削除
        );
        wp_nav_menu($args);
        ?>
       
        <!-- <ul class="p-menu__group"><a class="c-linkDecoNone c-color--gray c-font--weight--bold p-menu__genre" href="<?php echo get_tag_link(8); ?>">バーガー</a>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(11); ?>">ハンバーガー</a></li>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(12); ?>">チーズバーガー</a></li>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(13); ?>">テリヤキバーガー</a></li>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(14); ?>">アボカドバーガー</a></li>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(15); ?>">フィッシュバーガー</a></li>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(16); ?>">ベーコンバーガー</a></li>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(17); ?>">チキンバーガー</a></li>
        </ul>
        <ul class="p-menu__group"><a class="c-linkDecoNone c-color--gray c-font--weight--bold p-menu__genre" href="<?php echo get_tag_link(9); ?>">サイド</a>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(8); ?>">ポテト</a></li>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(8); ?>">サラダ</a></li>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(8); ?>">ナゲット</a></li>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(8); ?>">コーン</a></li>
        </ul>
        <ul class="p-menu__group"><a class="c-linkDecoNone c-color--gray c-font--weight--bold p-menu__genre" href="<?php echo get_tag_link(10); ?>">ドリンク</a>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(8); ?>">コーラ</a></li>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(8); ?>">ファンタ</a></li>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(8); ?>">オレンジ</a></li>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(8); ?>">アップル</a></li>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(8); ?>">紅茶（Ice/Hot）</a></li>
            <li class="c-font--weight--normal c-listDotNone p-menu__list"><a class="c-linkDecoNone c-color--gray" href="<?php echo get_tag_link(8); ?>">コーヒー（Ice/Hot）</a></li>
        </ul> -->
    </nav>
</section>
<div class="c-bgcolor--tpBlack p-menutab--bg"></div>