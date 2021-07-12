<?php 
session_start();
        if(isset($_POST['click'])){
                  include("condb2.php");
                  $search=mysqli_real_escape_string($con2,$_POST['Search']);
                  $sql="SELECT * FROM test2 
                  WHERE  ID='".$search."'";
                  $result = mysqli_query($con2,$sql);
				
                  if(mysqli_num_rows($result)>=1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["ID"] = $row["ID"];
                      $_SESSION["Fname"] = $row["Fname"];
                      $_SESSION["Lname"] = $row["Lname"];
                      $_SESSION["Address"] = $row["Address"];
                      $_SESSION["Calls"] = $row["Calls"];
                      $_SESSION["Invoices"] = $row["Invoices"];
                      $_SESSION["Date"] = $row["Date"];
                      $_SESSION["Time"] = $row["Time"];
                      $_SESSION["SFname"] = $row["SFname"];
                      $_SESSION["SLname"] = $row["SLname"];
                      $_SESSION["Item"] = $row["Item"];
                      Header("Location: home.php"); //user & password incorrect back to login again
                      
                  }else{
                    echo "<script>";
                        echo "Can't find customer ID."; 
                        Header("Location: home.php");
                    echo "</script>";
 
                  }
        }else{

             Header("Location: login.php"); //user & password incorrect back to login again
 
        }
