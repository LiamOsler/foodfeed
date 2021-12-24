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
					<i class="bi-person-circle"></i> <?php echo $_SESSION["userName"] ?>
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#locationModal""><i class="bi-geo-alt-fill"></i> Default Location</a>
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#paymentModal"><i class="bi-credit-card"></i> Payment Info</a>
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#contactModal"><i class="bi-telephone"></i> Contact Info</a>
						<a class="dropdown-item" href="logout.php"><i class="bi-door-open"></i> Logout</a>
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
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginModal"><i class="bi-key"></i> Login</a>
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