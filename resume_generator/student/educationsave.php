<?php
  require("dbcon.php");
  session_start();
  if(isset($_POST["btnsave"]))
  {
    $id=$_SESSION["id"];
    $srno=$_POST["txtsr"];
    $sql="select *from tbleducationo where id='$id' and srno='$srno'";
    $res=mysqli_query($link,$sql);
    if(mysqli_num_rows($res)>0)
    {
        $sql="delete from tbleducationo where id='$id' and srno='$srno'";
        mysqli_query($link,$sql);
    }
    $education=$_POST["txtename"];
    $university=$_POST["txtu"];
    $passing=$_POST["txtpy"];
    $result=$_POST["txtrs"];
    $sql="insert into tbleducationo values('$id','$srno','$education','$university','$passing','$result')";

    if(mysqli_query($link,$sql))
    {
           echo"<script>alert('Record is inserted')</script>";
           echo"<script>open('education.php','_self')</script>";
           
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
      $sql="delete from tbleducationo where id='$id' and srno='$srno'";
      if(mysqli_query($link,$sql))
      {
          echo "<script>alert('Recrod is Deleted')</script>";
          echo "<script>open('education.php','_self')</script>";          
      }
  }
?>