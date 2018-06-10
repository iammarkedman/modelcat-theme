/**
 * Modelcat
 */
(function($) {

  /**
   * document.ready
   */
  $(document).ready( function() {
    $("button.modelcat-runsearch").click( function() {
      $("#results").modelcatSearch({ form: "#searchForm" });
    });

    // init favorites
    if( localStorage.getItem("fav") == null ) {
      localStorage.setItem("fav", JSON.stringify([]));
    }

    var $singleFav = $(".single-favorite");
    if( $singleFav.length > 0 ) {
      $singleFav.bindSingleFavorite();
    }

    // results in localstorage?
    var results = localStorage.getItem("res");
    if( results ) {
      $("#results").renderSearchResults( JSON.parse( results ));
    }
  });

})(jQuery);

