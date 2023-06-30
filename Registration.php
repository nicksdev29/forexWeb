<?php include 'header.php';?>
<?php include 'connection.php';?>

<div class="container">
<div class="row g-2">


<div class="col-mb-12" style="width: 30%; margin-left: auto; margin-right: auto;">
<br><br>
  
<form method="POST">
  <h3 align="center" class="text-primary text-uppercase">Registration</h3>
  <!-- Email input -->
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">User Name</label>
    <input type="text" id="form2Example1" class="form-control" name="username"/>
    
  </div>

  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example1">Email Address</label>
    <input type="email" id="form2Example1" class="form-control" name="email" />
    
  </div>

  <!-- Password input -->
  <div class="form-outline mb-2">
       <label class="form-label" for="form2Example2">Password</label>
    <input type="password" id="form2Example2" class="form-control" name="password" />
 
</div>

  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example2">Confirm Password</label>
    <input type="password" id="form2Example2" class="form-control" name="con_password" />
    
  </div>
  <div class="form-outline mb-2">
    <label class="form-label" for="form2Example2">Mobile Number</label>
    <input type="number" id="form2Example2" class="form-control" name="mobile" />
    
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
       <!-- <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>-->
      </div>
    </div>

    <!--<div class="col">
    
      <a href="#!">Forgot password?</a>
    </div>
  </div>-->

  <!-- Submit button -->
  <center><input type="submit" class="btn btn-primary btn-block mb-4" name="register_btn" value="Save"/></center>

  
  <!-- Register buttons -->
  <div class="text-center">
    <p>Already have an account <a href="login.php">Login Here</a></p>
    <p>or sign up with:</p>
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
</div>
</div>

<?php include 'footer.php';?>