<?php
include "includes/header.php";
include "db/db.php";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$emailId = $_POST["emailId"];
$userId = $_SESSION['userID'];
$querySQL = "update users SET firstName = '$firstname', lastName = '$lastname', emailAddress = '$emailId' where userID = $userId";

$dbconn->query($querySQL);
$dbconn->close();
?>

<script type="text/javascript">
	{window.location.replace("myprofile.php");}
</script>