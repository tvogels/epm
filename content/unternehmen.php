<?php require_once('bootstrap.php'); ?>
<?php epm_header(array(
  'active' => 'unternehmen',
  'page-title' => t('unternehmen.pagetitle')
)); ?>
      <div class="global-banner banner-small" data-bg="landing-page.jpg">
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
        <h1><?php echo t('unternehmen.heading') ?></h1>
        <div class="row">
          <div class="col-sm-7">
            <p class="lead"><?php echo t('unternehmen.lead') ?></p>
            <?php echo t('unternehmen.body') ?>
          </div>
          <div class="col-sm-5">
            <img src="/img/referenz-regionen.png" alt="<?php echo t('unternehmen.refreg') ?>">
            <p style="padding-top:1em;text-align:center;color:#888;"><?php echo t('unternehmen.refreg') ?></p>
          </div>
        </div>
      </div>
    </div>
<?php epm_footer(); ?>