<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Food Feed</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto">

    <li class="nav-item">
      <a class="nav-item nav-link" href="#"><button type="button" class="btn btn-primary"><i class="bi-person-circle"></i> My Profile</button></a>
    </li>

    <li class="nav-item">
      <a class="nav-item nav-link" href="#"><button type="button" class="btn btn-primary"><i class="bi-building"></i> My Address</button></a>
    </li>


    <li class="nav-item">
      <a class="nav-item nav-link" href="#"><button type="button" class="btn btn-primary"><i class="bi-credit-card"></i> Payment Info</button></a>
    </li>

	  <li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  Dropdown
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item" href="#">Action</a>
		  <a class="dropdown-item" href="#">Another action</a>
		  <div class="dropdown-divider"></div>
		  <a class="dropdown-item" href="#">Something else here</a>
		</div>
	  </li>
	  <li class="nav-item">
		<a class="nav-link disabled" href="#">Disabled</a>
	  </li>
	</ul>
	<form class="form-inline my-2 my-lg-0">
	  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	</form>
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
	$.ajax({url: "pages/cart.php", success: function(result){
	  $("#page-content").html(result);
	}});
  });
});
</script>