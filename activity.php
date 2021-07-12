<?php session_start();
include('condb.php');

$Email = $_SESSION['Email'];
$name = $_SESSION['Name'];
$Status = $_SESSION['Status'];
$duplicate = mysqli_query($con, "select * from user where Email='$Email'");
$row = mysqli_fetch_array($duplicate);
$iduser = $row['Id_User'];
$idpay = $row['Id_Payment'];
 
$row3 = "select * from profile where Id_User='$iduser'";
$row3 = mysqli_query($con, $row3);
$row3 = mysqli_fetch_array($row3);
$username = $row3['username'];
$date = $row['Signup_date'];
//DELETE FROM user WHERE Id_User='1';
//$_SESSION['payment']=$row2;
//$_SESSION['user']=$row;
$Credit = $row2['Card_Number'];
$sql = "SELECT * FROM user
      WHERE  Email='" . $email . "' ";
$sql = mysqli_query($con, $sql);
$sql = mysqli_fetch_array($sql);
$idd = $sql['Id_User'];
 
$sql = "SELECT * FROM profile
      WHERE  Id_User='" . $iduser . "' ";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$picture = $row['Picture'];
$username = $row['Username'];
 
if ($Status != 'member') {
  Header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./CSS/profile.css">
  <title>Account</title>
	
<script>
	function myFunction(){
	 
  }
 
	</script>
</head>

<body style="background-color:f3f3f3;">
  <header class="header">
    <img src="image/Netflixtext.png" class="logo" style="width:7.5%"><a href="#default"></a>
    <div class="header-right">
      <a href="home.php">Home</a>
      <a href="favorite.php">Favorites</a>
      <a class="active" href="pro.php">Profile</a>
      <a  href="history.php">History</a>

      <a class="logout" href="logout.php">Logout</a>
    </div>
  </header>

  <div class="account">
    <h1><?php echo $name ; ?>'s Activities <a style=font-size:15px;color:#474646;font-weight:lighter>(last 100)</a></h1>
  </div>
  <hr width="70%" ;padding=0;>
	<?php  $sqlf = "SELECT * FROM `history` WHERE history.Username = '$username' ORDER BY DateTime DESC LIMIT 0,100";

        $resultf = mysqli_query($con, $sqlf);

        while ($rowf = mysqli_fetch_array($resultf)) {
          $id1 = $rowf['Id_Movies'];
          $sqlmovie1 = "SELECT * FROM `movies` WHERE movies.Id_Movies='$id1' ";
          $moviename1 = mysqli_query($con, $sqlmovie1);
          $moviename1 = mysqli_fetch_array($moviename1);
			$file=$moviename1['img'];
			$movie=$moviename1['Id_Movies'];
          $moviename1 = $moviename1['Movie_Name'];
          $date1=$rowf['DateTime'];
          $string1 = "$moviename1";
          echo '
		   <div class="row">
    <div class="column left" ;> 
    '.$date1.' 
    </div>

    <div class="column middle" ;>
      <div class=row style="font-weight:bold;font-size:18px">
        '.$string1.'
      </div>
    
    </div>
    <div class="column right" ;>
      <a href="AddtoHis.php?Idmovie=' . $movie . '">Watch again</a>
    </div>
  </div>';
			echo '<hr width="70%" ;padding=0;>';
        }

       
        ?>
	
 

<hr width="70%" ;padding=0;>
	 <div class="row">
    <div class="column left" ;>
		<!-- <a id="myLink" href="#" onclick="myFunction();">See more</a> -->
 
    </div>

    <div class="column middle" ;>
      <div class=row style="font-weight:bold;font-size:18px">
        
      </div>
    
    </div>
    <div class="column right" ;>
      <aa></aa>
    </div>
  </div>
	
	


</body>

</html>