<?php session_start();
include('condb.php');
$Email = $_SESSION['Email'];
$name = $_SESSION['Name'];
$Status = $_SESSION['Status'];
if ($Status != 'member') {
  Header("Location: logout.php");
}

if (!isset($_GET["button"])) {
  $sql2 = "SELECT movies.Id_Movies , movies.Movie_Name , movies.img, movies.Short_Story , movies.Actor, movies.Time, movies.Studio, movies.Director, movies.Type, movies.Runtime ,COUNT(history.DateTime)
  FROM movies JOIN history
  ON movies.Id_Movies = history.Id_Movies
  WHERE history.Username ='$Email' GROUP BY movies.Id_Movies ";
  $result1 = mysqli_query($con, $sql2);
} else {
  $value = "%" . $_GET["keyword"] . "%";
  $sql2 = "SELECT movies.Id_Movies , movies.Movie_Name , movies.img, movies.Short_Story , movies.Actor, movies.Time, movies.Studio, movies.Director, movies.Type, movies.Runtime ,COUNT(history.DateTime)
  FROM movies JOIN history
  ON movies.Id_Movies = history.Id_Movies
  WHERE history.Username ='$Email' AND movies.Movie_Name LIKE '$value' GROUP BY movies.Id_Movies ";
  $result1 = mysqli_query($con, $sql2);
  // print_r($result);
}
?>
<!DOCTYPE html>
<html>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./CSS/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.css">
    <script src="https://use.fontawesome.com/ec8f23c06d.js"></script>
    <link rel="stylesheet" href="./CSS/sidebar.css">
  <title>History</title>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
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

    .acontainer {
      margin: 3%;
      position: relative;
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

    .topnav {
      overflow: hidden;
      /*background-color:#10101010;*/
    }

    .topnav input[type=text] {
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

    .topnav input[type=submit] {
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

    @media screen and (max-width: 500px) {

      .topnav a,
      .topnav input[type=text] {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }

      .topnav input[type=text] {
        border: 1px solid #ccc;
      }
    }
    
    .sidebar a.logout {
      color: #FF0004;
      font-weight: bold;
    }
  </style>
</head>

<body style="background-color:#181818;">
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
      <a  href="favorite.php?name=<?= $Email ?>"><i class="far fa-heart"></i><span>Favorites</span></a>
      <a href="pro.php?name=<?= $Email ?>"><i class="fas fa-user-circle"></i><span>Profile</span></a>
      <a class="active" href="history.php?name=<?= $Email ?>"><i class="fas fa-info-circle"></i><span>History</span></a>
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
    <a href="pro.php?name=<?= $Email ?>"><i class="fas fa-user-circle"></i><span>Profile</span></a>
    <a class="active" href="history.php?name=<?= $Email ?>"><i class="fas fa-info-circle"></i><span>History</span></a>
    <a class="logout" href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
  </nav>
  <section class="main">
  <div class=topnav>
        <div class="text" style="margin-left:16px ; font-size:30px">
            <h1 style="font-size:5vw;">History</h1>
        </div>
    <form>
      <input type="text" name="keyword">
      <input type="submit" name="button">
    </form>
  </div>
  <br>
  <?php
  session_start();
  $name = $_SESSION['Name'];

  // print_r($sql2);

  if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    $pathx = "./image/";
    echo '<div class="acontainer">';
    while ($row = mysqli_fetch_array($result1)) {
      // print_r($row);
      $file = trim($row["img"]);
      $movie = $row["Id_Movies"];

      echo '<div class="container" style="margin:1.5%;margin-bottom:10%;
                border: 1px solid #ccc;
                float: left;
                width: 300px;border: none;">';

      // echo $movie;
      echo '<a onclick=hist(' . $movie . ')>';
      // echo '<img src = "' . $pathx . $file . '.jpg" class="image" style="width:100%"></a>' . "<br>";
      echo '<a href="AddtoHis.php?Idmovie=' . $movie . '"><img src = "' . $pathx . $file . '" class="image" style="width:100%;height:480px;border-style: double;border-color:grey;border-width:4px;border-radius:5%"></a>' . "<br>";
      echo '<div class="overlay">';

      echo "Movie Name: " . $row["Movie_Name"] . "<br>" . "????????????????????????????????????????????? : " . $row["COUNT(history.DateTime)"] . "<br>";
      echo '</div>';
      echo '</div>';
    }
    echo '</div>';
  } else {
    echo "0 results";
  }
  ?>
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