
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
    height: '20rem', // スライダーの高さ @type: { number|string }, default: ０
    gap: '1em', // スライド間のギャップサイズ @type: { number|string }, default: ０
    perPage: 2, // 1ページに表示するスライドの数 @type: { number }, default: ０
    perMove: 1, // スライダーが移動するスライドの数 @type: { number }, default: ０
  }).mount();
});