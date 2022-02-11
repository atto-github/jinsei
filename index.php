<?php get_header(); ?>


<?php if ( is_paged() ) : ?>
    2ページ目以降の表示
<?php else : ?>
<?php get_template_part('main_visual'); ?>
<?php endif; ?>


	
<!--**********************container**********************-->
<section class="container_area clearfix">

<!--***********コンテンツエリア***********-->	
<div class="contents_area">
<div class="on_scroll"><a><span></span><span></span><span></span><span></span></a></div>	
<!--カテゴリエリア-->
<div class="scroll_menu">

<!--
<?php
if ( function_exists( 'feas_search_form' ) ) {
	feas_search_form(1);
}
?>
-->
	
<?php get_template_part('category_new1'); ?>
</div>
<!--/カテゴリエリア-->	
	
<!--ソートエリア-->
<!--	
<div class="sort_menu clearfix">	
<ul>
  <li class="active"><a href="#">最新の教訓</a></li>
  <li><a href="#">共感が多い</a></li>
  <li><a href="#">アクセスが多い</a></li>
</ul>
</div>
-->
<!--/ソートエリア-->	
<br>
	

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	
	
	
<!--投稿エリア-->
<div class="post_area_top clearfix">
	
<div class="post_box">

<h3 class="mein_midashi"><?php echo get_the_title(); ?></h3>

<!--<h4 class="sub_midashi"><?php the_field("omoi_title1", $post->ID); ?></h4>-->
<p class="txet_box"><?php the_field("omoi_txt1", $post->ID); ?></p>
	
	
<div class="personal_box">
<p>提唱者：<span class="name"><?php the_field("omoi_nickname", $post->ID); ?></span>様 
<?php if(post_custom('gender')): ?>【<span class="gender"><?php the_field("gender", $post->ID); ?></span>】<?php endif; ?>
<?php if(post_custom('katagaki')): ?>【<span class="attribute"><?php the_field("katagaki", $post->ID); ?></span>】<?php endif; ?>
<?php if(post_custom('age')): ?>【<span class="attribute"><?php the_field("age", $post->ID); ?></span>】<?php endif; ?>
</p>
</div>	
	
<div class="category_midashi2 move_ac clearfix"><?php the_category(); ?></div>	
	
<div class="fade"></div>
<a href="<?php the_permalink(); ?>" class="lesson_btn move_ac">格言を得る</a>
</div>		
	
<div class="post_info clearfix">
	
<span class="date"><?php the_time('Y.m.d') ?> <?php
$days = 3;
$today = date_i18n('U');
$entry = get_the_modified_date('U');
$news = date('U',($today - $entry)) / 86400 ;
if( $days > $news ){ print '<span class="new">New!</span>'; }
?></span>
	
<!--
<span class="access"><?php echo wpb_get_post_views(get_the_ID()); ?></span>
<span class="empathy"><?php if(function_exists('wp_ulike')) wp_ulike('get'); ?> いい名言</span>
-->
<?php echo do_shortcode('[wp_ulike]'); ?>	
	
</div>
	
</div>
<!--/投稿エリア-->	
	

<!--記事エリア-->
<?php endwhile; ?>
<?php endif; ?>

	

<!--ページネーション-->
<?php get_responsive_pagination(5,3);?>
<!--
<div class="pager">
<span class='page-numbers current'>1</span>
<a class='page-numbers'>2</a>
<span class="page-numbers dots">&hellip;</span>
<a class='page-numbers'>30</a>
<a class="next page-numbers">次へ</a>
</div>
-->
<!--/ページネーション-->
	
<br>
	
<div class="write_box2">
<p class="midashi4">あなたの人生経験を<br>格言にして記して下さい。<br><span class="clrYellow ft13">※教訓・習慣・秘訣・心得など。</span></p>
<section class="post_area">	
<?php echo do_shortcode('[wpuf_form id = "5"]'); ?>
</section>	
</div>	
	
	
</div>	
<!--***********/コンテンツエリア***********-->	
	

<?php get_sidebar(); ?>	
	
</section>
<!--**********************/container**********************-->	





<!--**********************container**********************-->
<section class="container_area_single clearfix mgT0">

<!--***********コンテンツエリア***********-->	
<div class="contents_area_single">



<!--***********教訓を探すエリア***********-->	
<section class="search_area">
<div class="search_box2">	
<p class="midashi2">カテゴリから格言を探す</p>
	
	
<div class="search_Category mgB50">
	<?php if ( function_exists( 'feas_search_form' ) ) {feas_search_form(1);}?>
</div>	
	
	

	
<div class="search_main_box  clearfix">
<p class="midashi2">フリーワードから格言を探す</p>	
<!--<div class="txC mgTB10"><p class="midashi3">キーワードから探す</p></div>-->
<div class="search_keyword">
	<?php if ( function_exists( 'feas_search_form' ) ) {feas_search_form();}?>
</div>		
</div>	
	
</div>	
</section>
<!--***********/教訓を探すエリア***********-->		
	
<div class="twitter_box2">
<a class="twitter-timeline" href="https://twitter.com/jinsei__kakugen?ref_src=twsrc%5Etfw">Tweets by jinsei__kakugen</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 	
</div>
	
</div>	
<!--***********/コンテンツエリア***********-->	
	
	
</section>
<!--**********************/container**********************-->	



<?php get_footer(); ?>  
  
