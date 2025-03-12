<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>
<body>
<!-- 
ceil    : Herhangi bir ondalıklı sayıyı yukarı yıvarlamak için kullanılır.
floor   : Herhangi bir ondalıklı sayıyı aşağı yuvarlamak için kullanılır.
round   : Herhangi bir ondalıklı sayıyı en yakına yuvarlamak için kullanılır.
-->

<h5>Ceil Kullanımı</h5>
<?php
$sayı1 = 4.13;
echo $sayı1 . "<br>";
echo "Sonuc:" . ceil($sayı1);
?>

<h5>Floor Kullanımı</h5>
<?php
$sayı1 = 14.323;
echo $sayı1 . "<br>";
echo "Sonuc:" . floor($sayı1);
?>

<h5>Round Kullanımı</h5>
<?php
$sayı1 = 24.69;
echo $sayı1 . "<br>";
echo "Sonuc:" . round($sayı1);
?>

</body>
</html>