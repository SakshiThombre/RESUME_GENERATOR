<?php
   session_start();
   session_destroy();
   echo "<script>alert('Logout account....')</script>";
   echo "<script>open('index.php','_self')</script>";
?>