<?php

$sayi1 = 10;
$sayi2 = 20;
if($sayi1 > $sayi2)
{
	echo $sayi1. " büyüktür" .$sayi2. "'den";
}
else
{
	echo $sayi1. " küçüktür" .$sayi2. "'den </br>";
}


//İkinci Örnek

$kullaniciadi = "kemavghghlayhan";
if ($kullaniciadi != "kemalayhan")
{
	echo "giriş yapıldı.";
}
else 
{
	echo "kullanıcı adı yanlış. </br>";
}

//Üçüncü Örnek

 function toplama($a,$b)
{
	echo $a + $b;
}

toplama(4,3);