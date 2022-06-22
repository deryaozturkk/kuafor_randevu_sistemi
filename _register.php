<?php 
   require ('_mysqlbaglan.php'); 
   
   if (isset($_POST['username']) && isset($_POST['password'])){ 
   
    extract($_POST); 
   
    
   
    $password = hash('sha256', $password); 
   
        
   
    $sql="INSERT INTO `kullanicilar` (kullaniciadi, sifre, eposta)"; 
   
    $sql = $sql . "VALUES ('$username', '$password', '$email')"; 
   
        
   
       $cevap = mysqli_query($baglanti, $sql); 
   
       if ($cevap){ 
   
           $mesaj = "<h1>Kullanıcı oluşturuldu.</h1>"; 
   
       }else{ 
   
           $mesaj = "<h1>Kullanıcı oluşturulamadı!</h1>"; 
   
       } 
   
   } 
   
   ?> 
<html>
    
   <meta http-equiv="Content-Type" content="text/html;  
      charset=UTF-8" />
   <body>
      <?php 
         
         
         if (isset($mesaj)) echo $mesaj; ?> 
      <h2>Kayıt Formu</h2>
      <form action="<?php $_PHP_SELF ?>" method="POST"> 
         Kullanıcı Adı:  
         <input type="text" name="username"><br /> 
         E-posta:  
         <input type="email" name="email"><br /> 
         Şifre:  
         <input type="password" name="password"><br /> 
         <input type="submit" value="Kaydet"/><br /><br /> 
         <a href="_login.php">[Kullanıcı Girişi]</a> 
      </form>
   </body>
</html>
