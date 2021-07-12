<?php session_start();
include('condb.php');

$Email = $_SESSION['Email'];
$name = $_SESSION['Name'];
$Status = $_SESSION['Status'];
$duplicate = mysqli_query($con, "select * from user where Email='$Email'");
$row = mysqli_fetch_array($duplicate);
$iduser = $row['Id_User'];
$idpay = $row['Id_Payment'];
$pay = mysqli_query($con, "select * from payment where Id_Payment='$idpay'");
$row2 = mysqli_fetch_array($pay);
$row3 = "select * from profile where Id_User='$iduser'";
$row3 = mysqli_query($con, $row3);
$row3 = mysqli_fetch_array($row3);
$username = $row3['username'];
$date = $row['Signup_date'];
//DELETE FROM user WHERE Id_User='1';
//$_SESSION['payment']=$row2;
//$_SESSION['user']=$row;
$Credit = $row2['Card_Number'];
//echo $row2['Card_Number'];
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
</head>

<body style="background-color:f3f3f3;">
  <header class="header">
    <img src="image/Netflixtext.png" class="logo" style="width:7.5%"><a href="#default"></a>
    <div class="header-right">
      <a href="home.php">Home</a>
      <a href="favorite.php">Favorites</a>
      <a class="active" href="pro.php">Profile</a>
      <a href="history.php">History</a>
      <a class="logout" href="logout.php">Logout</a>
    </div>
  </header>

  <div class="account">
    <h1>Account</h1>
  </div>
  <hr width="70%" ;padding=0;>
  <div class="row">
    <div class="column left" ;>
      <?php echo $name . " " . "สถานะ " . $Status; ?>
      <div class=row>
        <script>
          function cancel() {
            var result = confirm("This will permanently delete your account");
            if (result) {
              <?php
              mysqli_query($con, "DELETE * FROM profile WHERE `profile`.`Username`='$username'");
              mysqli_query($con, "DELETE FROM user WHERE `user`.`Id_User` ='$iduser'");
              mysqli_query($con, "DELETE FROM payment WHERE `payment`.`Id_Payment`='$idpay'");
              // header("Location: index.php");

              ?>

            }
          }
        </script>
        <!-- <button onclick="cancel()" ; class="button">Cancel Membership</button>-->
      </div>
      <div class=row>
        <br>
      </div>
    </div>

    <div class="column middle" ;>
      <div class=row style="font-weight:bold;font-size:18px">
        <?php echo $Email; ?>
      </div>
      <div class=row>
        <br><br><br>
        <?php echo $Credit; ?>
      </div>
    </div>
    <div class="column right" ;>
      <a href="email.php">Change email</a>
      <div class=row>
        <br><a href="password.php">Change password</a> <br><br>
        <a href="changecredit.php">Change credit card number</a>
      </div>
    </div>
  </div>
  <div class="lefttext">
    <h3>

    </h3>



    <!-- <input type="submit" value="ออกจากระบบ"> -->

  </div>


  </div>
  <hr width="70%" ;padding=0;>
  <div class="column left" ;>

    <div class=row style=";font-size:18px">
      Plan Details

    </div>
    <div class=row><br>

    </div>
  </div>
  <div class="column middle" ;>
    <?php echo "Current subcription plan : " . $row2['Package'] ?>
    <div class=row><br>
      Renewal date : <?php echo date('Y-m-d', strtotime($Date . ' + 29 days')); ?>

    </div>

  </div>
  <div class="column right" ;>
    <a href="changeplan.php">Change plan</a>
    <div class=row>
      <br><a href="url"></a><br><br><a href="url"></a><br><br>

    </div>
  </div>

  </form>
  <br>



</body>

</html>