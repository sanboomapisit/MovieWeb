<?php
session_start();
if (isset($_POST['username'])) {
  include("condb.php");
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user 
                  WHERE  Email='" . $username . "' 
                  AND  Password='" . $password . "' ";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_array($result);
    $_SESSION["Email"] = $row["Email"];
    // $_SESSION["Name"] = $row["Name"];
    $_SESSION["Status"] = $row["Status"];
    if ($_SESSION["Status"] == "member") {
      Header("Location: home.php");
    } else if ($_SESSION["Status"] == "admin") {
      Header("Location: admin.php");
    }
  } else {
    echo "<script>";
    echo "console.log(\"$username\");";
    echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
    echo "window.history.back()";
    echo "</script>";
  }
} else {

  Header("Location: login.php"); //user & password incorrect back to login again

}
