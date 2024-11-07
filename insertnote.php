<?php 
	session_start();
	include('connect.php');

	if (isset($_SESSION['uid'])) {
		include('header_inlogin.php');
		$userid=$_SESSION['uid'];
	}else{
	    echo "<script>window.alert('Please login firstly!')</script>";
        echo "<script>window.location='login.php'</script>";
	}

  if (isset($_POST['btninsert'])) {
    $title=$_POST['title'];
    $note=$_POST['note'];
    $tdy=date("Y-m-d");

    $insertnote="insert into note(title,note,userid,modifieddate) values('$title','$note','$userid','$tdy')";
    $runinsertnote=mysqli_query($connection,$insertnote);
    if ($runinsertnote) {
      echo "<script>window.alert('Saved successfully')</script>";
    }
  }

 ?>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/contact-bg.jpg'); height: 200px;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
          </div>
        </div>
      </div>
    </div>
  </header>


   <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <center><p>Please write your note</p></center>
        <form name="sentMessage" id="contactForm" method="post" autocomplete="off">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Title</label>
              <input type="text" class="form-control" placeholder="Title" id="name" name="title" autocomplete="off" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Note</label>
              <textarea rows="10" class="form-control" placeholder="Note" id="message" name="note" required data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <input type="submit" name="btninsert" class="btn btn-primary" id="sendMessageButton" value="Save">
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
  <hr>
<?php 
	include('footer.php');
 ?>
