<?php

  session_start();
  require("dbcon.php");
  if(isset($_POST["btnsave"]))
  {
    $id=$_POST["txtid"];
    $name=$_SESSION["uname"];
    $sql="select * from studphoto1 where id='$id' and name='$name'";
    $res=mysqli_query($link,$sql);
    if(mysqli_num_rows($res)>0)
    {
      if($row=mysqli_fetch_array($res))
      {
        $_SESSION["id"]=$id;
        $path=$row["path"];
        // unlink($path);
      }
      //  $sql="delete from studphoto1 where id='$id'";
      // mysqli_query($link,$sql);
    } 

    $fname=$_FILES["txtfile"] ["name"];
    $ftempname=$_FILES["txtfile"] ["tmp_name"];
    move_uploaded_file($ftempname,"../img/".$fname);
    $path="../img/".$fname;
    echo"<script>alert('.$path.')</script>";
    $sql="insert into studphoto1 values('$id','$path','$name')";
    if(mysqli_query($link,$sql))
    {
      echo "<script>alert('Photo uploaded')</script>";
      echo "<script>open('certification.php','_self')</script>";

    }
  }
?>
