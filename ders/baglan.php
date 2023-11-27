<?php 
try {
	$db=new PDO("mysql:host=localhost;dbname=ders;charset=utf8",'root','4l1k0zan');
} catch (PDOExpcetion $e) {
	echo $e->getMessage();
}
?>