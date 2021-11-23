<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand brand" href="index.php">Grocery<i class="bi bi-basket3-fill egg-icon"></i>Pool</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      

      <?php
        if(isset($_SESSION["userName"])){
      ?>
        <li class="nav-item">
          <a class="nav-item nav-link" href="account.php"><button type="button" class="btn btn-secondary"><i class="bi-person-circle"></i> My Deliveries</button></a>
        </li>

        <li class="nav-item">
          <a class="nav-item nav-link" href="building.php"><button type="button" class="btn btn-secondary"><i class="bi-building"></i> My Building</button></a>
        </li>

        <li class="nav-item">
          <a class="nav-item nav-link" href="orders.php"><button type="button" class="btn btn-secondary"><i class="bi bi-card-checklist"></i> My Orders</button></a>
        </li>


    <?php } ?>

    </ul>
    <?php
    if(isset($_SESSION["userName"])){
      ?>
      <span class="navbar-text">
      <button  class="btn btn-outline-secondary btn-lg btn-lg"><a href="logout.php" style = "text-decoration: none">Logout <i class="bi-door-open" style="font-size: 1em"></i></i></a>  </button>  
        <button  class="btn btn-success btn-lg"><a href="account.php?userID=<?php echo($_SESSION["userID"])?>" style = "text-decoration: none">My Profile <i class="bi-person-circle" style="font-size: 1em"></i></i></a>  </button>  
      </span>
      <?php
    }
    else{
      ?>
      <span class="navbar-text">
      <button class="btn btn-outline-secondary btn-lg login-button"  data-toggle="modal" data-target="#newAccountModal">Sign Up <i class="bi-person-plus" style="font-size: 1rem;"></i></button>
        <button  class="btn btn-success btn-lg"  data-toggle="modal" data-target="#loginModal"> <a href="#" style = "text-decoration: none">Login &nbsp;<i class="bi-person-circle" style="font-size: 1em"></i></i></a>  </button>  
      </span>

      <?php
      include "includes/components/loginmodal.php";
    }
    ?>

  </div>
</nav>