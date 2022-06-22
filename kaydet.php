<?php
include("mysqlconnect.php");
extract($_POST);


echo "<html>";
echo "<meta http-equiv='Content-Type' ";
echo "content='text/html; charset=UTF-8' />";
echo "Girdiginiz bilgiler:</br>";
echo "Randevu Alınan Şehir   :$randevu_sehir</br>";
echo "Randevu Alınan İşlem :$randevu_islem</br>";
echo "Randevu Alınan Personel :$randevu_personel</br>";
echo "Randevu Alınan Tarih  :$randevu_tarih</br>";

$sql = "INSERT INTO kullanici ".
       "(randevu_sehir,randevu_islem,randevu_personel,randevu_tarih) ".
       "VALUES ( '$randevu_sehir','$randevu_islem', '$randevu_personel', '$randevu_tarih')";

$cevap = mysqli_query( $baglanti,$sql);
if(!$cevap){
echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
echo "Veritabanina eklendi.";
echo "<br/><a href='index.php'> Geri Dön</a>";
}
echo "</html>";
mysqli_close($baglanti);
?>

