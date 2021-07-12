<?php session_start();
include('condb.php');
$Email = $_SESSION['Email'];
$name = $_SESSION['Name'];
$Status = $_SESSION['Status'];
if ($Status != 'admin') {
    Header("Location: logout.php");
}
// $sql = "SELECT * FROM movies";
// print_r($sql);
// $result = mysqli_query($con, $sql);
// print_r($result);
if (!isset($_GET["button"])) {
    $sql = "SELECT * FROM movies ";
    $result = mysqli_query($con, $sql);
} else {
    $value = "%" . $_GET["keyword"] . "%";
    $sql = "SELECT * FROM movies WHERE movies.Movie_Name LIKE '$value'";
    $result = mysqli_query($con, $sql);
    // print_r($result);
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        table,
        th,
        tr,
        td {
            border: black solid 1px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 3px 3px;
            width: 10px;
        }


        tr:nth-child(even) {
            background-color: lightgray;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f3f3f3;
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

        .topnav {
            overflow: hidden;
            /*background-color:#10101010;*/
        }

        .topnav input[type=text] {
            float: left;
            padding: 6px;
            margin: 8px;
            margin-left: 16px;
            /*border: none;*/
            font-size: 17px;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border-style: solid;
            border-color: rgba(255, 255, 255, 0.25);
            border-radius: 5px;
        }

        .topnav input[type=submit] {
            float: left;
            color: white;
            text-align: center;
            background: rgba(0, 0, 0, 0.5);
            margin-top: 8px;
            margin-bottom: 8px;
            padding: 4px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 0.25);
            border-radius: 5px;
        }

        @media screen and (max-width: 500px) {

            .topnav a,
            .topnav input[type=text] {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }

            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }
    </style>
    <script>
        function confirmDelete(id_Movie) {
            var ans = confirm("ต้องการลบรหัสภาพยนตร์ " + id_Movie);
            if (ans == true)
                document.location = "DeleteMovie.php?Id_Movies=" + id_Movie;
        }
    </script>
</head>

<body>
    <header class="header">
        <img src="image/Netflixtext.png" class="logo" style="width:7.5%"><a href="#default"></a>
        <div class="header-right">
            <a class="active" href="admin.php?name=<?= $Email ?>">Movie</a>
            <a href="admin_member.php?name=<?= $Email ?>">Member</a>
            <a href="AddMovie.php?name=<?= $Email ?>">Adding</a>
            <a href="movie.php">Upload</a>
            <a class="logout" href="logout.php">Logout</a>
        </div>
    </header>
    <br>
    <div class=topnav>
        <form>
            <input type="text" name="keyword">
            <input type="submit" name="button">
        </form>
    </div>
    <br>
    <table>
        <tr>
            <th>Poster</th>
            <th>Id_Movies</th>
            <th>Movie_Name</th>
            <th>Short_Story</th>
            <th>Actor</th>
            <th>Time</th>
            <th>Studio</th>
            <th>Director</th>
            <th>Type</th>
            <th>img</th>
            <th>Runtime </th>
            <th>url</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) :
        ?>
            <tr>
                <td><img width="100" src="image/<?= trim($row["img"]) ?>"></td>
                <td><?= $row["Id_Movies"] ?></td>
                <td><?= $row["Movie_Name"] ?></td>
                <td>
                    <div style="height: 150px; overflow-y: scroll;"><?= $row["Short_Story"] ?></div>
                </td>
                <td><?= $row["Actor"] ?></td>
                <td><?= $row["Time"] ?></td>
                <td><?= $row["Studio"] ?></td>
                <td><?= $row["Director"] ?></td>
                <td><?= $row["Type"] ?></td>
                <td>
                    <div style="height: 150px;width: 60px;word-break: break-all;"><?= trim($row["img"]) ?></div>
                </td>
                <td><?= $row["Runtime"] ?></td>
                <td>
                    <div style="height: 150px;width: 60px;word-break: break-all;"><?= $row["url"] ?></div>
                </td>
                <td><a href="EditMovie.php?Id_Movies=<?= $row['Id_Movies'] ?>">Edit</a></td>
                <td><a href="#" onclick=confirmDelete(<?= "'" . $row["Id_Movies"] . "'" ?>)>Delete</a></td>
            </tr>
        <?php endwhile;
        ?>
    </table>
</body>

</html>