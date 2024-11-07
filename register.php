<?php  
  include('connect.php');

  if (isset($_POST['btnregister'])) {
    $username=$_POST['username'];
    $useremail=$_POST['useremail'];
    $userpass=$_POST['userpass'];
    $usercpass=$_POST['usercpass'];

    if ($userpass==$usercpass) {
      $insertuser="insert into user(username,useremail,userpassword) values('$username','$useremail','$usercpass')";
      $runinsertuser=mysqli_query($connection,$insertuser);
      if ($runinsertuser) {
        echo "<script>window.alert('Your account is successfully created!')</script>";
        echo "<script>window.location='login.php'</script>";
      }else{
        echo "<script>window.alert('Fail account registration!')</script>";
        mysqli_error($connection);
      }
    }else{
                echo "<script>window.alert('Password and Confirm password must be same!')</script>";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
</head>
<body>
  <hr>
 <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h2>Registration Form</h2>
        <form name="sentMessage" id="contactForm" method="post">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Name" id="name" name="username" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email Address</label>
              <input type="email" class="form-control" placeholder="Email Address" id="email" name="useremail" required data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Password</label>
              <input type="Password" class="form-control" placeholder="Password" id="phone" name="userpass" required data-validation-required-message="Please enter your phone number.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Password</label>
              <input type="Password" class="form-control" placeholder="Confirm Password" id="phone" name="usercpass" required data-validation-required-message="Please enter your phone number.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <input type="submit" class="btn btn-primary" id="sendMessageButton" name="btnregister" value="Register">
          <a href="login.php" class="btn btn-primary" id="sendMessageButton">
            Back
          </a>
        </form>
      </div>
    </div>
  </div>
  <hr>
</body>
</html>
