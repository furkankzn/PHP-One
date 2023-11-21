<?php
include('header.php');

	$sayfa = $_GET['islem'];
	if($sayfa){

		if($sayfa == 'hakkimizda'){
			include('hakkimizda.php');
		}else if ($sayfa == 'iletisim'){
			include('iletisim.php');
		}else if ($sayfa == 'anasayfa'){
			include('anasayfa.php');
		}else{
			include('anasayfa.php');
		}

	}else{
		include('anasayfa. php');
	}

include('footer.php');		
?>