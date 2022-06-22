<!DOCTYPE html>
<html>
<head>
<title>Randevu</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initialscale=1">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootst
rap.min.css">
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.m
in.js"></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstra
p.min.js"></script>
</head>
<body>

<center><h2><span style="background:#c4c1ae">
Randevu Al</span></h2></center>
<br>
<br>

<div class="container mt-3">
  <h2>Şehir Seçiniz</h2>  
  <form action="kaydet.php" method="POST">
    <label for="sehir" class="form-label">Gitmek istediğiniz adresi seçiniz:</label>
    <input class="form-control" list="sehirs" name="randevu_sehir" id="sehir">
    <datalist id="sehirs">
      <option value="İstanbul">
      <option value="Ankara">
      <option value="Bursa">
      <option value="İzmir">
      <option value="Aydın">
      <option value="Eskişehir">
      <option value="Bolu">
    </datalist>    
    

  <h2>Saç Hizmetleri</h2>
    <label for="hair" class="form-label">Yaptırmak istediğiniz işlemi seçiniz:</label>
    <input class="form-control" list="hairs" name="randevu_islem" id="hair">
    <datalist id="hairs">
      <option value="Saç Kesimi">
      <option value="Fön">
      <option value="Keratin Bakım">
      <option value="Saç Boyama">
      <option value="Maşa">
      <option value="Topuz">
    </datalist>    

  <h2>Personel Seçimi</h2>  
    <label for="personel" class="form-label">İşlemi yaptırmak istediğiniz personeli seçiniz:</label>
    <input class="form-control" list="personels" name="randevu_personel" id="personel">
    <datalist id="personels">
      <option value="Uğur Kocayürek">
      <option value="Betül Kanmaz">
      <option value="Zehra Kök">
     
    </datalist>    
    
    <center><input type="date" name="randevu_tarih"></center>
    <button type="submit" class="btn btn-primary mt-3" name="gonder">Submit</button>
    
  </form>
</div>





</body>
</html>