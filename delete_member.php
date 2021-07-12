<?php
session_start();
include('condb.php');
$Email = $_SESSION['Email'];
$name = $_SESSION['Name'];
$Status = $_SESSION['Status'];
if ($Status != 'admin') {
    Header("Location: logout.php");
}
$Id_User = $_GET["oldId"];
$Id_Payment = $_GET["oldId2"];
$sql = "DELETE FROM `user` WHERE Id_User = '$Id_User'";
$result = mysqli_query($con, $sql);
$sql = "DELETE FROM `payment` WHERE Id_Payment = '$Id_Payment'";
$result = mysqli_query($con, $sql);
header("location:./admin_member.php");