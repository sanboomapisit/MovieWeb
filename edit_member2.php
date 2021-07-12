<?php
session_start();
include('condb.php');
$Email = $_SESSION['Email'];
$name = $_SESSION['Name'];
$Status = $_SESSION['Status'];
if ($Status != 'admin') {
    Header("Location: logout.php");
}
$oldId = $_GET["oldId"];
$oldId2 = $_GET["oldId2"];
$Id_User = $_POST["Id_User"];
$Username = $_POST["Email"];
$Password = $_POST["Password"];
// $Name = $_POST["Name"];
$First_Name = $_POST["First_Name"];
$Last_Name = $_POST["Last_Name"];
$Phone = $_POST["Phone"];
$Mobile = $_POST["Mobile"];
$Location = mysqli_real_escape_string($con, $_POST["Location"]);
$Email = $_POST["Email"];
$Status = $_POST["Status"];
$Id_Payment = $_POST["Id_Payment"];
$SingupDate = $_POST["SingupDate"];
// echo $oldId." "."$oldId2"." ".$Id_User." "."$Username"." ".$Password." "."$Name"." ".$First_Name." "."$Last_Name"." ".$Phone." "."$Mobile"." ".$Location." "."$Email".
// " ".$Status." "."$Id_Payment"." ".$SingupDate."<br>";
// echo $Id_Payment." ".$oldId2." "."<br>";
// echo $Username."<br>";
// $img = $_POST["img"];
if ($_POST["img"] == 'old') {
    // profile
    // echo $Username."<br>";
    $sql3 = "UPDATE `profile` SET `Username`= '$Username',`Phone`='$Phone',
    `Mobile`='$Mobile',`First_Name`='$First_Name',`Last_Name`='$Last_Name',
    `Location`='$Location' WHERE `Id_User` = '$oldId'";
    $result1 = mysqli_query($con, $sql3);
    echo $sql3 . "<br>";
    // user
    $sql1 = "UPDATE `user` SET `Id_User` = '$Id_User', `Email` = '$Email' ,
    `Password` = '$Password' , `Status` = '$Status' ,`Signup_date` = '$SingupDate' where `Id_User` = '$oldId'";
    $result = mysqli_query($con, $sql1);
    echo $sql1 . "<br>";
    // payment
    $sql2 = "UPDATE `payment` SET `Id_Payment`= '$Id_Payment' WHERE Id_Payment = '$oldId2'";
    $result2 = mysqli_query($con, $sql2);
    print_r($result2);
    // echo($sql);
} else if ($_POST["img"] == 'new') {

    // echo "nope";
    // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "image/" . basename($_FILES["fileToUpload"]["name"]));
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "image/profile/" . $oldId . "." . pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION));

    // echo basename($_FILES["fileToUpload"]["name"]) . "." . pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION);
    $img = $oldId . "." . pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION);
    // echo $img." "."<br>";  
    $sql3 = "UPDATE `profile` SET `Username`= '$Username',`Phone`='$Phone',Picture = 'image/profile/$img',
    `Mobile`='$Mobile',`First_Name`='$First_Name',`Last_Name`='$Last_Name',
    `Location`='$Location' WHERE `Id_User` = '$oldId'";
    // echo $sql3."<br>";
    $result1 = mysqli_query($con, $sql3);
    $sql1 = "UPDATE `user` SET `Id_User` = '$Id_User', `Email` = '$Email' ,
    `Password` = '$Password' , `Status` = '$Status' ,`Signup_date` = '$SingupDate' where `Id_User` = '$oldId'";
    $result = mysqli_query($con, $sql1);
    $sql2 = "UPDATE `payment` SET `Id_Payment`= '$Id_Payment' WHERE Id_Payment = '$oldId2'";
    $result2 = mysqli_query($con, $sql2);
    echo ($sql);
}
header("location:./admin_member.php");
