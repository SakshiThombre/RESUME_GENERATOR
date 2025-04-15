<?php
  require("dbcon.php");
  session_start();
  if(isset($_POST["btnsave"]))
  {
    $id=$_SESSION["id"];
    $srno=$_POST["txtsr"];
    $sql="select *from tblhobbies where id='$id' and srno='$srno'";
    $res=mysqli_query($link,$sql);
    if(mysqli_num_rows($res)>0)
    {
        $sql="delete from tblhobbies where id='$id' and srno='$srno'";
        mysqli_query($link,$sql);
    }
    $hobbies=$_POST["txth"];
    $sql="insert into tblhobbies values('$id','$srno','$hobbies')";

    if(mysqli_query($link,$sql))
    {
           echo"<script>alert('Record is inserted')</script>";
           echo"<script>open('hobbies.php','_self')</script>";
           
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
      $sql="delete from tblhobbies where id='$id' and srno='$srno'";
      if(mysqli_query($link,$sql))
      {
          echo "<script>alert('Recrod is Deleted')</script>";
          echo "<script>open('hobbies.php','_self')</script>";          
      }
  }
?>