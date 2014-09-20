<?php require_once('bootstrap.php'); require_once('leistung.php'); ?>
<?php epm_leistung_header('hr-support') ?>
        <p class="lead" style="margin-bottom:1.2em;">
          <?php echo t('leistung.hrsupport.intro') ?>
        </p>
        <dl class="epm-dl">
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.hrsupport.obman.label') ?></strong>
            </dt>
            <dd class="col-sm-8">&nbsp;<br>
              <ul class="dd-content">
                <?php echo t('leistung.hrsupport.obman.content') ?>
              </ul>
              &nbsp;
            </dd>
          </div>
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.hrsupport.mitman.label') ?></strong>
            </dt>
            <dd class="col-sm-8">&nbsp;<br>
              <ul class="dd-content">
                <?php echo t('leistung.hrsupport.mitman.content') ?>
              </ul>
              &nbsp;
            </dd>
          </div>
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.hrsupport.projekt.label') ?></strong>
            </dt>
            <dd class="col-sm-8">&nbsp;<br>
              <ul class="dd-content">
                <?php echo t('leistung.hrsupport.projekt.content') ?>
              </ul>
              &nbsp;
            </dd>
          </div>
        </dl>
<?php epm_leistung_footer() ?>