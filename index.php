<?php session_start(); ?>
<?php
include('h.php');
?>
<html>

<head>
  <link rel="stylesheet" href="./CSS/index.css">
  <title>Index</title>
  <style>
    .BackgroundMorning{
      background-color:#ededed;
    }
    .BackgroundNigth{
      background-color:#0B040F ;
    }
    .btn {
      width: 100%;
      background-color: black;
      border-color: grey;
      box-shadow: 0 0 8px 0 grey;
      color: #ffffff;
      border: 2px solid black;
      border-radius: 25px;
    }
    .btn2 {
      width: 100%;
      background-color: white;
      border-color: grey;
      box-shadow: 0 0 8px 0 grey;
      color: black;
      border: 2px solid black;
      border-radius: 25px;
    }
    .topbutton{
      border-radius:5px;
      border: 2px solid black;
      box-shadow: 0 0 6px 0 grey;
      background-color: white;
      width:80px;
      color:black ;
      text-align:center;
      padding:5px 0px 2px;
      margin-right:6px;
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
      
    }
    .atag{
      background-color:black;
    }
  </style>
  <script>
      function SwapMode1(){
          document.getElementById("bodyer").className = "BackgroundMorning";
          document.getElementById("container1").style.backgroundColor = "#ffffff";
          document.getElementById("font").style.color = "black";
          document.getElementById("bth").className = "btn";
          document.getElementById("label").style.color = "black";
          var x = document.getElementsByClassName("topbutton");
          x[0].style.backgroundColor = "white";
          x[0].style.color = "#0b040f";
          x[1].style.backgroundColor = "#A50000";
          x[1].style.color = "white";
          var x = document.getElementsByClassName("topbutton2");
          x[0].style.backgroundColor = "white";
          x[0].style.color = "#0b040f";
          x[1].style.backgroundColor = "white";
          x[1].style.color = "#0b040f";
      }
      function SwapMode2(){
          document.getElementById("bodyer").className = "BackgroundNigth";
          document.getElementById("container1").style.backgroundColor = "#262626";
          document.getElementById("font").style.color = "#ffffff";
          document.getElementById("bth").className = "btn2";
          document.getElementById("label").style.color = "#fff";
          var x = document.getElementsByClassName("topbutton");
          x[0].style.backgroundColor = "#A50000";
          x[0].style.color = "white";
          x[0].style.borderColor = "#0b040f";
          x[1].style.backgroundColor = "#262626";
          x[1].style.color = "white";
          x[1].style.borderColor = "#0b040f";
          var x = document.getElementsByClassName("topbutton2");
          x[0].style.backgroundColor = "#262626";
          x[0].style.color = "white";
          x[0].style.borderColor = "#0b040f";
          x[1].style.backgroundColor = "#262626";
          x[1].style.color = "white";
          x[1].style.borderColor = "#0b040f";
          
      }
      
  </script>
</head>

<body id="bodyer" class="BackgroundMorning" >

<?php
 //<?php if($_COOKIE[lang]=="Eng" && $_COOKIE[lang]=="index"){ echo "background:red; color:white;"} 
      if(empty($_COOKIE["langeage"])){
        setcookie("langeage","Thai",time()+3600*24*1);
      }
  ?>
  <h3 align="center" style="padding-top:30px;padding-bottom: 30px;">
  </h3>
  <div class="container" style="padding-top:0px">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4" id="container1" style="background-color:#ffffff;border-color: black;
      box-shadow: 0 0 8px 0 ">
          <div style="float:left; margin-top:10px;  display:flex;">
            <input  class="topbutton" type="button" value="DarkMode" onclick="SwapMode2()" name="N">
            <input  class="topbutton" type="button" value="lightMode" onclick="SwapMode1()" name="M">
          </div>
          <div style="float:right; margin-top:10px; margin-bottom:20px; display:flex;">
          <a   href="cookie.php?lang=Eng&goto=index"><input class="topbutton2"   style="margin-right:6px; <?php if($_COOKIE["langeage"] == "Eng"){ 
            echo "background-color:#A50000;"."color:white;";}
    ?>" type="button" value="Eng" name="Eng"></a>
          <a   href="cookie.php?lang=Thai&goto=index"><input  class="topbutton2"   style="<?php if($_COOKIE["langeage"] == "Thai"){ 
            echo "background-color:#A50000;"."color:white;";}
    ?>" type="button" value="Thai" name="Thai"></a>
          </div><br><br><br>
        <h3 align="center" style="padding-top:30px;padding-bottom: 0px;">
          <img src='image/Movie2freelogo.png' " width=" 300" height="240" />
        </h3>

        <?php if($_COOKIE["langeage"] == "Eng"): ?>
          <h2 align="center">
            <font color="black" id="font">Sign In</font>
          </h2>
          <form name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
            <div class="inputWithIcon">
              <div class="col-sm-15">
                <input type="text" name="username" class="form-control" required placeholder="| Email" /autofocus> <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
              </div>
            </div>
            <div class="inputWithIcon">
              <div class="col-sm-15">
                <input type="password" name="password" class="form-control" required placeholder="| Password" />
                <i class="glyphicon glyphicon-arrow-right" aria-hidden="true"></i>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <h3 align="center">
                  <button type="submit" class="btn" id="bth">
                    <span class="glyphicon glyphicon-log-in"> </span>
                    Login </button>
                </h3>
                <label>
                  <input type="checkbox" checked="checked" name="remember" >
                  <font color="black" id="label">Remember me</font>
                </label>
                <br>
                <a  href="signup.php">
                  register
                </a>
              </div>
            </div>
          </form>
        <?php elseif($_COOKIE["langeage"] == "Thai"): ?>
          <h2 align="center">
            <font color="black" id="font">เข้าสู่ระบบ</font>
          </h2>
          <form name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
            <div class="inputWithIcon">
              <div class="col-sm-15">
                <input type="text" name="username" class="form-control" required placeholder="| อีเมล" /autofocus> <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
              </div>
            </div>
            <div class="inputWithIcon">
              <div class="col-sm-15">
                <input type="password" name="password" class="form-control" required placeholder="| รหัสผ่าน" />
                <i class="glyphicon glyphicon-arrow-right" aria-hidden="true"></i>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <h3 align="center">
                  <button type="submit" class="btn" id="bth" >
                    <span class="glyphicon glyphicon-log-in"> </span>
                    เข้าสู่ระบบ </button>
                </h3>
                <label>
                  <input type="checkbox" checked="checked" name="remember" >
                  <font color="black" id="label">จดจำบัญชีนี้ไว้</font>
                </label>
                <br>
                <a href="signup.php">
                  สมัครสมาชิก
                </a>
              </div>
            </div>
          </form>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>

</html>