<section class="side_area">
  
  <!--side_box-->
  <div class="side_box">
    <div class="fukidashi_midashi">
      <p>最新の記事</p>
    </div>
    <div class="latest_area">
      <ul>
        <?php
  $args = array(
    'posts_per_page' => 3 // 表示件数の指定
  );
  $posts = get_posts( $args );
  foreach ( $posts as $post ): // ループの開始
  setup_postdata( $post ); // 記事データの取得
?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <div class="img_box">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="latest_box">
                <h4>
                  <?php the_title(); ?>
                </h4>
                <p>
                  <?php echo get_the_date(); ?>
                </p>
              </div>
            </a>
          </li>
          <?php
  endforeach; // ループの終了
  wp_reset_postdata(); // 直前のクエリを復元する
?>
      </ul>
    </div>
  </div>
  <!--//side_box-->


  <!--side_box-->
  <div class="side_box">
    <div class="fukidashi_midashi">
      <p>カテゴリ</p>
    </div>
    <div class="category_area">
      <ul class="category-list clearfix">
        <?php
// パラメータを指定
$args = array(
	// カテゴリー内の記事数順で指定
    'orderby' => 'count',
    // 降順で指定
    'order' => 'DSC'
);
$categories = get_categories( $args );

foreach( $categories as $category ){
	echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a> </li> ';
}
?>
      </ul>
    </div>
  </div>
  <!--//side_box-->

</section>