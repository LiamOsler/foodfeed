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

## Tagcloud 
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

## Top Rated

```php
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
        $r_img = $current["r_img"];
        ?>
            <div class = "col-sm-6 col-md-3 col-lg-3 col-xl-3 py-20 mb-4">
                <div class="card h-100 text-center">
                    <div class="img" style="background-image:url('images/restaurants/<?php echo $r_img;?>')"></div>
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
```

## User Registration Form

```php
<script>
function showUserResult(str) {
  if (str.length==0) {
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == XMLHttpRequest.DONE) {
        console.log(xmlhttp.responseText);
        if(xmlhttp.responseText.includes("Username is already taken")){
            document.getElementById("validationUsername").setCustomValidity("Username is already in use");
        }
        if(xmlhttp.responseText.includes("Username is valid")){
            document.getElementById("validationUsername").setCustomValidity('');
        }
    }

  }
  xmlhttp.open("GET","db/checkusername.php?username="+str, true);
  xmlhttp.send();
}

function showEmailResult(str) {
  if (str.length==0) {
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == XMLHttpRequest.DONE) {
        console.log(xmlhttp.responseText);
        if(xmlhttp.responseText.includes("Email is already taken")){
            document.getElementById("validationEmail").setCustomValidity("Email is already in use");
        }
        if(xmlhttp.responseText.includes("Email is valid")){
            document.getElementById("validationEmail").setCustomValidity('');
        }
    }

  }
  xmlhttp.open("GET","db/checkuseremail.php?email="+str, true);
  xmlhttp.send();
}


</script>

<form action = "userregistration.php" method = "POST">
    <h5><i class="bi bi-person-lines-fill"></i> About you</h5>
    <div class="form-row">
        <div class="col-md-6 mb-6">
            <label for="validationf_name">First name</label>
            <input type="text" class="form-control" name = "f_name" id="validationf_name" placeholder="First name" value="" required>
        </div>
        <div class="col-md-6 mb-6">
            <label for="validationl_name">Last name</label>
            <input type="text" class="form-control" name = "l_name" id="validationl_name" placeholder="Last name" value="" required>
        </div>

    </div>
    <hr>

    <h5><i class="bi bi-envelope-open"></i> Contact Information</h5>
    <div class="form-row">
        <div class="col-md-6 mb-6">
        <label for="validationEmail">Email address</label>
        <input type="email" class="form-control" name = "email" id="validationEmail" aria-describedby="emailHelp" placeholder="Enter email" onkeyup="showEmailResult(this.value)" required>
        </div>
        <div class="col-md-6 mb-6">
            <label for="validationPhone">Phone Number</label>
            <input type="phone" class="form-control" name = "phone" id="validationPhone" placeholder="Phone Number" pattern="^([0-9]{3})-?\s?([0-9]{3})-?\s?([0-9]{4})$" value="" required>
        </div>

    </div>
    <hr>

    <!-- onkeyup="showEmailResult(this.value)" -->

    <h5><i class="bi bi-house-door"></i> Address</h5>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationStreet">Street Address</label>
            <input type="text" class="form-control" id="validationStreet" name="street" placeholder="Street" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationCity">City</label>
            <input type="text" class="form-control" id="validationCity" name="city" placeholder="City" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationState">Province</label>
            <input type="text" class="form-control" id="validationProvince" name="province" placeholder="Province" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationZip">Postal Code</label>
            <input type="text" class="form-control" id="validationZip" name="postal"  placeholder="Postal Code" required>
        </div>
    </div>

    <hr>
    <h5><i class="bi bi-door-open"></i> Login Credentials</h5>
    <div class="form-row">
        <div class="col-md-6 mb-6">
            <label for="validationUsername">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend1"><i class="bi bi-person-badge"></i></span>
                </div>
                <input type="text" class="form-control" id="validationUsername" name="username"  placeholder="Username" aria-describedby="inputGroupPrepend1" onkeyup="showUserResult(this.value)" required>
            </div>
        </div>
        
        <div class="col-md-6 mb-6">
            <label for="psw">Password</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2"><i class="bi bi-key"></i></span>
                </div>
                <input type="password" class="form-control" id="psw" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div>    
        </div>

        <div id="username-search"></div>
    </div>
 
    
    <hr>
    <h5>Terms and Conditions</h5>
    <div class="form-group">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="termsCheck" required>
        <label for="termsCheck">Agree to terms and conditions
        </label>
        </div>
    </div>
    <button class="btn btn-info btn-lg" type="submit">Create Account <i class="bi-person-plus"></i></button>
</form>

```
## Login Modal
```php
<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="loginModalLabel">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
					include 'inc/components/loginform.php';
				?>
			</div>
		</div>
	</div>
</div>
<!-- Account Creation Modal-->
<div class="modal fade" id="newAccountModal" tabindex="-1" role="dialog" aria-labelledby="newAccountModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="newAccountModalLabel"> <i class="bi-person-plus"></i> Create an Account</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
					include 'inc/components/userregistrationform.php';
				?>
			</div>
		</div>
	</div>
</div>
```
