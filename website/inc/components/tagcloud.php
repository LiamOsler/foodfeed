<div class = "row">


    <?php
        include "../db/db.php";

        $query =   "SELECT DISTINCT `r_category` 
                    FROM `restaurants`";

        $results = $dbconn->query($query);

        if (mysqli_num_rows($results) == 0) {
            echo "<p>This search returned no results.</p>";
        }
        else { 
            while ($current= $results->fetch_assoc()){
            $r_category = $current["r_category"];

            ?>
                <div class="col text-center mb-2">
                    <button class="btn btn-light"><?php echo $r_category;?></button>
                </div>
            <?php
            }
        }
            ?>
</div>