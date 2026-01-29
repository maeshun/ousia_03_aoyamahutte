
$(window).on('load', function(){
  $('body').removeClass('fade');
});

$(function() {
  // ハッシュリンク(#)と別ウィンドウでページを開く場合はスルー
  $('a:not([href^="#"]):not([target])').on('click', function(e){
    e.preventDefault(); // ナビゲートをキャンセル
    url = $(this).attr('href'); // 遷移先のURLを取得
    if (url !== '') {
      $('body').addClass('fade');  // bodyに class="fadeout"を挿入
      setTimeout(function(){
        window.location = url;  // 0.8秒後に取得したURLに遷移
      }, 800);
      $('body').removeClass('fade');
    }
    return false;
  });
});

$(document).ready(function() {

    var $body = $('body');

    $('#drawer_box').on('click', function () {
        $body.toggleClass('open');
    });  

    $("#drawer_box").on("click tap", function() {
      toggleSidebar();
    });

    $(document).keyup(function(e) {
      if (e.keyCode === 27) {
        toggleSidebar();
      }
    });

});

