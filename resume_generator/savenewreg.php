<?php
  require("dbcon.php");
  session_start();
  if(isset($_POST["btnsave"]))
  {
       $id=$_POST["txtid"];
       $name=$_POST["txtname"];
       $mobile=$_POST["txtmob"];
       $email=$_POST["txtemail"];
       $pass=$_POST["txtpass"];
       $profession=$_POST["txtper"];
       $sql="insert into tblstudent values('$id','$name','$email','$mobile','$pass','$profession')";

       if(mysqli_query($link,$sql))
       {
              echo"<script>alert('Record is inserted')</script>";
              echo"<script>open('index.php','_self')</script>";
              
       }
       else
       {
              echo mysqli_error($link);
       }
       mysqli_close($link);
  }
?>