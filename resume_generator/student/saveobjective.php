<?php
  require("dbcon.php");
  session_start();
  if(isset($_POST["btnsave"]))
  {
    $id=$_SESSION["id"];
    $sql="select * from tblobjective where id='$id'";
    $res=mysqli_query($link,$sql);
    if(mysqli_num_rows($res)>0)
    {
        $sql="delete from tblobjective where id='$id'";
        mysqli_query($link,$sql);
    }

    $obj=$_POST["txtobj"];
    $sql="insert into tblobjective values('$id','$obj')";

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