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
session_name('legalnews');
session_start();

include "db/db.php";
include "db/functions.php"; 


//Sanitize the username and password input:
$usernameInput = sanitizeData($_POST["username"]);
$passwordInput = sanitizeData($_POST["password"]);

//echo("userNameInput: ");
//echo($usernameInput  );
//echo("<br>");
//echo("passwordInput: ");
//echo($passwordInput );
//echo("<br>");

$passwordInput = md5($passwordInput);
//Query the users table for the username that was inputted 
$querySQL = "   SELECT userName, userID, privateID from users 
                WHERE userName = '{$usernameInput}'";
$result = $dbconn->query($querySQL);
$rowcount = mysqli_num_rows($result); 

//If the username isn't found no rows will be returned
if($rowcount < 1){
    //If no username found then Set the username or password incorrect value to TRUE
    $incorrect = TRUE;
}  
else{
    //Get the first result as the current item:
    while ($current = $result->fetch_assoc()){
        //Set the userID, userName and privateID to their own variables:
        $userID = $current["userID"];
        $username = $current["userName"];
        $privateID = $current["privateID"];

        //echo("userID: ");
        //echo($userID );
        //echo("<br>");
        //echo("username: ");
        //echo($username );
        //echo("<br>");
        //echo("privateID: ");
        //echo($privateID );
        //echo("<br>");
        //Get the user's salt and peppers for password spicing:
        $querySQL = "   SELECT privateID, userSalt, userPepper from usersaltandpepper 
                        WHERE privateID = '{$privateID}'";
        $result = $dbconn->query($querySQL);
        //Get the first result as the current item:
        while ($current = $result->fetch_assoc()){
            //Set the user's salt and peppers to their own variables:
            $userSalt = $current["userSalt"];
            $userPepper = $current["userPepper"] ;

            //echo("Salt: ");
            //echo( $userSalt); 
            //echo("<br>");
            //echo("Pepper: ");
            //echo( $userPepper);
            //echo("<br>");
            //echo("Hashed Password Input: ");
            //echo($passwordInput);
            //echo("<br>");

            //Conatenate the salt, password input and the pepper together
            $saltAndPepperPasswordInput = $userSalt . $passwordInput . $userPepper;

            //echo("Salt + Hash + Pepper: ");
            //echo($saltAndPepperPasswordInput);
            //echo("<br>");


            //Get the MD5 checksum of $saltAndPepperPasswordInput and set it to a variable:
            $saltAndPepperPasswordInputChecksum = md5($saltAndPepperPasswordInput);
            //Get the user's hashed password (with salt and pepper) from the database:

            echo($saltAndPepperPasswordInput);
            
            $querySQL = "   SELECT privateID, passwordHash from userhashes
                            WHERE privateID = '{$privateID}'";
            $result = $dbconn->query($querySQL);
            while ($current = $result->fetch_assoc()){
                //Set the user's hashed password to variable:
                $passwordHash = $current["passwordHash"];
                //echo($passwordHash);
            }
        }
    }
    //Check if the hashed input matches the user's hashed password:
    if($saltAndPepperPasswordInputChecksum == $passwordHash){
        //If the password is correct, we can set the SESSION userName and userID values:
        $_SESSION["userName"] = $username;
        $_SESSION["userID"] = $userID;

        //echo("hello");
        header("Location: index.php");
        die();
    }else{
        //If password incorrect then Set the username or password incorrect value to TRUE
        $incorrect = TRUE;
        
    }
}
    if($incorrect){
        header("Location: loginfailed.php");
} 
?>    
```
