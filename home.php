<?php session_start();
include('condb.php');
$Email = $_SESSION['Email'];
// print($Email);
$Status = $_SESSION['Status'];
if ($Status != 'member') {
  Header("Location: logout.php");
}
if (!isset($_GET["button"])) {
  $sql = "SELECT movies.Id_Movies , movies.Movie_Name , movies.img, movies.Short_Story , movies.Actor, movies.Time, movies.Studio, movies.Director, movies.Type, movies.Runtime ,COUNT(history.DateTime) FROM movies JOIN history ON movies.Id_Movies = history.Id_Movies GROUP BY movies.Id_Movies ORDER BY COUNT(history.DateTime) DESC";
  $result = mysqli_query($con, $sql);
} else {
  $value = "%" . $_GET["keyword"] . "%";
  $sql = "SELECT * FROM movies WHERE movies.Movie_Name LIKE '$value'";
  $result = mysqli_query($con, $sql);
  // print_r($result);
}

?>
<!DOCTYPE html>
<html>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="./CSS/home.css">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.css">
    <script src="https://use.fontawesome.com/ec8f23c06d.js"></script>
  <link rel="stylesheet" href="./CSS/sidebar.css">

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f3f3f3
    }

    .text {
      margin: 2%;
      color: rgba(255, 255, 255, 0.5);
      ;
    }


    .sidebar a.logout {
      color: #FF0004;
      font-weight: bold;
    }

    .header-right {
      float: right;
    }

    .header-mid {
      text-align: center;
      line-height: 25px;
      border-radius: 10px;
      float: center;
    }

    div.gallery {
      margin: 10%;
      margin-bottom: 500px;
      border: 1px solid #ccc;
      float: left;
      width: 300px;
    }

    div.gallery:hover {
      border: 1px solid #777;
    }

    div.gallery img {
      width: 100%;
      height: auto;
    }

    div.desc {
      background-color: #303030;
      /*padding: 15px;*/
      padding-top: 25%;
      padding-bottom: 25%;
      color: white;
      text-align: center;
    }

    .zoom {
      padding: -5px;

      transition: transform .45s;
      /* Animation */
      width: 40px;
      height: 40px;
      margin: 0 auto;
    }

    .zoom:hover {
      transform: scale(1.25);
      /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

    #myVideo {
      position: relative;
      right: 0;
      bottom: 0;
      min-width: 100%;
      min-height: 100%;
      filter: contrast(80%);
      /* Make video to at least 100% wide and tall */

      /* Setting width & height to auto prevents the browser from stretching or squishing the video */
      width: auto;
      height: auto;
    }

    .content {
      position: fixed;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      color: #f1f1f1;
      width: 100%;
      padding: 20px;
    }

    .centered {
      width: relative;
      position: absolute;
      top: 65%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 100px;
      font: Arial;
      color: #ffffff;
      /*background-color: #ddd;*/
      /*padding: relative;*/
      /*background: rgba(0, 0, 0, 0.5);*/
      text-align: center;
    }

    .vcontainer {
      position: relative;
      text-align: center;
      color: black;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    .acontainer {
      height: relative;
      /*overflow-x: scroll;
      overflow-y: hidden;*/
      overflow-x: hidden;
      margin: 3%;
      position: relative;
    }

    /* width */
    ::-webkit-scrollbar {
      width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

    .container {
      position: relative;
      width: 50%;
      max-width: 300px;
      transition: transform .45s;
      margin: 0 auto;
    }

    .container:hover {
      transform: scale(1.25);
    }

    .image {
      display: block;
      width: 100%;
      height: auto;
    }

    .overlay {
      position: absolute;
      bottom: 0;
      background: rgb(0, 0, 0);
      background: rgba(0, 0, 0, 0.5);
      /* Black see-through */
      color: #f1f1f1;
      width: 100%;
      transition: .5s ease;
      opacity: 0;
      color: white;
      font-size: 20px;
      padding: 20px;
      text-align: center;
    }

    .container:hover .overlay {
      opacity: 1;
    }

    .lowend {
      /* position: fixed; */
      bottom: 0;
      height: 15%;
      width: 100%;
      background: rgba(0, 0, 0, 0.5);
      padding: 15px;
      text-align: right;
    }

    .fa {
      padding: 20px;
      font-size: 25px;
      width: 100px;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
      border-radius: 0%;
    }

    .fa-twitter {
      background: #55ACEE;
      color: white;
    }

    .fa-facebook {
      background: #3B5998;
      color: white;
    }

    .fa-google {
      background: #dd4b39;
      color: white;
    }

    .fa-instagram {
      background: #125688;
      color: white;
    }

    .searchnav {
      overflow: hidden;
      /*background-color:#10101010;*/
    }

    .searchnav input[type=text] {
      float: left;
      padding: 6px;
      margin: 8px;
      margin-left: 16px;
      /*border: none;*/
      font-size: 17px;
      background: rgba(0, 0, 0, 0.5);
      color: white;
      border-style: solid;
      border-color: rgba(255, 255, 255, 0.25);
      border-radius: 5px;
    }

    .searchnav input[type=submit] {
      float: left;
      color: white;
      text-align: center;
      background: rgba(0, 0, 0, 0.5);
      margin-top: 8px;
      margin-bottom: 8px;
      padding: 4px;
      text-decoration: none;
      font-size: 18px;
      line-height: 25px;
      border-style: solid;
      border-color: rgba(255, 255, 255, 0.25);
      border-radius: 5px;
    }

    .apisit {
      color: white;
      background: #181818;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 25px;
      line-height: 25px;
      border-radius: 10px;
    }

    .apisit:hover {
      color: black;
      background: white;

    }

  </style>

  <title>Home</title>
</head>


<body style="background-color:#181818;">
    
  <!--mobile navigation bar start-->
  <nav class="mobile_nav">
    <div class="nav_bar">
      <img src="image/Movie2freetext.png" class="logo" style="width:30%"><a href="#default"></a>
      <i class="fa fa-bars nav_btn"></i>
    </div>
    <div class="mobile_nav_items">
      <a class="active" href="home.php?name=<?= $Email ?>"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="Allmovie.php?name=<?= $Email ?>"><i class="far fa-images"></i><span>Movie</span></a>
      <a href="favorite.php?name=<?= $Email ?>"><i class="far fa-heart"></i><span>Favorites</span></a>
      <a href="pro.php?name=<?= $Email ?>"><i class="fas fa-user-circle"></i><span>Profile</span></a>
      <a href="history.php?name=<?= $Email ?>"><i class="fas fa-info-circle"></i><span>History</span></a>
      <a class="logout" href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
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
    <a class="active" href="home.php?name=<?= $Email ?>"><i class="fas fa-home"></i><span>Home</span></a>
    <a href="Allmovie.php?name=<?= $Email ?>"><i class="far fa-images"></i><span>Movie</span></a>
    <a href="favorite.php?name=<?= $Email ?>"><i class="far fa-heart"></i><span>Favorites</span></a>
    <a href="pro.php?name=<?= $Email ?>"><i class="fas fa-user-circle"></i><span>Profile</span></a>
    <a href="history.php?name=<?= $Email ?>"><i class="fas fa-info-circle"></i><span>History</span></a>
    <a class="logout" href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
  </nav>
  <section class="main">
    <div class="vcontainer">
      <video autoplay muted loop id="myVideo">
        <source src="image/dp2t.mp4" style="width: 100%;" type="video/mp4">
      </video>
      <div class="centered">
        <h3 style="font-size:5vh;">Welcome <?php echo $name; ?></h3>
        <h6 style="font-size:5vh;">Enjoy the shows.</h6>
      </div>
    </div>
    <br>
    <br>
    <div class="searchnav">
      <div class="text" style="margin-left:16px ; font-size:30px">
        <h1 style="font-size:4vh; margin:20px;">Top picks for you</h1>
      </div>
    </div>
    <br>
    <?php
    echo '<div class="slider">';
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      $pathx = "./image/";
      echo '<div class="acontainer">';
      $con = 0;
      while ($row = mysqli_fetch_array($result)) {
        $file = trim($row["img"]);
        $movie = $row["Id_Movies"];
        echo "<script>console.log(" . $con . "+ ':' +" . $movie . ");</script>";
        if ($con == 8) {
          break;
        }
        echo '<div class="container"style=" margin:1.5%;margin-bottom:10%;
      border: 1px solid #ccc;
      float: left;
      width: 300px;border:none">';

        // echo $movie;
        // echo '<img src = "' . $pathx . $file . '.jpg" class="image" style="width:100%"></a>' . "<br>";
        echo '<a href="AddtoHis.php?Idmovie=' . $movie . '"><img src = "' . $pathx . $file . '" class="image" style="width:100%;height:480px;border-style: double;border-color:grey;border-width:4px;border-radius:5%"></a>' . "<br>";
        echo '<div class="overlay">';

        // echo "Movie : " . $row["Movie_Name"] . " Actor: " . $row["Actor"] . " Date: " . $row["Time"] . " Studio: " . $row["Studio"] . " Director: " . $row["Director"] . " Runtime: " . $row["Runtime"] . "<br>";
        echo "Movie Name: " . $row["Movie_Name"] . "<br>" . "???????????????????????????????????? : " . $row["COUNT(history.DateTime)"] . "<br>";
        echo '</div>';
        echo '</div>';
        $con++;
      }
      echo '</div>';
    } else {
      echo "0 results";
    }
    ?>
    <div style="text-align:center; margin-bottom:50px;"><a class="apisit" href="Allmovie.php?name=<?= $Email ?>">More movie</a></div>
    <footer class="lowend" class="centered">
      <a href="https://www.facebook.com/NetflixTH/?brand_redir=6275848869" class="fa fa-facebook"></a>
      <a href="https://twitter.com/netflix" class="fa fa-twitter"></a>
      <a href="https://www.instagram.com/netflix/" class="fa fa-instagram"></a>
    </footer>
    <script type="text/javascript">
      $(document).ready(function() {
        $('.nav_btn').click(function() {
          $('.mobile_nav_items').toggleClass('active');
        });
      });
    </script>
  </section>
</body>

</html>