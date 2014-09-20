<?php require_once('bootstrap.php'); ?>
<?php epm_header(array(
  'active' => 'leadership',
  'page-title' => t('leadership.pagetitle')
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

    <div class="global-body management">
      <div class="container">
        <h1><?php echo t('leadership.management') ?></h1>
        <div class="row">
          <div class="col-md-1 col-xs-2">
            <div class="thumbnail">
              <img src="/img/bernhard-ranftl.jpg" alt="Bernhard Ranftl">
            </div>
          </div>
          <div class="col-md-3 col-xs-10">
            <h3>Bernhard Ranftl</h3>
            <ul class="list-unstyled list-spacious">
              <li>General Manager</li>
              <li><span style="color:rgb(121,139,145);"><?php echo t('leadership.dobLabel') ?></span> 24.8.1962</li>
              <?php echo t('leadership.bernhard') ?>
            </ul>
          </div>
          <div class="col-md-1 col-xs-2">
            <div class="thumbnail">
              <img src="/img/dietmar-wolf.jpg" alt="Dietmar Wolf">
            </div>
          </div>
          <div class="col-md-3 col-xs-10">
            <h3>Dietmar Wolf</h3>
            <ul class="list-unstyled list-spacious">
              <li>Senior Consultant</li>
              <li><span style="color:rgb(121,139,145);"><?php echo t('leadership.dobLabel') ?></span>  21.5.1957</li>
              <?php echo t('leadership.dietmar') ?>
            </ul>
          </div>
          <div class="col-md-1 col-xs-2">
            <div class="thumbnail">
              <img src="/img/roy-von-der-locht.jpg" alt="Roy von der Locht">
            </div>
          </div>
          <div class="col-md-3 col-xs-10">
            <h3>Roy von der Locht</h3>
            <ul class="list-unstyled list-spacious">
              <li>Senior Consultant</li>
              <li><span style="color:rgb(121,139,145);"><?php echo t('leadership.dobLabel') ?></span> 7.3.1964</li>
              <?php echo t('leadership.roy') ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
<?php epm_footer(); ?>