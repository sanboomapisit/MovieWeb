<?php
session_start();
include('condb.php');
$Email = $_SESSION['Email'];
$name = $_SESSION['Name'];
$Status = $_SESSION['Status'];
if ($Status != 'admin') {
    Header("Location: logout.php");
}
$Id_User = $_GET["Id_User"];
$sql = "SELECT user.Id_User,user.Email,user.Password,user.Status,user.Signup_date,profile.Username,
profile.Picture,profile.Phone,profile.Mobile,profile.First_Name,user.Id_Payment,
profile.Last_Name,profile.Location FROM `profile` join user 
on profile.Id_User = user.Id_User WHERE profile.Id_User = '$Id_User'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>
<html>

<head>
    <script>
            function send() {
                request = new XMLHttpRequest();
                request.onreadystatechange = showResult;
                var Type = document.getElementById("Type").value;
                var url= "searching2.php?Type=" + Type;
                request.open("GET", url, true);
                request.send(null);
            }
            function showResult() {
                if (request.readyState == 4) {
                    if (request.status == 200){
                        document.getElementById("labelcheak2").innerHTML = request.responseText;
                    }
                }
            }
    </script>
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
            margin-left: 2.5%;
        }

        #Movie_Name {
            margin-left: 0.4%;
        }

        #Actor {
            margin-left: 1.5%;
        }

        #Time {
            margin-left: 3.7%;
        }

        #Studio {
            margin-left: 1%;
        }

        #Director {
            margin-left: 3.2%;
        }

        #Type {
            margin-left: 2.7%;
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
            margin-left: 7%;
        }

        #first {
            margin-left: -22.35%;
            margin-top: 1%;
        }

        #second {
            margin-left: -9.95%;
        }

        #third {
            margin-left: -21.5%;
            margin-top: 1%;
        }

        input[type=radio] {
            margin-left: 2%;
        }

        #old {
            margin-left: -9%;
        }

        #new {
            margin-left: -9%;
        }

        #fifth {
            margin-top: 1%;
            margin-left: 6%;
        }

        #payment {
            margin-left: 0.7%;
        }

        #ex {
            margin-left: 0.7%;
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
    <form action="edit_member2.php?oldId=<?= $row["Id_User"] ?>&oldId2=<?= $row["Id_Payment"] ?>" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to edit this User?');">
        <input type="radio" id="old" name="img" value="old" checked onclick="olds()">
        <label id='old' for="old">Use old picture</label>
        <input type="radio" id="new" name="img" value="new" onclick="news()">
        <label id='new' for="new">Use new picture</label><br>

        <div id="img">
            <p id="fifth">Select poster image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload" accept="image/profile/*"></p>
            <br>
        </div>
        <p>Id User : <input id='Id_Movies' type="text" disabled name="Id_User" value="<?= $row["Id_User"] ?>"></p>
        <p>E-mail : <input id="Type" type="text" name="Email" pattern="..*@..*" value="<?= $row["Email"] ?>" onkeyup="send()"></p>
        <p id="labelcheak2"></p>
        <!-- <p>User Name : <input id='Movie_Name' type="text" name="Username" value="<?= $row["Username"] ?>"></p> -->
        <p>Password : <input id='Actor' type="text" name="Password" value="<?= $row["Password"] ?>"></p>
        <!-- <p>Name : <input id='Time' type="text" name="Name" value="<?= $row["Name"] ?>"></p> -->
        <p>First name : <input id='Studio' type="text" name="First_Name" value="<?= $row["First_Name"] ?>"></p>
        <p>Last name : <input id='Studio' type="text" name="Last_Name" value="<?= $row["Last_Name"] ?>"></p>
        <p>Phone : <input id='Director' type="text" pattern="0[0-9]{9}" name="Phone" value="<?= $row["Phone"] ?>"></p>
        <p>Mobile : <input id='Type' type="text" pattern="0[0-9]{9}" name="Mobile" value="<?= $row["Mobile"] ?>"></p>
        <p id='first'>Location : </p><textarea id='Short_Story' name="Location" rows="3" cols="40"><?= $row["Location"] ?></textarea>
        <p>Status : <input id='Type' type="text" name="Status" value="<?= $row["Status"] ?>"></p>
        <p>Id Payment : <input id='payment' disabled type="text" name="Id_Payment" value="<?= $row["Id_Payment"] ?>"></p>
        <p id='second'>Sign up date : <input id='ex' type="date" name="SingupDate" value="<?= $row["Signup_date"] ?>"></p>
        <input type="submit" value="Confirm" name="submit">
    </form>
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