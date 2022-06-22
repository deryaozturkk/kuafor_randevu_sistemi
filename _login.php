<?php 
   session_start(); 
   
   require('_mysqlbaglan.php'); 
   
    
   
   if (isset($_POST['username']) and isset($_POST['password'])){ 
   
   extract($_POST); 
  
   
   $password = hash('sha256', $password); 
   
   $sql = "SELECT * FROM `kullanicilar` WHERE "; 
   
   $sql= $sql . "kullaniciadi='$username' and sifre='$password'"; 
   
    
   
   $cevap = mysqli_query($baglanti, $sql); 
         
   
   if(!$cevap ){ 
   
       echo '<br>Hata:' . mysqli_error($baglanti); 
   
   } 
   
   
   $say = mysqli_num_rows($cevap); 
   
   if ($say == 1){ 
   
       $_SESSION['username'] = $username; 
   
    }else{ 
   
   $mesaj = "<h1> Hatalı Kullanıcı adı veya Şifre!</h1>"; 
   
    } 
   
   } 
   
   if (isset($_SESSION['username'])){ 
   
   header("Location: anasayfa.php"); 
   
   }else{ 
   
   
   ?> 
<html>
   <meta http-equiv="Content-Type" content="text/html;  
      charset=UTF-8" />
   <body>
      <form action="<?php $_PHP_SELF ?>" method="POST"> 
         <?php  
            if(isset($mesaj)){ echo $mesaj;}  
            
            ?> 

         Kullanıcı Adı: 
         <input type="text" name="username"><br /> 
         Şifre        :  
         <input type="password" name="password" ><br /><br /> 
         <input type="submit" value="GİRİŞ"/><br /><br /> 
         <a href="_register.php">[Kayıt Ol]</a> 
      </form>
   </body>
</html>
<?php } ?>
