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





  <section class="rss_topic_area">
    <ul>
      <li>
        <a href="#" target="_blank">
          <div class="topic_box">
            <div class="img_box"><img src="img/test.jpg" width="100%"></div>
            <p>悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」他悲報】上戸彩、他</p>
          </div>
        </a>
        <div class="triangle"></div>
      </li>
      <li>
        <a href="#" target="_blank">
          <div class="topic_box">
            <div class="img_box"><img src="img/test.jpg" width="100%"></div>
            <p>悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」他悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」他悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」他</p>
          </div>
        </a>
        <div class="triangle"></div>
      </li>
      <li>
        <a href="#" target="_blank">
          <div class="topic_box">
            <div class="img_box"><img src="img/test.jpg" width="100%"></div>
            <p>悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」他悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」他悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」他</p>
          </div>
        </a>
        <div class="triangle"></div>
      </li>
      <li>
        <a href="#" target="_blank">
          <div class="topic_box">
            <div class="img_box"><img src="img/01.jpg" width="100%"></div>
            <p>悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」他悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」他悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」他</p>
          </div>
        </a>
        <div class="triangle"></div>
      </li>
      <li>
        <a href="#" target="_blank">
          <div class="topic_box">
            <div class="img_box"><img src="img/test.jpg" width="100%"></div>
            <p>悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」他悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」他悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」他</p>
          </div>
        </a>
        <div class="triangle"></div>
      </li>
      <li>
        <a href="#" target="_blank">
          <div class="topic_box">
            <div class="img_box"><img src="img/test.jpg" width="100%"></div>
            <p>悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」</p>
          </div>
        </a>
        <div class="triangle"></div>
      </li>
      <li>
        <a href="#" target="_blank">
          <div class="topic_box">
            <div class="img_box"><img src="img/test.jpg" width="100%"></div>
            <p>悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」</p>
          </div>
        </a>
        <div class="triangle"></div>
      </li>
      <li>
        <a href="#" target="_blank">
          <div class="topic_box">
            <div class="img_box"><img src="img/test.jpg" width="100%"></div>
            <p>悲報】上戸彩、結婚出産経て３６歳「もう難しいかな…」</p>
          </div>
        </a>
        <div class="triangle"></div>
      </li>
    </ul>
  </section>
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
            <div class="t_h"><span class="thread_box">1: <span style="color: green;">風吹けば名無し</span> <span style="color: gray;"> 2022/01/27(木) 11:34:58.74 ID:60ZEgBBS0</span></span>
            </div>
            <div class="t_b"><span class="thread_txet"> ひどいよ </span></div><br />
            <div class="t_h"><span class="thread_box">2: <span style="color: green;">風吹けば名無し</span> <span style="color: gray;"> 2022/01/27(木) 11:35:23.71 ID:PUWqkZ460</span></span>
            </div>
            <div class="t_b"><span class="thread_txet"> あんだって？ </span></div><br />
            <div class="t_h"><span class="thread_box">3: <span style="color: green;">風吹けば名無し</span> <span style="color: gray;"> 2022/01/27(木) 11:35:39.53 ID:UrWNO/3ZM</span></span>
            </div>
            <div class="t_b"><span class="thread_txet"> 未だに２年前と同じように怖がってたらそれはそれで馬鹿やろ </span></div><br />
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
  
