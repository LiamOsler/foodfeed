<?php include "includes/header.php" ?>

<div class="jumbotron jumbotron-fluid" style = "height: 14em;">
  <div class="container">
        <div class = "logo-align">
          <h1><i class="bi bi-card-checklist"></i> My Orders</h1>
        </div>

        <div class = "logo-align logo-align-text">
        <h4>Apollo House</h4>
        <h4>Locker Number: <a href ="#"><b>3A</a></h4>
        </div>
  </div>
</div>

<main>
    <div class = "container">
    <div class = "row">
            <div class = "col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2><i class="bi bi-calendar2-check"></i> Calendar</h2>
                        <h6 class="card-subtitle mb-2 text-muted">Upcoming delivery days this available this week:</h6>
                            <br>

                            <div class = "calendar">

                                <ul class="weekdays">
                                    <li>Mo</li>
                                    <li>Tu</li>
                                    <li>We</li>
                                    <li>Th</li>
                                    <li>Fr</li>
                                    <li>Sa</li>
                                    <li>Su</li>
                                </ul>

                                <ul class="days">
                                    <li>1<button type="button" class="btn btn-secondary"  data-toggle="modal" data-target="#exampleModal3">Unavailable</button></li>
                                    <li>2<button type="button" class="btn btn-success"  data-toggle="modal" data-target="#exampleModal2">Available</button></li>
                                    <li>3<button type="button" class="btn btn-secondary " data-toggle="modal" data-target="#exampleModal3">Unavailable</button></li>
                                    <li>4<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal3">Unavailable</button></li>
                                    <li>5<button type="button" class="btn btn-outline-success " data-toggle="modal" data-target="#exampleModal">Order Pending</button></li>
                                    <li>6<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal3">Unavailable</button></li>
                                    <li>7<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal3">Unavailable</button></li>
                                </ul>
                            </div>
                        <br>
                        <a href="#" class="card-link">View Month</a>
                    </div>
                </div>
            </div>  
        </div>
        <hr> 
        <div class = "row">
        <h3><i class="bi bi-card-checklist"></i> <i class="bi bi-alarm"> </i> Pending orders:</h3>
            <div class = "col-lg-3">


                <div class="card order-history">
                  <div class="card-header">
                    November 5, 2021
                    <br>
                    <sub>Superstore</sub>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">$9.30</h5>
                    <p>1 x 8 Roll pack of toilet paper</p>
                    <p>2 x Chocolate bar</p>
                    <p>1 x Butternut Squash </p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Order Details</a>
                  </div>
                </div>
            </div>
        </div>
        <hr>
        <div class = "row">
        <h3><i class="bi bi-card-checklist"></i> <i class="bi bi-clock-history"></i> Past orders:</h3>
            <div class = "col-lg-3">


                <div class="card order-history">
                  <div class="card-header">
                    October 21, 2021
                    <br>
                    <sub>Sobeys</sub>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">$9.30</h5>
                    <p>1 x 8 Roll pack of toilet paper</p>
                    <p>2 x Chocolate bar</p>
                    <p>1 x Butternut Squash </p>
                    <a href="#" class="btn btn-primary">Order Details</a>
                    <a href="#" class="btn btn-primary-outline"><i class="bi bi-arrow-clockwise"></i> Re-order</a>
                  </div>
                </div>
            </div>

            <div class = "col-lg-3">
                <div class="card order-history">
                  <div class="card-header">
                    October 11, 2021
                    <br>
                    <sub>Superstore</sub>
                  </div>

                  <div class="card-body">
                  <h5 class="card-title">$100.25</h5>
                    <p>1 x 2kg package of rice </p>
                    <p>2 x Chocolate bar</p>
                    <p>1 x Butternut squash </p>
                    <p>1 x Tampons </p>
                    <p>1 x Hairspray </p>
                    <p>1 x Moisturizer</p>
                    <p>1 x Packet of safety razors</p>
                    <p>1 x 10lb bag of potatoes</p>
                    <p>1 x 8 x 375ml sport drink</p>
                    <a href="#" class="btn btn-primary">Order Details</a>
                    <a href="#" class="btn btn-primary-outline"><i class="bi bi-arrow-clockwise"></i> Re-order</a>
                  </div>
                </div>
            </div>

            <div class = "col-lg-3">
                <div class="card order-history">
                  <div class="card-header">
                    October 9, 2021
                    <br>
                    <sub>Sobeys</sub>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">$70.31</h5>
                    <p>1 x Bag of onions</p>
                    <p>1 x Bag of apples</p>
                    <p>1 x Eggplant</p>
                    <p>2 x Zucchini</p>
                    <p>2 x Can of ravioli</p>
                    <p>3 x Frozen pizza</p>
                    <p>1 x Balsamic vinegar</p>
                    
                    <a href="#" class="btn btn-primary">Order Details</a>
                    <a href="#" class="btn btn-primary-outline"><i class="bi bi-arrow-clockwise"></i> Re-order</a>
                  </div>
                </div>
            </div> 
        </div>

    </div>
</main>

<!-- Modal -->
<div class="modal fade order-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-basket3"></i> Pending Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>On <b>November 5th, 2021</b>, <a href ="#">FamilyMart Grocery Store</a> will be visited by <a href = "#"> John Doe</a> from unit 304.</p>
        <h5> Search for grocery items:</h5> 
        <?php include 'includes/components/searcharea.php' ?>
        <hr>
        <h5><i class="bi bi-cart4"></i> Currently in cart:</h5>
        <div class="card-deck">
    
          <div class="card">
            <img class="card-img-top" src="images/jam.png" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Jam</h5>
                <p class="card-text">$3.99</p>
                <form action="">
                    <label for="cars">Quantity</label>
                    <select id="cars" name="cars">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    </select>
                    <br>
                    <input type="submit" class="btn btn-outline-warning" value = "Remove">
                </form>
            </div>
          </div>

          <div class="card">
            <img class="card-img-top" src="images/pesto.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Pesto</h5>
                    <p class="card-text">$3.99</p>
                    <form action="">
                      <label for="cars">Quantity</label>
                      <select id="cars" name="cars">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                      <br>
                      <input type="submit" class="btn btn-outline-warning" value = "Remove">
                    </form>
            </div>
          </div>

          <div class="card">
            <img class="card-img-top" src="images/ranch.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Ranch</h5>
                    <p class="card-text">$2.99</p>
                    <form >
                      <label for="cars">Quantity</label>
                      <select id="cars" name="cars">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                      <br>
                      <input type="submit" class="btn btn-outline-warning" value = "Remove">
                    </form>
            </div>
          </div>

        </div>
        <div class = "payment-information">
              <hr>
              <h5><i class="bi bi-cash"></i> Payment Due:</h5>
              <p>$7.98 <i>+ 15% GST + $5.00 Delivery Fee</i></p>
              <h5 style = "border-top: 1px solid black; width: 3em">$9.17</h5>
              <p>Will be charged to your credit card on November 5th.</p>
              <br>

        </div>
      </div>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>

      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade order-modal" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-basket3"></i> Create a New Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>On <b>November 2th, 2021</b>, <a href ="#">FamilyMart Grocery Store</a> will be visited by <a href = "#"> John Doe</a> from unit 304.</p>
        <h5> Search for grocery items:</h5>
        <?php include 'includes/components/searcharea2.php' ?>    
        <hr>
        <h5><i class="bi bi-cart4"></i> Currently in cart:</h5>
        <div class="card-deck">
    
          <div class="card">
            <div class="card-body">
            <p>Nothing yet!</p>
            </div>
          </div>

        </div>
        <div class = "payment-information">
              <hr>
              <h5><i class="bi bi-cash"></i> Payment Due:</h5>
              <p>$0.00 <i>+ 15% GST + $-.-- Delivery Fee</i></p>
              <h5 style = "border-top: 1px solid black; width: 3em">$0.00</h5>
              <br>

        </div>
      </div>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>

      </div>
    </div>
  </div>
</div>


<!-- Modal 3 -->
<div class="modal fade order-modal" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Can you deliver for Grocery Pool?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/action_page.php">
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1"> I am available to pick up groceries on this day.</label><br>
      </form>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Offer delivery</button>
      </div>
  </div>
</div>

<script>
</script>

<?php include "includes/footer.php" ?>