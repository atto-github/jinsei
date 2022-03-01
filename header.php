<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<link rel="apple-touch-icon"  href="apple-touch-icon-precomposed.png" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="description" content="人生ちゃんねる　人々の生き様をみよ">
<meta name="keywords" content="人生,生き様,幸福,不幸,波乱万丈">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/e3a73247ed.js" crossorigin="anonymous"></script>
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>	
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
<?php wp_enqueue_script('example',get_bloginfo('template_url').'/js/import.js', array('jquery')); ?>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon_16.ico">
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PPPWNDM');</script>
<!-- End Google Tag Manager -->	

<?php wp_head(); ?>  

</head>
<body <?php body_class(); ?>>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PPPWNDM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
	
<!--SP_HEADER-->
<div id="navArea">
  <nav class="sp_nav">
    <div class="inner">
      <ul>
        <li><a href="<?php echo home_url() ?>">HOME</a></li>
        <li><a href="https://www.beautiful-life-channel.com/about/">このサイトについて</a></li>
        <!--<li><a href="#">Twitter</a></li>
        <li><a href="#">RSS</a></li>-->
        <li><a href="https://www.beautiful-life-channel.com/contact/">お問い合わせ</a></li>
      </ul>
    </div>
  </nav>
  <div class="toggle_area">
    <div class="toggle_btn"> <span></span> <span></span> <span></span> </div>
  </div>
  <div id="mask"></div>
</div>
<!--//SP_HEADER-->
<article id="main">
  <!--HEADER/MAIN VISUAL-->
  <section class="header_area">
    <header class="clearfix">
      <div class="header_box">
        <nav class="nav_box">
          <ul>
            <li><a href="<?php echo home_url() ?>">HOME</a></li>
            <li><a href="https://www.beautiful-life-channel.com/about/">このサイトについて</a></li>
            <!--<li><a href="#">Twitter</a></li>
            <li><a href="#">RSS</a></li>-->
            <li><a href="https://www.beautiful-life-channel.com/contact/">お問い合わせ</a></li>
          </ul>
        </nav>
        <div class="search_box">
        <?php get_search_form(); ?>
        </div>
      </div>
    </header>
    <section class="main_visual_area">
      <div class="main_title">
      <a href="<?php echo home_url() ?>">
        <p><span>J( ‘ｰ`)し</span><span>＼(^o^)／</span></p>
        <h1>人生ちゃんねる</h1>
        <h2>人々の生き様を見よ!!</h2>
      </a>  
      </div>
    </section>
    <nav class="nav_box_link">
      <div class="header_box2">
        <ul>
          <li><a href="http://tone.antenam.jp/" target="_blank">音楽総合アンテナ</a></li>
          <li><a href="http://nullpoantenna.com/" target="_blank">ヌルポあんてな</a></li>
          <li><a href="https://2ch-c.net/" target="_blank">しぃアンテナ(*ﾟーﾟ)</a></li>
          <li><a href="http://blog-news.doorblog.jp/" target="_blank">ぶろにゅー</a></li>
          <li><a href="http://newmofu.doorblog.jp/" target="_blank">にゅーもふ </a></li>
        </ul>
    </nav>
    </div>
  </section>
  <!--//HEADER/MAIN VISUAL-->