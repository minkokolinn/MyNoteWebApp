<?php 
  include('connect.php');
  include('header_inlogin.php');

  if (isset($_REQUEST['noteid'])) {
    $noteid=$_REQUEST['noteid'];

    $selectnote="select * from note where noteid=$noteid";
    $runselectnote=mysqli_query($connection,$selectnote);
    $countofnote=mysqli_num_rows($runselectnote);
    if ($countofnote==1) {
      $dataofnote=mysqli_fetch_array($runselectnote);

      $title=$dataofnote['title'];
      $note=$dataofnote['note'];
    }
  }
 ?>
  <header class="masthead" style="background-image: url('img/home-bg.jpg'); height: 70px;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php 
            echo "<h2 class='section-heading'>$title</h2>";
            echo "<p>$note</p>";
           ?>
           <a class="btn btn-primary float-right" href="<?php echo "notedelete.php?noteid=$noteid" ?>">Delete</a>
        </div>
      </div>
    </div>
  </article>

  <hr>

<?php 
  include('footer.php');
 ?>