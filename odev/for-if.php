<?php

for ($i = 0; $i < 10; $i++)
{
	if($i==6)
		break;
	echo $i." ";
	
}

echo "</br>"."İkinci Örnek"."</br>";
// İkinci Örnek




$dizi = array('kemal','ayhan','mozart','ludvig');

foreach ($dizi as $a)
	{
		if ($a == 'mozart')
			break;
		echo $a." ";
	}

	echo "</br>";


	echo "</br>"."Üçüncü Örnek"."</br>";
	// Üçüncü Örnek	
	$ka = 0;
	$k = "";

  if (isset($ka,$k)) // değişkenin değeri olup olmadığına bakar.
	{
    	echo "Değişken tanımlı </br>"; // bu komut satırı çalışır.
	}
  else 
	{
		echo "Değişken tanımsız";
	}	



echo "</br>"."Dörtüncü Örnek"."</br>";
	// Dörtüncü Örnek	
	$ad = "Kemal";
	$soyad = "";
	if (empty($ad)) { echo "İsminiz mevcut değil"; } else { echo "İsminiz Mevcut "; }
	echo "</br>";
	if (empty($soyad)) { echo "Soy isminiz mevcut değil . </br>"; } else { echo "Soy isminiz Mevcut "; }



	echo "</br>"."Beşinci Örnek"."</br>";
	// Beşinci Örnek	
	$temizlik = "unset ne işe yarar";
	unset($temizlik);
	if(isset($temizlik))
	{
		echo "unset çalışmıyor.";
	}
	else 
	{
		echo "unset çalışıyor. </br>";
	}



	echo "</br>"."Altıncı Örnek"."</br>";
	// Altıncı Örnek
	 $parcalan = "Kemal,Ayhan,11.96,Ankara";

	 $kk = explode(',', $parcalan);
	 print_r($kk);
	 echo "</br>";

echo "</br>"."Yedinci Örnek"."</br>";
	// Yedinci Örnek

echo "Bugünün tarihi ".date("d/m/y")."</br>";
echo "Bugünün tarihi ".date("D/M/Y")."</br>";
echo "Şuan saat ".date("h:i:sa")."</br>";



echo "</br>"."Sekizinci Örnek"."</br>";
	// Sekizinci Örnek

$bosluksuz = "    kemal";
echo trim($bosluksuz)."</br>";

$fyo = 555;
echo var_dump($fyo);