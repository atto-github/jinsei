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

function custom_comment_form($args) {
	$args['comment_notes_before'] = '';
	$args['comment_notes_after'] = '';
	$args['label_submit'] = '送信';
	return $args;
}
add_filter('comment_form_defaults', 'custom_comment_form');



?>