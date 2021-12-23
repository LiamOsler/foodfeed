<div class = "row">

<?php
    include "../db/db.php";

    $query =    "SELECT * FROM `restaurants`
                 ORDER BY `r_rating`
                 LIMIT 0, 4";

    $results = $dbconn->query($query);

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
            <div class = "col-sm-6 col-md-3 col-lg-3 col-xl-3 py-20 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/hotsauce.png" alt="Card image cap">
                    <div class="card-body card-search-results">
                    <h5 class="card-title"><?php echo $r_name;?></h5>
                    <p class="card-text"><?php echo $r_category;?></p>
                    </div>  
                    <div class="card-footer mt-auto">
                      <a id = "#test" type="button" class="btn btn-success" onclick = "viewRestaurant(<?php echo $r_id?>, '' )">View Menu</a>
                    </div>
                </div>
            </div>        
        
        <?php
        }
    }
        ?>
</div>