<?php
include("condb.php");
session_start();
//session_destroy();
//echo '<pre>';
//var_dump($_SESSION);
//echo '</pre>';
//$movie = $_POST[''];
//$row2 = $_SESSION['payment'];
//$row = $_SESSION['user'];
//$user=$row['user'];
$email = $_SESSION['Email'];
$Email = $_SESSION['Email'];
$name = $_SESSION['Name'];
$Status = $_SESSION['Status'];
if ($Status != 'member') {
  Header("Location: logout.php");
}

$sql = "SELECT * FROM user
      WHERE  Email='" . $email . "' ";
$sql = mysqli_query($con, $sql);
$sql = mysqli_fetch_array($sql);
$idd = $sql['Id_User'];

$sql1 = "SELECT * FROM payment
      WHERE  Id_Payment=$idd ";

$result1 = mysqli_query($con, $sql1);
$payment = mysqli_fetch_array($result1);
$Credit = $payment['Card_Number'];

$sql = "SELECT * FROM profile
      WHERE  Id_User='" . $sql['Id_User'] . "' ";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$picture = $row['Picture'];
$username = $row['Username'];
$date = $row['Signup_date'];

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./CSS/pro.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.css">
    <script src="https://use.fontawesome.com/ec8f23c06d.js"></script>
    <link rel="stylesheet" href="./CSS/sidebar.css">
  <title>Profile</title>
  <style>
        .sidebar a.logout {
      color: #FF0004;
      font-weight: bold;
    }</style>
</head>

<body>
  <nav>
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="image/Movie2freetext.png" class="logo" style="width:30%"><a href="#default"></a>
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="home.php?name=<?= $Email ?>"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="Allmovie.php?name=<?= $Email ?>"><i class="far fa-images"></i><span>Movie</span></a>
        <a href="favorite.php?name=<?= $Email ?>"><i class="far fa-heart"></i><span>Favorites</span></a>
        <a  class="active"href="pro.php?name=<?= $Email ?>"><i class="fas fa-user-circle"></i><span>Profile</span></a>
        <a  href="history.php?name=<?= $Email ?>"><i class="fas fa-info-circle"></i><span>History</span></a>
        <a class="logout" href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
      </div>
    </div>
  </nav>
  <!--mobile navigation bar end-->
  <!--sidebar start-->
  <nav class="sidebar">
    <div class="profile_info">
      <img src="image/Movie2freetext.png" class="logo" style="width:40%"><a href="#default"></a>
    </div>
    <input class="searchnav" style="margin-left: 20px; margin-top:20px; margin-bottom:20px;" type="text" name="keyword" placeholder="Search..">
    <button type="submit" name="button" class="icon">
      <span class="fas fa-search"></span>
    </button>
    <a href="home.php?name=<?= $Email ?>"><i class="fas fa-home"></i><span>Home</span></a>
    <a href="Allmovie.php?name=<?= $Email ?>"><i class="far fa-images"></i><span>Movie</span></a>
    <a href="favorite.php?name=<?= $Email ?>"><i class="far fa-heart"></i><span>Favorites</span></a>
    <a class="active" href="pro.php?name=<?= $Email ?>"><i class="fas fa-user-circle"></i><span>Profile</span></a>
    <a  href="history.php?name=<?= $Email ?>"><i class="fas fa-info-circle"></i><span>History</span></a>
    <a class="logout" href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
  </nav>
  <section class="main_pro">
    <div class="container bootstrap snippet">
      <div class="row">
        <div class="col-sm-10">
          <h1><?php echo $username; ?></h1>
        </div>
        <div class="col-sm-2"><a href="/users" class="pull-right"><img title="" class="img-circle img-responsive" src=""></a></div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <!--left col-->


          <div class="text-center">
            <?php echo '<img src="' . $picture . '" class="avatar img-circle img-thumbnail" alt="avatar">'; ?>
            <h6>Upload a different photo...</h6>
            <form enctype="multipart/form-data" action="pro.php" method="POST">

              <input type="file" name="uploaded_file"></input>
              <input type="submit" value="อัพโหลด"></input>
            </form>
          </div>
          <?php
          if (!empty($_FILES['uploaded_file'])) {
            $path = "image/profile/";
            $path = $path . basename($_FILES['uploaded_file']['name']);
            $imageFileType = strtolower(pathinfo($path, PATHINFO_EXTENSION));
            if ($_FILES["uploaded_file"]["size"] > 5000000) {
              echo "Sorry, your file is too large.";
            } else if (
              $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
              && $imageFileType != "gif"
            ) {
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            } else if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
              echo "The file " .  basename($_FILES['uploaded_file']['name']) .
                " has been uploaded";

              $newpic = basename($_FILES['uploaded_file']['name']);
              // $sql2 = "UPDATE `profile` SET `Picture` = 'image/profile/$newpic' WHERE `profile`.`Username` = '$username'";

              $sql2 = "UPDATE `profile` SET `Picture` = 'image/profile/$idd.jpg' WHERE `profile`.`Username` = '$username'";
              $sql2 = mysqli_query($con, $sql2);
              rename($path, "image/profile/" . $idd . ".jpg");
              $picture = $row['Picture'];
              //header("Refresh:0");
            } else {
              echo "There was an error uploading the file, please try again!";
            }
          } ?>

          </hr><br>

        </div>
        <!--/col-3-->
        <div class="col-sm-9">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" href="#account">Account</a></li>
            <li><a data-toggle="tab" href="#plan">Activity</a></li>
            <!--	<li><a href="profile.php">Settings</a></li> -->
            <!-- <li><a data-toggle="tab" href="#settings">Menu 2</a></li> -->
          </ul>


          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <hr>
              <form class="form" action="checkaccount.php" method="post" id="registrationForm">
                <div class="form-group">

                  <div class="col-xs-6">
                    <label for="first_name">
                      <h4>First name : <?php echo $row['First_Name']; ?></h4>
                    </label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                  </div>
                </div>
                <div class="form-group">

                  <div class="col-xs-6">
                    <label for="last_name">
                      <h4>Last name : <?php echo $row['Last_Name']; ?></h4>
                    </label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                  </div>
                </div>

                <div class="form-group">

                  <div class="col-xs-6">
                    <label for="phone">
                      <h4>Phone : <?php echo $row['Phone']; ?></h4>
                    </label>
                    <input type="text" pattern="0[0-9]{9}" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-xs-6">
                    <label for="mobile">
                      <h4>Mobile : <?php echo $row['Mobile']; ?></h4>
                    </label>
                    <input type="text" pattern="0[0-9]{9}" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                  </div>
                </div>
                <div class="form-group">

                  <div class="col-xs-6">
                    <label for="email">
                      <h4>Location : <?php echo $row['Location']; ?></h4>
                    </label>
                    <input type="text" class="form-control" name="location" id="location" placeholder="somewhere" title="enter a location">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-12">
                    <br>
                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                  </div>
                </div>
              </form>

              </hr>

            </div>

            <!--/tab-pane-->
            <div class="tab-pane" id="account">

              <h2> </h2>
              <hr>
              <form class="form" action="##" method="post" id="registrationForm">
                <div class="form-group">

                  <!-- <div class="col-xs-6">
                  <label for="first_name">
                    <h4><?php echo "Username : " . $name; ?></h4>
                  </label>
                </div> -->
                  <div class="col-xs-6">
                    <label for="first_name">
                      <h4><?php echo "Status : " . $Status; ?></h4>
                    </label>
                  </div>

                  <div class="col-xs-6">
                    <label for="first_name">
                      <h4>Email :<?php echo " " . $email; ?> </h4>
                    </label>
                    <!-- <a class="btn" href="email.php"><i class="icon-edit"></i> <span class="glyphicon glyphicon-pencil"></span></a> -->
                  </div>
                </div>
                <div class="form-group">

                  <div class="col-xs-6">
                    <label for="first_name">
                      <h4>Password :<?php echo " *******"; ?> </h4>
                    </label>
                    <a class="btn" href="password.php"><i class="icon-edit"></i> <span class="glyphicon glyphicon-pencil"></span></a>
                  </div>
                </div>

                <div class="form-group">

                  <div class="col-xs-6">
                    <label for="cardnumber">
                      <h4>Card number :<?php echo " " . $Credit; ?> </h4>
                    </label>
                    <a class="btn" href="changecredit.php"><i class="icon-edit"></i> <span class="glyphicon glyphicon-pencil"></span></a>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-xs-6">
                    <label for="cardnumber">
                      <h4>Current Subscription plan :<?php echo " " . $payment['Package']; ?> </h4>
                    </label>
                    <a class="btn" href="changeplan.php"><i class="icon-edit"></i> <span class="glyphicon glyphicon-pencil"></span></a>
                  </div>
                </div>

                <div class="form-group">
                  <!-- <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
							   
                            </div> -->
                </div>
              </form>
              </hr>

            </div>

            <div class="tab-pane" id="plan">

              <?php
              $pathx = "./image/";

              $sqlh1 = "SELECT * FROM `history` WHERE history.Username = '$username' ORDER BY DateTime DESC LIMIT 1";

              $resulth1 = mysqli_query($con, $sqlh1);
              $resulth1 = mysqli_fetch_array($resulth1);
              if ($resulth1 > 1) {
                $id1 = $resulth1['Id_Movies'];
                $sqlmovie1 = "SELECT * FROM `movies` WHERE movies.Id_Movies='$id1' ";
                $moviename1 = mysqli_query($con, $sqlmovie1);
                $moviename1 = mysqli_fetch_array($moviename1);
                $file1 = trim($moviename1['img']);
                $moviename1 = $moviename1['Movie_Name'];

                $date1 = $resulth1['DateTime'];
                $string1 = "$moviename1 $date1";
              } else {
                $string1 = "";
                $file1 = "";
              }
              $sqlh2 = "SELECT * FROM `history` WHERE history.Username = '$username' ORDER BY DateTime DESC LIMIT 1,1";

              $resulth2 = mysqli_query($con, $sqlh2);
              $resulth2 = mysqli_fetch_array($resulth2);
              if ($resulth2 > 1) {
                $id2 = $resulth2['Id_Movies'];
                $sqlmovie2 = "SELECT * FROM `movies` WHERE movies.Id_Movies='$id2' ";
                $moviename2 = mysqli_query($con, $sqlmovie2);
                $moviename2 = mysqli_fetch_array($moviename2);
                $file2 = trim($moviename2['img']);
                $moviename2 = $moviename2['Movie_Name'];
                $date2 = $resulth2['DateTime'];
                $string2 = "$moviename2 $date2";
              } else {
                $string2 = "";
                $file2 = "";
              }
              $sqlh3 = "SELECT * FROM `history` WHERE history.Username = '$username' ORDER BY DateTime DESC LIMIT 2,1";

              $resulth3 = mysqli_query($con, $sqlh3);
              $resulth3 = mysqli_fetch_array($resulth3);
              if ($resulth3 > 1) {
                $id3 = $resulth3['Id_Movies'];
                $sqlmovie3 = "SELECT * FROM `movies` WHERE movies.Id_Movies='$id3' ";
                $moviename3 = mysqli_query($con, $sqlmovie3);
                $moviename3 = mysqli_fetch_array($moviename3);
                $file3 = trim($moviename3['img']);
                $moviename3 = $moviename3['Movie_Name'];
                $date3 = $resulth3['DateTime'];
                $string3 = "$moviename3 $date3";
              } else {
                $string3 = "";
                $file3 = "";
              }
              $sqlh4 = "SELECT * FROM `history` WHERE history.Username = '$username' ORDER BY DateTime DESC LIMIT 3,1";

              $resulth4 = mysqli_query($con, $sqlh4);
              $resulth4 = mysqli_fetch_array($resulth4);
              if ($resulth4 > 1) {
                $id4 = $resulth4['Id_Movies'];
                $sqlmovie4 = "SELECT * FROM `movies` WHERE movies.Id_Movies='$id4' ";
                $moviename4 = mysqli_query($con, $sqlmovie4);
                $moviename4 = mysqli_fetch_array($moviename4);
                $file4 = trim($moviename4['img']);
                $moviename4 = $moviename4['Movie_Name'];
                $date4 = $resulth4['DateTime'];
                $string4 = "$moviename4 $date4";
              } else {
                $string4 = "";
                $file4 = "";
              }
              $sqlh5 = "SELECT * FROM `history` WHERE history.Username = '$username' ORDER BY DateTime DESC LIMIT 4,1";

              $resulth5 = mysqli_query($con, $sqlh5);
              $resulth5 = mysqli_fetch_array($resulth5);
              if ($resulth5 > 1) {
                $id5 = $resulth5['Id_Movies'];
                $sqlmovie5 = "SELECT * FROM `movies` WHERE movies.Id_Movies='$id5' ";
                $moviename5 = mysqli_query($con, $sqlmovie5);
                $moviename5 = mysqli_fetch_array($moviename5);
                $file5 = trim($moviename5['img']);
                $moviename5 = $moviename5['Movie_Name'];
                $date5 = $resulth5['DateTime'];
                $string5 = "$moviename5 $date5";
              } else {
                $string5 = "";
                $file5 = "";
              }

              echo '<ul class="list-group">
          <li class="list-group-item text-muted">Recent watching activity <i class="fa fa-dashboard fa-1x"></i></li>
          <li class="list-group-item text-right"><img src = "' . $pathx . $file1 . '" class="image" style="width:10%"><span class="pull-left"><a style=font-size:13px>' . $string1 . ' </a></span> </li>
          <li class="list-group-item text-right"><img src = "' . $pathx . $file2 . '" class="image" style="width:10%"><span class="pull-left"><a style=font-size:13px>' . $string2 . ' </a></span> </li>
          <li class="list-group-item text-right"><img src = "' . $pathx . $file3 . '" class="image" style="width:10%"><span class="pull-left"><a style=font-size:13px>' . $string3 . ' </a></span> </li>
		  <li class="list-group-item text-right"><img src = "' . $pathx . $file4 . '" class="image" style="width:10%"><span class="pull-left"><a style=font-size:13px>' . $string4 . ' </a></span> </li>
		  <li class="list-group-item text-right"><img src = "' . $pathx . $file5 . '" class="image" style="width:10%"><span class="pull-left"><a style=font-size:13px>' . $string5 . ' </a></span> </li>
          <li class="list-group-item text-right"><span class="pull-left"><a href="activity.php"> more </a></span> </li>
        </ul>';



              ?>

            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <br>
              <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
            </div>
          </div>
          </form>
        </div>

      </div>
      <!--/tab-pane-->
    </div>
    <!--/tab-content-->

    </div>
    <!--/col-9-->
    </div>
    <!--/row-->
  </section>
  <script type="text/javascript">
      $(document).ready(function() {
        $('.nav_btn').click(function() {
          $('.mobile_nav_items').toggleClass('active');
        });
      });
    </script>
  </body>
  </html>