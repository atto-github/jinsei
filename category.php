<?php get_header(); ?>



  <section class="contents">
    <div class="flexbox">
      <article class="main_area">



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
              <p>コメント&nbsp;<a href="<?php comments_link(); ?>"><?php comments_number('(0)','(1)','(%)'); ?></a></p>
            </div>
        </div>
        <!--//記事-->
<?php endwhile; ?>
<?php endif; ?>    

<?php get_responsive_pagination(5,3);?>

      </article>
      <?php get_sidebar(); ?>

    </div>
  </section>




 
  <?php get_footer(); ?>  
  
