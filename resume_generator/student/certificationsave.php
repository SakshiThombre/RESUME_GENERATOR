<?php
  require("dbcon.php");
  session_start();
  if(isset($_POST["btnsave"]))
  {
    $id=$_SESSION["id"];
    $srno=$_POST["txtsr"];
    $sql="select *from tblcertificate where id='$id' and srno='$srno'";
    $res=mysqli_query($link,$sql);
    if(mysqli_num_rows($res)>0)
    {
        $sql="delete from tblcertificate where id='$id' and srno='$srno'";
        mysqli_query($link,$sql);
    }
    $certificate=$_POST["txtcr"];
    $grade=$_POST["txtgrade"];
    $sql="insert into tblcertificate values('$id','$srno','$certificate','$grade')";

    if(mysqli_query($link,$sql))
    {
           echo"<script>alert('Record is inserted')</script>";
           echo"<script>open('certification.php','_self')</script>";
           
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
      $srno=$_GET["txtsr"];
      $sql="delete from tblcertificate where id='$id' and srno='$srno'";
      if(mysqli_query($link,$sql))
      {
          echo "<script>alert('Recrod is Deleted')</script>";
          echo "<script>open('certification.php','_self')</script>";          
      }
  }
?>