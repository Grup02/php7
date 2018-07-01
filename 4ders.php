<?php 

$dizi = range(0,100,20);

print_r($dizi);

//İkinci Örnek


$sayi = array(0,1,2,3,4,5,6,8,9,234,3,);

echo min($sayi)."</br>";
echo max($sayi)."</br>"; 

$isim = "kemalayhan";
echo "isim uzunluğu </br>".strlen($isim);

// Üçüncü Örnek

$parola = "kemal123";
if (strlen($parola) >= 8)
{
	echo "parola alınabilir.";
}
else
{
	echo "parola alınamaz.";
}
