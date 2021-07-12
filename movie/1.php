<?php session_start();
include('condb.php');
$Email = $_SESSION['Email'];
$name = $_SESSION['Name'];
$Status = $_SESSION['Status'];
$movie = getcwd();
$movie = substr($movie, 1);
$movie = mysqli_query($con, "select * from movie where image='$movie'");
$movie = $movie['img'];
$user = $user['Id_user'];
$user = mysqli_query($con, "select * from user where Email='$Email'");
$date = date("Y-m-d");
$strSQL = "INSERT INTO user (Email,Password,Name,Status,Id_User,Id_Payment) VALUES ('" . $Email . "','" . $Password . "','" . $Name . "','" . $Status . "','" . $duplicate3 . "','" . $duplicate3 . "')";
mysqli_query($con, "INSERT INTO `history` (`Username`, `Id_Movies`, `Date`) VALUES ('" . $user . "', '" . $movie . "', '" . $date . "')");

if ($Status != 'member') {
  Header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
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
  </style>




  <title></title>
</head>

<body style="background-color:f3f3f3;">
  <header class="header">
    <img src="../image/Netflixtext.png" class="logo" style="width:7.5%"><a href="#default"></a>
    <div class="header-right">
      <a href="../home.php">Browse</a>
      <a href="../favorite.php">Favorites</a>
      <a href="../profile.php">Profile</a>
      <a class="logout" href="logout.php">Logout</a>
    </div>
  </header>
  <div class="text" ; <h1>
    </h1>
  </div>
  </form>
  <br>



</body>

</html>