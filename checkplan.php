<?php 
session_start();
		
  
                  include("condb.php");
                  $Email = $_SESSION['Email'];
			      $duplicate=mysqli_query($con,"select * from user where Email='$Email'");
			      $row = mysqli_fetch_array($duplicate);
			      $idpay=$row['Id_Payment'];
			      $pay = mysqli_query($con,"select * from payment where Id_Payment='$idpay'");
				  $row2=mysqli_fetch_array($pay);
                  $password = $_POST['Password'];
				  $conpassword=$_POST['Conpassword'];

                  $choice=$_POST['gridRadios'];
                  
				 
					if($password==$conpassword&&$password==$row['Password']){
					  
                      //$row = mysqli_fetch_array($result);
					  //$id=$row['Id_User'];
					//  $query = mysqli_query($con,$strSQL);
					  $string=mysqli_query($con,"UPDATE `payment` SET `Package` = '$choice' WHERE `payment`.`Id_Payment` ='$idpay'");
						
					  //echo $strSQL;
					  
					 //
					   //$_SESSION['Password']=$Newpassword;
                     	  header("refresh:0;url=pro.php");
				  echo '<script type="text/javascript">alert("Plan has been changed successfully");</script>';
					
					
					  
                      
                  }else{
                    echo "<script>";
						header("refresh:0;url=profile.php");
                        echo "console.log(\"$username\");"; 
                        echo "alert(\"Incorrect password\");";
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        
