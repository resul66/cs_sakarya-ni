<?php
error_reporting(0);
$kullaniciAdi = "b201210092@ogr.sakarya.edu.tr";
$sifre  = "123";

if($sifre == $_POST["sifre"] && $kullaniciAdi == $_POST["kulAdi"]) {
    echo "Hoşgeldiniz B201210092 <br> Resul Daşpınar";
}
else {
    header ("Location:login.html");
}



?>