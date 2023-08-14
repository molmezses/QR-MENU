<?php

include("connect.php");


	if ($sil=mysqli_query($baglanti,"DELETE FROM sicakIcecekler WHERE urunid=".(int)$_GET['id'])){

        echo "<script>alert('Ürün başarıyla silindi');</script>";
        header('Refresh: 1.5; urunSil.php');


    }else{
        echo "<script>alert('HATA');</script>";
        header('Refresh: 1.5; urunSil.php');
    }


?>
