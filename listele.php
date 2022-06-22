<html>
<head><meta charset="utf-8"></head>
<body>
<?php

include("mysqlbaglan.php");


$sql1 = "SELECT * FROM kullanici";

$cevap = mysqli_query($baglanti,$sql1);
    
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}

echo "<table border=1>";
echo "<tr><th>Randevu ID</th><th>Şehir</th><th>İşlem</th><th>Personel</th><th>Tarih</th></tr>";

while($gelen=mysqli_fetch_array($cevap))
{

    echo "<tr><td>".$gelen['randevu_id']."</td>";
    echo "<tr><td>".$gelen['randevu_sehir']."</td>";
    echo "<td>".$gelen['randevu_islem']."</td></tr>";   
    echo "<tr><td>".$gelen['randevu_personel']."</td>";
    echo "<td>".$gelen['randevu_tarih']."</td></tr>";   
}

echo "</table>";


mysqli_close($baglanti);
echo "Yeni kayıt eklemek için <a href='kaydet.php'> Tiklayiniz</a>\n";
?>
</body>
</html>