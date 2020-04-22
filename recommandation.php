<?php 
    session_start();
    if(!isset($_SESSION['Firstname'])){ 
        echo "<script>location.href='login.php';</script>";
      }   
?>