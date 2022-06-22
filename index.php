<?php 
  
   
   session_start(); 
 
   
   if ( !isset($_SESSION['username']) ) { 
   
     header("Location: _login.php"); 
   
     exit(); 
   
    } 
   
   ?> 


<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Derya Beauty Center Randevu Sistemi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" 
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="page-header">
<div class="container-fluid">

<h1><b><span style="background:#e273ce">
Derya Beauty Center Randevu Sistemi</span></b></h1>     
  </div>           
</div>

<div class="jumbotron">
<h2><b>Güzelliğiniz Önceliğimiz</b></h2>
        <p>İhtiyacınız olan bakım Derya Beauty Center'da</p>
        <button type="button" class="btn btn-success">
        Online Randevu</button>
        
</div>
<p>Online Ranevu İçin Giriş Yapınız.</p>

<h3><span style="background:#7cc4d6">Giriş Yap</span></h3>
        <form  method="post" name="girisyap">
            <div class="user">
                <label for="kullanici_eposta">kullanici eposta adresi:</label>
                <input type="eposta" name="kullanici_eposta3" class="form-control" placeholder="E Posta" >
            </div>
            <div class="pass">
            <label for="kullanici_password">Parola:</label>
                <input type="password"  name="kullanici_password3" minlength="6" class="form-control" placeholder="Şifre" >
            </div> 
            <br>
            <button type="submit" class="sub" name="giris_yap2">Giriş Yap</button>
            <br>
            
            
        </form>
        
        <br>
        
        
<?php

include("mysqlbaglan.php");
if((isset($_POST["giris_yap2"]))){

   session_start(); 
   $kullanici_password1=$_POST['kullanici_password3'];
   $kullanici_eposta1=$_POST['kullanici_eposta3'];
   
   $sql1 = "SELECT * FROM kullanici  "; 
   

 
   $cevap = mysqli_query($baglanti, $sql1); 

   $row = mysql_fetch_array($cevap);
   if ($row['kullanici_eposta1'] == $kullanici_eposta && $row['kullanici_password1'] == $kullanici_password ){
     
      $_SESSION['kullanici_eposta'] = $kullanici_eposta1; 
      $_SESSION['kullanici_password'] = $kullanici_password1; 
      header("Location: anasayfa.php"); 

   } else {
     echo "Giriş yapılamadı. Lütfen kullanıcı adınızı ve şifrenizi kontrol edin";
     header("Location: index.php"); 
     exit();
   }

    
mysqli_close($baglanti);
}
?>
<h3><span style="background:#7cc4d6">Üye Ol</span></h3>
        <form  method="post" name="uyeol">
         <div class="user">
                <label for="kullanici_adsoyad">Ad soyad:</label>
                <input type="text" name="kullanici_adsoyad3" class="form-control" placeholder="Ad Soyad">
            </div>
            <div class="user">
                <label for="kullanici_eposta">Eposta adresi:</label>
                <input type="eposta" name="kullanici_eposta3" class="form-control" placeholder="E Posta">
            </div>
            <div class="user">
                <label for="kullanici_telno">Telefon Numarası:</label>
                <input type="text" name="kullanici_telno3" class="form-control" placeholder="Telefon Numarası">
            </div>
            <div class="pass">
            <label for="kullanici_password">Parola:</label>
                <input type="password"  name="kullanici_password3" minlength="6" class="form-control" placeholder="Şifre">
            </div> 
            <br>
            
            <button type ="submit" class="sub"  name="uye_ol2" >Üye Ol</button>
            
        </form>
        
        <br>

<?php

include("mysqlbaglan.php");
if( isset($_POST["uye_ol2"])){
  
 
  $kullanici_eposta1=$_POST['kullanici_eposta3'];
  $kullanici_password1=$_POST['kullanici_password3'];
  $kullanici_telno1=$_POST['kullanici_telno3'];
  $kullanici_adsoyad1=$_POST['kullanici_adsoyad3'];
  

  $sql = "INSERT INTO kullanici (kullanici_eposta,kullanici_password,kullanici_telno,kullanici_adsoyad) VALUES ('".$kullanici_eposta1."','".$kullanici_password1."','".$kullanici_telno1."','".$kullanici_adsoyad1."')";
    

  
  $cevap = mysqli_query($baglanti,$sql);
     
  if(!$cevap)
  {
      echo '<br>Hata:' . mysqli_error($baglanti);
  }
  
}
  mysqli_close($baglanti);

?>

</body>
</html>