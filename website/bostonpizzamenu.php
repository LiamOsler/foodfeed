<?php include "includes/header.php" ?>


<!-- <div class="jumbotron jumbotron-fluid"> -->
  <div class="container-menu">
        <i class="fas fa-pizza-slice"></i>      
        <h2>Boston Pizza</h2>
        <h6>Ratings: 4.7 | North American </h6>
        <h6> Open Until 7:30 pm </h6>
  </div>
<!-- </div> -->
<main>
<div class = "container p-4">
      <div class = "row">
        <div class = "col-lg-4">
          <div class="card">
              <div class="card-body">
                <h3 class="card-title"> <i class="bi bi-search"></i> Picked for you</h3>
                <h4 class=" p-2">Combos</h4>
                <h6 class="p-2">Slice Deals</h6>
                <h6 class="p-2">Large Pizza Deals</h6>
                <h6 class="p-2">Premium Pizza</h6>
                <h6 class="p-2">Beverages</h6>
                <h6 class="p-2">Fries</h6>
                <h6 class="p-2">Sandwiches</h6>
                <h6 class="p-2">Party Pizza</h6>

            </div>
            </div>
        </div>
        <div class = "col-lg-8">
        <div class = "container">
    <div class="row">
  <div class="col-md-6">
    <div class="card">
      <img src="images/pizza1.jpg" style="width:100%">
      <div class="container">
        <h2>Pepperoni Pizza, 2 Coke, 1 Dip</h2>
        <p class="title">Size: S | M | <b>L</b> | XL</p>
        <p>Exotic cheese blend with Pepperoni</p>
        <p><form id="form1" action="mycart.php" method="POST">
                <input type="hidden" name="pizza_id" value="13">
                <button type="submit" class="button">Add to cart</button>
            </form></p>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card">
      <img src="images/pizza2.jpg" style="width:100%">
      <div class="container">
        <h2>Veggie Pizza, 2 Coke, 1 Dip</h2>
        <p class="title">Size: S | M | <b>L</b> | XL</p>
        <p>Pizza made with fresh veggies.</p>
        <p><form id="form2" action="mycart.php" method="POST">
                <input type="hidden" name="pizza_id" value="14">
                <button type="submit" class="button">Add to cart</button>
            </form></p>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card">
      <img src="images/pizza2.jpg" style="width:100%">
      <div class="container">
        <h2>Glutten Free Pizza, 2 Coke, 1 Dip</h2>
        <p class="title">Size: S | M | <b>L</b> | XL</p>
        <p>Pizza made with fresh veggies.</p>
        <p><form id="form3" action="mycart.php" method="POST">
                <input type="hidden" name="pizza_id" value="15">
                <button type="submit" class="button">Add to cart</button>
            </form></p>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card">
      <img src="images/pizza1.jpg" style="width:100%">
      <div class="container">
      <h2>Cauli-blossom Pizza, 2 Coke, 1 Dip</h2>
        <p class="title">Quantity: 1 | 2 | 3 </p>
        <p>Pizza made with cauliflower base.</p>
        <p><form id="form4" action="mycart.php" method="POST">
                <input type="hidden" name="pizza_id" value="16">
                <button type="submit" class="button">Add to cart</button>
            </form></p>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card">
      <img src="images/pizza3.jpg" style="width:100%">
      <div class="container">
      <h2>Hawaiian Pizza, 2 Coke, 1 Dip</h2>
        <p class="title">Size: S | M | <b>L</b> | XL</p>
        <p>Pizza made with meat.</p>
        <p><form id="form5" action="mycart.php" method="POST">
                <input type="hidden" name="pizza_id" value="17">
                <button type="submit" class="button">Add to cart</button>
            </form></p>  
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card">
      <img src="images/pizza1.jpg" style="width:100%">
      <div class="container">
      <h2>Veggie Pizza, 2 Coke, 1 Dip</h2>
        <p class="title">Size: S | M | <b>L</b> | XL</p>
        <p>Pizza made with fresh veggies.</p>
        <p><form id="form6" action="mycart.php" method="POST">
                <input type="hidden" name="pizza_id" value="18">
                <button type="submit" class="button">Add to cart</button>
            </form></p> 
      </div>
    </div>
  </div>

</div>
    </div>
      </div>

      </div>
    </div>
</main>