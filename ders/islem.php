<?php 
require_once 'baglan.php';

if (isset($_POST['insertislemi'])) {
	$kaydet = $db->prepare("INSERT into bilgilerim set
		bilgilerim_ad=:bilgilerim_ad,
		bilgilerim_soyad=:bilgilerim_soyad,
		bilgilerim_mail=:bilgilerim_mail,
		bilgilerim_yas=:bilgilerim_yas,
		bilgilerim_kad=:bilgilerim_kad,
		bilgilerim_psw=:bilgilerim_psw
		");
	$insert = $kaydet->execute(array(
		'bilgilerim_ad' => $_POST['bilgilerim_ad'],
		'bilgilerim_soyad' => $_POST['bilgilerim_soyad'],
		'bilgilerim_mail' => $_POST['bilgilerim_mail'],
		'bilgilerim_yas' => $_POST['bilgilerim_yas'],
		'bilgilerim_kad' => $_POST['bilgilerim_kad'],
		'bilgilerim_psw' => $_POST['bilgilerim_psw']
	));

	if ($insert) {
		header("Location:/ders/login.php");
		exit;
	} else {
		header("Location:/ders/index.php?islem=iletisim");
		exit;
	}
}

if (isset($_POST['updateislemi'])) {
	$bilgilerim_id = $_POST['bilgilerim_id'];
	$kaydet = $db->prepare("UPDATE bilgilerim set
		bilgilerim_ad=:bilgilerim_ad,
		bilgilerim_soyad=:bilgilerim_soyad,
		bilgilerim_mail=:bilgilerim_mail,
		bilgilerim_yas=:bilgilerim_yas,
		bilgilerim_kad=:bilgilerim_kad,
		bilgilerim_psw=:bilgilerim_psw
		where bilgilerim_id=:bilgilerim_id
		");
	$insert = $kaydet->execute(array(
		'bilgilerim_ad' => $_POST['bilgilerim_ad'],
		'bilgilerim_soyad' => $_POST['bilgilerim_soyad'],
		'bilgilerim_mail' => $_POST['bilgilerim_mail'],
		'bilgilerim_yas' => $_POST['bilgilerim_yas'],
		'bilgilerim_kad' => $_POST['bilgilerim_kad'],
		'bilgilerim_psw' => $_POST['bilgilerim_psw'],
		'bilgilerim_id' => $bilgilerim_id
	));

	if ($insert) {
		header("Location:/ders/index.php?islem=iletisim");
		exit;
	} else {
		header("Location:/ders/index.php?islem=iletisim");
		exit;
	}
}
if (isset($_POST['deleteislemi'])) {
	$bilgilerim_id = $_POST['bilgilerim_id'];
	$sil = $db->prepare("UPDATE bilgilerim SET
		bilgilerim_durum =:bilgilerim_durum
		WHERE bilgilerim_id=:bilgilerim_id
		");
	$delete = $sil->execute(array(
		'bilgilerim_durum' => 0,
		'bilgilerim_id' => $bilgilerim_id
	));
	if ($delete) {
		header("Location:/ders/index.php?islem=iletisim");
		exit;
	} else {
		header("Location:/ders/index.php?islem=iletisim");
		exit;
	}
}
if (isset($_POST['giris-knt'])) {
	$bilgilerim_kad = $_POST['kad'];
	$bilgilerim_psw = $_POST['psw'];
	$kontrol = $db->prepare("SELECT * FROM bilgilerim WHERE bilgilerim_kad =:bilgilerim_kad AND bilgilerim_psw =:bilgilerim_psw");
	//select içinde kullanacağımız bilgileri bind ediyoruz.
	$kontrol->bindParam(':bilgilerim_kad', $bilgilerim_kad);
	$kontrol->bindParam(':bilgilerim_psw', $bilgilerim_psw);
	//sorguyu çalıştırıyoruz
	$kontrol->execute();
	//sorgudan dönen sonucu (döngüye, çıktısını) alıyoruz.
	$deger= $kontrol->fetch(PDO::FETCH_ASSOC);
	if ($deger) {
		header("Location:/ders/index.php?islem=hakkimizda");
		exit;
	} else {
		header("Location:/ders/index.php?islem=iletisim");
		exit;
	}
}
?>