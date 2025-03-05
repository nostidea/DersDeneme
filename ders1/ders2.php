<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dersleri-2</title>
</head>

<body>

    <?php
    /* 
    $metin = "Adydın Adnan Menderes";
    $byazi = strtoupper($metin);
    $kyazi = strtolower($byazi);
    $mb_byazi = mb_strtoupper($kyazi);
    $mb_kyazi = mb_strtolower($mb_byazi);
    $ilkharf_buyuk_metin = ucfirst($mb_kyazi); //İlk harfi büyütür.
    $ilkharf_buyuk_kelime = ucwords($mb_kyazi); //Gelen metnin kelimelerin ilk harflerini büyütür.
    
    "<br>Karakter Sayısı: ".strlen($metin); //Metnin uzunluğunu ekrana yazdırır.
    "<br>Metnin belirli bir karakter sayısı: ".substr($metin,0,15); //Metnin belirtilen bölümünü yazdırır.
    */
    ?>
    

    <?php
    $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid corrupti cumque excepturi provident?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid corrupti cumque excepturi provident?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid corrupti cumque excepturi provident?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid corrupti cumque excepturi provident?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid corrupti cumque excepturi provident?";

    echo substr($lorem,0,100) ."...";
    ?>
    <a href="https://www.adu.edu.tr/"><button>Devamını oku...</button></a>
    
</body>

</html>