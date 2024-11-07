<?php 
  session_start();
  include('connect.php');


  if (isset($_SESSION['uid'])) {
    include('header_inlogin.php');

    $loginuserid=$_SESSION['uid'];
    
  }else{
    include('header.php');
    $loginuserid="";
  }
 ?>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h2>Note Taking Website</h2>
            <p>Keep your information securely and Access them efficiently</p>
          </div>
        </div>
      </div>
    </div>
  </header>


<div class="clearfix mr-5" id="thisis">
          <a class="btn btn-primary float-right" href="index.php#thisis">More</a>
        </div>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <!-- <div class="col-lg-8 col-md-10 mx-auto"> -->
        <?php 
          if ($loginuserid=="") {
            
          }else{
            $selectnote="select * from note where userid=$loginuserid";
            $runselectnote=mysqli_query($connection,$selectnote);
            $countofnote=mysqli_num_rows($runselectnote);
            if ($countofnote>0) {
              for ($i=0; $i <$countofnote ; $i++) { 
                $dataofnote=mysqli_fetch_array($runselectnote);
                $noteid=$dataofnote['noteid'];
                $title=$dataofnote['title'];
                $note=$dataofnote['note'];
                $modifieddate=$dataofnote['modifieddate'];

                echo "<div class='post-preview col-lg-4'>";
                echo "<a href='post.php?noteid=$noteid'>";
                echo "<h4>
              $title
            </h4>";
              echo "<p class='post-subtitle' style='font-size: 16px;      width: 250px;
     white-space: nowrap;
     overflow: hidden;
     text-overflow: ellipsis;'>
              $note
            </p>";
              echo "</a>
          <p class='post-meta'>Last Modified at : $modifieddate
            </p>
            <hr>
        </div>";
              }
            }
          }
          
         ?>
    </div>
  </div>

<?php 
        include('footer.php');

 ?>