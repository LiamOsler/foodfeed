

<?php


include "includes/header.php";


//Sanitize the username and password input:
$usernameInput = sanitizeData($_POST["username"]);
$passwordInput = sanitizeData($_POST["password"]);
$passwordInput = md5($passwordInput);
//Query the users table for the username that was inputted 
$querySQL = "   SELECT userName, userID, privateID from users 
                WHERE userName = '{$usernameInput}'";
$result = $dbconn->query($querySQL);
$rowcount = mysqli_num_rows($result); 
//If the username isn't found no rows will be returned
if($rowcount < 1){
    //If no username found then Set the username or password incorrect value to TRUE
    $incorrect = TRUE;
}  
else{
    //Get the first result as the current(array) item:
    foreach($result as $current){
        //Set the userID, userName and privateID to their own variables:
        $userID = $current["userID"];
        $username = $current["userName"];
        $privateID = $current["privateID"];
        //Get the user's salt and peppers for password spicing:
        $querySQL = "   SELECT privateID, userSalt, userPepper from userSaltAndPepper 
                        WHERE privateID = '{$privateID}'";
        $result = $dbconn->query($querySQL);
        //Get the first result as the current item:
        foreach($result as $current){
            //Set the user's salt and peppers to their own variables:
            $userSalt = $current["userSalt"];
            $userPepper = $current["userPepper"] ;
            //Conatenate the salt, password input and the pepper together
            $saltAndPepperPasswordInput = $userSalt . $passwordInput . $userPepper;
            //Get the MD5 checksum of $saltAndPepperPasswordInput and set it to a variable:
            $saltAndPepperPasswordInputChecksum = md5($saltAndPepperPasswordInput);
            //Get the user's hashed password (with salt and pepper) from the database:
            $querySQL = "   SELECT privateID, passwordHash from userHashes
                            WHERE privateID = '{$privateID}'";
            $result = $dbconn->query($querySQL);
            foreach($result as $current){
                //Set the user's hashed password to variable:
                $passwordHash = $current["passwordHash"];
            }
        }
    }
    //Check if the hashed input matches the user's hashed password:
    if($saltAndPepperPasswordInputChecksum == $passwordHash){
        //If the password is correct, we can set the SESSION userName and userID values:
        $_SESSION["userName"] = $username;
        $_SESSION["userID"] = $userID;
        //Redirect the user
        ?>
        <script type="text/javascript">
            window.location.replace("index.php");
        </script>
        <?php
    }else{
        //If password incorrect then Set the username or password incorrect value to TRUE
        $incorrect = TRUE;
    }
}
    if($incorrect){
?>        
    <main>
        <div class = "container">
            <div class="card loginfailed">
                <div class="card-body">
                    <h5 class="card-title"> Username or Password Incorrect </h5>
                    <i class="bi-exclamation-diamond-fill" style="font-size: 5em "></i>
                    <hr>
                    <button  class="btn btn-info btn-lg"  data-toggle="modal" data-target="#loginModal"> <a href="#" style = "text-decoration: none; color: black;">Try Again &nbsp;<i class="bi-arrow-clockwise" style="font-size: 1em"></i></a>  </button>  
                </div>
            </div>
        </div>
    </main>
<?php
} 
?>