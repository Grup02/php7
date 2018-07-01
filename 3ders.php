<?php 
 for ($i = 0; $i < 10 ; $i++)
 	 { 
 	 	echo $i."</br>";
 	 }


// ikinci örnek

 	 $dizi = array("kemal","ayhan","hatice","ergün","ferah","zwe");

 	 for ($i = 0; $i < count($dizi) ; $i++)
 	  { 
 	 	echo $dizi[$i]."</br>";
 	 }

 // Üçüncü örnek

 	 foreach ($dizi as $d) {
 	 	echo $d."</br>";
 	 }

 // Dördüncü Örnek
 
 $isim = "hatice";
 switch ($isim) {
 	 	case 'kemal':
 	 		echo "admin girişi yapıldı.";
 	 		break;

 	 	case 'hatice':
 	 		echo "kullanıcı giriş yapıldı";
 	 		break;
 	 	default:
 	 		echo "giriş yapılmadı";
 	 		break;
 	 }	 