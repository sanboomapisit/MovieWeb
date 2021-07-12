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
$Id_Movies = $_POST["Id_Movies"];
$Movie_Name = $_POST["Movie_Name"];
$Short_Story = mysqli_real_escape_string($con, $_POST["Short_Story"]);
$Actor = $_POST["Actor"];
$Time = $_POST["Time"];
$Studio = $_POST["Studio"];
$Director = $_POST["Director"];
$Type = $_POST["Type"];
$Runtime = $_POST["Runtime"];
$url = $_POST["url"];
// $img = $_POST["img"];
if ($_POST["img"] == 'old') {
    // echo "yeet";
    $sql = "UPDATE `movies` SET `Id_Movies`='$Id_Movies',`Movie_Name`='$Movie_Name',
    `Short_Story`='$Short_Story',`Actor`= '$Actor',`Time`='$Time',`Studio`='$Studio',`Director`='$Director',
    `Type`='$Type',`Runtime`='$Runtime',`url`='$url' WHERE Id_Movies='$oldId'";
    $result = mysqli_query($con, $sql);
    // echo($sql);
} else if ($_POST["img"] == 'new') {
    // echo "nope";
    // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "image/" . basename($_FILES["fileToUpload"]["name"]));
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "image/" . $oldId . "." . pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION));

    // echo basename($_FILES["fileToUpload"]["name"]) . "." . pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION);
    $img = $oldId . "." . pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION);
    $sql = "UPDATE `movies` SET `Id_Movies`='$Id_Movies',`Movie_Name`='$Movie_Name',
    `Short_Story`='$Short_Story',`Actor`= '$Actor',`Time`='$Time',`Studio`='$Studio',`Director`='$Director',
    `Type`='$Type',`Runtime`='$Runtime',`url`='$url',`img`='$img' WHERE Id_Movies='$Id_Movies'";
    $result = mysqli_query($con, $sql);
    echo ($sql);
}
header("location:./admin.php");