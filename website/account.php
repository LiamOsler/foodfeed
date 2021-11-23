<?php include "includes/header.php" ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
        <h1><i class="bi-person-circle"></i> My Deliveries</h1>
        <h2>My vehicle can accomodate  
          <select name="hall" id="hall" value="3">
            <option>1</option>
            <option>2</option>
            <option selected>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          bins
        </h2>
  </div>
</div>

<main>
    <div class = "container">
    <h3><i class="bi bi-card-checklist"></i> Next Order</h3>
    <hr>
    <h4><i class="bi bi-clock-history"></i> November 5th before 9PM (2 days from now)</h4> 
    <h4><i class="bi bi-shop"></i> <a href= "#">Happy Family SuperMarket</a></h4> 
    <br>
    <div class = "row">
        
            <div class = "col-lg-3">


                <div class="card order-history">
                  <div class="card-header">

                    <h5 class="card-title">Apartment 304</h5>
                    <h5 class="card-title">Bin/Locker: 5A</h5>
                      <sub><a href = "#">John Doe</a></sub>

                  </div>

                  <div class="card-body">
                    <h6>Items:</h6>
                    <p>2 x Loaf of Bread</p>
                    <p>2 x Chocolate bar</p>
                    <p>1 x Butternut Squash </p>
                    <p>1 x Alfredo Sauce </p>
                    <hr>
                    <h6>Weight:</h6>
                    <p><b>1.2kg</b></p>
                  </div>
                </div>
            </div>

            <div class = "col-lg-3">
                <div class="card order-history">
                  <div class="card-header">
                    
                    <h5 class="card-title">Apartment 501</h5>
                    <h5 class="card-title">Bins/Lockers: 2A, 3A</h5>
                      <sub><a href = "#">John Doe</a></sub>

                  </div>

                  <div class="card-body">
                    <p>1 x Hot Sauce</p>
                    <p>1 x Loaf of Bread </p>
                    <p>2 x Chocolate bar</p>
                    <p>1 x Butternut squash </p>
                    <p>1 x Hairspray </p>
                    <p>1 x Moisturizer</p>
                    <p>1 x Packet of safety razors</p>
                    <p>1 x 10lb bag of potatoes</p>
                    <p>1 x 8 x 375ml sport drink</p>
                    <hr>
                    <h6>Weight:</h6>
                    <p><b>10.1kg</b></p>
                  </div>
                </div>
            </div>

            <div class = "col-lg-3">
                <div class="card order-history">
                  <div class="card-header">
                      
                    <h5 class="card-title">Apartment 101</h5>
                    <h5 class="card-title">Bin/Locker: 1B</h5>
                      <sub><a href = "#">John Doe</a></sub>

                  </div>

                  <div class="card-body">
                    <p>1 x Hot Sauce</p>
                    <p>1 x Ranch Dressing</p>
                    <p>3 x Pesto</p>
                    <p>1 x Bag of onions</p>
                    <p>1 x Bag of apples</p>
                    <p>1 x Eggplant</p>
                    <p>2 x Zucchini</p>
                    <p>2 x Can of ravioli</p>
                    <p>3 x Frozen pizza</p>
                    <p>1 x Balsamic vinegar</p>
                    <hr>
                    <h6>Weight:</h6>
                    <p><b>5.1kg</b></p>
                  </div>
                </div>
            </div> 

            <div class = "col-lg-3">
                <div class="card order-history">
                  <div class="card-header order-header">
                      
                    <h1>Details</h1>
                    <h4>Bin/Locker Count: 4</h4>
                    <h4>Item Count: 36</h4>
                    <h4>Total Weight: 16.4kg</h4>
                  </div>

                  <div class="card-body">
                  <h2>Payment:</h2>
                  <h3>$15.40</h3>

                  <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                      <button type="button" class="btn btn-warning">Pending</button>

                      <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Options
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                          <li><a class="dropdown-item" href="#">Reschedule</a></li>
                          <li><a class="dropdown-item" href="#">Cancel</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
            </div> 
        </div>

        <div class = "row">
        <h3><i class="bi bi-cart"></i> Shopping Helper</h3>
        <table id="table_id" class="display">
          <thead>
              <tr>
                  <th>Picture</th>
                  <th>Item</th>
                  <th>Quantity</th>
                  <th>Location in Store</th>
                  <th>Bin/Locker</th>
                  <th class = checkbox-align>Item retrieved?</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                 <td><img class = "list-image" src="images/bread.png" alt=""></td>
                  <td>Loaf of bread</td>
                  <td>2</td>
                  <td>Aisle 13</td>
                  <td>Bin/Locker 5A</td>
                  <td class = checkbox-align>  <input type="checkbox" class = "order-checkbox"></td>
              </tr>

              <tr>
                 <td><img class = "list-image" src="images/bread.png" alt=""></td>
                  <td>Loaf of bread</td>
                  <td>1</td>
                  <td>Aisle 13</td>
                  <td>Bin/Locker 2A</td>
                  <td class = checkbox-align>  <input type="checkbox" class = "order-checkbox"></td>
              </tr>

              <tr>
                 <td><img class = "list-image" src="images/hotsauce.png" alt=""></td>
                  <td>Hot Sauce</td>
                  <td>1</td>
                  <td>Aisle 02</td>
                  <td>Bin/Locker 3A</td>
                  <td class = checkbox-align>  <input type="checkbox" class = "order-checkbox"></td>
              </tr>

              <tr>
                 <td><img class = "list-image" src="images/hotsauce.png" alt=""></td>
                  <td>Hot Sauce</td>
                  <td>1</td>
                  <td>Aisle 02</td>
                  <td>Bin/Locker 1B</td>
                  <td class = checkbox-align>  <input type="checkbox" class = "order-checkbox"></td>
              </tr>

              <tr>
                 <td><img class = "list-image" src="images/mayo.png" alt=""></td>
                  <td>Mayo</td>
                  <td>1</td>
                  <td>Aisle 02</td>
                  <td>Bin/Locker 3A</td>
                  <td class = checkbox-align>  <input type="checkbox" class = "order-checkbox"></td>
              </tr>

              <tr>
                 <td><img class = "list-image" src="images/pesto.png" alt=""></td>
                  <td>Pesto</td>
                  <td>3</td>
                  <td>Aisle 02</td>
                  <td>Bin/Locker 1B</td>
                  <td class = checkbox-align>  <input type="checkbox" class = "order-checkbox"></td>
              </tr>

              <tr>
                 <td><img class = "list-image" src="images/alfredo.png" alt=""></td>
                  <td>Alfredo Sauce</td>
                  <td>1</td>
                  <td>Aisle 02</td>
                  <td>Bin/Locker 1B</td>
                  <td class = checkbox-align>  <input type="checkbox" class = "order-checkbox"></td>
              </tr>

              <tr>
                 <td><img class = "list-image" src="images/jam.png" alt=""></td>
                  <td>Strawberry Jam</td>
                  <td>1</td>
                  <td>Aisle 03</td>
                  <td>Bin/Locker 1B</td>
                  <td class = checkbox-align>  <input type="checkbox" class = "order-checkbox"></td>
              </tr>

              <tr>
                 <td><img class = "list-image" src="images/ranch.png" alt=""></td>
                  <td>Ranch Dressing</td>
                  <td>1</td>
                  <td>Aisle 03</td>
                  <td>Bin/Locker 3A</td>
                  <td class = checkbox-align>  <input type="checkbox" class = "order-checkbox"></td>
              </tr>

              <tr>
                 <td><img class = "list-image" src="images/salsa.png" alt=""></td>
                  <td>Salsa</td>
                  <td>1</td>
                  <td>Aisle 11</td>
                  <td>Bin/Locker 3A</td>
                  <td class = checkbox-align>  <input type="checkbox" class = "order-checkbox"></td>
              </tr>

              <tr>
                 <td><img class = "list-image" src="images/chips.png" alt=""></td>
                  <td>Chips</td>
                  <td>1</td>
                  <td>Aisle </td>
                  <td>Bin/Locker 3A</td>
                  <td class = checkbox-align>  <input type="checkbox" class = "order-checkbox"></td>
              </tr>
          </tbody>
      </table>

        </div>
        <br>
        <button type="button" class="btn btn-success" style ="float: right">Confirm Checkout and Delivery</button>
        <br>
        <br>
        <hr>
    </div>
</main>

<script>
</script>

<?php include "includes/footer.php" ?>