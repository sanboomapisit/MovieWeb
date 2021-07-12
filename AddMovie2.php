<?php session_start();
include('condb.php');
    // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "image/" . basename($_FILES["fileToUpload"]["name"]));
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "image/" . $_POST["Id_Movies"] . "." . pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION));
    // echo basename($_FILES["fileToUpload"]["name"]).".".pathinfo(basename($_FILES["fileToUpload"]["name"]),PATHINFO_EXTENSION);
    $img = $_POST["Id_Movies"] . "." . pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION);
    // echo $img."<br>";
    $strSQL = "INSERT INTO `movies`(`Id_Movies`, `Movie_Name`, `Short_Story`, `Actor`, `Time`, `Studio`, `Director`, `Type`, `Runtime`, `url`, `img`) 
    VALUES ('" . $_POST['Id_Movies'] . "','" . $_POST['Movie_Name'] . "','" . $_POST['Short_Story'] . "','" . $_POST['Actor'] . "','" . $_POST['Time'] . "','" . $_POST['Studio'] . "','" . $_POST['Director'] . "','" . $_POST['Type'] . "','" . $_POST['Runtime'] . "','" . $_POST['url'] . "'," . "'$img'" . ")";
    // print_r($strSQL);
    mysqli_query($con, $strSQL);
    header("location:./admin.php");
?>