 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>

<?php 


include("connect.php");
    
        

$resim=$_FILES["resim"]["tmp_name"];
$yeniad=$_FILES["resim"]["name"];
    if(move_uploaded_file($resim, $yeniad)){
        echo "başarılı";
    }else{
        echo "hata";
    }

      $urunAdi = $_POST['urunAdi']; 
      $urunKate = $_POST['urunKate'];
      $urunFiyat = $_POST['urunFiyat'];




          if ($baglanti->query("INSERT INTO sicakIcecekler (urunAdi, urunFiyat, urunKate, urunFoto) VALUES ('$urunAdi','$urunFiyat','$urunKate' ,'$yeniad')")) 
          {
              echo " <div style='color:white; background:green; padding:50px; text-align:center;'>Kayıt Başarı ile Eklendi</div>";
              header('Refresh: 2; admin.php');
  
          }
          else
          {
            
          }
    
    
    
    
    ?>
    
</body>
</html>