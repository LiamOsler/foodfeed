<?php include "includes/header.php";


if(!isset($_SESSION["userID"])){
?>
<script type="text/javascript">
  window.location.replace("index.php");
</script>
<?php
}

if(isset($_POST["title"])){
  $title = $_POST["title"];
}
if(isset($_POST["description"])){
  $description = $_POST["description"];
}
if(isset($_POST["blog_id"])){
  $blog_id = $_POST["blog_id"];
}
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><?php if(isset($_POST["blog_id"])){ echo "Edit Blog"; } else { echo "Add New Blog";}?></h1>
  </div>
</div>

<main>
    <div class = "container">
      <div class = "row">
          <div class="card">
              <div class="card-body">
                <form action="insertblog.php" method="post">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-2 col-lg-2">
                        <label for="blogtitle">Blog Title:</label>
                      </div>
                      <div class="col-lg-10 col-md-10">
                        <input type="text" class="form-control" id="blogtitle" name="blogtitle" value="<?php if(isset($title)){echo $title;}?>" placeholder="Enter Blog Title Here" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-2 col-lg-2">
                        <label for="description">Blog Description</label>
                      </div>
                      <div class="col-lg-10 col-md-10">
                        <textarea class="form-control" id="description" rows="6" name="description" placeholder="Enter Blog Description Here" required><?php if(isset($description)){echo $description;}?></textarea>
                      </div>
                    </div>
                  </div>
                  <?php if(isset($blog_id)){?>
                    <input type="hidden" id="blog_id" name="blog_id" value=<?php if(isset($blog_id)){echo $blog_id;}?>>
                  <?php }?>
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
    </div>
</main>

<?php include "includes/footer.php" ?>