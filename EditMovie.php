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
$sql = "SELECT * FROM movies WHERE Id_Movies = '$Id_Movies'";
// print_r($sql);
$result = mysqli_query($con, $sql);
// print_r($result);
$row = mysqli_fetch_assoc($result);
?>
<html>

<head>
    <meta charset="UTF-8">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f3f3f3
        }

        .header {
            overflow: hidden;
            background-color: #0D0A0A;
            padding: 10px 10px;
        }

        .header a {
            float: left;
            color: white;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 10px;
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        .header a.active {
            background-color: #A50000;
            color: white;
        }

        .header a.logout {

            color: #FF0004;
            font-weight: bold;
        }

        .header-right {
            float: right;
        }

        .header-mid {
            text-align: center;
            line-height: 25px;
            border-radius: 10px;
            float: center;
        }
        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }

            .header-mid {
                float: none;
            }
        }
            form{
            text-align: center;
            margin-top: 2.5%;
            margin-left:5%;
        }
        p{
            margin-left: 0;
            display: block;
            margin: 0;
        }
        input{
            margin-top: 1%;
            width: 20%; 
        }
        input[type=time]{
            width: 7%; 
        }
        input[type=date]{
            width: 9%; 
        }
        #Id_Movies{
            margin-left: 1.5%;
        }
        #Movie_Name{
            margin-left: 0.1%;
        }
        #Actor{
            margin-left: 3.5%;
        }
        #Time{
            margin-left: 3.7%;
        }
        #Studio{
            margin-left: 3%;
        }
        #Director{
            margin-left: 2.2%;
        }
        #Type{
            margin-left: 3.7%;
        }
        #Runtime{
            margin-left: 2%;
        }
        #url{
            margin-left: 3.9%;
        }
        input[type=submit]{
            margin-left: 6.5%;
            width: 8%;
        }
        #Short_Story{
            margin-left: 8%;
        }
        input[type=file]{
            margin-left: 0%;
        }
        #para{
            margin-left: 7%;
        }
        #first{
            margin-left: -10.35%;
        }
        #second{
            margin-left: -12.35%;
        }
        #third{
            margin-left: -21.5%;
            margin-top: 1%;
        }
        input[type=radio]{
            margin-left: 2%;
        }
        #old{
            margin-left: -9%;
        }
        #new{
            margin-left: -9%;
        }
        #fifth{
            margin-top: 1%;
            margin-left: 6%;
        }
    </style>
</head>

<body>
    <header class="header">
        <img src="image/Netflixtext.png" class="logo" style="width:7.5%"><a href="#default"></a>
        <div class="header-right">
            <a href="admin.php?name=<?= $Email ?>">Movie</a>
            <a href="admin_member.php?name=<?= $Email ?>">Member</a>
            <a href="AddMovie.php?name=<?= $Email ?>">Adding</a>
            <a class="logout" href="logout.php">Logout</a>
        </div>
    </header>
    <br>
    <!-- <div id = 'form'> -->
    <form action="Editmovie2.php?oldId=<?= $row["Id_Movies"] ?>" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to edit this movie?');">
        <input type="radio" id="old" name="img" value="old" checked onclick="olds()">
        <label id = 'old' for="old">Use old poster</label>
        <input type="radio" id="new" name="img" value="new" onclick="news()">
        <label id = 'new' for="new">Use new image</label><br>
        <div id="img">
            <p id = "fifth">Select poster image to upload : 
            <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*"></p>
            <br>
        </div>
        <p >Id Movies : <input id = 'Id_Movies' type="text" disabled name="Id_Movies" value="<?= $row["Id_Movies"] ?>"></p>
        <p >Movie Name : <input id = 'Movie_Name' type="text" name="Movie_Name" value="<?= $row["Movie_Name"] ?>"></p>
        <p id = 'third'>Short Story : </p><textarea id = 'Short_Story' name="Short_Story" rows="3" cols="40"><?= $row["Short_Story"] ?></textarea>
        <p >Actor : <input id = 'Actor' type="text" name="Actor" value="<?= $row["Actor"] ?>"></p>
        <p id = 'first'>Time : <input id = 'Time' type="date" name="Time" value="<?= $row["Time"] ?>"></p>
        <p >Studio : <input id = 'Studio' type="text" name="Studio" value="<?= $row["Studio"] ?>"></p>
        <p >Director : <input id = 'Director' type="text" name="Director" value="<?= $row["Director"] ?>"></p>
        <p >Type : <input id = 'Type' type="text" name="Type" value="<?= $row["Type"] ?>"></p>
        <p id = 'second'>Runtime : <input id = 'Runtime' type="time" name="Runtime" value="<?= $row["Runtime"] ?>"></p>
        <p >URL : <input id = 'url' type="text" name="url" value="<?= $row["url"] ?>"></p>
        <input type="submit" value="Edit Movie" name="submit">
    </form>
    <!-- </div> -->
    <script>
        if (document.getElementById("old").checked) {
            document.getElementById("img").style.display = "none";
            console.log("default");
        }

        function olds() {
            document.getElementById("img").style.display = "none";
            console.log("old");
        }

        function news() {
            document.getElementById("img").style.display = "block";
            console.log("new");
        }
    </script>
</body>

</html>