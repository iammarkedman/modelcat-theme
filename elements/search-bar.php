<form id="searchForm">

<div class="row">
  <div class="col-sm">
    <ul class="searchform">
      <li class="t">Gender:</li>

      <?php
        if( function_exists('modelcat_getsearchparams')) {
          $p = modelcat_getsearchparams();
        } else {
          $p = array( "gender" => "all" );
        }
      ?>

      <li><input type="checkbox" class="searchGender" id="g_all" data-query="gender" data-val="all" <?php if($p["gender"] === "all") { echo 'checked="true"'; } ?>/> <label for="g_all">All</label></li>
      <li><input type="checkbox" class="searchGender" id="g_female" data-query="gender" data-val="female" <?php if($p["gender"] === "female") { echo 'checked="true"'; } ?>/> <label for="g_female">Female</label></li>
      <li><input type="checkbox" class="searchGender" id="g_male" data-query="gender" data-val="male" <?php if($p["gender"] === "male") { echo 'checked="true"'; } ?>/> <label for="g_male">Male</label></li>
    </ul>
  </div>
</div> <!-- .row -->

</form>

