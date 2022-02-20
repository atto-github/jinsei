<!-- 【１】各記事の投稿機能オンオフ確認 -->
<?php if( comments_open() ){ ?>

<div id="comments">

<!-- 【２】投稿されたコメントの有無確認 -->
<?php if( have_comments() ): ?>

<div  class="commets_box"> 
<ul class="commets-list">
  <!-- 【３】コメントリストの表示 -->
  <?php wp_list_comments();?>
</ul>
</div>

<?php endif; ?>

<!-- 【４】コメント記入のフォーム -->
<?php

  // コメントフォームの設定
  $args = array(
    'title_reply' => 'コメントを書く',
    'comment_notes_before' => '',
    'comment_notes_after' => '',
    'label_submit' => 'コメントする'
  );

  // コメントフォームの呼び出し
  comment_form( $args );
?>

</div>

<?php } ?>