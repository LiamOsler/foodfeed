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