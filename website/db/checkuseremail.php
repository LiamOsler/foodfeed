
<?php
include "db.php";
include "functions.php";

$xmlDoc=new DOMDocument();
$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$email = sanitizeData($_GET["email"]);
$resultCount = 0;

//If the query is not empty:
if (strlen($email)>0) {
    $querySQL = "   SELECT `u_email`
                    FROM `users`
                    WHERE `u_email` = '{$email}'";
    $result = $dbconn->query($querySQL);

    while ($current = $result->fetch_assoc()){
        $resultCount+=1;
    }
}

if($resultCount > 0){
    echo "Email is already taken";
}

else{
    echo "Email is valid";
}

?>