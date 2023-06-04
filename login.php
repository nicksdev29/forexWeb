   <?php
    session_start();
    include 'connection.php';
    include 'header.php';
    ?>
   <div class="container">
   <div class="row g-2">
   <div class="col-mb-12" style="width: 30%; margin-left: auto; margin-right: auto;">
<br><br>
<form action="" method="POST">
	<h4 align="center" class="text-primary text-uppercase">Login / Registration</h4>
  <!-- Email input -->
  <div class="form-outline">
    <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" required />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="password" id="form2Example2" class="form-control" placeholder="password" required/>
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <center><input type="submit" class="btn btn-primary btn-block mb-4" name="login_btn" value="SIGN IN"/></center>
  <?php
  if(isset($_SESSION['error'])){
    $error=$_SESSION['error'];
    echo "<p class='bg-danger p-2 text-white'>".$error."</p>";
    unset($_SESSION['error']);

  }
  ?>
  

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="register.php">Register</a></p>
    <p>or Login with:</p>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>

</div>

</div>
</div>
<?php
  if (isset($_POST['login_btn'])) {
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $pass=mysqli_real_escape_string($con,$_POST['password']);
  $sql="SELECT * FROM registration WHERE `email`='{$email}' AND `password`='{$pass}'";
  $query=mysqli_query($con,$sql);
  $data=mysqli_num_rows($query);
  if($data) {
?>
  <script type="text/javascript">
    console.log('data received', <?php print_r($data) ?>)
  window.location.href = 'user/static/index.php';</script>
<?php
    // header("location:after-login.php");
  }
else
{
  
  $_SESSION['error']="ivalid email/password";

  
}
}
?>
<br>
  <?php include 'footer.php';?>
 
  