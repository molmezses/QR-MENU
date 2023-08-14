<?php

@$baglanti = new mysqli('localhost', 'undyvoco_molmezses', 'MolmezSES#511312.', 'undyvoco_PesaHookah'); // Veritabanı bağlantımızı yapıyoruz.
    if(mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
    {
        echo mysqli_connect_error();
        exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
    }else{
        
    }

$baglanti->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.

?>