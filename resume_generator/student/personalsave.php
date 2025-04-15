<?php
  require("dbcon.php");
  session_start();
  if(isset($_POST["personalsave"]))
  {
    $id=$_SESSION["id"];
    $sql="select * from tblpersonal where id='$id'";
    $res=mysqli_query($link,$sql);
    if(mysqli_num_rows($res)>0)
    {

        $sql="delete from tblpersonal where id='$id'";
        echo "<script>alert('Record is deleted')</script>";
        mysqli_query($link,$sql);
    }
    $address=$_POST["txtaddress"];
    $city=$_POST["txtcity"];
    $state=$_POST["txtstate"];
    $pincode=$_POST["txtpin"];
    $gender=$_POST["txtgen"];
    $birth=$_POST["txtbirth"];
    $sql="insert into tblpersonal values('$id','$address','$city','$state','$pincode','$gender','$birth')";
    if(mysqli_query($link,$sql))
    {
           echo"<script>alert('Record is inserted')</script>";
           echo"<script>open('personal.php','_self')</script>";
           
    }
    else
    {
           echo mysqli_error($link);
    }
    mysqli_close($link);    

  }
  else if(isset($_GET["btndelete"]))
  {
      $id=$_SESSION["id"];
      $sql="delete from tblpersonal where id='$id'";
      if(mysqli_query($link,$sql))
      {
          echo "<script>alert('Recrod is Deleted')</script>";
          echo "<script>open('personal.php','_self')</script>";          
      }
  }
?>