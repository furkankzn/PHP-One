    <title>SticX - İletişim</title>
    <div class="container-fluid">
     <h1 class="h3 mb-4 text-gray-800"></h1>
     <hr>
     <form action="" method="POST">
          Kullanıcı Adı : <input type="text" name="kullanici_ad" placeholder="Kullanıcı Adınızı Giriniz...">
          Sifre : <input type="password" name="kullanici_password" placeholder="Sifrenizi Giriniz...">
          <button type="submit" name="giris-knt">Giriş Yap</button>
     </form>
     <?php 

     if (isset($_POST['giris-knt'])) {
          $k_adi = $_POST['kullanici_ad'];
          $k_pass = $_POST['kullanici_password'];
          echo "<br>";
          if ($k_adi == "furkan" AND $k_pass == "3131") {
               echo "Giriş Başarılı...";
          }
          else
               echo "Giriş Başarısız...";
     }
     ?>
     <hr>
     <form action="" method="POST">
          Tek-Çift Hesabı İçin Sayı Giriş : <input type="text" name="sayi-giris" placeholder="Sayı Giriniz...">
          <button type="submit" name="tek-cift-knt">Tek-Çift Bul</button>
     </form>
     <?php 
     if (isset($_POST['tek-cift-knt'])) {
      $tc_sayi = $_POST['sayi-giris'];
      echo "$tc_sayi"." ";
      if ($tc_sayi%2 == 0) {
           echo "Sayısı Çift Sayıdır...";
      }
      else
          echo " Sayısı Tek Sayıdır...";

}
include 'fonksiyon.php';
echo "<hr>";
?>
<form action="" method="POST">
     KDV Hesabı İçin Sayı Giriş : <input type="text" name="kdvoran" placeholder="Sayı Giriniz...">
     <button type="submit" name="kdvbutton">KDV Hesapla</button>
</form>
<?php 
if (isset($_POST['kdvbutton'])) {
     $sayi = $_POST['kdvoran'];
     echo kdv($sayi);
}
echo "<hr>";
?>
</div>