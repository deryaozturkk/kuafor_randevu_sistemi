<?php
include("mysqlbaglan.php");

extract($_POST);


$sql1 ="UPDATE randevu ".
      "SET randevu_sehir='$sehir',randevu_islem='$islem',randevu_personel='$personel',randevu_tarih='$tarih' ".
      "WHERE randevu_id=".$_GET['id'];

$cevap = mysqli_query( $baglanti,$sql1);

     
if(!$cevap){
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else{
    echo "Kayıt Güncellendi.";
    echo " <br><a href='listele.php'> Listele</a>\n";
}


mysqli_close($baglanti);
?>