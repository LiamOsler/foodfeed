<?php include "includes/header.php";
include "db/db.php";

if(!isset($_POST["pizza_id"])){
  ?>
  <script type="text/javascript">
    window.location.replace("emptycart.php");
  </script>
  <?php
}
$pizza_id = $_POST["pizza_id"];
if (isset($_SESSION['userID'])) {
  $userId = $_SESSION['userID'];
  if($pizza_id < 7){
    $pizza_place = "Pizza Pizza";
  }
  else if($pizza_id < 13 && $pizza_id > 6){
    $pizza_place = "New York Pizza";
  }
  else{
    $pizza_place = "Boston Pizza";
  }

  if($pizza_id == 1 || $pizza_id == 7 || $pizza_id == 13){
    $pizza_name = "Pepperoni Pizza";
  }
  else if($pizza_id == 2 || $pizza_id == 8 || $pizza_id == 14){
    $pizza_name = "Veggie Pizza";
  }
  else if($pizza_id == 3 || $pizza_id == 9 || $pizza_id == 15){
    $pizza_name = "Gluten Free Pizza";
  }
  else if($pizza_id == 4 || $pizza_id == 10 || $pizza_id == 16){
    $pizza_name = "Cauli-blossom Pizza";
  }
  else if($pizza_id == 5 || $pizza_id == 11 || $pizza_id == 17){
    $pizza_name = "Hawaiian Pizza";
  }
  else if($pizza_id == 6 || $pizza_id == 12 || $pizza_id == 18){
    $pizza_name = "Veggie Pizza";
  }
}
else{?>
<script type="text/javascript">
  alert("Please login first to continue!");
  if(<?php echo $pizza_id;?> < 7){
    window.location.replace("pizzapizzamenu.php");
  }
  else if(<?php echo $pizza_id;?> < 13 && <?php echo $pizza_id;?> > 6){
    window.location.replace("newyorkpizzamenu.php");
  }
  else{
    window.location.replace("bostonpizzamenu.php");
  }
</script>
<?php  
}
?>
<div class="container-menu">
        <i class="fas fa-pizza-slice"></i>      
        <h2>Your Cart for - <?php echo $pizza_place;?></h2>
</div>

<div class = "container">
    <div class = "row">
        <h3><i class="bi bi-card-checklist"></i> <i class="bi bi-clock-history"></i> Your cart from different food service provider:</h3>

          <div class = "col-lg-4">
            <div class="card order-history">
              <div class="card-header order-header">
                <div class="box">
                  <img src="images/ubereats.png">
                </div>
              </div>
              <div class="card-body">
                    <div class="row">
                      <div class="col-md-7">
                        <p>1 x <?php echo $pizza_name;?> - </p>
                        <p>2 x Coke 355ml - </p>
                        <p>1x Dip - </p>
                        <p><b>Subtotal</b></p>
                        <p>GST (15%)</p>
                        <p>Service charge</p>
                        <p>Delivery charges</p>
                      </div>
                      <div class="col-md-1">
                        <p>-</p>
                        <p>-</p>
                        <p>-</p>
                        <p><b>-</b></p>
                        <p>-</p>
                        <p>-</p>
                        <p>-</p>
                      </div>
                      <div class="col-md-4">
                        <p>$16.99</p>
                        <p>$4</p>
                        <p>$2.5</p>
                        <p><b>23.49</b></p>
                        <p>3.52</p>
                        <p>3.49</p>
                        <p>4.99</p>
                      </div>
                    </div>
                    <h5 class="card-title btn btn-warning">Payment - $35.49</h5>
                    <div class="btn-group">
                      <a href="https://www.ubereats.com"><button type="button" class="btn btn-primary" aria-expanded="false">
                      Order Now!
                      </button></a>
                      <a class="margin-left-10" href="index.php"><button type="button" class="btn btn-danger" aria-expanded="false">
                      Discard
                      </button></a>
                    </div>
              </div>
            </div>
          </div>

          <div class = "col-lg-4">
            <div class="card order-history">
              <div class="card-header order-header">
                <div class="box">
                  <img src="images/skip.jpg">
                </div>
              </div>
              <div class="card-body">
                    <div class="row">
                      <div class="col-md-7">
                        <p>1 x <?php echo $pizza_name;?> - </p>
                        <p>2 x Coke 355ml - </p>
                        <p>1x Dip - </p>
                        <p><b>Subtotal</b></p>
                        <p>GST (15%)</p>
                        <p>Service charge</p>
                        <p>Delivery charges</p>
                      </div>
                      <div class="col-md-1">
                        <p>-</p>
                        <p>-</p>
                        <p>-</p>
                        <p><b>-</b></p>
                        <p>-</p>
                        <p>-</p>
                        <p>-</p>
                      </div>
                      <div class="col-md-4">
                        <p>$16.99</p>
                        <p>$4</p>
                        <p>$2.5</p>
                        <p><b>23.49</b></p>
                        <p>3.52</p>
                        <p>4.49</p>
                        <p>5.99</p>
                      </div>
                    </div>
                    <h5 class="card-title btn btn-warning">Payment - $37.49</h5>
                    <div class="btn-group">
                      <a href="https://www.skipthedishes.com/"><button type="button" class="btn btn-primary" aria-expanded="false">
                      Order Now!
                      </button></a>
                      <a class="margin-left-10" href="index.php"><button type="button" class="btn btn-danger" aria-expanded="false">
                      Discard
                      </button></a>
                    </div>
              </div>
            </div>
          </div>

          <div class = "col-lg-4">
            <div class="card order-history">
              <div class="card-header order-header">
                <div class="box">
                  <img src="images/doordash.png">
                </div>
              </div>
              <div class="card-body">
                    <div class="row">
                      <div class="col-md-7">
                        <p>1 x <?php echo $pizza_name;?> - </p>
                        <p>2 x Coke 355ml - </p>
                        <p>1x Dip - </p>
                        <p><b>Subtotal</b></p>
                        <p>GST (15%)</p>
                        <p>Service charge</p>
                        <p>Delivery charges</p>
                      </div>
                      <div class="col-md-1">
                        <p>-</p>
                        <p>-</p>
                        <p>-</p>
                        <p><b>-</b></p>
                        <p>-</p>
                        <p>-</p>
                        <p>-</p>
                      </div>
                      <div class="col-md-4">
                        <p>$16.99</p>
                        <p>$4</p>
                        <p>$2.5</p>
                        <p><b>23.49</b></p>
                        <p>3.52</p>
                        <p>4.00</p>
                        <p>7.99</p>
                      </div>
                    </div>
                <h5 class="card-title btn btn-warning">Payment - $39.00</h5>
                <div class="btn-group">
                  <a href="https://www.doordash.com"><button type="button" class="btn btn-primary" aria-expanded="false">
                  Order Now!
                  </button></a>
                  <a class="margin-left-10" href="index.php"><button type="button" class="btn btn-danger" aria-expanded="false" onclick="">
                  Discard
                  </button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>


<?php include "includes/footer.php" ?>
