/**
 * Modelcat
 */
(function($) {

  /**
   * document.ready
   */
  $(document).ready( function() {
    $("button.modelcat-runsearch").click( function() {
      $("#results").modelcatSearch();
    });
  });

})(jQuery);

