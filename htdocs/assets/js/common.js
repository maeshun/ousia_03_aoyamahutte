
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





(function(){
  $(function(){
    scrollManager.init();
  });

  const scrollManager = {
    init: function() {
      // スクロール量の監視
      window.global = {};
      window.global.scrollAmount = $(window).scrollTop();
      $(window).scroll(function(){
        window.global.scrollAmount = $(this).scrollTop();
        // console.log(window.global.scrollAmount);
      })
    }
  }

})();


class LazyloadForWpRest {
  constructor(endpoint, $archiveWrap, $loader, showNum, option1Name, option1Value,  callback) {
    this.endpoint     = endpoint;
    this.$archiveWrap = $archiveWrap;
    this.$loader = $loader;
    this.loaderPos = 0;
    this.showNum = showNum;
    this.option1Name  = option1Name;
    this.option1Value = option1Value;
    this.windowHeight = $(window).height();
    this.callback = callback;
  }
  loadNext() {
    if (this.$loader.length == 0) return;

    this.loaderPos = this.$loader.offset().top;
    // // エンドポイントの初期化
    this.endpoint = this.createEndpointUrl();

    $(window).scroll(()=>{
      if ((this.loaderPos - this.windowHeight) < window.global.scrollAmount) {
        if (this.$loader == null ||
            this.$loader.hasClass("is-loading")) return;
        this.$loader.addClass("is-loading");
        this.getNext();
      }
    });
  }
  getNext() {
    const me = this;
    $.ajax({
      url: this.endpoint + "&page=" + me.$loader.data("next_page") ,
      type: 'GET',
      dataType: 'json',
      timeout: 5000,
    })
    .done(function(data) {
      if (data.length === 0) {
        me.$loader.remove();
        return;
      }
      // 次ページ有無チェック
      me.checkNextPage();

      // 追加dom作成
      me.$archiveWrap.append(me.callback(data));

      // ローディング関連の再設定
      me.loaderPos = me.$loader.offset().top;
    })
    .fail(function() {
      me.$loader.removeClass("is-loading");
    })
  }
  createEndpointUrl() {
    if (this.option1Name != null) {
      this.endpoint += "&" + this.option1Name + "=" + this.option1Value
    }
    return this.endpoint + "&per_page=" + this.showNum;
  }
  checkNextPage() {
    const me = this;
    $.ajax({
      url: me.endpoint + "&page=" + (me.$loader.data("next_page") + 1),
      type: 'GET',
      dataType: 'json',
      timeout: 5000,
    })
    .done(function(data) {
      let nextPageNum = me.$loader.data("next_page") + 1;
      me.$loader.data("next_page", nextPageNum);
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
      if (jqXHR.status == 400) {
        me.$loader.remove();
        me.$loader = null;
      }
    })
    .always(function() {
      if (me.$loader != null) {
        me.$loader.removeClass("is-loading");
      }
    });
  }
}