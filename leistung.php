<?php

if($_SERVER['PHP_SELF'] == '/leistung.php') {
  header('Location: /leistung_monitoring.php');
}

require_once('bootstrap.php');

function epm_leistung_header($type) {
  epm_header(array(
    'active' => 'leistung',
    'page-title' => 'Leistung - ' . ucfirst($type)
  )); 
?>
      <div class="global-banner banner-small" style="background-image:url(img/car-bg.jpg);">
        <div class="container banner-container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-6 banner-content">
              <p>What can we do for</p>
              <p>your business?</p>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom"></div>
    </header>

    <div class="global-body">
      <div class="container">
        <div class="row toggle-nav">
<?php
  $tabs = array('monitoring','optimization','turn-around','hr-support');
  foreach ($tabs as $tab) {
    $active = ($tab == $type) ? 'active' : '';
    $gray = ($tab == $type) ? '' : '-gray';
    echo '<div class="col-sm-3">';
    echo '  <a href="/leistung_'.$tab.'.php" class="toggle ' . $active . '">';
    echo '    <img class="toggle-image" src="/img/icon-'.$tab.$gray.'.png" alt="' . ucfirst($tab) . '">';
    echo ucfirst($tab);
    echo '  </a>';
    echo '</div>';
  }
?>
        </div>
<?php
}

function epm_leistung_footer() {
?>
      </div>
    </div>
<?php
  epm_footer();
}