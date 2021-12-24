<?php include "inc/header.php" ?>
<div class = "container">
        <div class = "row ">
            <div class = "col-12 text-center">
                <div class="card loginfailed">
                    <div class="card-body">
                        <h5 class="card-title display-4"> Username or Password Incorrect </h5>
                        <br>
                        <button  class="btn btn-info btn-lg"  data-toggle="modal" data-target="#loginModal"> <a href="#" style = "text-decoration: none; color: black;">Try Again &nbsp;<i class="bi-arrow-clockwise" style="font-size: 1em"></i></a>  </button>  
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id="page-content"></div>
<?php 
include "inc/footer.php" ?>