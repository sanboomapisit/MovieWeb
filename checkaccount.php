<?php 
include("condb.php");
session_start();
$email=$_SESSION['Email'];
$sql="SELECT * FROM user
      WHERE  Email='".$email."' ";
$sql = mysqli_query($con,$sql);
$sql= mysqli_fetch_array($sql);
$sql="SELECT * FROM profile
      WHERE  Id_User='".$sql['Id_User']."' ";
$result = mysqli_query($con,$sql);
$row= mysqli_fetch_array($result);
$username = $row['Username'];
        		  if($_POST['first_name']!=""){$Firstname = $_POST['first_name'];							  
				  $sql2="UPDATE `profile` SET `First_name` = '$Firstname' WHERE `profile`.`Username` = '$username'";
				  mysqli_query($con,$sql2);}
                  //first_name/last_name/phone/mobile/email/location
                  if($_POST['last_name']!=""){$Lastname = $_POST['last_name'];
				  $sql2="UPDATE `profile` SET `Last_name` = '$Lastname' WHERE `profile`.`Username` ='$username'";
				  mysqli_query($con,$sql2);} 
				  if($_POST['phone']!=""){$Phone = $_POST['phone'];
			   	  $sql2="UPDATE `profile` SET `Phone` = '$Phone' WHERE `profile`.`Username` = '$username'";
		    	  mysqli_query($con,$sql2);	}
	     		  if($_POST['mobile']!=""){$Mobile = $_POST['mobile'];
                  $sql2="UPDATE `profile` SET `Mobile` = '$Mobile' WHERE `profile`.`Username` = '$username'";
				  mysqli_query($con,$sql2);}
				  if($_POST['location']!=""){$Location = $_POST['location'];
				  $sql2="UPDATE `profile` SET `Location` = '$Location' WHERE `profile`.`Username` = '$username'";
				  mysqli_query($con,$sql2);}
										    
                  header("Location:pro.php"); 
					//echo $username;echo $Firstname;  echo $Lastname;echo $Phone;echo $Mobile;echo $Location;
					
			
                 /* $sql="SELECT * FROM user 
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
					  header("refresh:0;url=profile.php");
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
 
        }*/
?>