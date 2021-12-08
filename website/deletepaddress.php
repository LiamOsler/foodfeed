<?php
include "includes/header.php";
include "db/db.php";

$userId = $_SESSION['userID'];

$querySQL = "delete from useraddress where userID = $userId and isPrimary = 1";

$dbconn->query($querySQL);
$dbconn->close();
?>

<script type="text/javascript">
	{window.location.replace("mylocation.php");}
</script>