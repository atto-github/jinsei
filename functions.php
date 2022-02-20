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


?>