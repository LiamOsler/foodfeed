<?php include "inc/header.php" ?>

<main>
    <div class = "container">
        <div class = "row">        
            <div class = "col-lg-3 mb-4">
                <div class="card order-history">
                  <div class="card-header">
                    GrubHub
                    <br>
                    <sub>Red Chillies Of India</sub>
                  </div>

                  <div class="card-body">
                  <h5 class="card-title">$15.00 items</h5>
                  <p class = "card-text">+ $2.00 Delivery Fee</p>
                  <h5 class="display-6" style = "color: green">$17.00 total</h5>

                  </div>
                  <div class = "card-footer text-center">
                  <a href="#" class="btn btn-success">Place Order</a>

                  </div>
                </div>
            </div>
            
            <div class = "col-lg-3 mb-4">
                <div class="card order-history">
                  <div class="card-header">
                    UberEats
                    <br>
                    <sub>Red Chillies Of India</sub>
                  </div>

                  <div class="card-body">
                  <h5 class="card-title">$15.00 items</h5>
                  <p class = "card-text">+ $2.50 Delivery Fee</p>
                  <h5 class="display-6" style = "color: red">$17.50 total</h5>
                  </div>
                  <div class = "card-footer text-center">
                  <a href="#" class="btn btn-light">Place Order</a>

                  </div>
                </div>
            </div>

            <div class = "col-lg-3 mb-4">
                <div class="card order-history">
                  <div class="card-header">
                    FoodHWY
                    <br>
                    <sub>Red Chillies Of India</sub>
                  </div>

                  <div class="card-body">
                  <h5 class="card-title">$15.00 items</h5>
                  <p class = "card-text">+ $3.00 Delivery Fee</p>
                  <h5 class="display-6" >$18.00 total</h5>

                  </div>
                  <div class = "card-footer text-center">
                  <a href="#" class="btn btn-light">Place Order</a>

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

<?php include "inc/footer.php" ?>