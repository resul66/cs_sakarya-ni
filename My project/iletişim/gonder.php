<?php

error_reporting(0);

if($_POST["gonder"]){
    
    $adi = $_POST["ad"];
    $soyadi = $_POST["soyad"];
    $email = $_POST["email"];
    $sifre = $_POST["sifre"];
    $sehir = $_POST["city"];
    $cinsiyet = $_POST["cinsiyet"];
    $hobiler = $_POST["hobiler"];
    $mesaj = $_POST["message"];

    if($adi!="" && $soyadi!="" && $email!="" && $sifre!="" && $sehir!="" &&         $cinsiyet!="" && $mesaj!=""){
        echo "Ad Soyad : $adi $soyadi <br>";
        echo "E-Mail : $email <br>";
        echo "Şifre : $sifre <br>";
        echo "Şehir : $sehir <br>";
        echo "Cinsiyet : $cinsiyet <br>";
        echo "Hobiler : ";
        foreach ($hobiler as $key => $value) {
            echo "$value / ";
        }
        echo "<br>Mesaj : $mesaj";
    }

    else{
        header("Location:iletisim.html");
    }
}
else {
    header("Location:iletisim.html");
}


?>