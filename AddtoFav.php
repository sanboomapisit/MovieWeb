<?php
session_start();
include('condb.php');
$Email = $_SESSION['Email'];
$name = $_SESSION['Name'];
$Status = $_SESSION['Status'];
$movie = $_SESSION["movie"];

// echo $Email . "<br>";
$sql = "SELECT `Id_User` FROM  `user` WHERE `Email`='$Email'";
// echo $sql . "<br>";
$result = mysqli_query($con, $sql);
// print_r($result);
$mn = mysqli_fetch_row($result);
$Id_User = $mn[0];
// echo $mn[0];

$sql2 = "SELECT `Id_Movies`, `Id_User` FROM `favorite` WHERE `Id_Movies`='$movie' AND `Id_User`='$mn[0]'";
$result2 = mysqli_query($con, $sql2);
// print_r($result2) . "<br>";
$mn2 = mysqli_fetch_row($result2);
// echo $mn2[0] . " | " . $mn2[1]." "."<br>";
if (mysqli_num_rows($result2) == 0) {
    echo 'console.log("' . $movie . '");';
    echo 'console.log("' . $Id_User . '");';
    $sql3 = "INSERT INTO `favorite`(`Id_Movies`, `Id_User`) VALUES ('$movie','$Id_User')";
    $query = mysqli_query($con, $sql3);
} else {
    echo "eiei<br>";
    echo 'console.log("' . $movie . '");';
    echo 'console.log("' . $Id_User . '");';
    $sql4 ="DELETE FROM `favorite` WHERE `Id_Movies`='$movie' AND `Id_User`='$mn[0]'";
    $query2 = mysqli_query($con, $sql4);
}
?>
<!DOCTYPE html>
<html>

<head>
    <script>
        <?php
        echo 'console.log("' . $Id_User . '");';
        echo 'console.log("' . $movie . '");';
        echo 'console.log("' . $_SESSION['MovieName'] . '");';
        ?>
        console.log("scuess");
        location.replace("watchMovie.php?Movie=<?php echo $_SESSION['MovieName'] ?>");
    </script>
</head>

</html>