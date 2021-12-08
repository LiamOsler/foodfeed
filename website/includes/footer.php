<?php 

if (isset($_SESSION['userID'])) {
	$userId = $_SESSION['userID'];	
}
?>

<div class="bg-dark">
	<div class="row" style="color: white; margin-right: 0px;">
		<div class="col-lg-1">
		</div>
		<div class="col-lg-4">
			<br>
			<div class="row">
				<h3>FoodFeed</h3>
			</div>
			<br>
			<div class="row">
					<p><i class="bi bi-instagram"></i><a class="margin-left-10" href="http://www.instagram.com">instagram/foodfeed</a></p>
				
					<p><i class="bi bi-facebook"></i><a class="margin-left-10" href="http://www.facebook.com">facebook/foodfeed</a></p>
				
					<p><i class="bi bi-twitter"></i><a class="margin-left-10" href="http://www.twitter.com">twitter/foodfeed</a></p>
			</div>
		</div>
		<div class="col-lg-3">
			<br>
			<div class="row">
				<h3>Useful Links</h3>
			</div>
			<br>
			<div class="row">
					<p><i class="bi bi-house"></i><a class="margin-left-10" href="index.php">Home</a></p>
				
					<p><i class="bi bi-people"></i><a class="margin-left-10" href="about.php">About Us</a></p>
				
					<?php if(isset($userId)){ ?><p><i class="bi bi-brush"></i><a class="margin-left-10" href="blogs.php">Blogs</a></p> <?php } else { ?><p><i class="bi bi-brush"></i><a class="margin-left-10" href="team.php">Team</a></p> <?php } ?>
			</div>
		</div>
		<div class="col-lg-3">
			<br>
			<div class="row">
				<h3>Newsletter</h3>
			</div>
			<br>
			<div class="row">
					<p>Subscribe to our Newsletter for receiving updates for our new products and services.</p>
					
					<div class="row">
						<div class="col-lg-8">
							<input id="searchbar-blog" style="padding: 5px; margin-left: 0px;" width="100%" type="text" placeholder="Enter Email..">
						</div>
						<div class="col-lg-2">
							<h3><a style="color: white" href="https://www.sendmail.com"><i class="bi bi-mailbox"></i></a></h3>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<script src="scripts/mapping.js"></script>