<form action = "loginpage.php" method = "POST">
    <div class="form-group">
        <label for="usernameInput" hidden>Username</label>
        <input type="username" class="form-control" id="usernameInput" aria-describedby="usernameHelp" placeholder="Username" name = "username" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" hidden>Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "password">
    </div>
    <div class="text-center">
        <button class="btn btn-info btn-lg login-button"  type="submit" >Login <i class="bi-person-check-fill"></i></button>
    </div>
</form>

