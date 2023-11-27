    <title>SticX - Düzenleme</title>
    <div class="container-fluid">
     <?php
     require_once 'baglan.php';
     $bilgilerimsor=$db->prepare("SELECT * from bilgilerim where bilgilerim_id=:id");
     $bilgilerimsor->execute(array(
        'id' => $_GET['bilgilerim_id']
    ));
     $bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);
     ?>
     <form action="islem.php" method="POST">
        <pre>
          Adınız :             <input type="text" required="" name="bilgilerim_ad" value="<?php echo $bilgilerimcek['bilgilerim_ad']?>">
          Soyadınız :          <input type="text" required="" name="bilgilerim_soyad" value="<?php echo $bilgilerimcek['bilgilerim_soyad']?>">
          Mail Adresiniz :     <input type="email" required="" name="bilgilerim_mail" value="<?php echo $bilgilerimcek['bilgilerim_mail']?>">
          Yaşınız :            <input type="text" required="" name="bilgilerim_yas"  value="<?php echo $bilgilerimcek['bilgilerim_yas']?>">
          Kullanıcı Adı :      <input type="text" required="" name="bilgilerim_kad" value="<?php echo $bilgilerimcek['bilgilerim_kad']?>">
          Sifre :              <input type="text" required="" name="bilgilerim_psw" value="<?php echo $bilgilerimcek['bilgilerim_psw']?>">
          <input type="hidden" value="<?php echo $bilgilerimcek['bilgilerim_id'] ?>" name="bilgilerim_id">
          <button type="submit" name="updateislemi">Kaydet</button>
          <button type="submit" name="deleteislemi">Sil</button>
      </pre>
  </form>
</div>