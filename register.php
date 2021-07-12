<?php include("condb.php");
session_start();

?>
<?php

if ($_POST["Credit"] == "") {
	header("refresh:0;url=./signup.php");
	echo '<script type="text/javascript">alert("Please input your Credit card number!");</script>';
	exit();
}

if ($_POST["terms"] != "agree") {
	header("refresh:0;url=./signup.php");
	echo '<script type="text/javascript">alert("Please agree with the terms and conditions");</script>';
	exit();
}

// $Name= $_SESSION["Name"]; 
$Password = $_SESSION["Password"];
$Email = $_SESSION["Email"];
$Status = 'member';
$Payment = '0';
$Package = $_POST["gridRadios"];
$Credit = $_POST["Credit"];
$Username = $_SESSION["Email"];
$Address = $_POST["Address"];
$Phone = $_POST["Phone"];
$duplicate = mysqli_query($con, "select * from user where Email='$Email'");
$Picture = "image/profile/default.jpg";
$date = date("Y-m-d");
if (strlen($Credit) == "33333") {
	header("refresh:0;url=./signup.php");
	echo '<script type="text/javascript">alert("Invalid Credit card number");</script>';
} else if (mysqli_num_rows($duplicate) > 0) {
	header("refresh:0;url=./signup.php");
	echo '<script type="text/javascript">alert("Already existed!");</script>';
} else {
	$duplicate2 = mysqli_query($con, "select * from user ");
	$duplicate3 = mysqli_num_rows($duplicate2)+1;

	$strSQL = "INSERT INTO `payment` (`Id_Payment`, `Package`, `Card_Number`, `Credit`) VALUES 
		('$duplicate3', '$Package', '$Credit', '0')";
	mysqli_query($con, $strSQL);

	$strSQL = "INSERT INTO user (Email,Password,Status,Id_User,Id_Payment,Signup_date) VALUES ('" . $Email . "','" . $Password . "','" . $Status . "','" . $duplicate3 . "','" . $duplicate3 . "','" . $date . "')";
	if (mysqli_query($con, $strSQL)) {
		$sql = "SELECT * FROM user WHERE  Email='" . $Email . "'";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) == 1) {

			$row = mysqli_fetch_array($result);
			$_SESSION["ID"] = $row["ID"];
			// $sql2 = "INSERT INTO profile (Username,Picture,Id_User) VALUES ('".$Name."','','".$ID."')";
			//$query = mysqli_query($con,$sql2);
			$strSQL = "INSERT INTO `profile` (`Username`, `Id_User`, `Phone`, `Location`) VALUES 
					  ('$Username', '$duplicate3','$Phone','$Address')";
			// echo $strSQL;
			mysqli_query($con, $strSQL);
			session_destroy();
			header("refresh:0;url=./index.php");
			echo '<script type="text/javascript">alert("Success!");</script>';
		}
	} else {
		echo "Error: " . $strSQL . "<br>" . mysqli_error($con);
	}
	mysqli_close($con);
}
?>