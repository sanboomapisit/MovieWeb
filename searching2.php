<?php
    $dbname = 'movie2free';
    $keyword = $_GET["Type"];
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
        echo "<p style='color:red; text-align:center;'>this Email already taken<p>";
    }
    else{
        echo "<p style='color:green; text-align:center;'>Email available</p>";    
    }
 ?>