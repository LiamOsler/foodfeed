
<?php
  include "../../db/db.php";
?>

<div class="container-fluid">
<br>
<p>Restaurants:</p>
<div class="row">
  <?php
    // If the search query string is set
    if (isset($_GET["search-query"])) {
      $query = $_GET["search-query"];

      $searchSQL = "SELECT * FROM `restaurants`
                    WHERE r_name LIKE '%{$query}%'";
      $results = $dbconn->query($searchSQL);
      
      if (mysqli_num_rows($results) == 0) {
        echo "<p>This search returned no results.</p>";
      }
      else { 
        while ($current= $results->fetch_assoc()){
          $r_id = $current["r_id"];
          $r_name = $current["r_name"];
          $r_phone = $current["r_phone"];
          $r_category = $current["r_category"];
          $r_street = $current["r_street"];
          $r_city = $current["r_city"];
          $r_province = $current["r_province"];
          $r_postal = $current["r_postal"];
          $r_lat = $current["r_lat"];
          $r_long = $current["r_long"];
          $r_website = $current["r_website"];
          $r_hour_open = $current["r_hour_open"];
          $r_hour_close = $current["r_hour_close"];
          $r_rating = $current["r_rating"];
          ?>
          <div class = "col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-2">
            <?php echo $r_id;?>
              <img class="card-img-top" src="images/hotsauce.png" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title"><?php echo $r_name;?></h5>
              <p class="card-text"><?php echo $r_category;?></p>
              </div>
          </div>
          <?php
        }
      }
    }
  ?>
  </div>
</div>
