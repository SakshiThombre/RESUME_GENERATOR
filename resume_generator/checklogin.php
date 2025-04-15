<?php
  session_start();
  require("dbcon.php");
  if(isset($_SESSION["uname"]))
  {
    echo"<script>open('student/index.php','_self')</script>";
  }
  else if(isset($_POST["btnlogin"]))
  {
     $logid=$_POST["txtid"];
     $pass=$_POST["txtpass"];
     $sql="select * from tblstudent where mob='$logid' and pass='$pass'";
     $res=mysqli_query($link,$sql);
     if(mysqli_num_rows($res)>0)
     {
        if($row=mysqli_fetch_array($res))
        {
            $_SESSION["id"]=$row[0];
            $_SESSION["uname"]=$row[1];
            $_SESSION["profession"]=$row[5];
            echo "<script>open('student/index.php','_self')</script>";
        }
        else
         {
            echo "<script>alert('Invalid user id or password')</script>";
            echo "<script>open('index.php','_self')</script>";
         }
     }

     else
     {
        echo "<script>alert('Invalid user id or password')</script>";
        echo "<script>open('index.php','_self')</script>";
     }
   }


?>