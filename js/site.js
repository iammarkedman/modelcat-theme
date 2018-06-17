/**
 * Modelcat
 */
(function($) {

  /**
   * document.ready
   */
  $(document).ready( function() {
    // init favorites
    $(document).on("selectionChanged", function() {
      $("#modelcatSelectedFloater").updateModelSelection();
    });
    $("#modelcatSelectedFloater a.clear-selected").click( function(e) {
      e.preventDefault();
      $.clearSelectedModels();
    });

    if( localStorage.getItem("fav") == null ) {
      localStorage.setItem("fav", JSON.stringify([]));
    } else {
      // expired?
      var expt = localStorage.getItem("favtch") || 0;
      var t = Date.now();
      if( t - expt > 1000*60*60*8 ) {
        localStorage.clear();
        localStorage.setItem("fav", JSON.stringify([]));
      }
    }

    $.modelcatInitFavorites($("#results"));

    var $singleFav = $(".single-favorite");
    if( $singleFav.length > 0 ) {
      $singleFav.bindSingleFavorite();
    }

    // init searchbar
    $("#searchForm").modelcatInitSearchForm({ results: "#results" });

    // single model page img switching
    $(".polaroid-thumb").each( function() {
      $(this).click( function() {
        var imgurl = $(this).data("imgurl");
        $(".polaroid").find("img").attr("src", imgurl);
      });
    });
  });

})(jQuery);

