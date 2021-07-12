<?php
    include('condb.php');
    if($_GET["lang"]=="Eng" ){
        setcookie("langeage","Eng",time()+3600*24*1);
    }elseif($_GET["lang"]=="Thai"){
        setcookie("langeage","Thai",time()+3600*24*1);
    }
    if($_GET["goto"]=="signup"){
        header("location:./signup.php");
    }else{
        header("location:./index.php");
    }
?>