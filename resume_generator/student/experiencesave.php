<?php

  require("dbcon.php");
  session_start();
  if(isset($_POST["btnsave"]))
  {
    $id=$_SESSION["id"];
    $srno=$_POST["txtsr"];
    $sql="select *from tblexperience where id='$id' and srno='$srno'";
    $res=mysqli_query($link,$sql);
    if(mysqli_num_rows($res)>0)
    {
        $sql="delete from tblexperience where id='$id' and srno='$srno'";
        mysqli_query($link,$sql);
    }
    $experience=$_POST["txts"];
    $sql="insert into tblexperience values('$id','$srno','$experience')";

    if(mysqli_query($link,$sql))
    {
           echo"<script>alert('Record is inserted')</script>";
           echo"<script>open('experience.php','_self')</script>";
           
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
      $srno=$_GET["srno"];
      $sql="delete from tblexperience where id='$id' and srno='$srno'";
          
      if(mysqli_query($link,$sql))
      {
          echo "<script>alert('Recrod is Deleted')</script>";
          echo "<script>open('experience.php','_self')</script>";          
      }
  }
?>