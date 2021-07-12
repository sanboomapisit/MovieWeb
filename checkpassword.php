<?php 
session_start();
		
        if(isset($_POST['Email'])){
                  include("condb.php");
                  $username = $_POST['Email'];
                  $password = $_POST['Password'];
				  $Newpassword=$_POST['Newpassword'];
                  $sql="SELECT * FROM user 
                  WHERE  Email='".$username."' 
                  AND  Password='".$password."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);
					  $id=$row['Id_User'];
					  $strSQL = "UPDATE `user` SET `Password` = '$Newpassword' WHERE `user`.`Id_User` = '$id'";
					
					  $query = mysqli_query($con,$strSQL);
					  //echo $strSQL;
					  
					 //
					   //$_SESSION['Password']=$Newpassword;
                     	  header("refresh:0;url=pro.php");
				  echo '<script type="text/javascript">alert("Password has been changed successfully");</script>';
					
					
					  
                      
                  }else{
                    echo "<script>";
                        echo "console.log(\"$username\");"; 
                        echo "alert(\" Email หรือ  Password ไม่ถูกต้อง\");";
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{ 

           //  Header("Location: login.php"); //user & password incorrect back to login again
 
        }
