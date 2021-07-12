<?php 
session_start();
		
        if(isset($_POST['Email'])){
                  include("condb.php");
                  $username = $_POST['Email'];
                  $password = $_POST['Password'];
				  $Newemail=$_POST['Newemail'];
                  $sql="SELECT * FROM user 
                  WHERE  Email='".$username."' 
                  AND  Password='".$password."' ";
                  $result = mysqli_query($con,$sql);
				  $duplicate=mysqli_query($con,"select * from user where Email='$Newemail'");	
				  if (mysqli_num_rows($duplicate)>0){
						 
				  header("refresh:0;url=email.php");
				  echo '<script type="text/javascript">alert("Already existed!");</script>';
				  }
                  else if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);
					  $id=$row['Id_User'];
					  $strSQL = "UPDATE `user` SET `Email` = '$Newemail' WHERE `user`.`Id_User` = '$id'";
					
					  $query = mysqli_query($con,$strSQL);
					  //echo $strSQL;
					  
					 //
                     // echo '<script type="text/javascript">alert("Email has been changed successfully");</script>'; 
					   $_SESSION['Email']=$Newemail;
					  header("refresh:0;url=pro.php");
				  echo '<script type="text/javascript">alert("Email has been changed successfully");</script>';
					
					  
                      
                  }
					
				else{
                    echo "<script>";
                        echo "console.log(\"$username\");"; 
                        echo "alert(\" Email หรือ  Password ไม่ถูกต้อง\");";
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{ 

           //  Header("Location: login.php"); //user & password incorrect back to login again
 
        }
