
<?php include "../../db/db.php";?>
<div id = "scroller">
    <section class="">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3 display-6">Results: </h3>
            </div>

            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
<?php
    // If the search query string is set
if (isset($_GET["search-query"])) {
    $searchString = $_GET["search-query"];

    $query = "SELECT * FROM `restaurants`
                WHERE r_name LIKE '%{$searchString}%'";

    $results = $dbconn->query($query);
    
    if (mysqli_num_rows($results) == 0) {
        echo "<p>This search returned no results.</p>";
    }
    else {
        $resultCount = 0;
        ?>
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
        <?php
        while ($current= $results->fetch_assoc()){
            $resultCount++;
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
            $r_img = $current["r_img"];
            ?>
                            <div class = "col-md-3 mb-3">
                                <div class="card h-100 text-center card-restaurant">
                                <div class="img" style="background-image:url('images/restaurants/<?php echo $r_img;?>')"></div>
                                    <!-- <img class="card-img-top" src="images/restaurants/<?php echo $r_img;?>" alt="Card image cap"> -->
                                    <div class="card-body card-search-results">
                                    <h5 class="card-title"><?php echo $r_name;?></h5>
                                    <p class="card-text"><?php echo $r_category;?></p>
                                    </div>  
                                    <div class="card-footer mt-auto">
                                    <a id = "#test" type="button" class="btn btn-success" onclick = "viewRestaurant(<?php echo $r_id?>, '<?php echo $searchString?>' )">View Menu</a>
                                    </div>
                                </div>
                            </div>
            <?php
            if($resultCount % 4 == 0){              
            ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
            <?php
            }
            if($resultCount == mysqli_num_rows($results)){
                ?>
                </div>
            </div>
            <?php
            }
        }
        ?>

        <?php
    }
}
?>              
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>