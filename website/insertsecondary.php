<?php
include "includes/header.php";
include "db/db.php";

$street = $_POST["inputAddress"];
$address2 = $_POST["inputAddress2"];
$city = $_POST["inputCity"];
$province = $_POST["province"];
$postal = $_POST["inputZip"];
$userId = $_SESSION['userID'];


$querySQL = "select * from useraddress where userID = $userId and isPrimary = 0";

$results = $dbconn->query($querySQL);

if(($results->num_rows) == 1 ){
	$query = "update useraddress SET streetname = '$street', address2 = '$address2', city = '$city', province = '$province', postalCode = '$postal' where userID = $userId and isPrimary = 0";

	$dbconn->query($query);
}
else{
	$query = "insert into useraddress (isPrimary, streetname, address2, city, province, postalCode, userID) VALUES ( 0, '$street', '$address2', '$city', '$province', '$postal', $userId)";
	
	$dbconn->query($query);
}
$dbconn->close();
?>

<script type="text/javascript">
	{window.location.replace("mylocation.php");}
</script>