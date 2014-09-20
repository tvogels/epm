<?php require_once('bootstrap.php'); ?>
<?php epm_header(array(
  'active' => 'home'
)); ?>
      <div class="global-banner" data-bg="car.jpg">
        <div class="container banner-container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-6 banner-content">
              <?php echo t('home.teaser') ?>
            </div>
          </div>
        </div>
      </div>
      <div class="container header-bottom">
        <div class="row">
          <div class="col-sm-3">
            <a href="/leistung_monitoring.php" class="teaser-link">
              <img src="/img/icon-monitoring.png" alt="Monitoring" class="heading-icon">
              <h2>Monitoring</h2>
            </a>
            <?php echo t('home.monitoring') ?>
          </div>
          <div class="col-sm-3">
            <a href="/leistung_optimization.php" class="teaser-link">
              <img src="/img/icon-optimization.png" alt="Optimization" class="heading-icon">
              <h2>Optimization</h2>
            </a>
            <?php echo t('home.optimization') ?>
          </div>
          <div class="col-sm-3">
            <a href="/leistung_turn-around.php" class="teaser-link">
              <img src="/img/icon-turn-around.png" alt="Turn Around" class="heading-icon">
              <h2>Turn Around</h2>
            </a>
            <?php echo t('home.turnaround') ?>
          </div>
          <div class="col-sm-3">
            <a href="/leistung_hr-support.php" class="teaser-link">
              <img src="/img/icon-hr-support.png" alt="Support" class="heading-icon">
              <h2>HR–Support</h2>
            </a>
            <?php echo t('home.hrsupport') ?>
          </div>
        </div>
      </div>
    </header>

    <div class="global-body">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img class="illustration" src="/img/table-1.jpg" alt="Illustration">
            <?php echo t('home.story.left')?> <a href="<?php echo path('jobs') ?>"><?php echo t('general.read-more')?> &hellip;</a></p>
          </div>
          <div class="col-sm-6">
            <img class="illustration" src="/img/table-2.jpg" alt="Illustration">
            <?php echo t('home.story.right')?> <a href="<?php echo path('leistung_monitoring') ?>"><?php echo t('general.read-more')?> &hellip;</a></p>
          </div>
        </div>
      </div>
    </div>
<?php epm_footer(); ?>