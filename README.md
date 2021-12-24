# X491Refactor

This is the main README for the project.


## Executive Summary 

We will develop an application that will be the “Trivago of Food” – a website that compares food delivery services and presents the best prices to the user. The name of our product is “FoodFeed”. We believe that we will be able to both help consumers save money on food while earning profits through business-to-business sales, advertising, and an optional tipping system.  

## Problem 

There are dozens of third-party food delivery services like UberEats, DoorDash, GrubHub - in some cases restaurants may even use multiple delivery services. Currently, if a consumer wants to compare the final price of an order on multiple delivery services, they must go through the tedious process of finding the restaurant on each platform and proceeding through their respective checkout processes. The amount of effort required in doing this discourages many consumers from price-shopping items on different platforms and can result in them paying more than needed. 

## Proposed Solution 

Our proposed solution is to develop a web platform that allows consumers to compare the prices of their order across multiple delivery services. The platform will have a server-side backend that will fetch the availability, price and expected delivery times.  When visiting the website or using the mobile app, the user will be presented with a search menu where they will be able to look for either a menu item, restaurant, or location. The user will add items to a cart, just like they would in a typical delivery app. Once the items are selected, Food Feed will show them a comparison of the final checkout prices (including delivery fees, service charges, etc.) and factors like the expected delivery time and reviews would also be displayed. If an item is unavailable through a delivery service, but available on another, this will be indicated to them. The user can then complete the order using their information saved on the FoodFeed platform. 

## Login Page

```php

<?php
include "db/db.php";
include "db/functions.php"; 

session_name('foodfeed');
session_start();

//Before proceeding, ensure that the posted values are valid for entry in to database:
$registrationValid = TRUE;
$email = sanitizeData($_POST["email"]);
$resultCount = 0;


if (strlen($email)>0) {
    $querySQL = "   SELECT `u_email`
                    FROM `users`
                    WHERE `u_email` = '{$email}'";
    $result = $dbconn->query($querySQL);

    while ($current = $result->fetch_assoc()){
        $resultCount+=1;
    }
}
//If the email address exists:
if($resultCount > 0){
    $registrationValid = FALSE;
}

$username = sanitizeData($_POST["username"]);
$resultCount = 0;
if (strlen($username)>0) {
    $querySQL = "   SELECT `u_username`
                    FROM users
                    WHERE `u_username` = '{$username}'";
    $result = $dbconn->query($querySQL);

    while ($current = $result->fetch_assoc()){
        $resultCount+=1;
    }
}
//If the username address exists:
if($resultCount > 0){
    $registrationValid = FALSE;
}

//Otherwise let the user register:
if($registrationValid == TRUE){
    $password = sanitizeData($_POST["password"]);
    
    $phone = sanitizeData($_POST["phone"]);
    $f_name = sanitizeData($_POST["f_name"]);
    $l_name = sanitizeData($_POST["l_name"]);
    $street = sanitizeData($_POST["street"]);
    $city = sanitizeData($_POST["city"]);
    $province = sanitizeData($_POST["province"]);
    $postal = sanitizeData($_POST["postal"]);

    echo $password . "<br>";
    echo $username . "<br>";
    echo $email . "<br>";
    echo $phone . "<br>";
    echo $f_name . "<br>";
    echo $l_name . "<br>";
    echo $street . "<br>";
    echo $city . "<br>";
    echo $postal . "<br>";


    

    $querySQL = "   INSERT INTO `users` VALUES
                    (NULL, MD5(UUID()), '{$username}', '{$email}', '{$phone}','{$f_name}','{$l_name}', NULL, NULL, '{$street}', '{$city}', '{$province}', '{$postal}', CURRENT_TIMESTAMP, FALSE)";

    $result = $dbconn->query($querySQL);

    echo "hello";

    $querySQL = "   SELECT `u_username`, `u_id`, `u_private_id`
                    FROM `users`
                    WHERE `u_username` = '{$username}'";
    $result = $dbconn->query($querySQL);

    while ($current = $result->fetch_assoc()){
        $_SESSION["userID"] = $current["u_id"];

        $privateID = $current["u_private_id"];
        
        $querySQL = "   INSERT INTO `user_salt` VALUES 
                        ('{$privateID}', LEFT(MD5(UUID()), 8), LEFT(MD5(UUID()), 8))
                    ";
        $dbconn->query($querySQL);

        $querySQL = "   SELECT `u_salt`, `u_pepper`, `u_private_id`
                        FROM `user_salt`
                        WHERE `u_private_id` = '{$privateID}'";
        $saltresult = $dbconn->query($querySQL);

        while ($saltcurrent = $saltresult->fetch_assoc()){
            $userSalt = $saltcurrent["u_salt"];
            $userPepper = $saltcurrent["u_pepper"]; 
            
            $querySQL = "   INSERT INTO `user_hashes` VALUES
                            ('{$privateID}', MD5(CONCAT('{$userSalt}', MD5('{$password}'), '{$userPepper}')))";
                        
            $_SESSION["username"] = $username;

            $dbconn->query($querySQL);
            $dbconn->close();
        }
    }

}

header("Location: index.php");

?>

``` 

## Navigation Bar

```php
<nav class="navbar sticky-top navbar-expand-sm navbar-light bg-light ">
	<a class="navbar-brand" id ="landing-page" href="#">Food Feed</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<?php
				if(isset($_SESSION["userName"])){
			?>
				<li class="nav-item nav-link dropdown">
					<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="bi-person-circle"></i>
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#"><i class="bi-geo-alt-fill"></i> Default Location</a>
						<a class="dropdown-item" href="#"><i class="bi-credit-card"></i> Payment Info</a>
						<a class="dropdown-item" href="#"><i class="bi-telephone"></i> Contact Info</a>
					</div>
				</li>
			<?php
				}
				else{
			?>
				<li class="nav-item nav-link dropdown">
					<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="bi-person-circle"></i> User
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#"><i class="bi-key"></i> Login</a>
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#newAccountModal"><i class="bi-person-plus"></i> Register</a>
					</div>
				</li>

			<?php
				}
			?>

			<li class="nav-item">
				<a class="nav-link" id = "cart" href="#"><button type="button" class="btn btn-warning"><i class="bi-cart"></i> Cart</button></a>
			</li>

		</ul>

		
	</div>
</nav>
```

## Search Area
```php
<div class="search-container">
    <form  class="form">
        <input id = "search-input" type="text" class="form-control" size="30" placeholder ="Type the name of a restaurant to view search results" onkeyup="showResult(this.value)">
        <button class="search-button">
        <img src="icons/search.png">
        </button>
    </form>
    <div id="live-search"></div>
</div>
```

## Search Results

```php

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
```

```php
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
```
