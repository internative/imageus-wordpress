<?php
function imageus_settings() {
?>

<form method="post" action="options.php" id="imageus_settings">
  <div class="wrap">

    <?php if (isset($_GET['settings-updated'])) { ?>
      <div class='updated' style="margin-top: 20px"><p>Ayarları başarıyla güncellediniz.</p></div>
    <?php } ?>

    <div class="admin-card" style="background-color: #fff; padding: 40px; border-radius: 3px; margin-top: 20px">

      <h3>1. Adım: Hesap</h3>
      <p><a href="https://imageus.dev/" target="_blank">imageus</a> adresinden hesap oluştur ya da var olan hesabına giriş yap.</p>

    </div>

    <div class="admin-card" style="background-color: #fff; padding: 40px; border-radius: 3px; margin-top: 20px">

      <h3>2. Adım: Resim Kaynağı</h3>
      <p>
        <a target='_blank' href='https://imageus.dev/tr/hesabim'>Hesap sayfası</a> üzerinden servisi kullanmak istediğiniz websitesini 'Kaynaklar' bölümüne kaynak olarak ekleyin.
      </p>
      <?php settings_fields('imageus-settings-group'); ?>

    </div>

    <div class="admin-card" style="background-color: #fff; padding: 40px; border-radius: 3px; margin-top: 20px">

    <h3 style="margin-top: 0">Aktif Et</h3>
      <input
        type="checkbox"
        id="ibup_imageus_active"
        name="ibup_imageus_active"
        value="true"
        <?php echo get_option('ibup_imageus_active') ? 'checked' : '' ?>
      /> <label for="ibup_imageus_active">Gelişmiş Ayarlar</label>

    </div>

    <div class="admin-card" style="background-color: #fff; padding: 20px; border-radius: 3px; margin-top: 20px">

    <h3>Gelişmiş Ayarlar</h3>
    <p>ImageUs, varsayılan olarak tüm resimlerinizi işleyecektir.<br> Bunun olmasını istemiyorsanız, bu işleminin uygulanmasını istediğiniz resimlerin bulunduğu dizinleri virgül ile ayırarak aşağıdaki alana girebilirsiniz.</p>
      <textarea
        id="ibup_imageus_hosts"
        name="ibup_imageus_hosts"
        rows="4" cols="80"
      ><?php echo filter_var(get_option('ibup_imageus_hosts'), FILTER_SANITIZE_STRING) ?></textarea> <br /> <br />

    </div>

    <div class="admin-card" style="background-color: #fff; padding: 20px 40px; border-radius: 3px; margin-top: 20px">

    <input type="submit" class="button-primary" value="Değişiklikleri Kaydet" style="padding: 16px 40px"/>

    </div>
  </form>

  </div>
  <div class="admin-card" style="background-color: #fff; padding: 40px; border-radius: 3px; margin-top: 20px">
    <h3 style="margin-top: 0">Yararlı Linkler</h3>
    <a class='button action' target='_blank' href='https://imageus.dev/'>Hesap Oluştur</a>
    <a class='button action' target='_blank' href='https://imageus.dev/tr/hesabim'>imageus Dashboard</a>
    <a class='button action' target='_blank' href='https://imageus.dev/tr/gelistiriciler-icin'>imageus Dökümantasyon</a>
    <a class='button action' target='_blank' href='https://imageus.dev/#pricing'>Ücretlendirme</a>
    <a class='button action' target='_blank' href='https://imageus.dev/#features'>Özellikler</a>
  </div>
<?php
}