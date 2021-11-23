<?php include "includes/header.php" ?>

<div class="jumbotron" style = "height: 14em">
  <div class="container">
        <div class = "logo-align">
            <h1><i class="bi-building"></i> My Building</h1>
        </div>

        <div class = "logo-align logo-align-text">
        <h4>Apollo House</h4>
        <h4>123 Fake Street</h4>
        <h4>Croydon, UK</h4>

        </div>

        
  </div>
</div>

<main>
    <div class = "container">
        
        <div class = "row">
            <h2> Details</h2>
            <div class = "col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-compass"></i> Locker Location</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Where to find your items</h6>
                        <img class="card-img-bottom" src="images/locker.jpg" alt="Card image cap">
                        <p class="card-text">The locker for your building is located on the first floor, just to the right once you enter the security doors and walk down the hall.</p>

                    </div>
                </div>
            </div>

            <div class = "col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-camera"></i> Locker Location</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Where to find your items</h6>
                        <p class="card-text">The lockers look like this:</p>
                        <img class="card-img-bottom" src="images/locker2.jpg" alt="Card image cap">
                    </div>
                </div>
            </div>

            <div class = "col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-person-circle"></i> Participating Tenants</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Meet your neighbours</h6>
                        
                        <p>
                            <a href="account.php"><button type="button" class="btn btn-secondary space-button"><i class="bi-person"></i> John Doe</button></a>
                            <a href="account.php"><button type="button" class="btn btn-secondary space-button"><i class="bi-person"></i> Jane Doe</button></a>
                            <a href="account.php"><button type="button" class="btn btn-secondary space-button"><i class="bi-person"></i> Jeff Doe</button></a>
                            <a href="account.php"><button type="button" class="btn btn-secondary space-button"><i class="bi-person"></i> Jeff Doe</button></a>
                            <a href="account.php"><button type="button" class="btn btn-secondary space-button"><i class="bi-person"></i> Joe Doe</button></a>
                            <a href="account.php"><button type="button" class="btn btn-secondary space-button"><i class="bi-person"></i> Jane Doe</button></a>
                            <a href="account.php"><button type="button" class="btn btn-secondary space-button"><i class="bi-person"></i> Jeff Doe</button></a>
                            <a href="account.php"><button type="button" class="btn btn-secondary space-button"><i class="bi-person"></i> Jeff Doe</button></a>
                            <br>Have all delivered orders for Grocery Pool at Apollo House in the last month.
                            <br>
                            <br>
                            <a href="account.php"><button type="button" class="btn btn-success space-button"><i class="bi-person-circle"></i> Jorge Doe</button></a>
                            <br>Is the Grocery Pool support person for Apollo House. 
                        </p>
                    </div>
                </div>
            </div>



        </div>


    <br>

    <div class = "row">
    <h2> Scheduling</h2>
            <div class = "col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2><i class="bi bi-calendar2-check"></i> Calendar</h2>
                        <h6 class="card-subtitle mb-2 text-muted">Upcoming delivery days this week:</h6>
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
                                    <li>1<button type="button" class="btn btn-secondary">Unavailable</button></li>
                                    <li>2<button type="button" class="btn btn-success">Available</button></li>
                                    <li>3<button type="button" class="btn btn-secondary">Unavailable</button></li>
                                    <li>4<button type="button" class="btn btn-secondary">Unavailable</button></li>
                                    <li>5<button type="button" class="btn btn-success">Available</button></li>
                                    <li>6<button type="button" class="btn btn-secondary">Unavailable</button></li>
                                    <li>7<button type="button" class="btn btn-secondary">Unavailable</button></li>
                                </ul>
                            </div>
                        <br>
                        <a href="#" class="card-link">View Month</a>
                    </div>
                </div>
            </div>  
        </div>


        <br>
        <div class = "row">
        <div class = "col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-chat-left"></i> Comments / Concerns</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Please let us know if there are any issues with the Grocery Pooling experience in your building</h6>
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Feedback</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="button" class="btn btn-warning space-button">Send <i class="bi-box-arrow-in-right"></i></button>
                            </form>
                    </div>
                </div>
            </div>
        </div>

        <br>

    </div>
</main>

<script>
</script>

<?php include "includes/footer.php" ?>