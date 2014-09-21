<?php require_once('bootstrap.php'); require_once('leistung.php'); ?>
<?php epm_leistung_header('turn-around') ?>
        <p class="lead" style="margin-bottom:1.2em;">
          <?php echo t('leistung.turnaround.intro') ?>
        </p>
        <dl class="epm-dl">
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.turnaround.sankon.label') ?></strong>
            </dt>
            <dd class="col-sm-8">
              <ul class="dd-content">
                <?php echo t('leistung.turnaround.sankon.content') ?>
              </ul>
            </dd>
          </div>
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.turnaround.krisen.label') ?></strong>
            </dt>
            <dd class="col-sm-8">
              <ul class="dd-content">
                <?php echo t('leistung.turnaround.krisen.content') ?>
              </ul>
            </dd>
          </div>
          <div class="row">
            <dt class="col-sm-4">
              <strong><?php echo t('leistung.turnaround.strinums.label') ?></strong>
            </dt>
            <dd class="col-sm-8">
              <ul class="dd-content">
                <?php echo t('leistung.turnaround.strinums.content') ?>
              </ul>
            </dd>
          </div>
        </dl>
<?php epm_leistung_footer() ?>