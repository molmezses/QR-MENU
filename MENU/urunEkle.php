<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MENU</title>
    <link rel="stylesheet" href="css/urunEkle.css">
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
              <a class="nav-link" href="#">Ürünleri listele <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ürünler
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Ürün ekle</a>
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

      <div class="container">

      <form method="post" action="urunEkleDB.php" autocomplete="on" enctype="multipart/form-data"> 
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Ürün Adı </label>
            <input type="text" class="form-control"  name="urunAdi" id="inputEmail4" placeholder="Ürün Adı">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword">Ürün Fiyat</label>
            <input type="text" class="form-control" name="urunFiyat" id="inputPassword4" placeholder="Ürün Fiyat">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Ürün Foto</label>
            <input type="file" name="resim">
          </div>
        </div>
        
          <div class="form-group col-md-4">
            <label for="inputState">Ürün Kategorisi</label>
            <select id="inputState" name="urunKate" class="form-control">
              <option  value="sicak">Sıcak içecekler</option>
              <option  value="soguk">Soğuk içecekler</option>
              <option  value="tatli">Tatlılar</option>
              <option  value="yiyecek">Yiyecekler </option>
              <option  value="nargile">Nargile </option>
              <option  value="kahve">Kahveler</option>



            </select>
          </div>
        <input type="submit" class="btn btn-success" style="align-items: center;"></input>
      </form>
      
      

    </div>



    
<script src="https://kit.fontawesome.com/f5d53f0d40.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</html>

