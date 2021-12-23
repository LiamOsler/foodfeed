<?php
    include "../db/db.php";

    // If the search query string is set:
    if (isset($_GET["r_id"])) {
        $r_id = $_GET["r_id"];
        $searchString = $_GET["search-query"];
        $query = "  SELECT * FROM `restaurants`
                    WHERE r_id = $r_id";

        $results = $dbconn->query($query);

        if (mysqli_num_rows($results) == 0) {
            echo "<p>Restaurant Not Found</p>";
        }
        else{
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
            }
        }

?>

<div class = "coordinates" id="r-lat"><?php echo $r_lat;?></div>
<div class = "coordinates" id="r-long"><?php echo $r_long;?></div>

<div class="jumbotron">
    <a class="btn btn-outline-secondary btn-lg" href="#" role="button" onclick = "searchReturn('<?php echo $searchString;?>')"><i class="bi bi-arrow-left"></i> Back to Search</a>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 py-20 mb-4">
            <div class="card">
                <div class="card-body">
                    <h1 class="display-2"><?php echo $r_name;?></h1>
                    <p class="display-6"><?php echo $r_street;?>, <?php echo $r_city?>, <?php echo $r_province?></p>
                </div>
                <div class ="card-footer">
                <a type="button" class="btn btn-outline-primary" href = "<?php echo $r_website?>"><i class="bi-globe"></i> Website</a>
                <a type="button" class="btn btn-outline-primary" href = "tel:<?php echo $r_phone?>"><i class="bi-telephone"></i> <?php echo $r_phone?></a>
                </div>

            </div>
        </div>
        <div class="col-lg-6 col-md-6 py-20 mb-4">
            <div class="card">
                <div class="card-body">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">   
    <?php
        $query = "  SELECT * FROM `menu_items`
                    WHERE `r_id` = $r_id
                    ORDER BY `m_category`";

        $results = $dbconn->query($query);

        if (mysqli_num_rows($results) == 0) {
            echo "<p>Restaurant Not Found</p>";
        }
        else{
            while ($current= $results->fetch_assoc()){
                $m_id = $current["m_id"];
                $m_name = $current["m_name"];
                $m_category = $current["m_category"];
                ?>
                    <div class = "col-sm-6 col-md-4 col-lg-3 col-xl-2 py-20 mb-4">
                        <div class="card h-100 text-center">
                            <img class="card-img-top" src="images/hotsauce.png" alt="Card image cap">
                            <div class="card-body card-search-results">
                            <h5 class="card-title"><?php echo $m_name;?></h5>
                            <p class="card-text"><?php echo $m_category;?></p>
                            </div>  
                            <div class="card-footer mt-auto">
                            <a id = "#test" type="button" class="btn btn-success">Add to Cart</a>
                            </div>
                        </div>
                    </div>  
                <?php
            }
        }
        ?>
    </div>
</div>
<?php
}
?>

<script>

var lat = document.getElementById("r-lat").innerHTML;
var long = document.getElementById("r-long").innerHTML;

var map = L.map('map').setView([lat, long], 18);
L.tileLayer(
    'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19
    }).addTo(map);
  
  // add a marker in the given location
  L.marker([lat, long]).addTo(map);
</script>

