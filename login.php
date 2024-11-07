<?php 
	session_start();
	include('header.php');
	include('connect.php');

	if (isset($_POST['btnlogin'])) {
		$useremail=$_POST['useremail'];
		$userpass=$_POST['userpass'];

		$selectuser="SELECT * from user where useremail='$useremail' and userpassword='$userpass'";
		$runselectuser=mysqli_query($connection,$selectuser);
		$countofuser=mysqli_num_rows($runselectuser);
		if ($countofuser==1) {
			echo "<script>window.alert('Login successful')</script>";
        	echo "<script>window.location='index.php'</script>";

        	$dataofuser=mysqli_fetch_array($runselectuser);
        	$_SESSION['uid']=$dataofuser['userid'];
		}else{
			echo "<script>window.alert('Login fail')</script>";
		}
	}
 ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Login here</h1>
            <span class="subheading">Without login with an authorised account, you cannot take note!</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="col-lg-8 col-md-10 mx-auto">
        <form name="sentMessage" id="contactForm" method="post">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email Address</label>
              <input type="email" class="form-control" placeholder="Email Address" id="name" name="useremail" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Password</label>
              <input type="Password" class="form-control" placeholder="Password" id="email" name="userpass" required data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>

          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton" name="btnlogin">Login</button>
          <br><br>
          <a href="register.php">Click to register an account!</a>
        </form>
      </div>
    </div>
  </div>	

 <?php 
 	include('footer.php');
  ?>