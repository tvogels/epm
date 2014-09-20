<?php require_once('bootstrap.php'); ?>
<?php epm_header(array(
  'active' => 'jobs',
  'page-title' => t('jobs.pagetitle')
)); ?>
      <div class="global-banner banner-small" data-bg="jobs.jpg">
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
        <h1><?php echo t('jobs.pagetitle') ?></h1>
        <p class="lead" style="margin-bottom:0;margin-top:1em;"><?php echo t('jobs.intro') ?></p><br>
        <div class="row">
          <div class="col-sm-8">
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  <?php echo t('jobs.sencon.title') ?>
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                <?php echo t('jobs.sencon.desc') ?>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  <?php echo t('jobs.conau.title') ?>
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
              <?php echo t('jobs.conau.desc') ?>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                  <?php echo t('jobs.conqua.title') ?>
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
<?php echo t('jobs.conqua.desc') ?>
             </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                 <?php echo t('jobs.conall.title') ?>
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
              <div class="panel-body">
<?php echo t('jobs.conall.desc') ?>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                  <?php echo t('jobs.projekt.title') ?>
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
              <div class="panel-body">
<?php echo t('jobs.projekt.desc') ?>
              </div>
            </div>
          </div>
          </div>
          </div>
          <div class="col-sm-4">
            <div class="well">
              <?php echo t('jobs.sidebar') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php epm_footer(); ?>