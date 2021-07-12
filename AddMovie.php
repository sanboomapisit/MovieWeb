<?php session_start();
include('condb.php');
$Email = $_SESSION['Email'];
$name = $_SESSION['Name'];
$Status = $_SESSION['Status'];
if ($Status != 'admin') {
    Header("Location: logout.php");
}
?>
<!DOCTYPE html>
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

        form {
            text-align: center;
            margin-top: 2.5%;
            margin-left: 5%;
        }

        p {
            margin-left: 0;
            display: block;
            margin: 0;
        }

        input {
            margin-top: 1%;
            width: 20%;
        }

        input[type=time] {
            width: 7%;
        }

        input[type=date] {
            width: 9%;
        }

        #Id_Movies {
            margin-left: 1.5%;
        }

        #Movie_Name {
            margin-left: 0.1%;
        }

        #Actor {
            margin-left: 3.5%;
        }

        #Time {
            margin-left: 3.7%;
        }

        #Studio {
            margin-left: 3%;
        }

        #Director {
            margin-left: 2.2%;
        }

        #Type {
            margin-left: 3.7%;
        }

        #Runtime {
            margin-left: 2%;
        }

        #url {
            margin-left: 3.9%;
        }

        input[type=submit] {
            margin-left: 6.5%;
            width: 8%;
        }

        #Short_Story {
            margin-left: 8%;
        }

        input[type=file] {
            margin-left: 0%;
        }

        #para {
            margin-left: 6%;
        }

        #first {
            margin-left: -10.35%;
        }

        #second {
            margin-left: -12.35%;
        }

        #third {
            margin-left: -21.90%;
            margin-top: 1%;
        }
    </style>
</head>

<body>
    <header class="header">
        <img src="image/Netflixtext.png" class="logo" style="width:7.5%"><a href="#default"></a>
        <div class="header-right">
            <a href="admin.php?name=<?= $Email ?>">Movie</a>
            <a href="admin_member.php?name=<?= $Email ?>">Member</a>
            <a class="active" href="AddMovie.php?name=<?= $Email ?>">Adding</a>
            <a href="movie.php">Upload</a>
            <a class="logout" href="logout.php">Logout</a>
        </div>
    </header>
    <br>
    <form name="adding" action="Addmovie2.php" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to add this movie?');">
        <p id='para'>Select poster image to upload :
            <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*"></p>
        <br>
        <p>Id Movies : <input type="text" name="Id_Movies" id='Id_Movies'></p>
        <p>Movie Name : <input type="text" name="Movie_Name" id='Movie_Name'></p>
        <p id='third'>Short Story : </p><textarea name="Short_Story" rows="3" cols="40" id='Short_Story'></textarea>
        <p>Actor : <input type="text" name="Actor" id='Actor'></p>
        <p id='first'>Time : <input type="date" name="Time" id='Time'></p>
        <p>Studio : <input type="text" name="Studio" id='Studio'></p>
        <p>Director : <input type="text" name="Director" id='Director'></p>
        <p>Type : <input type="text" name="Type" id='Type'></p>
        <p id='second'>Runtime : <input type="time" name="Runtime" id='Runtime'></p>
        <p>URL : <input type="text" name="url" id='url'></p>
        <div style="margin:auto;">
            <input type="submit" value="Upload Movie" name="submit">
            <!-- <a href="movie.php"><input type="button" value="Upload json" name="Upload json"></a> -->
        </div>

    </form>

</body>

</html>