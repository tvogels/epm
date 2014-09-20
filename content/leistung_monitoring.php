<?php require_once('bootstrap.php'); require_once('leistung.php'); ?>
<?php epm_leistung_header('monitoring') ?>
        <p class="lead" style="margin-bottom:1.2em;">
          <?php echo t('leistung.monitoring.intro') ?>
        </p>
        <dl class="epm-dl">
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.monitoring.kernzahlen.label') ?></strong>
            </dt>
            <dd class="col-sm-8">
              <ul class="dd-content">
                <?php echo t('leistung.monitoring.kernzahlen.content') ?>
              </ul>
            </dd>
          </div>
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.monitoring.monitoring.label') ?></strong>
            </dt>
            <dd class="col-sm-8">
              <div class="dd-content">
                <ul>
                  <?php echo t('leistung.monitoring.monitoring.content') ?>
                </ul>
              </div>
            </dd>
          </div>
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.monitoring.reporting.label') ?></strong>
            </dt>
            <dd class="col-sm-8">
              <ul class="dd-content">
                <?php echo t('leistung.monitoring.reporting.content') ?>
              </ul>
            </dd>
          </div>
        </dl>
<?php epm_leistung_footer() ?>