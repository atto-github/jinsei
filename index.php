<?php get_header(); ?>



<div class="splide">
    <div class="splide__track">
      <ul class="splide__list">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
        <li class="splide__slide">
          <a href="<?php the_permalink() ?>">
            <div class="topic_box">
              <div class="img_box"><?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?></div>
              <p><?php the_title(); ?></p>
            </div>
          </a>    
        </li>
<?php endwhile; ?>
<?php endif; ?>     

      </ul>
    </div>
  </div>




<!--カスタム投稿-->
<section class="rss_topic_area">
<ul>
<?php $args = array(
'numberposts' => 8, //表示したい記事の数
'post_type' => 'matome' //カスタム投稿で作成した投稿タイプ
);
$customPosts = get_posts($args);
if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
?>
<li>
<a href="<?php the_permalink(); ?>">
          <div class="topic_box">
            <div class="img_box"><?php the_post_thumbnail(); ?></div>
            <p><?php the_title();?></p>
            <p><?php the_excerpt(); ?></p>
          </div>
        <div class="triangle"></div>
</a>
</li>
<?php endforeach; ?>
<?php else : //記事が無い場合 ?>
<p>カスタム投稿記事がありません。</p>
<?php endif;
wp_reset_postdata(); //クエリのリセット ?>
</ul>
</section>
<!--//カスタム投稿-->




  <section class="contents">
    <div class="flexbox">
      <article class="main_area">
        <section class="rss_area">
          <div class="fukidashi_midashi">
            <p>注目の記事</p>
          </div>
          <div class="rss_box">
            <!--RSS_AREA-->
            <script type="text/javascript">
              <!--
                  var blogroll_channel_id = 325113;
              // -->
            </script>
            <script type="text/javascript" charset="utf-8" src="https://blogroll.livedoor.net/js/blogroll.js"></script>
            <link rel="stylesheet" type="text/css" href="https://blogroll.livedoor.net/css/default2.css" />
            <!--//RSS_AREA-->
          </div>
        </section>



<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
        <!--//記事-->
        <div class="main_box">
          <p class="category_title"><?php the_category(); ?></p>
          <p class="data"><span><?php echo get_the_date(); ?></span></p> <br clear="all">
          <h3><?php the_title(); ?></h3>
          <!--suretate-->
          <section class="first_thread">
            <div class="thumbnail_box"><?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?></div>
          </section>
          <!--//suretate-->
          <section class="thread_box">


<?php the_content(); ?>


            <div class="fade"></div> <a href="<?php the_permalink() ?>" class="lesson_btn move_ac">省略されました。全てを読むにはここを押してください</a> </section>
            <div class="tag_box clearfix">
              <dl> <dt>タグ ：</dt>
                <dd><?php the_tags('', ' '); ?></dd>
              </dl>
              <p><a>コメント( 194 )<?php echo $commentcount; ?> </a></p>
            </div>
        </div>
        <!--//記事-->
<?php endwhile; ?>
<?php endif; ?>    



      </article>
      <?php get_sidebar(); ?>

    </div>
  </section>




 
  <?php get_footer(); ?>  
  
