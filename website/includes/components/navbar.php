<?php
include "includes/components/loginmodal.php";
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand brand" href="index.php">Food<i class="bi bi-egg-fried egg-icon"></i>Feed</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" id="abt" href="about.php">About Us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" id="tm" href="team.php">Team</a>
      </li>
      <?php
      if(isset($_SESSION["userName"])){
        ?>
        <li class="nav-item">
          <a class="nav-link" id="blg" href="blogs.php">Blogs</a>
        </li>
        <?php
      }
      ?>
    </ul>
    <span class="navbar-text">
      <?php
      if(isset($_SESSION["userName"])){
        ?>
        <a class="btn btn-outline-secondary btn-lg btn-lg" href="logout.php" style = "text-decoration: none">Logout <i class="bi-door-open" style="font-size: 1em"></i></a>
        <a class="btn btn-success btn-lg" href="myprofile.php" style = "text-decoration: none">My Profile <i class="bi-person-circle" style="font-size: 1em"></i></a>
        <a class="btn btn-primary btn-lg" href="mycart.php?userID=<?php echo($_SESSION["userID"])?>" style = "text-decoration: none">My Cart <i class="bi-cart-check-fill" style="font-size: 1em"></i></a>
    </span>
    <?php
    }
    else{
    ?>
      <button class="btn btn-outline-secondary btn-lg login-button"  data-toggle="modal" data-target="#newAccountModal">New User <i class="bi-person-plus" style="font-size: 1rem;"></i></button>
      <button  class="btn btn-success btn-lg"  data-toggle="modal" data-target="#loginModal"> <a href="#" style = "text-decoration: none">Login &nbsp;<i class="bi-person-circle" style="font-size: 1em"></i></a>  </button>  

      <?php
    }
    ?>

  </div>
</nav>