<?php include "includes/header.php";
      include "db/db.php";


if(!isset($_SESSION["userID"])){
?>
<script type="text/javascript">
  window.location.replace("index.php");
</script>
<?php
}

$querySQL = "select * from blogs";

$rows = $dbconn->query($querySQL);
$dbconn->close();
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Blogs List</h1>
  </div>
</div>

<main>
    <div class = "container">
      <div class = "row">
          <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-7 col-lg-7">
                    <input class="search-container-blog search-field-blog" id="searchbar-blog" onkeyup="search_blog()" type="text" name="search" placeholder="Search Blogs..">
                  </div>
                  <div class="col-md-5 col-lg-5">
                    <div class="text-right">
                      <a class="btn btn-outline-dark" align="right" href="addblog.php" style = "text-decoration: none">Add New Blog</a>
                    </div>
                  </div>
                </div>
                <div id="blogslist">
                  <ul class="list-group list-group-flush">
                    <?php
                    foreach($rows as $row){
                      echo '<li class="blogs list-group-item">';
                      echo '<div class="row"><div class="col-md-8"><b>';
                      echo $row['title'];
                      echo '</b></div><div class="col-md-2 text-right"><form method="post" action="addblog.php"><input type="hidden" name="blog_id" value='.$row['blog_id'].'><input type="hidden" name="description" value="'.$row['description'].'"><input type="hidden" name="title" value="'.$row['title'].'"><button type="submit" class="btn btn-lg btn-primary">Edit</button></form></div><div class="col-md-2 text-right"><form method="post" action="deleteblog.php"><input type="hidden" name="blog_id" value='.$row['blog_id'].'><button type="submit" class="btn btn-lg btn-danger">Delete</button></form></div></div>';
                      echo '<p>';
                      echo $row['description'];
                      echo '</p>';
                      echo "</li>";
                    }?>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</main>

<script type="text/javascript">
  function search_blog() {
    let input = document.getElementById('searchbar-blog').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('blogs');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
  }
</script>

<?php include "includes/footer.php" ?>