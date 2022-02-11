
$(function(){
  $('.content:not(.content:first-of-type)').css('display','none');//一番上の要素以外を非表示
  $('.more').nextAll('.more').css('display','none');//ボタンを非表示
  $('.more').on('click', function() {
    $(this).css('display','none');//押したボタンを非表示
    $(this).next('.content').slideDown('fast');
    $(this).nextAll('.more:first').css('display','block'); //次のボタンを表示
  });
});