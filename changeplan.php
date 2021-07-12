<?php session_start();
include('condb.php');
$Email = $_SESSION['Email'];
$name = $_SESSION['Name'];
$Status = $_SESSION['Status'];
$duplicate=mysqli_query($con,"select * from user where Email='$Email'");
$row = mysqli_fetch_array($duplicate);
$idpay=$row['Id_Payment'];
$pay = mysqli_query($con,"select * from payment where Id_Payment='$idpay'");
$row2=mysqli_fetch_array($pay);
//echo $row2['Card_Number'];
if ($Status != 'member') {
	Header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #f3f3f3;
}

.header {
  overflow: hidden;
  background-color:#0D0A0A;
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
  
  color:#FF0004;  
	font-weight: bold;
}

.header-right {
  float: right;
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
}
div.gallery {
  margin: 50px;
  border: 1px solid #ccc;
  float: left;
  width: 200px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
	background-color:white;
  padding: 15px;
  text-align: center;
}
		
		div.account{
		text-align:left;margin-left:15%;margin-top:4%;
		}
		div.lefttext{
		text-align:left;margin-left:15%;margin-top:1%;
		}
		div.middletext{
		text-align:center;margin-right:16%;margin-top:1%;
		}
		div.righttext{
		text-align:right;margin-right:15%;margin-top:1%;
		}
.button {
  
  border: none;
  background-color: #e7e7e7; color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.column {
    float: left;
    }

    /* Set width length for the left, right and middle columns */
    .left {
    width: 30%;
		margin-left:15%;
    }

    .middle {
    width: 20%;text-align:middle;
    }
    
    .right {
    width:20%;
		margin-right:10%;text-align:right;
    }

    .row:after {
    content: "";
    display: table;
    clear: both;
    }
A {text-decoration: none;}
	</style>



	<title></title>
</head>

<body style="background-color:f3f3f3;"> 
	<header class="header">
		<img src = "image/Netflixtext.png" class="logo" style="width:7.5%"><a href="#default" ></a>
  <div class="header-right">
	  <a href="home.php">Home</a>
	  <a href="favorite.php">Favorites</a>
    <a   class="active" href="pro.php">Profile</a>
	  <a href="history.php">History</a>
    <a class="logout" href="logout.php">Logout</a>
  </div>
</header>
	
		<div class="account">
		<h1 >Change Subscription Plan </h1></div>
			<hr width="70%";padding=0;>
	<form  name="formchange" action="checkplan.php" method="POST" id="change" class="form-horizontal" 
		  style="margin-left:15%;margin-right:15%;">
      
      
      <fieldset>
     
        <p>
          <div>Current subscription plan : <?php echo $row2['Package']?></div>
          
        </p>
		  <p>
          <label>Please select your plan :</label>
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
        </p>
        <p>
          <label>Password</label>
          <input type = "password"
				 name = "Password" 
                 id = 'Password'
                  />
        </p>
		  <p>
          <label>Confirm password</label>
          <input type = "password"
                 name = "Conpassword"
				 id = 'Conpassword'
                  />
        </p>
       <button type="submit" class="btn" id="btn">
            <span onlick=check() class="glyphicon glyphicon-log-in"> </span>
            submit </button>
          
      </fieldset>
    </form>
  </body>
</html>
	

</body>

</html>