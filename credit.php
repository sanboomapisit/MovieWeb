<!DOCTYPE html>
<?php include("condb.php");
session_start();
?>
<?php
// $_SESSION["Name"]= $_POST["Name"]; 
$_SESSION["Password"] = $_POST["Password"];
$_SESSION["Email"] = $_POST["Email"];
$Status = 'member';
$_SESSION["Username"] = $_POST['Username'];
$duplicate = mysqli_query($con, "select * from user where Email='$Email'");

if (mysqli_num_rows($duplicate) > 0) {
	header("refresh:0;url=./signup.php");
	echo '<script type="text/javascript">alert("Already existed!");</script>';
}
if ($_POST["Email"] == "") {
	header("refresh:0;url=./signup.php");
	echo '<script type="text/javascript">alert("Please input your Email!");</script>';
	exit();
}
// if ($_POST["Username"] == "") {
// 	header("refresh:0;url=./signup.php");
// 	echo '<script type="text/javascript">alert("Please input your Username!");</script>';
// 	exit();
// }
// if(trim($_POST["Name"]) == "")
// {
// 	header("refresh:0;url=./signup.php");
// 	echo '<script type="text/javascript">alert("Please input your Name!");</script>';
// 	exit();		
// }
if (trim($_POST["Password"]) == "") {
	header("refresh:0;url=./signup.php");
	echo '<script type="text/javascript">alert("Please input your Password!");</script>';
	exit();
}
if ($_POST["Password"] != $_POST["ConPassword"]) {
	header("refresh:0;url=./signup.php");
	echo '<script type="text/javascript">alert("Password not Match!");</script>';
	exit();
}

?>
<html lang="en">

<head>
	<title>Credit Card</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style type="text/css">
	#btn {
		width: 100%;
		background-color: black;
		border-color: grey;
		box-shadow: 0 0 8px 0 grey;
		color: #ffffff;
		border: 2px solid black;
		border-radius: 25px;
	}

	input[type="text"] {
		width: 100%;
		border: 2px solid #aaa;
		border-radius: 4px;
		margin: 8px 0;
		outline: none;
		padding: 8px;
		box-sizing: border-box;
		transition: 0.3s;
	}

	input[type="password"] {
		width: 100%;
		border: 2px solid #aaa;
		border-radius: 4px;
		margin: 8px 0;
		outline: none;
		padding: 8px;
		box-sizing: border-box;
		transition: 0.3s;
	}

	input[type="text"]:focus {
		border-color: red;
		box-shadow: 0 0 8px 0 red;
	}

	input[type="password"]:focus {
		border-color: red;
		box-shadow: 0 0 8px 0 red;
	}

	.inputWithIcon input[type="text"] {
		padding-left: 40px;
	}

	.inputWithIcon input[type="password"] {
		padding-left: 40px;
	}

	.inputWithIcon {
		position: relative;
	}

	.inputWithIcon i {
		position: absolute;
		left: 8px;
		top: 0px;
		padding: 9px 8px;
		color: #000;
		transition: 0.3s;
	}

	.inputWithIcon input[type="text"]:focus+i {
		color: red;
	}

	.inputWithIcon input[type="password"]:focus+i {
		color: red;
	}

	.inputWithIcon.inputIconBg i {
		background-color: #aaa;
		color: #fff;
		padding: 9px 4px;
		border-radius: 4px 0 0 4px;
	}

	.inputWithIcon.inputIconBg input[type="text"]:focus+i {
		color: #fff;
		background-color: dodgerBlue;
	}
</style>

<body style='background-color:#ededed'>
	<h3 align="center" style="padding-top:30px;padding-bottom: 30px;">
	</h3>

	<div class="container" style="padding-top:0px;padding-left:200px;padding-right:200px;margin-left:97.5px;margin-right:97.5px;">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4" style="background-color:#ffffff;border-color: black;
  	box-shadow: 0 0 8px 0 ;padding-left:20px;padding-right:20px;padding-top:10px;padding-bottom:20px">
				<div class="limiter">
					<div class="container-login100">
						<div class="wrap-login100">
							<span class="login100-form-title p-b-20">
								<h2 align="center">
									<font color="black" size="6em">Payment</font>
								</h2>
							</span>
							<form name="formlogin" action="register.php" method="POST" class="form-horizontal">

								<div class="wrap-input100 validate-input" data-validate="">
									Credit Card
									<input type="text" name="Credit" pattern="[0-9]{16}" class="input100" id="Credit" />
									<span class="focus-input100" data-placeholder="Credit"></span>
								</div>

								<div class="wrap-input100 validate-input" data-validate="Enter Name/LastName">
									Address
									<input type="text" name="Address" class="input100" id="" />
									<span class="focus-input100" data-placeholder=""></span>
								</div>
								<div class="wrap-input100 validate-input" data-validate="">
									Phone
									<input type="text" name="Phone" pattern="0[0-9]{9}" class="input100" id="" />
									<span class="focus-input100" data-placeholder=""></span>
								</div>

								<legend class="col-form-label col-sm-2 pt-0">Please select your payment</legend>
								<div class="col-sm-10">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Basic" checked>
										<label class="form-check-label" for="gridRadios1">
											Basic - 199 Baht/month
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Standard">
										<label class="form-check-label" for="gridRadios2">
											Standard - 299 Baht/month
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="Premium">
										<label class="form-check-label" for="gridRadios3">
											Premium - 599 Baht/month
										</label>
									</div>
								</div>


								<div class="form-group row">
									<div class="col-sm-2"><a href="https://google.com" target="_blank">Terms and Conditions</a></div>

									<div class="col-sm-10">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="terms" name="terms" value="agree" <label class="form-check-label" for="terms">
											I have read and agree with the terms and conditions
											</label>
										</div>
									</div>
								</div>


								<!--
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Register Now
							</button>
						</div>
					</div>
-->



								<div class="container-login100-form-btn">
									<div class="wrap-login100-form-btn">
										<div class="login100-form-bgbtn">
											<h3 align="center">
												<button type="submit" class="btn" id="btn">

													<span class="glyphicon glyphicon-log-in"> </span>
													Register Now </button>
											</h3>
										</div>
									</div>
								</div>

							</form>
							<div class="text-center p-t-20">
								<h3 align="center">
									<span class="txt1">
										have an account?
									</span>

									<a class="txt2" href="index.php">
										Log in
									</a>
								</h3>
							</div>
						</div>
					</div>
				</div>



			</div>
		</div>
	</div>

</body>