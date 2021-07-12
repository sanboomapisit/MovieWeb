<?php
    $dbname = 'movie2free';
    $keyword = $_GET["Email"];
    $conn = mysqli_connect('localhost', 'root', '', $dbname);
    if ($conn) {
        mysqli_set_charset($conn, "utf8");
    } else {
        echo "Database is broken";
    }
    $sql = "SELECT * FROM `user` WHERE Email LIKE '$keyword' ";
    $objQuery = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($objQuery);
?>
<?php 
    if(!empty($row)){
        if($_COOKIE["langeage"] == "Eng"){
            echo "<p style='color:red; text-align:center;'>this Email already taken<p>";
        }
        else{
            echo "<p style='color:red; text-align:center;'>อีเมลนี้ถูกใช้งานไปแล้ว<p>";
        }
    }
    else{
        if($_COOKIE["langeage"] == "Eng"){
            echo "<p style='color:green; text-align:center;'>Email available</p>";
        }
        else{
            echo "<p style='color:green; text-align:center;'>อีเมลนี้สามารถใช้งานได้</p>";
        }
        
    }
 ?>

