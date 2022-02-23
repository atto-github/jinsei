<?php
//画像アイキャッチ
add_theme_support( 'post-thumbnails' ); 


// カスタム投稿タイプの追加
function add_custom_post_type(){
    // 制作実績
    register_post_type(
        'matome', // 1.投稿タイプ名 
        array(   // 2.オプション 
            'label' => 'まとめ投稿', // 投稿タイプの名前
            'public'        => true, // 利用する場合はtrueにする 
            'has_archive'   => true, // この投稿タイプのアーカイブを有効にする
            'menu_position' => 5, // この投稿タイプが表示されるメニューの位置
            'menu_icon'     => 'dashicons-edit', // メニューで使用するアイコン
            'supports' => array( // サポートする機能
                'title',
                'thumbnail',
            )
        )
    );
}
add_action('init', 'add_custom_post_type');


// コメントの「メールアドレス」と「サイト」を消す
function my_comment_form_remove($arg) {
    $arg['email'] = '';
    $arg['url'] = '';
    return $arg;
     }
 add_filter('comment_form_default_fields', 'my_comment_form_remove');
// コメントの順番を入れ替える
 function wp34731_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
  
    return $fields;
  }
  add_filter( 'comment_form_fields', 'wp34731_move_comment_field_to_bottom' );


function custom_comment_form($args) {
	$args['comment_notes_before'] = '';
	$args['comment_notes_after'] = '';
	$args['label_submit'] = '送信';
	return $args;
}
add_filter('comment_form_defaults', 'custom_comment_form');



/* コメント投稿者名を変更する */
function set_default_comment_author($name) {
    if ( $name['comment_author'] == '' ) { // cookieが空の場合
        $name['comment_author'] = '名無しさん';
    }
    return $name;
};
add_filter('wp_get_current_commenter', 'set_default_comment_author');



//ページネーション設定
function get_responsive_pagination($_pagination_range_pc,$_pagination_range_sp){

    global $wp_query;

    $total_posts_num = $wp_query->found_posts;

    //記事数が0の場合終了
    if ($total_posts_num == 0) return;

    //1ページに表示する範囲
    $page_range = get_query_var('posts_per_page');

    //合計ページ数
    $total_page_num = ceil($total_posts_num/$page_range);

    //現在のページを取得
    $index_page_num = get_query_var('paged') ? get_query_var('paged') :1 ;

    //開始件数を取得
    $from = $page_range * ($index_page_num - 1 ) + 1;

    //終了件数を取得
    $to = $page_range * $index_page_num;

    //開始件数から終了件数
    $from_to = '';

    //合計該当記事数が終了件数より小さい場合、終了件数に設定
    if($total_posts_num <= $to)$to = $total_posts_num;

    if($total_posts_num == 1 ){
        $from_to = $from;
    }else{
        $from_to = $from.'〜'.$to;
    }

    if($from == $to)$from_to = $from;

    /* PC */
    $pagination_range = $_pagination_range_pc;
    //ページャー範囲が合計ページ数より多い場合
    if ($pagination_range >= $total_page_num) $pagination_range = $total_page_num;
    $pagination_offset = floor($pagination_range / 2);
    $pagination_from_limit = $total_page_num - $pagination_range + 1;
    $offset_from = $index_page_num - $pagination_offset;
    if ($offset_from <= 1) $offset_from = 1;
    if ($offset_from >= $pagination_from_limit) $offset_from = $pagination_from_limit;
    $offset_to = $offset_from + $pagination_range;

    /* SP */
    $pagination_range_sp = $_pagination_range_sp;
    //ページャー範囲が合計ページ数より多い場合
    if ($pagination_range_sp >= $total_page_num) $pagination_range_sp = $total_page_num;
    $pagination_offset_sp = floor($pagination_range_sp / 2);
    $pagination_from_limit_sp = $total_page_num - $pagination_range_sp + 1;
    $offset_from_sp = $index_page_num - $pagination_offset_sp;
    if ($offset_from_sp <= 1) $offset_from_sp = 1;
    if ($offset_from_sp >= $pagination_from_limit_sp) $offset_from_sp = $pagination_from_limit_sp;
    $offset_to_sp = $offset_from_sp + $pagination_range_sp;

    $add_class = '';
    $source = '';
    if($total_page_num > $_pagination_range_sp + 2 ) $add_class .= ' pagination-range-over-sp';
    if($total_page_num > $_pagination_range_pc + 2 ) $add_class .= ' pagination-range-over-pc';
    $source .= '<nav class="cms-pagination'.$add_class.'">'."\n";
    $source .= '<ul class="clearfix">'."\n";

    //prev first
    if($index_page_num != 1 ) {
        $source .= '<li class="pagination-no-num first"><a href="'.get_pagenum_link(1).'"><i class="fas fa-angle-double-left"></i></a></li>'."\n";
        $source .= '<li class="pagination-no-num prev"><a href="'.get_pagenum_link($index_page_num - 1).'"><i class="fas fa-angle-left"></i></a></li>'."\n";
    }else{
        $source .= '<li class="pagination-no-num first"><span><i class="fas fa-angle-double-left"></i></span></li>'."\n";
        $source .= '<li class="pagination-no-num prev"><span><i class="fas fa-angle-left"></i></span></li>'."\n";
    }

    for ($i=$offset_from; $i < $offset_to; $i++){
        if($index_page_num == $i){
            if($i>=$offset_from_sp && $i<$offset_to_sp){
                $source .= '<li class="pagination-index pagination-sp"><span>'.$i.'</span></li>'."\n";
            }else{
                $source .= '<li class="pagination-index"><span>'.$i.'</span></li>'."\n";
            }
        }else{
            if($i>=$offset_from_sp && $i<$offset_to_sp){
                $source .= '<li class="pagination-sp"><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>'."\n";
            }else{
                $source .= '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>'."\n";
            }
        }
    }

    //next last
    if($index_page_num != $total_page_num) {
        $source .= '<li class="pagination-no-num next"><a href="'.get_pagenum_link($index_page_num + 1).'"><i class="fas fa-angle-right"></i></a></li>'."\n";
        $source .= '<li class="pagination-no-num last"><a href="'.get_pagenum_link($total_page_num).'"><i class="fas fa-angle-double-right"></i></a></li>'."\n";
    }else{
        $source .= '<li class="pagination-no-num next"><span><i class="fas fa-angle-right"></i></span></li>'."\n";
        $source .= '<li class="pagination-no-num last"><span><i class="fas fa-angle-double-right"></i></span></li>'."\n";
    }

    $source .= '</ul>'."\n";
    $source .= '</nav>'."\n";
    $source .= '<div class="pagination-txt">'.$from_to.'<span> / '.$total_posts_num.'件</div>'."\n";

    echo $source;

}



//固定ページ検索除外
function my_posy_search($search) {
    if(is_search()) {
      $search .= " AND post_type = 'post'";
    }
    return $search;
  }
  add_filter('posts_search', 'my_posy_search');



/*【出力カスタマイズ】検索結果をカスタマイズ */
function my_pre_get_posts($query) {
    if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
      $query->set( 'orderby', 'date' ); // 日付順
    }
  }
  add_action( 'pre_get_posts','my_pre_get_posts' );

// 検索条件が未入力時にsearch.phpにリダイレクトする
function set_redirect_template(){
    if (isset($_GET['s']) && empty($_GET['s'])) {
        include(TEMPLATEPATH . '/search.php');
        exit;
    }
}
add_action('template_redirect', 'set_redirect_template');



?>