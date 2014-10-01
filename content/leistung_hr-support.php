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
            <dd class="col-sm-8">
              <ul class="dd-content dd-2-lines">
                <?php echo t('leistung.hrsupport.obman.content') ?>
              </ul>
            </dd>
          </div>
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.hrsupport.mitman.label') ?></strong>
            </dt>
            <dd class="col-sm-8">
              <?php echo t('leistung.hrsupport.mitman.content') ?>
            </dd>
          </div>
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.hrsupport.projekt.label') ?></strong>
            </dt>
            <dd class="col-sm-8">
              <ul class="dd-content dd-2-lines">
                <?php echo t('leistung.hrsupport.projekt.content') ?>
              </ul>
            </dd>
          </div>
        </dl>
<?php epm_leistung_footer() ?>