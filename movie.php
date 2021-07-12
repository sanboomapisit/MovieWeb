<?php session_start();
    include('condb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $string = file_get_contents("movie.json");
    $data = json_decode($string, true);
    $max = sizeof($data["Data"])-1;
    $p = 6104062610139 ;
    for($k = 0;$k <= $max;$k++){
        $IDmovie = $k+$p;
        $Namemovie = $data["Data"][$k]["Title"];
        $Released = $data["Data"][$k]["Released"];
        $Runtime = $data["Data"][$k]["Runtime"];
        $Director = $data["Data"][$k]["Director"];
        $Actors = $data["Data"][$k]["Actors"];
        $Plot = $data["Data"][$k]["Plot"];
        $Poster = $data["Data"][$k]["Poster"];  //ภาพปก
        $Production = $data["Data"][$k]["Production"];
        $Type = $data["Data"][$k]["Genre"];
        $Website = $data["Data"][$k]["Website"];
        //..............................................
        $img = "../image/".$IDmovie . ".jpg" ; 
        $strSQL = "INSERT INTO `movies`(`Id_Movies`, `Movie_Name`, `Short_Story`, `Actor`, `Time`, `Studio`, `Director`, `Type`, `Runtime`, `url`, `img`) 
        VALUES ( " .$IDmovie .",'". $Namemovie . "','" . $Plot . "','" . $Actors . "','" . $Released . "','" . $Production . "','" . $Director . "','" . $Type . "','" . $Runtime . "','" . $Website . "'," . "'$img'" . ")";
        //echo $strSQL."<br><hr>";
        mysqli_query($con, $strSQL);
    }
    header("location:./admin.php");
    
?>
</body>
</html>