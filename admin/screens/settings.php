<?php
function imageus_settings() {
?>

<form method="post" action="options.php" id="imageus_settings">
  <div class="wrap">

    <?php if (isset($_GET['settings-updated'])) { ?>
      <div class='updated' style="margin-top: 20px"><p>Changes saved successfully</p></div>
    <?php } ?>

    <div class="admin-card" style="background-color: #fff; padding: 40px; border-radius: 3px; margin-top: 20px">

      <h3>1. Step</h3>
      <p>Create a free account from <a href="https://imageus.dev/" target="_blank">imageus</a> website.</p>

    </div>

    <div class="admin-card" style="background-color: #fff; padding: 40px; border-radius: 3px; margin-top: 20px">

      <h3>2. Step</h3>
      <p>
        Add your wordpress domain to imageus sources "domain.com" from <a target='_blank' href='https://imageus.dev/account/sources?addSource=1'>here</a>.
      </p>
      <?php settings_fields('imageus-settings-group'); ?>

    </div>

    <div class="admin-card" style="background-color: #fff; padding: 40px; border-radius: 3px; margin-top: 20px">

    <h3 style="margin-top: 0">Activate imageus</h3>
      <input
        type="checkbox"
        id="imgus_imageus_active"
        name="imgus_imageus_active"
        value="true"
        <?php echo get_option('imgus_imageus_active') ? 'checked' : '' ?>
      /> <label for="imgus_imageus_active">Gelişmiş Ayarlar</label>

    </div>

    <div class="admin-card" style="background-color: #fff; padding: 20px; border-radius: 3px; margin-top: 20px">

    <h3>Additional settings</h3>
    <p>Imageus will be compressed and tansform for yor all images in real-time<br> if you dont want this for specific folders, you and exclude them with seperate "," </p>
      <textarea
        id="imgus_imageus_hosts"
        name="imgus_imageus_hosts"
        rows="4" cols="80"
      ><?php echo filter_var(get_option('imgus_imageus_hosts'), FILTER_SANITIZE_STRING) ?></textarea> <br /> <br />

    </div>

    <div class="admin-card" style="background-color: #fff; padding: 20px 40px; border-radius: 3px; margin-top: 20px">

    <input type="submit" class="button-primary" value="Save changes" style="padding: 16px 40px"/>

    </div>
  </form>

  </div>
  <div class="admin-card" style="background-color: #fff; padding: 40px; border-radius: 3px; margin-top: 20px">
    <h3 style="margin-top: 0">Useful links</h3>
    <a class='button action' target='_blank' href='https://imageus.dev/'>Create account</a>
    <a class='button action' target='_blank' href='https://imageus.dev/account/overview'>Dashboard</a>
    <a class='button action' target='_blank' href='https://imageus.dev/pricing'>Pricing</a>
    <a class='button action' target='_blank' href='https://imageus.dev/faq'>FAQ</a>
    <a class='button action' target='_blank' href='https://imageus.dev/tr/gelistiriciler-icin'>For developers</a>
  </div>
<?php
}