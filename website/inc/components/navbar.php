<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" id ="landing-page" href="#">Food Feed</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto">
	<li class="nav-item">
      <a class="nav-item nav-link" id = "cart" href="#"><button type="button" class="btn btn-primary"><i class="bi-cart"></i> My Cart</button></a>
    </li>

	<li class="nav-item nav-link dropdown">
	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<i class="bi-person-circle"></i> My Profile
	</button>
	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		<a class="dropdown-item" href="#"><i class="bi-geo-alt-fill"></i> Default Location</a>
		<a class="dropdown-item" href="#"><i class="bi-credit-card"></i> Payment Info</a>
		<a class="dropdown-item" href="#"><i class="bi-telephone"></i> Contact Info</a>
	</div>
	</div>
	</li>
	</ul>
  </div>
</nav>

<script>
//Scripts Relating to the PHP navigation:
$(document).ready(function(){
$("#page-content").ready(function(){
	$.ajax({url: "pages/landingpage.php", success: function(result){
	  $("#page-content").html(result);
	}});
  });

  $("#landing-page").click(function(){
	$.ajax({url: "pages/landingpage.php", success: function(result){
	  $("#page-content").html(result);
	}});
  });

  $("#cart").click(function(){
	$.ajax({url: "pages/cart.php", success: function(result){
	  $("#page-content").html(result);
	}});
  });

});
</script>