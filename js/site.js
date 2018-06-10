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

    // results in localstorage?
    var results = localStorage.getItem("res");
    if( results ) {
      $("#results").renderSearchResults( JSON.parse( results ));
    }
  });

})(jQuery);

