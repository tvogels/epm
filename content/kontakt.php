<?php require_once('bootstrap.php'); ?>
<?php epm_header(array(
  'active' => 'kontakt',
  'page-title' => t('kontakt.pagetitle')
)); ?>
      <div class="global-banner banner-small" data-bg="kontakt.jpg">
        <div class="container banner-container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-6 banner-content">
            </div>
          </div>
        </div>
      </div>
      <div class="container header-bottom">
      </div>
    </header>

    <div class="global-body">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h1><?php echo t('kontakt.pagetitle') ?></h1>
            <div class="lead"><?php echo t('kontakt.intro') ?></div>
            <div class="well">
          <?php echo t('kontakt.body') ?>
            </div>

          </div>
          <div class="col-sm-6 col-sm-push-2">
            <img src="/img/kontakt.jpg" alt="Kontakt illustration">
          </div>
        </div>
      </div>
    </div>
<?php epm_footer(); ?>