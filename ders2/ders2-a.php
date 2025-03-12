<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ders-2</title>
</head>

<body>
    <!-- 
    DEĞİŞKENLER
    1. Değişkenler$ işareti ile tanımlanır.
    2. Mutlaka bir harf ve ya _ işareti ile başlayabilir
    3. Değişkenler rakamlar ike başlamaz.
    4. Değişken içerisinde boşluk ve Türkçe karakterler kulanılmaz.
    5. Değişknelerde büyük küçük harf duyarlılığı vardır.
    6.Programlama Dİli içerisinde bulunan Özel tanımlar değişken adı olarak kullanılamaz.
    -->

    <h3>Maatematiksel işlemler</h3>
    <h4>Toplama İşlemi</h4>

    <?php
    $sayı1 = 20;
    $sayı2 = 17;
    $sonuc = $sayı1 + $sayı2;
    echo "İşlemin sonucu: $sayı1 + $sayı2 = $sonuc";
    echo "<br><br> Atamalı Toplama İşlemi";
    $deger = 10;
    $ekdeger = 59;
    echo "<br>Sonuc $deger + $ekdeger =" . $deger += $ekdeger;
    ?>

    <h4>Çıkarma İşlemi</h4>
    <?php
    $sayı1 = 50;
    $sayı2 = 77;
    $sonuc = $sayı1 - $sayı2;
    echo "İşlemin sonucu: $sayı1 - $sayı2 = $sonuc";
    echo "<br><br> Atamalı İşlem";
    $deger = 120;
    $ekdeger = 72;
    echo "<br>Sonuc $deger - $ekdeger =" . $deger -= $ekdeger;
    ?>

    <h4>Çarpma İşlemi</h4>
    <?php
    $sayı1 = 50;
    $sayı2 = 77;
    $sonuc = $sayı1 * $sayı2;
    echo "İşlemin sonucu: $sayı1 * $sayı2 = $sonuc";
    echo "<br><br> Atamalı İşlem";
    $deger = 12;
    $ekdeger = 69;
    echo "<br>Sonuc $deger * $ekdeger =" . $deger *= $ekdeger;
    ?>

    <h4>Bölme İşlemi</h4>
    <?php
    $sayı1 = 80;
    $sayı2 = 20;
    $sonuc = $sayı1 / $sayı2;
    echo "İşlemin sonucu: $sayı1 / $sayı2 = $sonuc";
    echo "<br><br> Atamalı İşlem";
    $deger = 12;
    $ekdeger = 69;
    echo "<br>Sonuc $deger / $ekdeger =" . $deger /= $ekdeger;
    ?>


    <h4>Mod Alma İşlemi</h4>
    <?php
    $sayı1 = 10;
    $sayı2 = 4;
    $sonuc = $sayı1 % $sayı2;
    echo "İşlemin sonucu: $sayı1 % $sayı2 = $sonuc";
    ?>

    <h4>Arttırma İşlemi</h4>
    <?php
    $sayı1 = 50;
    echo "İşlemin sonucu:" . ++$sayı1;  // ++ solda olursa sayı 1 artar sonra yeni değer yazılı. ++ sağda ise önce sayı yazılır daha sonra sayı 1 artar.
    ?>

    <?php
    $sayı = 10;
    echo "<br><br> Solda " . --$sayı;
    echo "<br><br>". --$sayı;
    echo "<br><br>". --$sayı;
    ?>

    <?php
    $sayı = 10;
    echo "<br><br> Sağda " . $sayı--;
    echo "<br><br>".  $sayı--;
    echo "<br><br>" . $sayı--;
    ?>
</body>

</html>