<?php
session_start();
include('condb.php');
$Email = $_SESSION['Email'];
$name = $_SESSION['Name'];
$Status = $_SESSION['Status'];
if ($Status != 'admin') {
    Header("Location: logout.php");
}
$Id_Movies = $_GET["Id_Movies"];
//ลบ fav
$sql = "DELETE FROM `favorite` WHERE Id_Movies='$Id_Movies'";
// print_r($sql);
$result = mysqli_query($con, $sql);
//ลบ history
$sql = "DELETE FROM `history` WHERE Id_Movies='$Id_Movies'";
// print_r($sql);
$result = mysqli_query($con, $sql);
//ลบ movie
$sql = "DELETE FROM `movies` WHERE Id_Movies='$Id_Movies'";
// print_r($sql);
$result = mysqli_query($con, $sql);

header("location:./admin.php");