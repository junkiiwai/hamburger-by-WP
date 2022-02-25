       <form action="<?php echo home_url('/'); ?>" method="get" class="p-search">
           <p class="p-search__scope"><input type="text" name="s" value="<?php the_search_query(); ?>" class="c-scope"></p>
           <p class="p-search__btn"><input type="submit" class="c-color--gray c-btn--search" value="検索"></p>
        </form>