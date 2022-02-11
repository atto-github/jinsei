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
<script src="https://kit.fontawesome.com/e0ee5f11ff.js" crossorigin="anonymous"></script>
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
</head>
<body>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PPPWNDM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
	
<!--SP_HEADER-->
<div id="navArea">
  <nav class="sp_nav">
    <div class="inner">
      <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">このサイトについて</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">RSS</a></li>
        <li><a href="#">お問い合わせ</a></li>
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
            <li><a href="#">HOME</a></li>
            <li><a href="#">このサイトについて</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">RSS</a></li>
            <li><a href="#">お問い合わせ</a></li>
          </ul>
        </nav>
        <div class="search_box">
          <form method="get" action="#" class="search_container"> <input type="text" size="25" placeholder="　キーワード検索"> <input type="submit" value="&#xf002"> </form>
        </div>
      </div>
    </header>
    <section class="main_visual_area">
      <div class="main_title">
        <p><span>J( ‘ｰ`)し</span><span>＼(^o^)／</span></p>
        <h1>人生ちゃんねる</h1>
        <h2>人々の生き様を見よ!!</h2>
      </div>
    </section>
    <nav class="nav_box_link">
      <div class="header_box2">
        <ul>
          <li><a href="#" target="_blank">だめぽアンテナ</a></li>
          <li><a href="#" target="_blank">にゅーぷる</a></li>
          <li><a href="#" target="_blank">2chまとめアンテナ</a></li>
          <li><a href="#" target="_blank">ブロニュー</a></li>
          <li><a href="#" target="_blank">オワタあんてな </a></li>
        </ul>
    </nav>
    </div>
  </section>
  <!--//HEADER/MAIN VISUAL-->