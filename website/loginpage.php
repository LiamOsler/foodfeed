<?php
session_name('foodfeed');
session_start();

include "db/db.php";
include "db/functions.php"; 


//Sanitize the username and password input:
$usernameInput = sanitizeData($_POST["username"]);
$passwordInput = sanitizeData($_POST["password"]);
$passwordInput = md5($passwordInput);
//Query the users table for the username that was inputted 
$querySQL = "   SELECT `u_id`, `u_username`, `u_private_id` 
                FROM `users` 
                WHERE `u_username` = '{$usernameInput}'";
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
        $userID = $current["u_id"];
        $username = $current["u_username"];
        $privateID = $current["u_private_id"];

        //Get the user's salt and peppers for password spicing:
        $querySQL = "   SELECT `u_private_id`, `u_salt`, `u_pepper` 
                        FROM `user_salt` 
                        WHERE `u_private_id` = '{$privateID}'";
        $result = $dbconn->query($querySQL);
        //Get the first result as the current item:
        while ($current = $result->fetch_assoc()){
            //Set the user's salt and peppers to their own variables:
            $userSalt = $current["u_salt"];
            $userPepper = $current["u_pepper"] ;

            //Conatenate the salt, password input and the pepper together
            $saltAndPepperPasswordInput = $userSalt . $passwordInput . $userPepper;

            //Get the MD5 checksum of $saltAndPepperPasswordInput and set it to a variable:
            $saltAndPepperPasswordInputChecksum = md5($saltAndPepperPasswordInput);
            //Get the user's hashed password (with salt and pepper) from the database:

            $querySQL = "   SELECT `u_private_id`, `u_hash` from `user_hashes`
                            WHERE `u_private_id` = '{$privateID}'";
            $result = $dbconn->query($querySQL);
            while ($current = $result->fetch_assoc()){
                //Set the user's hashed password to variable:
                $passwordHash = $current["u_hash"];
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