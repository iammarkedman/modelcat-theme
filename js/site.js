/**
 * Modelcat
 */
(function($) {

  /**
   * document.ready
   */
  $(document).ready( function() {
    // init favorites
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

    var $singleFav = $(".single-favorite");
    if( $singleFav.length > 0 ) {
      $singleFav.bindSingleFavorite();
    }

    // init searchbar
    $("#searchForm").modelcatInitSearchForm({ results: "#results" });
  });

})(jQuery);

