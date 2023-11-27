    <title>SticX - İletişim</title>
    <div class="container-fluid">
     <h1 class="h3 mb-4 text-gray-800">Giriş Panel</h1>
     <?php /*
     <form action="islem.php" method="POST">
          Kullanıcı Adı : <input type="text" name="kad" placeholder="Kullanıcı Adınızı Giriniz...">
          Sifre : <input type="password" name="psw" placeholder="Sifrenizi Giriniz...">
          <button type="submit" name="giris-knt">Giriş Yap</button>
     </form>
     <hr>
     <h1 class="h3 mb-4 text-gray-800">Tek-Çift Hesabı</h1>
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
echo "<hr>";
?>
<h1 class="h3 mb-4 text-gray-800">KDV Hesabı</h1>
<form action="" method="POST">
     KDV Hesabı İçin Sayı Giriş : <input type="text" name="kdvoran" placeholder="Sayı Giriniz...">
     <button type="submit" name="kdvbutton">KDV Hesapla</button>
</form>
<?php 
if (isset($_POST['kdvbutton'])) {
     $sayi = $_POST['kdvoran'];
     echo "KDV Dahil Fiyatı : ".kdv($sayi);
}
echo "<hr>";

?>
<h1 class="h3 mb-4 text-gray-800">Kayıt Ol</h1>
<form action="islem.php" method="POST">
     <pre>
          Adınız :             <input type="text" required="" name="bilgilerim_ad" placeholder="Adınızı Giriniz...">
          Soyadınız :          <input type="text" required="" name="bilgilerim_soyad" placeholder="Soyadınızı Giriniz...">
          Mail Adresiniz :     <input type="email" required="" name="bilgilerim_mail" placeholder="Mail Adresinizi Giriniz...">
          Yaşınız :            <input type="text" required="" name="bilgilerim_yas"  placeholder="Yaşınızı Giriniz...">
          Kullanıcı Adı :      <input type="text" required="" name="bilgilerim_kad" placeholder="Kullanıcı Adınızı Giriniz...">
          Sifre :              <input type="password" required="" name="bilgilerim_psw" placeholder="Sifrenizi Giriniz...">
          <button type="submit" name="insertislemi">Kaydet</button>
     </pre>
     <hr>
</form>
*/ ?>
<h1 class="h3 mb-4 text-gray-800">Kullanıcı Liste</h1>
<form action="islem.php" method="POST">
     <table style="width: 60%;" border="1">
          <tr>
               <th>ID</th>
               <th>AD</th>
               <th>SOYAD</th>
               <th>MAİL</th>
               <th>YAŞ</th>
               <th style="width: 20%">SİL VEYA DÜZENLE</th>
          </tr>
          <?php 
          $bilgilerimsor=$db ->prepare("SELECT * from bilgilerim where bilgilerim_durum = 1");
          $bilgilerimsor->execute();
          while ($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) {
               ?>
               <tr>
                    <td><?php echo $bilgilerimcek['bilgilerim_id'] ?></td>
                    <td><?php echo $bilgilerimcek['bilgilerim_ad'] ?></td>
                    <td><?php echo $bilgilerimcek['bilgilerim_soyad'] ?></td>
                    <td><?php echo $bilgilerimcek['bilgilerim_mail'] ?></td>
                    <td><?php echo $bilgilerimcek['bilgilerim_yas'] ?></td>
                    <td align="center"><button><a href="index.php?islem=duzenle&bilgilerim_id=<?php echo $bilgilerimcek['bilgilerim_id']?>">DÜZENLE</a></button></td>
               </tr>
          <?php } ?>
 </table>
</form>
</div>
