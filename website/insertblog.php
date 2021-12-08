<?php
include "includes/header.php";
include "db/db.php";

$blogtitle = $_POST["blogtitle"];
$description = $_POST["description"];
$userId = $_SESSION["userID"];

if(isset($_POST["blog_id"])){
$blog_id = $_POST["blog_id"];
$querySQL = "UPDATE blogs SET title = '$blogtitle', description = '$description' WHERE blog_id = $blog_id";
}
else{
$querySQL = "insert into blogs (title, description, user_id) VALUES ('$blogtitle', '$description', $userId)";

}
$dbconn->query($querySQL);
$dbconn->close();
?>

<script type="text/javascript">
	{window.location.replace("blogs.php");}
</script>