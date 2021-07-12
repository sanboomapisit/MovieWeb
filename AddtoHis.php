<?php
session_start();
include('condb.php');
$Email = $_SESSION['Email'];
// $name = $_SESSION['Name'];
$Status = $_SESSION['Status'];
$movie = $_GET["Idmovie"];
$_SESSION["movie"] = $movie;
$sql2 = "SELECT `Movie_Name` FROM `movies` WHERE Id_Movies='$movie'";
$result = mysqli_query($con, $sql2);
$mn = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html>

<head>
    <script>
        <?php
        echo 'console.log("' . $name . '");';
        echo 'console.log("' . $movie . '");';
        $sql = "INSERT INTO `history`(`Username`, `Id_Movies`) VALUES ('$Email','$movie')";
        $query = mysqli_query($con, $sql);
        ?>
        console.log("scuess");
        location.replace("watchMovie.php?Movie=<?php echo $mn[0] ?>");
    </script>
</head>

</html>