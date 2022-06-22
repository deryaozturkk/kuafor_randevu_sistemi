<?php 
   
   
   session_start(); 
   

   
   if ( !isset($_SESSION['username']) ) { 
   
     header("Location: _login.php"); 
   
     exit(); 
   
    } 
   
   ?> 
<html>
   <meta http-equiv="Content-Type"  
      content="text/html; charset=UTF-8" />
   <p> Merhaba <? echo $_SESSION['username'] ?>, <br /> 
      Özel sayfanıza hoş geldiniz.<br /><br /> 
      <a href='_logout.php'>[Oturumu Kapat]</a> 
</html>