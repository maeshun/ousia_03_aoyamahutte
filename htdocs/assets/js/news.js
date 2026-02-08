(function(){
  $(function(){
    init();
  });

  function init() {
    const news = new LazyloadForWpRest(
      $(".loading").data("url"),
      $(".main_box"),
      $(".loading"),
      $(".loading").data("show_num"),
      $(".loading").data("year") ? "before" : "",
      $(".loading").data("year") ? $(".loading").data("year") + "-12-31T23:59:59" : "",
      appendLoadedArchive
    );
    news.loadNext();
  }


  const appendLoadedArchive = function(data) {
    let addHtml = "";

    data.forEach(function(data) {
      const thumbnailUrl = data._embedded["wp:featuredmedia"][0]["media_details"]["sizes"] != null && data._embedded["wp:featuredmedia"][0]["media_details"]["sizes"]["large"] != null ? data._embedded["wp:featuredmedia"][0]["media_details"]["sizes"]["large"].source_url : data._embedded["wp:featuredmedia"][0].source_url
      const title = data.title.rendered;
      const link = data.link;
      const date = (data.date).slice(0, 10).replaceAll("-", ".");

      $appendHtml = $(".template_for_loadnext").clone();
      $appendHtml.find("a").attr("href", link);
      $appendHtml.find(".ph img").attr("src", thumbnailUrl);
      $appendHtml.find(".txt").text(title);
      $appendHtml.find(".date").text(date);

      addHtml += $appendHtml.html();
    });
    return addHtml;
  }

})()