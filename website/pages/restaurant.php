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
    }
?>

<div class="jumbotron">
    <a class="btn btn-outline-secondary btn-lg" href="#" role="button" onclick = "searchReturn('<?php echo $searchString;?>')"><i class="bi bi-arrow-left"></i> Back to Search</a>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="display-2"><?php echo $r_name;?></h1>
                    <p class="display-6"><?php echo $r_street;?>, <?php echo $r_city?>, <?php echo $r_province?></p>
                    <a href = "<?php echo $r_website?>">Website</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>