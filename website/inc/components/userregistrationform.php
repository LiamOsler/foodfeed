<script>
function showUserResult(str) {
  if (str.length==0) {
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == XMLHttpRequest.DONE) {
        console.log(xmlhttp.responseText);
        if(xmlhttp.responseText.includes("Username is already taken")){
            document.getElementById("validationUsername").setCustomValidity("Username is already in use");
        }
        if(xmlhttp.responseText.includes("Username is valid")){
            document.getElementById("validationUsername").setCustomValidity('');
        }
    }

  }
  xmlhttp.open("GET","db/checkusername.php?username="+str, true);
  xmlhttp.send();
}

function showEmailResult(str) {
  if (str.length==0) {
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == XMLHttpRequest.DONE) {
        console.log(xmlhttp.responseText);
        if(xmlhttp.responseText.includes("Email is already taken")){
            document.getElementById("validationEmail").setCustomValidity("Email is already in use");
        }
        if(xmlhttp.responseText.includes("Email is valid")){
            document.getElementById("validationEmail").setCustomValidity('');
        }
    }

  }
  xmlhttp.open("GET","db/checkuseremail.php?email="+str, true);
  xmlhttp.send();
}


</script>

<form action = "userregistration.php" method = "POST">
    <h5><i class="bi bi-person-lines-fill"></i> About You</h5>
    <div class="form-row">
        <div class="col-md-6 mb-6">
            <label for="validationf_name">First name</label>
            <input type="text" class="form-control" name = "f_name" id="validationf_name" placeholder="First name" value="" required>
        </div>
        <div class="col-md-6 mb-6">
            <label for="validationl_name">Last name</label>
            <input type="text" class="form-control" name = "l_name" id="validationl_name" placeholder="Last name" value="" required>
        </div>

    </div>
    <hr>

    <h5><i class="bi bi-envelope-open"></i> Contact Information</h5>
    <div class="form-row">
        <div class="col-md-6 mb-6">
        <label for="validationEmail">Email address</label>
        <input type="email" class="form-control" name = "email" id="validationEmail" aria-describedby="emailHelp" placeholder="Enter email" onkeyup="showEmailResult(this.value)" required>
        </div>
        <div class="col-md-6 mb-6">
            <label for="validationPhone">Phone Number</label>
            <input type="phone" class="form-control" name = "phone" id="validationPhone" placeholder="Phone Number" pattern="^([0-9]{3})-?\s?([0-9]{3})-?\s?([0-9]{4})$" value="" required>
        </div>

    </div>
    <hr>

    <!-- onkeyup="showEmailResult(this.value)" -->

    <h5><i class="bi bi-house-door"></i> Address</h5>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationStreet">Street Address</label>
            <input type="text" class="form-control" id="validationStreet" name="street" placeholder="Street" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationCity">City</label>
            <input type="text" class="form-control" id="validationCity" name="city" placeholder="City" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationState">Province</label>
            <input type="text" class="form-control" id="validationProvince" name="province" placeholder="Province" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationZip">Postal Code</label>
            <input type="text" class="form-control" id="validationZip" name="postal"  placeholder="Postal Code" required>
        </div>
    </div>

    <hr>
    <h5><i class="bi bi-door-open"></i> Login Credentials</h5>
    <div class="form-row">
        <div class="col-md-6 mb-6">
            <label for="validationUsername">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend1"><i class="bi bi-person-badge"></i></span>
                </div>
                <input type="text" class="form-control" id="validationUsername" name="username"  placeholder="Username" aria-describedby="inputGroupPrepend1" onkeyup="showUserResult(this.value)" required>
            </div>
        </div>
        
        <div class="col-md-6 mb-6">
            <label for="psw">Password</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2"><i class="bi bi-key"></i></span>
                </div>
                <input type="password" class="form-control" id="psw" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div>    
        </div>

        <div id="username-search"></div>
    </div>
 
    
    <hr>
    <h5>Terms and Conditions</h5>
    <div class="form-group">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="termsCheck" required>
        <label for="termsCheck">Agree to terms and conditions
        </label>
        </div>
    </div>
    <div class="text-center">
    <button class="btn btn-info btn-lg" type="submit">Create Account <i class="bi-person-plus"></i></button>
    </div>
</form>

