
//スマホメニュー
$(function() {
  var $body   = $('body');
  var $btn   = $('.toggle_btn');
  var $mask  = $('#mask');
  var open   = 'open'; // class
  // menu open close
  $btn.on( 'click', function() {
    if ( ! $body.hasClass( open ) ) {
      $body.addClass( open );
    } else {
      $body.removeClass( open );
    }
  });
  // mask close
  $mask.on('click', function() {
    $body.removeClass( open );
  });
});


$(function() {
  new Splide( '.splide', {
    type : 'loop',
    autoplay : true,
    height: 'auto', // スライダーの高さ @type: { number|string }, default: ０
    gap: '1em', // スライド間のギャップサイズ @type: { number|string }, default: ０
    perPage: 8, // 1ページに表示するスライドの数 @type: { number }, default: ０
    perMove: 1, // スライダーが移動するスライドの数 @type: { number }, default: ０
    breakpoints: {  // ブレークポイントの定義 @type: { boolean|Object }, default: false
      1800: {
        height: 'auto',
        perPage: 7,
      },
      1600: {
        height: 'auto',
        perPage: 6,
      },
      1400: {
        height: 'auto',
        perPage: 5,
      },
      1200: {
        height: 'auto',
        perPage: 4,
      },
      1000: {
        height: 'auto',
        perPage: 3,
      },
      768: {
        height: 'auto',
        perPage: 2,
      },
      480: {
        height: 'auto',
        perPage: 1,
      }

    }    
  }).mount();
});