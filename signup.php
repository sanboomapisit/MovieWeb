<!DOCTYPE html>
<?php session_start();
session_destroy(); ?>
<html lang="en">

<head>
	<title>Sign Up Metflix</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<script>
        function send() {
            request = new XMLHttpRequest();
            request.onreadystatechange = showResult;
            var Email = document.getElementById("Email").value;
            var url= "searching.php?Email=" + Email;
            request.open("GET", url, true);
            request.send(null);
        }
        function showResult() {
            if (request.readyState == 4) {
                if (request.status == 200){
                    document.getElementById("labelcheak").innerHTML = request.responseText;
                }
            }
        }
</script>
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
	.topbutton2{
      border-radius:5px;
      border: 2px solid black;
      box-shadow: 0 0 6px 0 grey;
      background-color: white;
      width:50px;
      color:black ;
      text-align:center;
      padding:5px 0px 2px;
      margin-right:6px;
    }
</style>

<body style='background-color:#ededed'>
	<h3 align="center" style="padding-top:30px;padding-bottom: 30px;">
	</h3>

	<div class="container" style="min-width:350px;padding-top:0px;padding-left:200px;padding-right:200px;margin-left:97.5px;margin-right:97.5px;">
		
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4" style="background-color:#ffffff;border-color: black;
  	box-shadow: 0 0 8px 0 ;padding-left:20px;padding-right:20px;padding-top:10px;padding-bottom:20px">
	  <div>
	  <div style="float:right; display:block; margin-top:10px; margin-bottom:50px; margin-right:10px">
    		<a href="cookie.php?lang=Eng&goto=signup"><input class="topbutton2" type="button" value="Eng" name="Eng" style="<?php if($_COOKIE["langeage"] == "Eng"){ 
            echo "background-color:#A50000;"."color:white;";}
    ?>"></a>
    		<a href="cookie.php?lang=Thai&goto=signup"><input class="topbutton2"  type="button" value="Thai" name="Thai" style="<?php if($_COOKIE["langeage"] == "Thai"){ 
            echo "background-color:#A50000;"."color:white;";}
    ?>"></a>
		</div> 
	  </div>
				<div class="limiter">
					<div class="container-login100" >
						<div class="wrap-login100" style="margin-bottom:15px;">
							<span class="login100-form-title p-b-20">
							<?php if($_COOKIE["langeage"] == "Eng"):?>
								<div >
									<p>
										<span style="font-size:0.8em;" >Movie2Free V1.0</span>
									</p>
								</div>	
								<div style="display:block;  margin:60px 0 20px; text-align:center; ">
									<h1 align="center" style="margin-right:0px;">Sign Up</h1>
								</div>
							</span>
							<form name="formlogin" action="credit.php" method="POST" class="form-horizontal">

								<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
									Email
									<input type="text" pattern="..*@..*" name="Email" class="input100" id="Email" onkeyup="send()" />
									<span class="focus-input100" data-placeholder="Email"></span>
									<div id="labelcheak"></div>
								</div>

								<div class="wrap-input100 validate-input" data-validate="Enter Password">
									Password
									<span class="btn-show-pass">
										<i class="zmdi zmdi-eye"></i>
									</span>
									<input class="input100" type="password" name="Password" id="Password">
									<span class="focus-input100" data-placeholder="Password"></span>
								</div>

								<div class="wrap-input100 validate-input" data-validate="Enter Confirm Password">
									Confirm Password
									<span class="btn-show-pass">
										<i class="zmdi zmdi-eye"></i>
									</span>
									<input class="input100" type="password" name="ConPassword" id="ConPassword">
									<span class="focus-input100" data-placeholder="Confirm Password"></span>
								</div>
								<div class="container-login100-form-btn">
									<div class="wrap-login100-form-btn">
										<div class="login100-form-bgbtn">
											<h3 align="center">
												<button type="submit" class="btn" id="btn">
													<span class="glyphicon glyphicon-log-in"> </span>
													Continue </button>
											</h3>
										</div>
									</div>
								</div>

							</form>
							<div class="text-center p-t-20">
								<h3 align="center">
									<span class="txt1">have an account?</span>
									<a class="txt2" href="index.php">Log in</a>
								</h3>
							</div>
							<?php elseif($_COOKIE["langeage"] == "Thai"):?>
								<div >
									<p>
										<span style="font-size:0.8em;" >Movie2Free V1.0</span>
									</p>
								</div>
								<div style="display:block;  margin:60px 0 20px; text-align:center; ">
									<h1 align="center" style="margin-right:0px;">สมัครสมาชิก</h1>
								</div>
							</span>
							<form name="formlogin" action="credit.php" method="POST" class="form-horizontal">

								<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
									อีเมล
									<input type="text" name="Email" class="input100" id="Email" onkeyup="send()" />
									<span class="focus-input100" data-placeholder="Email"></span>
									<div id="labelcheak"></div>
								</div>
								<!-- <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
									Username
									<input type="text" name="Username" class="input100" id="Username" />
									<span class="focus-input100" data-placeholder="Username"></span>
								</div> -->
								<!-- <div class="wrap-input100 validate-input" data-validate="Enter Name/LastName">
									Name - Last name
									<input type="text" name="Name" class="input100" id="Name" />
									<span class="focus-input100" data-placeholder="Name/Last"></span>
								</div> -->

								<div class="wrap-input100 validate-input" data-validate="Enter Password">
									รหัสผ่าน
									<span class="btn-show-pass">
										<i class="zmdi zmdi-eye"></i>
									</span>
									<input class="input100" type="password" name="Password" id="Password">
									<span class="focus-input100" data-placeholder="Password"></span>
								</div>

								<div class="wrap-input100 validate-input" data-validate="Enter Confirm Password">
									ยืนยันรหัสผ่านอีกครั้ง
									<span class="btn-show-pass">
										<i class="zmdi zmdi-eye"></i>
									</span>
									<input class="input100" type="password" name="ConPassword" id="ConPassword">
									<span class="focus-input100" data-placeholder="Confirm Password"></span>
								</div>
								<div class="container-login100-form-btn">
									<div class="wrap-login100-form-btn">
										<div class="login100-form-bgbtn">
											<h3 align="center">
												<button type="submit" class="btn" id="btn">
													<span class="glyphicon glyphicon-log-in"> </span>
													ดำเนินการสมัครสมาชิก </button>
											</h3>
										</div>
									</div>
								</div>

							</form>
							<div class="text-center p-t-20">
								<h3 align="center">
									<span class="txt1">
									มีบัญชีสมาชิกอยู่แล้ว?
									</span>

									<a class="txt2" href="index.php">
										ลงชื่อเข้าใช้
									</a>
								</h3>
							</div>
						<?php endif; ?>
						</div>
					</div>
				</div>


				<div id="dropDownSelect1"></div>
			</div>
		</div>
	</div>

</body>

</html>