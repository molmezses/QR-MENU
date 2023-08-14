<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="stylesheet" href="css/sicak.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
</head>
<body>

<?php 


include("connect.php");

?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">PesaHookah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="admin.php">Ürünleri listele <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ürünler
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="urunEkle.php">Ürün ekle</a>
                  <a class="dropdown-item" href="urunSil.php">Ürün sil</a>
                  <a class="dropdown-item" href="#">Ürün Güncelle</a>
                </div>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Garsonlar
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Garson Ekle</a>
                <a class="dropdown-item" href="#">Garson Sil</a>
              </div>
            </li>
          </ul>

        </div>
      </nav>


      <table class="table" style="margin-top: 10vh;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Ürün Adı</th>
            <th scope="col">Ürün Fiyatı</th>
            <th scope="col">Ürün Kategorisi</th>
            <th scope="col">SİL</th>

          </tr>
        </thead>
        <tbody>

        <?php


    $sonuc=mysqli_query($baglanti,"SELECT *FROM sicakIcecekler");
      mysqli_set_charset($baglanti, "utf8");
      
      while ($satir=mysqli_fetch_array($sonuc))
      {


        $id = $satir["urunid"];

        echo "


        <tr>
            <td>".$satir['urunAdi']."</td>
            <td>".$satir['UrunFiyat']."</td>
            <td>".$satir['urunKate']."</td>
        ";

        echo '<td> <a href="sil.php?id='.$satir ['urunid'] .'">Sil</a></td>';

        echo "</tr>";

      }
    
          
          
      
      ?>
      




<script src="https://kit.fontawesome.com/f5d53f0d40.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</html>

