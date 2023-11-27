<?php
include('header.php');
include 'fonksiyon.php';

$sayfa = $_GET['islem'];
if($sayfa){

	if($sayfa == 'hakkimizda'){
		include('hakkimizda.php');
	}else if ($sayfa == 'iletisim'){
		include('iletisim.php');
	}else if ($sayfa == 'anasayfa'){
		include('anasayfa.php');
	}else if ($sayfa == 'duzenle'){
		include('duzenle.php');
	}else if ($sayfa == 'islem'){
		include('islem.php');
	}
}else{
	include('anasayfa.php');
}

include('footer.php');		
?>