<?php
session_start();
include('condb.php');
$Email = $_SESSION['Email'];
$name = $_SESSION['Name'];
$Status = $_SESSION['Status'];
$movie = $_SESSION["movie"];
$sql = "SELECT `Movie_Name`, `Short_Story`, `url` FROM `movies` WHERE Id_Movies='$movie'";
$q = mysqli_query($con, $sql);
$mn = mysqli_fetch_row($q);
// echo $mn[1];
$_SESSION["mn"] = $mn;
$_SESSION['MovieName'] = $mn[0];


$sql3 = "SELECT `Id_User` FROM  `user` WHERE `Email`='$Email'";
// echo $sql . "<br>";
$result = mysqli_query($con, $sql3);
// print_r($result);
$mn2 = mysqli_fetch_row($result);
$Id_User = $mn2[0];
$_SESSION["Id_User"] = $Id_User;
// echo $mn[0];

$sql2 = "SELECT `Id_Movies`, `Id_User` FROM `favorite` WHERE `Id_Movies`='$movie' AND `Id_User`='$mn2[0]'";
$result2 = mysqli_query($con, $sql2);
// print_r($result2) . "<br>";
$mn2 = mysqli_fetch_row($result2);
// echo $mn2[0] . " | " . $mn2[1]." "."<br>";
if (mysqli_num_rows($result2) == 0) {
  echo "<script>";
  echo "console.log('Nope')";
  echo "</script>";

  // echo "<style>";
  // echo ".fav::after {
  //   content: '\\f005';
  // }";
  // echo "</style>";
} else {
  echo "<script>";
  echo "console.log('Yep')";
  echo "</script>";

  echo "<style>";
  echo ".fav::after {
    content: '\\f005';
  }";
  echo "</style>";
}
?>

<!DOCTYPE html>
<html>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="./CSS/watchmovie.css">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f3f3f3;
    }

    .text {
      margin: 2%;
    }

    .header {
      overflow: hidden;
      background-color: #0D0A0A;
      padding: 10px 10px;
    }

    .header a {
      float: left;
      color: white;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 18px;
      line-height: 25px;
      border-radius: 10px;
    }

    .header a.logo {
      font-size: 25px;
      font-weight: bold;
    }

    .header a:hover {
      background-color: #ddd;
      color: black;
    }

    .header a.active {
      background-color: #A50000;
      color: white;
    }

    .header a.logout {
      color: #FF0004;
      font-weight: bold;
    }

    .header-right {
      float: right;
    }

    @media screen and (max-width: 500px) {
      .header a {
        float: none;
        display: block;
        text-align: left;
      }

      .header-right {
        float: none;
      }
    }

    div.gallery {
      margin: 50px;
      border: 1px solid #ccc;
      float: left;
      width: 200px;
    }

    div.gallery:hover {
      border: 1px solid #777;
    }

    div.gallery img {
      width: 100%;
      height: auto;
    }

    div.desc {
      background-color: white;
      padding: 15px;
      text-align: center;
    }

    .centered {
      width: 400px;
      height: 650px;
      position: absolute;
      top: 50%;
      left: 40%;
      transform: translate(-50%, -50%);
      font-size: 20px;
      font: Arial;
      color: #ffffff;
      /*background-color: #ddd;*/
      /*padding: relative;*/
      background: rgba(0, 0, 0, 0.5);
      text-align: center;
      overflow-y: scroll;
    }

    .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: rgba(0, 0, 0, 0.5);
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }

      .sidenav a {
        font-size: 18px;
      }
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

    .lowend {
      height: 10%;
      background: black;
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

    .fa-fav {
      text-align: left;
      float: left;
      padding: 0px;
      transform: translate(0%, -20%);
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
  </style>
  <script src="https://kit.fontawesome.com/a597de5288.js" crossorigin=" anonymous">
  </script>
  <title>
    <?php
    session_start();
    echo $_SESSION["mn"][0];
    ?>
  </title>
  <style>
    .fav {
      background-color: rgba(0, 0, 0, 0.5);
      width: 125px;
      height: 50px;
      color: yellow;
      text-shadow: 0 0 10px;
      border: none;
      font-size: 20px
    }

    .fav::after {
      font-family: FontAwesome;
      display: inline-block;
      padding-right: 6px;
      vertical-align: middle;
      color: white;
    }
  </style>
</head>

<body style="background-color:#151515;">
  <header class="header">
    <img src="image/Netflixtext.png" class="logo" style="width:7.5%"><a href="#default"></a>
    <div class="header-right">
      <a href="home.php">Home</a>
      <a href="favorite.php">Favorites</a>
      <a href="pro.php">Profile</a>
      <?php
      $name = $_SESSION['Name'];
      echo '<a href="history.php?' . 'name' . '=' . $name . '">History</a>'
      ?>
      <a class="logout" href="logout.php">Logout</a>
    </div>
  </header>
  <aside id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="centered" style="margin-left:3%;">
      <h3>Summary</h3>
      <h6 style="padding-left:2%;padding-right:2%;padding-top:0%">
        <?php echo $_SESSION["mn"][1]; ?>
      </h6>
    </div>
    <!--<br>
        <div class="fav2">
          <form action='AddtoFav.php' method="GET">
            <button class="fav" value="<?php echo $_SESSION["movie"]; ?>" name="id">
              Favorite
            </button>
          </form>
        </div>-->
  </aside>
  <span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">&#9776; More Info</span>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "500px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>
  <iframe width="100%" height="800" src=<?php echo $_SESSION["mn"][2]; ?> frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
  </iframe>
  <!--<div>
      Short story
    </div>-->
  <!--<div>
      <?php
      //echo $_SESSION["mn"][1];
      ?>
    </div>-->

  <footer class="lowend">
    <a href="#" class="fa fa-fav"><br>
      <div class="fav2">
        <form action='AddtoFav.php' method="GET">
          <button class="fav" value="<?php echo $_SESSION["movie"]; ?>" name="id">
            Favorite
          </button>
        </form>
      </div>
    </a>
    <a href="https://www.facebook.com/NetflixTH/?brand_redir=6275848869" class="fa fa-facebook"></a>
    <a href="https://twitter.com/netflix" class="fa fa-twitter"></a>
    <a href="https://www.instagram.com/netflix/" class="fa fa-instagram"></a>
  </footer>
</body>

</html>