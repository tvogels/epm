<?php require_once('bootstrap.php'); require_once('leistung.php'); ?>
<?php epm_leistung_header('optimization') ?>
        <p class="lead" style="margin-bottom:1.2em;">
          <?php echo t('leistung.optimization.intro') ?>
        </p>
        <dl class="epm-dl">
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.optimization.perfmon.label') ?></strong>
            </dt>
            <dd class="col-sm-8">
              <ul class="dd-content">
                <?php echo t('leistung.optimization.perfmon.content') ?>
              </ul>
            </dd>
          </div>
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.optimization.prod.label') ?></strong>
            </dt>
            <dd class="col-sm-8">
              <ul class="dd-content">
<?php echo t('leistung.optimization.prod.content') ?>
              </ul>
            </dd>
          </div>
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.optimization.qual.label') ?></strong>
            </dt>
            <dd class="col-sm-8">
              <ul class="dd-content">
<?php echo t('leistung.optimization.qual.content') ?>
              </ul>
            </dd>
          </div>
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.optimization.eink.label') ?></strong>
            </dt>
            <dd class="col-sm-8">
              <ul class="dd-content">
<?php echo t('leistung.optimization.eink.content') ?>
              </ul>
            </dd>
          </div>
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.optimization.logi.label') ?></strong>
            </dt>
            <dd class="col-sm-8">
              <ul class="dd-content">
<?php echo t('leistung.optimization.logi.content') ?>
              </ul>
            </dd>
          </div>
        </dl>
<?php epm_leistung_footer() ?>