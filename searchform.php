<form method="get" class="searchform search_container" action="<?php echo esc_url( home_url('/') ); ?>">
    <input type="text" size="25" placeholder="キーワード検索" name="s" class="searchfield" value="<?php if(is_search()){ echo get_search_query();} ?>" />
    <input type="submit" value="&#xf002" alt="検索" title="検索">
</form>