<?php
include "db/db.php";
include "includes/header.php";

if(!isset($_SESSION["userID"])){
?>
<script type="text/javascript">
  window.location.replace("index.php");
</script>
<?php
}

$querySQL = "SELECT * from users WHERE userID = {$_SESSION['userID']} limit 1";
$results = $dbconn->query($querySQL);
$dbconn->close();
$result = '';
foreach($results as $res){
  $result = $res;
}
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">My Profile</h1>
  </div>
</div>

<main>
    <div class = "container">
      <div class = "row">
          <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3 col-lg-3">
                  </div>
                  <div class="col-md-6 col-lg-6" align="right">
                    <h3>Update your address: </h3>
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <a href="mylocation.php" style = "text-decoration: none"><button type="button" class="btn btn-warning" align="right">Update Address
                      </button></a>
                  </div>
                </div>
                <hr>
                <form action="updateprofile.php" method="post">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-2 col-lg-2">
                        <label for="firstname">First Name:</label>
                      </div>
                      <div class="col-lg-10 col-md-10">
                        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $result['firstName'];?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-2 col-lg-2">
                        <label for="lastname">Last Name:</label>
                      </div>
                       <div class="col-lg-10 col-md-10">
                        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $result['lastName'];?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-2 col-lg-2">
                        <label for="lastname">Email ID:</label>
                      </div>
                       <div class="col-lg-10 col-md-10">
                        <input type="email" class="form-control" id="emailId" name="emailId" value="<?php echo $result['emailAddress'];?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <center>
                      <button type="submit" class="btn btn-success btn-lg"><a style = "text-decoration: none">Submit</a>
                      </button>
                    </center>
                  </div>
                </form>
              </div>
            </div>
    </div>
  </div>
</main>

<?php include "includes/footer.php" ?>