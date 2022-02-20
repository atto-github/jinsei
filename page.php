<?php get_header(); ?>



  <section class="contents">
    <div class="flexbox">
      <article class="main_area">



			<?php 
				if (have_posts()) : // WordPress ループ
					while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
					        <div class="main_box">
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<section class="thread_box">
						<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
							</section>
						</div>
						</div>



					<?php 
					endwhile; // 繰り返し処理終了		
				else : // ここから記事が見つからなかった場合の処理 ?>
						<div class="post">
							<h2>記事はありません</h2>
							<p>お探しの記事は見つかりませんでした。</p>
						</div>
				<?php
				endif;
				?>


      </article>
      <?php get_sidebar(); ?>

    </div>
  </section>




 
  <?php get_footer(); ?>  
  
